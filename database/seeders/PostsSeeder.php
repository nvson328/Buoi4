<?php

namespace Database\Seeders;

use App\Models\posts;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        posts::factory(10)->create();
    }
}
