<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professorat extends Model
{
    use HasFactory;

    protected $table = 'professorat';

    // Indica els camps que omplira
    protected $fillable = [
        'nom',
        'cognom',
        'email' 
    ];

    protected $hidden = [];
}