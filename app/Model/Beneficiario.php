<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Beneficiario extends Model
{
    protected $table = 'beneficiario';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nome',
        'documento',
        'dataNascimento',
        'sexo',
        'situacao',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'email',
        'telefone'
    ];
}
