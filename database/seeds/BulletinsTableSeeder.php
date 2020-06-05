<?php

use Illuminate\Database\Seeder;

class BulletinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Bulletin::class,4)->create();
    }
}
