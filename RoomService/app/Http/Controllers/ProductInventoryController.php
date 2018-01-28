<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductInventoryResource;
use App\ProductInventory;
use Illuminate\Http\Request;

class ProductInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
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
     * Store or update a resource in the database.
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
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $productInventory = ProductInventory::findOrFail($id);
        return new ProductInventoryResource($productInventory);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $productInventory = ProductInventory::findOrFail($id);
        if ($productInventory->delete()) {
            return new ProductInventoryResource($productInventory);
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function byCenter($distribution_center_id)
    {
        $productInventories = ProductInventory::query()
            ->where('distribution_center_id', '=', $distribution_center_id)
            ->paginate(10);

        return ProductInventoryResource::collection($productInventories);
    }
}
