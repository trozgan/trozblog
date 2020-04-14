<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Socialite;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class SocialAuthController extends Controller{

  /**
   * Redirect the user to the social media authentication page.
   *
   * @return Response
   */
  public function redirect($service) {
    return Socialite::driver ( $service )->redirect ();
  }

  /**
   * Obtain the user information from provider.
   *
   * @return Response
   */
  public function callback($service) {
    try {
      $user = Socialite::driver($service)->stateless()->user();
    } catch (Exception $e) {
      return redirect()->route('login');
    }

    $authUser = $this->focUser($user, $service);

    Auth::login($authUser, true);

    return redirect()->route('home')->withSuccess(__('auth.logged_in_provider', ['provider' => $service]));
  }

  /**
   * Return user if exists; create and return if doesn't
   *
   * @param $user
   * @return User
   */
  private function focUser($user, $service) {
    $authUser = User::where('email', $user->email)->first();

    if ($authUser) {
      return $authUser;
    } else {
      return User::create([
        'name' => $user->name ?? $user->email,
        'email' => $user->email,
        'email_verified_at' => now(),
        'password' => Hash::make(Str::random(15)),
        'provider' => $service,
        'provider_id' => $user->id
      ]);
    }
  }
}
