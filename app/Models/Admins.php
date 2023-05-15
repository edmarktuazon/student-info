<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admins extends Model
{
    protected $fillable = [
        'username',
        'password',
    ];
    use HasFactory;
}
