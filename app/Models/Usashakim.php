<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usashakim extends Model
{
    use HasFactory;

    protected $table = 'usashakim';

    protected $fillable = [
        'nama',
        'nobp'
    ];
} 