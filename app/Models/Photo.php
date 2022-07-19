<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;


class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'path',
        'room_id',
    ];
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
