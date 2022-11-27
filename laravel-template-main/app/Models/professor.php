<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class professore extends Model
{
    protected $fillable = ['CPF', 'Nome', 'CEP', 'Rua', 'Bairro', 'Cidade', 'Número'];
}
