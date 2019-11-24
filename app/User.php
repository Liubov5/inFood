<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'phone', 'password', 'name', 'surname'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getRedirectToAttribute() {
		$redirectTo = route('/add_ad');

		return $redirectTo;

	}
}
