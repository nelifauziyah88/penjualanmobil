<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pembeli extends Authenticatable {
    use HasFactory;

    protected $table = 'pembeli';
    protected $fillable = ['username', 'email', 'password'];
    protected $hidden = ['password'];
}