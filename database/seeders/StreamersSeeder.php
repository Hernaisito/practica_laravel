<?php

namespace Database\Seeders;

use App\Models\Streamers;//HAY QUE USAR EL MODELO
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StreamersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Streamers::factory(25)->create();
    }
}
