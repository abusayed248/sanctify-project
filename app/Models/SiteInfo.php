<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteInfo extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'phn_number', 'gmail', 'location', 'fb_account', 'skype_account', 'whatsapp_account', 'linkdin_account',
       
    ];

    
}
