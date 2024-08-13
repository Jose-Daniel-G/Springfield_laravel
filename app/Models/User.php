<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Notifications\NewResetPasswordNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;//añadida no especificada en el curso
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasRoles;//añadida no especificada en el curso
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    //EDITA VISTA REESTABLECER CONTRASENA
    public function sendPasswordResetNotification($token){  $this->notify(new NewResetPasswordNotification($token)); }

    // Relacion Uno a Muchos
    public function posts(){ return $this->hasMany(Post::class);}

    // Relacion uno a uno Polimorfica
    public function image()
    {return $this->morphOne(Image::class, 'imageable');}
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
