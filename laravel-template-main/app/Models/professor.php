<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class professor extends Model
{
    protected $fillable = ['CPF', 'Nome', 'CEP', 'Rua', 'Bairro', 'Cidade', 'Número'];
} 
