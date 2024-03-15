<?php
// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'company',
        'work_phone',
        'fax_number',
        'mobile_number',
        'email',
        'password'
    ];

    // Add the role relationship
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    // Method to check if the user has a specific role
    public function hasRole($role)
    {
        return $this->role->name === $role;
    }

    /*
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Method to check if the user is a judge
    public function isJudge()
    {
        return $this->hasRole('judge');
    }
}
