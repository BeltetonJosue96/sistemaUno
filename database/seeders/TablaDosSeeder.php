<?php

namespace Database\Seeders;

use App\Models\tablaDos;
use Illuminate\Database\Seeder;

class TablaDosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tablaDos::factory(100)->create();
    }
}
