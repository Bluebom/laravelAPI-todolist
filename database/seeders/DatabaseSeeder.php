<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TodoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\Models\User::factory(10)->create();
        
        $this->call([
            TodoSeeder::class,
        ]);
    }
}
