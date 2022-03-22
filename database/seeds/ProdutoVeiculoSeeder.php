<?php

use App\Model\ProdutoVeiculo;
use Illuminate\Database\Seeder;

class ProdutoVeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pb = factory(ProdutoVeiculo::class, 25)->make();
        ProdutoVeiculo::insert($pb->toArray());
    }
}