<?php

use App\Model\Beneficiario;
use Illuminate\Database\Seeder;

class BeneficiarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $b = factory(Beneficiario::class, 50)->make();
        Beneficiario::insert($b->toArray());
    }
}
