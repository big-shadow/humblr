<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCostAuditResource;
use App\ProductCostAudit;
use Illuminate\Http\Request;

class ProductCostAuditController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($product_id)
    {
        $productCostAudits = null;

        if ($product_id == null) {
            $productCostAudits = ProductCostAudit::query()->paginate(10);
        } else {
            $productCostAudits = ProductCostAudit::query()->where('product_id', '=', $product_id)->paginate(10);
        }

        return ProductCostAuditResource::collection($productCostAudits);
    }

    /**
     * Store or update a resource in the database.
     */
    public function store(Request $request)
    {
        $data = $request->json('data');

        $productCostAudit = null;
        if (array_key_exists('id', $data) && $request->isMethod('put')) {
            $productCostAudit = ProductCostAudit::findOrFail($data['id']);
        } else {
            $productCostAudit = new ProductCostAudit();
        }

        foreach ($data as $key => $value) {
            $productCostAudit->$key = $value;
        }

        if (array_key_exists('total_cost', $data) || array_key_exists('units_purchased', $data)) {
            $productCostAudit->cost_per_unit = round($productCostAudit->total_cost / $productCostAudit->units_purchased, 2);
        }

        if ($productCostAudit->save()) {
            return new ProductCostAuditResource($productCostAudit);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $productCostAudit = ProductCostAudit::findOrFail($id);
        return new ProductCostAuditResource($productCostAudit);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $productCostAudit = ProductCostAudit::findOrFail($id);
        if ($productCostAudit->delete()) {
            return new ProductCostAuditResource($productCostAudit);
        }
    }

}
