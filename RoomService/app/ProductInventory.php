<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductInventory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quantity', 'product_id', 'distribution_center_id'
    ];

    /**
     * Get the distribution center record associated with the product inventory.
     */
    public function distributionCenter()
    {
        return $this->belongsTo('App\DistributionCenter');
    }

    /**
     * Get the product record associated with the product inventory.
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
