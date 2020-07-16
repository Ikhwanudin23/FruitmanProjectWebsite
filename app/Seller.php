<?php

namespace App;

use App\Notifications\SellerVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Seller extends Authenticatable
{
    use Notifiable;

    protected $guard = 'seller';
    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendApiEmailVerificationNotification()
    {
        $this->notify(new SellerVerifyEmail());
    }
}
