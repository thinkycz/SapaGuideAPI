<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Laravel\Socialite\Facades\Socialite;

class OAuthController extends Controller
{
    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function handleFacebookCallback()
    {
        if(Request::get('error')) return $this->errorOccured();

        $userInfo = Socialite::driver('facebook')->user();

        $user = User::findUserByIDOrCreate('facebook', $userInfo->id, $userInfo->name, $userInfo->email);

        \Auth::login($user);
        app('Flash')->success('Vítejte!', 'Byli jste úspěšně přihlášeni pomocí Facebooku.');
        return \Redirect::action('LocationController@index');
    }

    /**
     * OAuth error occured - show error and redirect back
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    private function errorOccured()
    {
        app('Flash')->error('Nastala chyba', 'Přihlášení se nezdařilo. Zkuste to prosím znova.');
        return \Redirect::action('Auth\AuthController@getLogin');
    }
}