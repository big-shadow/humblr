<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DistributionCenter extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address'
    ];

    /**
     * Get the products at the distribution center
     */
    public function productInventories()
    {
        return $this->hasMany('App\ProductInventory');
    }
}
