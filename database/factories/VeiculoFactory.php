<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Beneficiario;
use App\Model\Veiculo;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Veiculo::class, function (Faker $faker) {
    $int = rand(0, 9);
    $modelos = [
        'Integra GS 1.8',
        'ATV 100',
        'MARRUÁ 2.8 12V 132cv TDI Diesel',
        '145 Elegant 1.7/1.8 16V',
        'Hummer Hard-Top 6.5 4x4 Diesel TB',
        'AME-110 MIX',
        'AREA-51 50cc',
        'AM-825 Luxo 4.0 Diesel',
        'DB9 Coupe 6.0 V12 510cv',
        'CALIFFONE 50cc',
    ];
    $montadora = [
        'Acura',
        'ADLY',
        'Agrale',
        'Alfa Romeo',
        'AM Gen',
        'AMAZONAS',
        'APRILIA',
        'Asia Motors',
        'ASTON MARTIN',
        'ATALA',
    ];
    $anoFabricacao = $faker->numberBetween(1980, 2022);
    return [
        'idBeneficiario' => Beneficiario::all()->random(1)->first(),
        'placa' =>  substr(uniqid(rand(), true), 0, 7),
        'chassi' => substr(uniqid(rand(), true), 0, 17),
        'renavam' => substr(uniqid(rand(), true), 0, 11),
        'modelo' =>  $modelos[$int],
        'montadora' => $montadora[$int],
        'anoFabricacao' => $anoFabricacao,
        'anoModelo' => $anoFabricacao + rand(0, 3),
        'situacao' => $faker->randomElement(["A", "I"])
    ];
});
