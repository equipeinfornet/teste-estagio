<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Produto;
use App\Model\ProdutoVeiculo;
use App\Model\Veiculo;
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

$factory->define(ProdutoVeiculo::class, function (Faker $faker) {
    return [
        'idProduto' => Produto::all()->random(1)->first(),
        'idVeiculo' =>  Veiculo::all()->random(1)->first(),
    ];
});
