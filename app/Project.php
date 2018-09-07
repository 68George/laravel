<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_name', 'project_dir', 'local_url', 'offline_url', 'online_url', 'password'
    ];
}
