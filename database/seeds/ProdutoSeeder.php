<?php

use App\Model\Produto;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = factory(Produto::class)->make();
        Produto::insert($p->toArray());
    }
}