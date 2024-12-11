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

    public function detailProjects()
    {
        return $this->hasMany(DetailProject::class, 'project_id', 'project_id');
    }

    public function freelancers()
    {
        return $this->belongsToMany(Freelancer::class, 'detail_projects', 'project_id', 'freelancer_id');
    }
}
