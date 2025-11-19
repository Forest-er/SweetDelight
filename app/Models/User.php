<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $table = 'users';
    protected $primaryKey = 'id_user'; // ganti sesuai nama kolom kamu
    public $incrementing = true; // jika kolomnya auto increment
    protected $keyType = 'int'; // atau 'string' kalau bukan integer
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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
    public function recipes()
    {
        return $this->hasMany(\App\Models\Recipe::class, 'id_user');
    }

    public function followers()
    {
        return $this->hasMany(Follow::class, 'user_id', 'id_user');
    }

    public function following()
    {
        return $this->hasMany(Follow::class, 'follower_id', 'id_user');
    }
}
