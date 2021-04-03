<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Controllers\Controller;
use App\Http\Traits\CryptoTrait;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use stdClass;

class LoginController extends Controller
{
    use CryptoTrait;
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the Discord authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::with('discord')->redirect();
    }

    /**
     * Obtain the user information from Discord.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(Request $request)
    {
        try {
            $user = Socialite::driver('discord')->user();
        } catch (Exception $e) {
            return redirect()->route('login.discord');
        }

        $authUser = $this->findOrCreateUser($user);

        $userObject = (object) [
            'token' => $user->token,
            'scope' => $user->id
        ];

        $encryptedToken = $this->encrypt($userObject, env('DISCORD_SECRET'));

        session(['encrypted_discord_token' => $encryptedToken]);
        session(['discord_token' => $user->token]);

        Auth::login($authUser, true);

        return redirect()->route('home');
    }

    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $discordUser
     * @return User
     */
    private function findOrCreateUser($discordUser)
    {
        if ($authUser = User::where('discord_id', $discordUser->id)->first()) {
            return $authUser;
        }

        $avatar = "https://eu.ui-avatars.com/api/?background=random&name=" . $discordUser->name;

        if ($discordUser->avatar) {
            $avatar = $discordUser->avatar;
        }

        return User::create([
            'name' => $discordUser->name,
            'username' => $discordUser->nickname,
            'email' => $discordUser->email,
            'discord_id' => $discordUser->id,
            'avatar' => $avatar
        ]);
    }
}
