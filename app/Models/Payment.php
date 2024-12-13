<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $primaryKey = 'payment_id';
    
    protected $fillable = [
        'detail_project_id',
        'payment_date',
        'status'
    ];

    public function detailProject()
    {
        return $this->belongsTo(DetailProject::class, 'detail_project_id');
    }

    public function project()
    {
        return $this->hasOneThrough(
            Project::class,
            DetailProject::class,
            'id', // Foreign key on detail_projects table
            'id', // Foreign key on projects table
            'detail_project_id', // Local key on payments table
            'project_id' // Local key on detail_projects table
        );
    }
}
