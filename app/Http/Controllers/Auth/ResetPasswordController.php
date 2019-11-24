<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Events\SendPassword;
use App\Traits\ValidatesPhone;
use App\Models\User;
use App\Services\PasswordService;

class ResetPasswordController extends Controller
{
    // use ResetsPasswords;
    use ValidatesPhone;

    protected $passwordService;

    public function __construct(PasswordService $passwordService)
    {
        $this->middleware('guest');
        $this->passwordService = $passwordService;
    }

    public function reset(Request $request) {
        $phone = $this->validatePhone($request->phone, true);

        $user = User::where('phone',$phone)->first();

        if($user) {
            $request->session()->flash('phone',$phone);
            $password = $this->passwordService->generate();
            $user->setPassword($password);
            $user->save();
            return redirect()->back()->with('message','На ваш телефон '.$phone.' отправлена SMS с паролем');

        } else {
            return back()->withErrors('Указанный телефон не зарегистрирован');
        }
    }
}
