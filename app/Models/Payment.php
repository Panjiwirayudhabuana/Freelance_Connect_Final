<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'project_id',
        'freelancer_id',
        'client_id',
        'amount',
        'status'
    ];
}
