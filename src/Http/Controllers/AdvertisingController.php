<?php

namespace Nieeonliv\Advertising\Http\Controllers;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Nieeonliv\Advertising\Http\Requests\AdvertisingRequest;
use Nieeonliv\Advertising\Http\Resources\AdvertisingResource;
use Nieeonliv\Advertising\Models\Advertising;

class AdvertisingController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return AdvertisingResource::collection(Advertising::all());
    }

    public function store(AdvertisingRequest $request)
    {
        $data = $request->validated();
        Advertising::query()->create($data);
    }

    public function update(AdvertisingRequest $request, int $advertising)
    {
        $data = $request->validated();
        Advertising::query()->findOrFail($advertising)->update($data);
    }

    public function destroy(int $advertising)
    {
        Advertising::query()->findOrFail($advertising)->delete();
    }
}
