<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BeneficiarioSeeder::class);
        $this->call(VeiculoSeeder::class);
        $this->call(ProdutoSeeder::class);
        $this->call(ProdutoVeiculoSeeder::class);
    }
}
