<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'subdomain', 'phone', 'type'
    ];



    /**
     * Get the inventories.
     */
//    public function productInventories()
//    {
//        return $this->hasMany('App\ProductInventory');
//    }
}
