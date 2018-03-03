<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCostAuditResource;
use App\ProductCostAudit;
use Illuminate\Http\Request;

/**
 * @resource ProductCostAudit
 *
 * Intended to trace a single update to the cost of a single certain Product.
 */
class ProductCostAuditController extends Controller
{
    /**
     * GET ProductCostAudits Where ProductID
     */
    public function index($product_id)
    {
        $productCostAudits = null;

        if ($product_id == null) {
            $productCostAudits = ProductCostAudit::query()->paginate(10);
        } else {
            $productCostAudits = ProductCostAudit::query()
                ->where('product_id', '=', $product_id)
                ->paginate(10);
        }

        return ProductCostAuditResource::collection($productCostAudits);
    }

    /**
     * POST, PUT ProductCostAudit
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
        $productCostAudit->fill($data);

        if (array_key_exists('total_cost', $data) || array_key_exists('units_purchased', $data)) {
            $productCostAudit->cost_per_unit = round($productCostAudit->total_cost / $productCostAudit->units_purchased, 2);
        }

        if ($productCostAudit->save()) {
            return new ProductCostAuditResource($productCostAudit);
        }
        return null;
    }

    /**
     * GET ProductCostAudit
     */
    public function show($id)
    {
        $productCostAudit = ProductCostAudit::findOrFail($id);
        return new ProductCostAuditResource($productCostAudit);
    }

    /**
     * DELETE ProductCostAudit
     */
    public function destroy($id)
    {
        $productCostAudit = ProductCostAudit::findOrFail($id);
        if ($productCostAudit->delete()) {
            return new ProductCostAuditResource($productCostAudit);
        }
        return null;
    }
}