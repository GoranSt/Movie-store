<?php

namespace App;
//za login ako e model nesaka kaj plakanj
//implements AuthenticatableContract

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Laravel\Cashier\Billable;
use Laravel\Cashier\Contracts\Billable as BillableContract;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable implements CanResetPasswordContract,BillableContract
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    use Billable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
