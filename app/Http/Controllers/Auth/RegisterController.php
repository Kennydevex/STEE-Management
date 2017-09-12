<?php

namespace STEE\Http\Controllers\Auth;

use User;
use STEE\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    //Aqui que fazemos a mudança do redirecionamento para as paginas depois de utilizador estiver registrado
    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest');
    }

    // Validação dos dados de netrada
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'email' => $data['email'],
            'password' => $data['password'],
            'gender' => '3',
            'active' => false,
            'avatar' => 'default.png',
        ]);
        alertify()->success('Updated record successfully');
    }
}
