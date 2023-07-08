<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use SEOMeta;
use OpenGraph;

class LoginController extends Controller
{
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
     public function authenticated(Request $request, $user)
    {
        if($user->active == false) {
            \Auth::logout();
            return redirect('/confirm-email?old_user=yes&email='.$user->email)
                ->with('error_login', 'You have not verified your account.');
        }    
    }

    public function showLoginForm()
    {
        $this->seoLogin();

        if (!session()->has('url.intended')) {
            session(['url.intended' => url()->previous()]);
        }

        if (auth()->check()) {
            return redirect('/');
        }
        
        return view('auth.login');    
    }

    private function seoLogin()
    {
        SEOMeta::setTitle('Login through email address -'.env('APP_NAME'));
        SEOMeta::setDescription('Login through email address on '.env('APP_NAME').'. It is very easy to buy and sell your products');
        SEOMeta::setCanonical(route('login'));
        SEOMeta::addKeyword(['login', 'product', 'buy', 'sell', 'nepal', 'Pokhara', 'kathmandu', 'secondhand']);
        
        OpenGraph::setTitle('Login through email address -'.env('APP_NAME'));
        OpenGraph::setDescription('Login through email address on '.env('APP_NAME').'. It is very easy to buy and sell your products');
        OpenGraph::setUrl(route('login'));
    }
}
