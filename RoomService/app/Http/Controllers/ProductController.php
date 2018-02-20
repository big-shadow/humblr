<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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
        $products = Product::with(['productInventories.distributionCenter' => function ($query) {
            $query->take(50);
        }])->paginate(10);

        foreach ($products as $product) {
            $product->gross_stock = DB::table('product_inventories')
                ->selectRaw('sum(quantity) as gross_stock')
                ->where('product_id', $product->id)
                ->value('gross_stock');

            $product->average_cpu = DB::table('product_cost_audits')
                ->selectRaw('sum(cost_per_unit) / count(*) as average_cpu')
                ->where('product_id', $product->id)
                ->value('average_cpu');
        }

        return ProductResource::collection($products);
    }

    /**
     * Store or update a resource in the database.
     */
    public function store(Request $request)
    {
        $data = $request->json('data');

        $product = null;
        if (array_key_exists('id', $data) && $request->isMethod('put')) {
            $product = Product::findOrFail($data['id']);
        } else {
            $product = new Product();
        }
        $product->fill($data);

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
        $products = Product::with(['productInventories.distributionCenter' => function ($query) {
            $query->take(50);
        }])
            ->where('title', 'like', '%' . $name . '%')
            ->paginate(10);

        foreach ($products as $product) {
            $product->gross_stock = DB::table('product_inventories')
                ->selectRaw('sum(quantity) as gross_stock')
                ->where('product_id', $product->id)
                ->value('gross_stock');

            $product->average_cpu = DB::table('product_cost_audits')
                ->selectRaw('sum(cost_per_unit) / count(*) as average_cpu')
                ->where('product_id', $product->id)
                ->value('average_cpu');
        }

        return ProductResource::collection($products);
    }

    public function storeImage(Request $request)
    {
        $id = $request->input('id');
        $product = Product::findOrFail($id);

        $this->validate($request, [
            'input_img' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $name = 'product-' . $id . '.' . $image->getClientOriginalExtension();
            $destination_path = public_path('/product_images');
            $image->move($destination_path, $name);
        }

        $product->image_filename = $name;

        if ($product->save()) {
            return new ProductResource($product);
        }
    }
}
