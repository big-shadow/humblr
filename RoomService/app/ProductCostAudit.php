<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCostAudit extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'units_purchased', 'total_cost', 'cost_per_unit', 'supplier_note'
    ];

    /**
     * Get the product record associated with the product cost audit.
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
