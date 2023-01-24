<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';

    protected $fillable = [
        'nama',
        'alamat',
        'npwp',
        'email',
        'status_email',
        'nohp',
        'status_nohp',
    ];

    public static $rules = [
        'nama'          => 'required',
        'alamat'        => 'required',
        'email'         => 'required',
        'status_email'  => 'required',
        'nohp'          => 'required',
        'status_nohp'   => 'required',
    ];
}
