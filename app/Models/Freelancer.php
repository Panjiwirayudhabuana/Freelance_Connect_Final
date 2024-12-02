<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'experience',
        'skill',
        'bio',
        'rekening'
    ];
}
