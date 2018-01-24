<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with(['productInventories', 'productInventories.distributionCenter', 'costAudits'])->paginate(10);

        foreach ($products as $product){
            $product->gross_stock = 0;

            foreach ($product->productInventories as $inventory){
                $product->gross_stock += $inventory->quantity;
            }
        }

        return ProductResource::collection($products);
    }

    /**
     * Store or update a resource in the database.
     */
    public function store(Request $request)
    {
        $product = $request->isMethod('put')
            ? Product::findOrFail($request->product_id) : new Product();

        $this->validate($request, [
            'input_img' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $name = 'product-'.$product->id.'.'.$image->getClientOriginalExtension();
            $destination_path = public_path('/product_images');
            $image->move($destination_path, $name);
        }

        $product->id = $request->input('product_id');
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->price = $request->input('price');

        if ($product->save()) {
            return new ProductResource($product);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return new ProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->delete()) {
            return new ProductResource($product);
        }
    }

    /**
     * Display a listing of the resource by name.
     */
    public function byName($name)
    {
        $products = Product::with(['productInventories', 'productInventories.distributionCenter', 'costAudits'])
            ->where('title', 'like', '%'.$name.'%')
            ->paginate(10);

        foreach ($products as $product){
            $product->gross_stock = 0;

            foreach ($product->productInventories as $inventory){
                $product->gross_stock += $inventory->quantity;
            }
        }

        return ProductResource::collection($products);
    }
}
