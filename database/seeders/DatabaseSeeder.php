<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\piece;
use App\Models\coment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\piece::factory(10)->create();
        \App\Models\coment::factory(40)->create();
    }
}
