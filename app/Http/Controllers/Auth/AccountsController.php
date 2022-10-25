<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Services\Contracts\ApiInterface;
use Artesaos\SEOTools\Facades\SEOTools;

class AccountsController extends Controller
{
    public function __construct(private readonly ApiInterface $api)
    {
    }

    public function index()
    {
        SEOTools::setTitle(__('layout.user_dropdown.personal_account') . ' - ' . app_team_name(), false);
        SEOTools::setDescription(app_event()->description);
        SEOTools::opengraph()->setUrl(route('accounts.index'));
        SEOTools::setCanonical(route('accounts.index'));
        SEOTools::jsonLd()->addImage(app_team_avatar());

        return view('wedo.accounts.index');
    }
}
