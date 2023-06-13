<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemCreateRequest;
use App\Models\Collection;
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
        $collections = Collection::query()->get();

<<<<<<< HEAD

        $userId = Auth::id();

        $items = Item::query()->where('user_id', $userId)->get();

        $collections = Collection::query()->get();



        return view('layouts.createItem', ['items' => $items, 'collections' => $collections]);
=======
        $userId =Auth::id();
        $items = Item::query()->where('user_id',$userId)->get();
        return view('layouts.createItems', ['items' => $items, 'collections' => $collections]);
>>>>>>> d8a99e40dd4cfa0c3419d962e7818368dd1171cc
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
        $userId =Auth::id();
        $userName =  Auth::user();
        
        $items = Item::query()->where('user_id',$userId)->get();
        return view('layouts.author', ['items' => $items]);
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