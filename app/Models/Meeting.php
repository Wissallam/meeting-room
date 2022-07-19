<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'date_start',
        'date_end',
        'nb_guest',
        'type_event',
        'room_id',
        'user_id' ,
        'need_itsupport',
        'need_media',
      ];
      public function room()
      {
          return $this->hasOne(Room::class);
      }

      public function user()
      {
          return $this->belongsTo(User::class);
      }
      
      
  }
  

