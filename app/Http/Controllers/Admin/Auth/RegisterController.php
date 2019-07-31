<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/admin/home';

    public function showRegistrationForm()
    {
        return view('admin.auth.register');
    }
    protected function guard()
    {
        return Auth::guard('admin');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6|confirmed',
            'razao' => 'required|string|max:255',
            'cnpj' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'porte' => 'required|string|max:255',
            'municipios' => 'required|string|max:255',
            'rhNome' => 'required|string|max:255',
            'rhEmail' => 'required|string|max:255',
            'rhTelefone' => 'required|string|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'razao' =>$data['razao'],
            'cnpj' =>$data['cnpj'],
            'area' =>$data['area'],
            'porte' =>$data['porte'],
            'municipios' =>$data['municipios'],
            'rhNome' =>$data['rhNome'],
            'rhEmail' =>$data['rhEmail'],
            'rhTelefone' =>$data['rhTelefone'],
        ]);
    }
}
