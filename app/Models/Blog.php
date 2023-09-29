<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'backend_tech', 'frontend_tech','description','thumbnail','status',
    ];


    protected $casts = [
        'status' => 'boolean',
    ];
}
