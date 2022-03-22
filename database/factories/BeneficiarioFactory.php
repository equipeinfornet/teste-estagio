<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Beneficiario;
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

$factory->define(Beneficiario::class, function (Faker $faker) {
    $maxDocumento = $faker->randomElement([11, 14]);
    $documento = substr(uniqid(rand(), true), 0, $maxDocumento);
    $int= rand(rand(),rand());
    $dataNascimento = date("Y-m-d",$int);
    $sexo = $faker->randomElement(["F", "M", "O"]);
    $tipoSexo = ["M" => 'male', "F" => 'female', "O"=> ""];
    return [
        'nome' => $faker->name($tipoSexo),
        'documento' =>  $documento,
        'dataNascimento' => $dataNascimento,
        'sexo' => $sexo,
        'situacao' =>  $faker->randomElement(["A", "I"]),
        'logradouro' => $faker->streetName(),
        'numero' => random_int(0, 999),
        'bairro' => $faker->streetName(),
        'cidade' => $faker->city(),
        'estado' => mb_strtoupper($faker->city()[0].$faker->city()[1]),
        'email' => $faker->unique()->safeEmail,
        'telefone' => $faker->unique()->phoneNumber()       
    ];
});
