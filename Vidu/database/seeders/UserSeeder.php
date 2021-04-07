<?php

namespace Database\Seeders;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name'=> 'Donal Trump',
        //     'email'=> 'donal_trump@gmail.com',
        //     'password'=> hash::make('password'),
        // ]);
        User::factory()
            ->count(10)
            ->create();
    }
}
