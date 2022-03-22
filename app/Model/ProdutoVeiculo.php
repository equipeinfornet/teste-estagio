<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProdutoVeiculo extends Model
{
    protected $table = 'produtoVeiculo';
    protected $fillable = [
        'idProduto',  
        'idVeiculo' 
    ];
}
