<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
        'noktp', 'telepon', 'tgllahir','foto',
        'berkas','alamat',

        'P_status','P_domisili','P_kelahiran','P_pengalaman',
        'P_keahlian','P_penyalur','P_ketersediaan',
        'P_agama','P_tinggi','P_berat','P_pekerjaan',


        'A_website','A_deskripsi',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public $timestamps = false;
}
