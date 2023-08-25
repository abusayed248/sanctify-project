<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;


    protected $fillable = [
        'client_name','company','client_phn_number','client_email','client_message',
    ];


    protected $casts = [
        'status' => 'boolean',
    ];

}
