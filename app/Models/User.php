<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    protected $fillable = ['name','email','otp','password','role'];
    protected $attributes = [
        'otp' => '0'
    ];

    public function company()
        {
            return $this->hasOne(Companie::class);
        }
}
