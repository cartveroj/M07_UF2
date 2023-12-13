<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnat extends Model
{
    use HasFactory;

    protected $table = 'alumnat';

    // Indica els camps que omplira
    protected $fillable = [
        'nom',
        'cognom',
        'email' 
    ];

    protected $hidden = [];
}