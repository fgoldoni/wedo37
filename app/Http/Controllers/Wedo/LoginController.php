<?php

namespace App\Http\Controllers\Wedo;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginLinkRequest;
use App\Services\WedoAuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function loginWithToken(Request $request, string $token)
    {
        try {
            WedoAuthService::loginWithToken($token);

            return redirect('/');
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            return redirect()->back()->withErrors(['message' => $e->getMessage()]);
        }
    }

    public function loginLink(LoginLinkRequest $request)
    {
        try {
            $response = WedoAuthService::loginLink($request->email);

            if ($response->ok()) {
                return redirect()->back()->with(['success' => $response->object()->message]);
            }

            return redirect()->back()->withErrors(['message' => 'Invalid Email']);
        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['message' => $e->getMessage()]);
        }
    }
}
