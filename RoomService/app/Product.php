<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'price'
    ];

    /**
     * Get the inventories.
     */
    public function productInventories()
    {
        return $this->hasMany('App\ProductInventory');
    }

    /**
     * Get the cost audits.
     */
    public function costAudits()
    {
        return $this->hasMany('App\ProductCostAudit');
    }
}
