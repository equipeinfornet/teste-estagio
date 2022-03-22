<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $table = 'veiculo';
    protected $primaryKey = 'id';
    protected $fillable = [
        'idBeneficiario',  
        'placa',           
        'chassi',          
        'renavam',         
        'modelo',          
        'montadora',       
        'anoFabricacao',   
        'anoModelo',       
        'situacao',   
    ];
}
