<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $collections = Collection::all();

        return view('layouts.createItems', ['collections'=>$collections]);

 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.collection');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    //Toma la validacion creada en el request
    // $userId = Auth::id();
    // $itemData = $request->validated();
    // $itemData['user_id'] = $userId;
    // $itemImage = Item::create($itemData);


    // $itemImage->addMediaFromRequest('image')

    //     ->toMediaCollection();

    Collection::create([
        'name' => $request->input('name'),
    ]);

    /*         $images = $itemImage->getMedia();
     */

    return redirect()->back();


        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collection $collection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Collection $collection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collection $collection)
    {
        //
    }
}
