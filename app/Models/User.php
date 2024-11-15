<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'isActive',
        'role',
    ];

     // Vérification de l'état de l'utilisateur
     /**
     * Vérifie si l'utilisateur est actif.
     *
     * @return bool
     */
    public function isActive()
    {
        return (bool) $this->isActive; // Assurez-vous que la colonne 'isActive' est bien récupérée
    }
     // Vérification du rôle de l'utilisateur
     public function isAdmin()
     {
         return $this->role === 3; // 
     }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
