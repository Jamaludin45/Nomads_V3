<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TravelPackageModel;
use App\Http\Requests\Admin\TravelPackageRequest;
use Illuminate\Support\Str;


class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = TravelPackageModel::all();

        return view('pages.admin.travel-package.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.travel-package.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TravelPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        TravelPackageModel::create($data);
        return redirect()->route('travel-package.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(TravelPackageModel $travelPackageModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = TravelPackageModel::findOrFail($id);

        return view('pages.admin.travel-package.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TravelPackageRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = TravelPackageModel::findOrFail($id);

        $item->update($data);
        return redirect()->route('travel-package.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = TravelPackageModel::findOrFail($id);
        $item->delete();

        return redirect()->route('travel-package.index');
    }
}
