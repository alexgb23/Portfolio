<?php

namespace App\Models; // 👈 CORREGIDO: Una sola App

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'image_url', 'demo_url', 'github_url'];
}
