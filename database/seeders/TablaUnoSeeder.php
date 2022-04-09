<?php

namespace Database\Seeders;

use App\Models\tablaUno;
use Illuminate\Database\Seeder;

class TablaUnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tablaUno::factory(10)->create();
    }
}
