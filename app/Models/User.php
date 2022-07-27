<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Departement;
use App\Models\Role;
use App\Models\Meeting;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'roles_id',
        'departements_id',
        'password',
        'profile',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function role()
    {
        return $this->hasOne(Role::class);
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
    
    public function meeting()
    {
        return $this->hasMany(Meeting::class, 'users_id');
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     *   protected $casts = [
     *  'email_verified_at' => 'datetime',
     *   ];
     */
  
}
