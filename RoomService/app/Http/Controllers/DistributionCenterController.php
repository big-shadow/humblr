<?php

namespace App\Http\Controllers;

use App\Http\Resources\DistributionCenterResource;
use App\DistributionCenter;
use Illuminate\Http\Request;

class DistributionCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($product_id)
    {
        $distributionCenters = null;

        if ($product_id == null) {
            $distributionCenters = DistributionCenter::with(['productInventories' => function ($query) {
                $query->take(10);
            }])->paginate(10);
        } else {
            $distributionCenters = DistributionCenter::with(['productInventories' => function ($query) use ($product_id) {
                $query->where('product_id', '=', $product_id);
            }])->paginate(10);
        }

        return DistributionCenterResource::collection($distributionCenters);
    }

    /**
     * Store or update a resource in the database.
     */
    public function store(Request $request)
    {
        $id = $request->json('data')['id'];

        $distributionCenter = $request->isMethod('put')
            ? DistributionCenter::findOrFail($id) : new DistributionCenter();

        $data = $request->json('data');
        $distributionCenter->id = $data['id'];
        $distributionCenter->title = $data['title'];
        $distributionCenter->description = $data['description'];
        $distributionCenter->price = $data['price'];

        if ($distributionCenter->save()) {
            return new DistributionCenterResource($distributionCenter);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $distributionCenter = DistributionCenter::findOrFail($id);
        return new DistributionCenterResource($distributionCenter);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $distributionCenter = DistributionCenter::findOrFail($id);
        if ($distributionCenter->delete()) {
            return new DistributionCenterResource($distributionCenter);
        }
    }

    /**
     * Display a listing of the resource by name.
     */
    public function byName($product_id, $name)
    {
        $distributionCenters = null;

        if ($product_id == null) {
            $distributionCenters = DistributionCenter::with(['productInventories' => function ($query) {
                $query->take(10);
            }])
                ->where('name', 'like', '%' . $name . '%')
                ->paginate(10);
        } else {
            $distributionCenters = DistributionCenter::with(['productInventories' => function ($query) use ($product_id) {
                $query->where('product_id', '=', $product_id);
            }])
                ->where('name', 'like', '%' . $name . '%')
                ->paginate(10);
        }

        return DistributionCenterResource::collection($distributionCenters);
    }
}