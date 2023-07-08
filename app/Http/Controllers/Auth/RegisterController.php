<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Notifications\SignupVerificationNotification;
use App\UserProfile;
use App\City;
use App\Country;
use Spatie\Permission\Models\Role;
use SEOMeta;
use OpenGraph;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = null;

    /**
     * Overwriting the function to include city and country.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $this->seoRegister();

        $cities = City::orderBy('order', 'asc')->select('name', 'id')->get();
        $countries = Country::orderBy('order', 'asc')->select('name', 'id')->get();

        return view('auth.register', compact('cities', 'countries'));
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return false;
    }

    /**
     * Handle a registration request for the application.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validate(
            $request,
            [
                'name'          => 'required|string|min:2|max:255',
                'email'         => 'required|string|email|max:255|unique:users,email,NULL,id,deleted_at,NULL',
                'password'      => 'required|string|min:6|confirmed',
                'phone1'        => 'nullable|min:5|max:20',
                'address'       => 'nullable|min:2|max:100',
                'city'          => 'required|numeric',
                'country'       => 'required|numeric',
            ]
        );

        $userRoleId = Role::where('name', 'user')->first()->id;
        $user = User::create(
            [
                'name'     => request('name'),
                'slug'     => $this->setSlugAttribute(request('name')),
                'email'    => request('email'),
                'phone'    => request('phone'),
                'password' => Hash::make(request('password')),
                'verification_token' => base64_encode(request('email').'sell'),
                'role_id' => $userRoleId
            ]
        );


        $user_profile = UserProfile::create(
            [
                'user_id'    => $user->id,
                'phone1'     => request('phone1'),
                'address'    => request('address'),
                'city_id'    => request('city'),
                'country_id' => request('country')
            ]
        );

        $user->notify(new SignupVerificationNotification($user));

        return $this->registered($request, $user)
                        ?: redirect('/confirm-email?email='.$user->email);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return false;
    }

     /**
     * Creating the unique slug.
     *
     */
    private function setSlugAttribute($slug)
    {
        $slug = str_slug($slug);
        $slugs = User::whereRaw("slug RLIKE '^{$slug}(-[0-9]*)?$'")
                    ->orderBy('id')
                    ->pluck('slug');
        if (count($slugs) == 0) {
            return $slug;
        } elseif (! $slugs->isEmpty()) {
            $pieces = explode('-', $slugs);
            $number = (int) end($pieces);
            return $slug .= '-' . ($number + 1);
        }
    }

    private function seoRegister()
    {
        SEOMeta::setTitle('Register through email address -'.env('APP_NAME'));
        SEOMeta::setDescription('Register through email address on '.env('APP_NAME').'. It is very easy to buy and sell your products');
        SEOMeta::setCanonical(route('login'));
        SEOMeta::addKeyword(['register', 'product', 'buy', 'sell', 'nepal', 'Pokhara', 'kathmandu', 'secondhand']);
        
        OpenGraph::setTitle('Register through email address -'.env('APP_NAME'));
        OpenGraph::setDescription('Register through email address on '.env('APP_NAME').'. It is very easy to buy and sell your products');
        OpenGraph::setUrl(route('login'));
    }
}
