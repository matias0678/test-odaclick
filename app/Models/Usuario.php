<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table="usuarios";

    protected $fillable=[
        'id',
        'uid',
        'password',
        'first_name',
        'last_name',
        'username',
        'email',
        'avatar',
        'gender',
        'phone_number',
        'social_insurance_number',
        'date_of_birth',
        
    ];
}
