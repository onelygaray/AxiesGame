<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemCreateRequest;
use App\Models\Item;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        $items = Item::query()->get();
        return view('layouts.createItem', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItemCreateRequest $request)
    {
        //Toma la validacion creada en el request

        $userId = Auth::id();
        $itemData = $request->validated();
        $itemData['user_id'] = $userId;
        $itemImage = Item::create($itemData);

        /*         $itemImage = Item::create($request->validated());
         */

        //basado en la documentacion...

        $itemImage->addMediaFromRequest('image')
            ->toMediaCollection();


        /*         $images = $itemImage->getMedia();
         */
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}