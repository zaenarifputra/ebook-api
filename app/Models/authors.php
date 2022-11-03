<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class authors extends Model
{
    protected $fillable = [
        'name', 'date_of_birth', 'place_of_birth', 'gender', 'email', 'hp'
    ];
}