<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class PenggunaDalaman extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'pengguna_nama',
        'pengguna_noKP',
        'pengguna_gelaranJawatan',
        'pengguna_bahagianID',
        'pengguna_namaBahagian',
        'pengguna_katalaluan',
        'pengguna_IDPerananRef',
        'pengguna_staffID',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'pengguna_katalaluan',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'pengguna_createdAt' => 'datetime',
        'pengguna_katalaluan' => 'hashed',
    ];
}
