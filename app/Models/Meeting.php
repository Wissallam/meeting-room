<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'title',
        'description',
        'start',
        'end',
        'nb_guest',
        'type_event',
        'rooms_id',
        'users_id' ,
        'need_itsupport',
        'need_media',
      ];
      public function room()
      {
        return $this->belongsTo(Room::class, 'rooms_id');
      }

      public function user()
      {
          return $this->belongsTo(User::class , 'users_id');
      }
      
      
  }
  

