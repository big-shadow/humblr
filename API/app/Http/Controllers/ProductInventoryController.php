<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductInventoryResource;
use App\ProductInventory;
use Illuminate\Http\Request;

/**
 * @resource ProductInventory
 *
 * A one-to-one relationship with DistributionCenter and Product, representing Product available at the given DistributionCenter.
 */
class ProductInventoryController extends Controller
{
    /**
     * GET ProductCostInventories Where ProductID
     */
    public function index($product_id)
    {
        $productInventories = null;

        if ($product_id == null) {
            $productInventories = ProductInventory::query()->paginate(10);
        } else {
            $productInventories = ProductInventory::query()
                ->where('product_id', '=', $product_id)
                ->paginate(10);
        }

        return ProductInventoryResource::collection($productInventories);
    }

    /**
     * POST,PUT ProductCostInventory
     */
    public function store(Request $request)
    {
        $data = $request->json('data');

        $productInventory = null;
        if (array_key_exists('id', $data) && $request->isMethod('put')) {
            $productInventory = ProductInventory::findOrFail($data['id']);
        } else {
            $productInventory = new ProductInventory();
        }
        $productInventory->fill($data);

        if ($productInventory->save()) {
            return new ProductInventoryResource($productInventory);
        }
        return null;
    }

    /**
     * GET ProductCostInventory
     */
    public function show($id)
    {
        $productInventory = ProductInventory::findOrFail($id);
        return new ProductInventoryResource($productInventory);
    }

    /**
     * DELETE ProductCostInventory
     */
    public function destroy($id)
    {
        $productInventory = ProductInventory::findOrFail($id);
        if ($productInventory->delete()) {
            return new ProductInventoryResource($productInventory);
        }
        return null;
    }

    /**
     * GET ProductCostInventories Where DistributionCenterID
     */
    public function byCenter($distribution_center_id)
    {
        $productInventories = ProductInventory::query()
            ->where('distribution_center_id', '=', $distribution_center_id)
            ->paginate(10);

        return ProductInventoryResource::collection($productInventories);
    }
}
