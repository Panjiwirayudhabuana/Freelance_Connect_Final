<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'client_id',
        'title',
        'description',
        'budget',
        'deadline',
        'status',
        'detail',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function projectDetail()
    {
        return $this->hasOne(DetailProject::class);
    }
}
