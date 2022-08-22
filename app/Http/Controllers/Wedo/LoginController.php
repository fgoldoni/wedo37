<?php
namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginLinkRequest;
use App\Services\WedoAuthService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginWithToken(Request $request, string $token)
    {
        try {
            WedoAuthService::loginWithToken($token);
            session()->forget('flash');

            return redirect($request->get('to', url('/')));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => $e->getMessage()]);
        }
    }

    public function resendMail(Request $request, string $email)
    {
        try {
            WedoAuthService::loginLink($email, route('payments.index'));
            session()->forget('flash');

            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => $e->getMessage()]);
        }
    }

    public function loginLink(LoginLinkRequest $request)
    {
        try {
            $response = WedoAuthService::loginLink($request->email);

            if ($response->successful()) {
                return redirect()->back()->with(['status' => $response->object()->message]);
            }

            throw new \Exception('Invalid Email');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => $e->getMessage()]);
        }
    }
}
