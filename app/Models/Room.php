<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Photo;


class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'name',
        'capacity',
        'floor',
        'color',
        'invalid_from',
        'invalid_to',
    ];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}


