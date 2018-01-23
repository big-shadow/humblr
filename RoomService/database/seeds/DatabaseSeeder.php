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

        /* -- Relational Stuff --*/
        $distributionCenters = factory(App\DistributionCenter::class, 'SimpleDistCenter', 2)->create();

        factory(\App\ProductInventory::class, 50)->create([
            'distribution_center_id' => $distributionCenters[0]->id
        ]);

        factory(\App\ProductInventory::class, 50)->create([
            'distribution_center_id' => $distributionCenters[1]->id
        ]);

        $ray = new \App\User();
        $ray->name = 'Ray Winkelman';
        $ray->email = 'raywinkelman@gmail.com';
        $ray->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
        $ray->save();
    }
}
