<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasFactory;
    use HasApiTokens, Notifiable;

    protected $table = '_admin';

    protected $fillable = [
        'nom',
        'prenom',
        'login',
        'password',
        'image',

    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function vendeur()
    {
        return $this->belongsTo(Vendeur::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}