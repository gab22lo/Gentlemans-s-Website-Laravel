<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materia extends Model
{
    protected $fillable = ['Nome', 'Desc_c', 'Desc_s', 'Num_min', 'Num_max','Status','Professor'];
} 
