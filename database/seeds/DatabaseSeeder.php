<?php

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
        // $this->call(UserSeeder::class);
        $this->call(CatsTableSeeder::class);
        $this->call(BulletinsTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
    }
}
