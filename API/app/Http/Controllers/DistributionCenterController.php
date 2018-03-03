<?php

namespace App\Http\Controllers;

use App\Http\Resources\DistributionCenterResource;
use App\DistributionCenter;
use Illuminate\Http\Request;

/**
 * @resource DistributionCenter
 *
 * Where Products are stored and ProductInventory is tallied.
 */
class DistributionCenterController extends Controller
{
    /**
     * GET DistributionCenters
     *
     * product_id is optional.
     */
    public function index($product_id)
    {
        $distributionCenters = null;

        if ($product_id == null) {
            $distributionCenters = DistributionCenter::with(['productInventories' => function ($query) {
                $query->take(10);
            }])->paginate(10);
        } else {
            $distributionCenters = DistributionCenter::with(['productInventories'])
                ->whereHas('productInventories', function ($query) use ($product_id) {
                    $query->where('product_id', '=', $product_id);
                })->paginate(5);
        }

        return DistributionCenterResource::collection($distributionCenters);
    }

    /**
     * POST,PUT DistributionCenter
     */
    public function store(Request $request)
    {
        $data = $request->json('data');

        $distributionCenter = null;
        if (array_key_exists('id', $data) && $request->isMethod('put')) {
            $distributionCenter = DistributionCenter::findOrFail($data['id']);
        } else {
            $distributionCenter = new DistributionCenter();
        }
        $distributionCenter->fill($data);

        if ($distributionCenter->save()) {
            return new DistributionCenterResource($distributionCenter);
        }
        return null;
    }

    /**
     * GET DistributionCenter
     */
    public function show($id)
    {
        $distributionCenter = DistributionCenter::findOrFail($id);
        return new DistributionCenterResource($distributionCenter);
    }

    /**
     * DELETE DistributionCenter
     */
    public function destroy($id)
    {
        $distributionCenter = DistributionCenter::findOrFail($id);
        if ($distributionCenter->delete()) {
            return new DistributionCenterResource($distributionCenter);
        }
        return null;
    }

    /**
     * GET DistributionCenters (Optional: Where ProductID) By Name
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