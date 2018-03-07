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
        $vendorAdminUserRole = new \App\UserRole();
        $vendorAdminUserRole->id = 1;
        $vendorAdminUserRole->role = 'Vendor Admin';
        $vendorAdminUserRole->save();
    }
}


//factory(\App\User::class, 1)->create();

/* -- Relational Stuff --*/
//        $distributionCenters = factory(App\DistributionCenter::class, 'SimpleDistCenter', 5)->create();

//        factory(\App\ProductInventory::class, 50)->create([
//            'distribution_center_id' => $distributionCenters[0]->id
//        ]);
//
//        factory(\App\ProductInventory::class, 50)->create([
//            'distribution_center_id' => $distributionCenters[1]->id
//        ]);
//
//        factory(App\ProductCostAudit::class, 10)->create();

//        factory(App\Product::class, 'simpleProduct', 50)->create();
//
//        $ray = new \App\User();
//        $ray->name = 'Ray Winkelman';
//        $ray->email = 'raywinkelman@gmail.com';
//        $ray->password = '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm'; // secret
//        $ray->save();