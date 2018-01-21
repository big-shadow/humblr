<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 1)->create();
        factory(\App\Product::class, 100)->create();

        $ray = new \App\User();
        $ray->name = 'Ray Winkelman';
        $ray->email = 'raywinkelman@gmail.com';
        $ray->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $ray->save();
    }
}
