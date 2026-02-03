<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\GoogleWelcomeMail;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = User::updateOrCreate(
            ['email' => $googleUser->email],
            [
                'name'      => $googleUser->name,
                'google_id' => $googleUser->id,
                'password'  => bcrypt(str()->random(16)),
            ]
        );

        // ✅ Send mail ONLY first time
        if ($user->wasRecentlyCreated) {
            Mail::to($user->email)->send(new GoogleWelcomeMail($user));
        }

        Auth::login($user);

        return redirect()->route('home');
    }
}
