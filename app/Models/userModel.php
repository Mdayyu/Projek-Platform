<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    use HasFactory;

    protected $table = 'login';
    protected $primaryKey = 'userid';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'userid',
        'namalengkap',
        'email',
        'password',
        'notelp',
        'alamat',
        'tgljoin',
        'role',
        'lastlogin',
    ];

}