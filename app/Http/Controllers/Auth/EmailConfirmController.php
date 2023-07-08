<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Notifications\SignupVerificationNotification;

class EmailConfirmController extends Controller
{
    /**
     * Show the pending page.
     *
     * @return \Illuminate\Http\Response
     */
    public function pending()
    {
        return view('auth.confirm-page');
    }

    /**
     * Verify the email.
     *
     * @return \Illuminate\Http\Response
     */
    public function verify($token)
    {
        $user = User::where('active', 0)->where('verification_token', $token)->first();
        if($user) {
            $user->update([
                    'active' => 1,
                    'verification_token' => null,
            ]);

            return view('auth.email-verified');
        }

        return view('auth.email-verified');
    }

    /**
     * Verify the email.
     *
     * @return \Illuminate\Http\Response
     */
    public function resendVerificationToken(Request $request)
    {
        $email = $request->email;
        $user = User::where('email', $email)->where('active', 0)->first();
        if($user) {
            $user->notify(new SignupVerificationNotification($user));
        }

        $notification = array(
            'message'    => 'Confirmation mail has been again sent to your email. Please wait for the mail.',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}