<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Produto;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Produto::class, function (Faker $faker) {
    $arrayProdutos = [                       
        'ASS. 24H UTILITARIO',
        'PROTECÃO DE TERCEIROS',
        'AVULSO',
        'ASSISTENCIA 24 HORAS',
        'ASSISTENCIA TREINAMENTO',
        'BENEFICIARIO',
        'PARA VEICULO INATIVO',
        'ASSISTENCIA AUTO SOCORRO',
        'DESCONTO EM CONSULTA / EXAME',
        'ASSISTENCIA FUNERAL',
        'CLUBE DE VANTAGENS',
        'ASSISTENCIA RESIDENCIAL',
        'ASSISTENCIA MOTO',
    ];
    
    $produtos = [];
    foreach ($arrayProdutos as $key => $nome) {
        $produtos[] = [
            'nome' => $nome,
            'situacao' => $faker->randomElement(["A", "I"])
        ];
    }
    return $produtos;
});
