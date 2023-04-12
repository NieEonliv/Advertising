<?php

namespace Nieeonliv\Advertising\Http\Controllers;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Nieeonliv\Advertising\Http\Requests\LinkRequest;
use Nieeonliv\Advertising\Http\Resources\LinkResource;
use Nieeonliv\Advertising\Models\Link;

class LinkController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return LinkResource::collection(Link::all());
    }

    public function store(LinkRequest $request)
    {
        $data = $request->validated();
        Link::query()->create($data);
    }

    public function update(LinkRequest $request, int $link)
    {
        $data = $request->validated();
        Link::query()->findOrFail($link)->update($data);
    }

    public function destroy(int $link)
    {
        Link::query()->findOrFail($link)->delete();
    }
}
