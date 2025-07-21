<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class AdminModel extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "super_admin";

    protected $fillable = [
        'email',
        'password',
        'in_hash',
        'verify',
        'remember_web_token',
    ];
}
