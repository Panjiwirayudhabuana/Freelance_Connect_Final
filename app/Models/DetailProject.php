<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailProject extends Model
{
    protected $fillable = [
        'project_id',
        'freelancer_id',
        'status',
        'submission',
        'status'
    ];

    public function freelancer()
    {
        return $this->belongsTo(Freelancer::class, 'freelancer_id', 'freelancer_id');
    }
}

