<?php
<<<<<<< HEAD
namespace App\Models;

=======

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
<<<<<<< HEAD
    use HasApiTokens, Notifiable;

=======
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

<<<<<<< HEAD
=======
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
    protected $hidden = [
        'password',
        'remember_token',
    ];

<<<<<<< HEAD
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
=======
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
