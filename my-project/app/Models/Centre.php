<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    use HasFactory;
    
    protected $table = 'centres';

    //S'indica les dades que es volen omplir amb $fillable
    protected $fillable = [
        'nom',
        'adreça',
        'cp',
        'city'
    ];

    protected $hidden = [];
}
