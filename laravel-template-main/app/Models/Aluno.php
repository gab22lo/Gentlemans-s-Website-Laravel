<?php

namespace app;


use illuminate\database\eloquent\model;
class Aluno extends model
{
    protected $fillable = ['nome','Materias','RA','FF']
}
