<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\piece;

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
    }
}
