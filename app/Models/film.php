<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    use HasFactory;

    protected $table = 'film';

    protected $fillable = [
        'name',
        'description',
        'is_active'
    ];
}
