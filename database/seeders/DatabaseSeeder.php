<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DogadjajTableSeeder::class);
        $this->call(PutovanjeTableSeeder::class);
        $this->call(StudentTableSeeder::class);
    }
}
