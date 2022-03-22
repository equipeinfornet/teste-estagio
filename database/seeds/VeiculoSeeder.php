<?php

use App\Model\Veiculo;
use Illuminate\Database\Seeder;

class VeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $v = factory(Veiculo::class, 39)->make();
        Veiculo::insert($v->toArray());
    }
}
