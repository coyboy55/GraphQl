<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'username', 'password',
    ];
 
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shipment()
    {
        return $this->hasMany(Shipment::class);
    }

}
