<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    protected $fillable=[
        'organisation_name',
        'email_it_support',
        'email_media_team',
        'email_table_service'
     ];
}
