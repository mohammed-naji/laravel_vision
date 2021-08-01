<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        foreach( range(1, 100) as $i) {
            DB::table('posts')->insert([
                'title' => 'First Post',
                'content' => 'This is content'
            ]);
        }

    }
}
