<?php

namespace App\Http\Controllers\Auth;

use App\User;



use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    use RegistersUsers;
    
    protected $redirectTo = '/home';
  
    public function __construct()
    {
        $this->middleware('guest');
     
    }
     protected function validator(array $data)
    {
        return Validator::make($data, [
           
            'phone' => ['required', 'string', 'phone', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
        ]);
    }
    protected function create(array $data)
    {
        return User::create([
            'phone' => $data['phone'],
            'password' =>  $data['password'],
        ]);
    }
}
 
        