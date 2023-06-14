<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemCreateRequest;
use App\Models\Collection;
use App\Models\Item;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        /* $items = Item::query()->where('user_id', $user)->with('user')->get();*/

        $collections = Collection::query()
            ->with('items')
            ->get();


        $items = Item::query()->get();
        return view(
            'layouts.createItems',
            [
                'items' => $items,
                'collections' => $collections
            ]
        );
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
<<<<<<< HEAD


=======
        
>>>>>>> 40e9473832e5a75c957e7bb67721f0c26c117f08
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
        // $userId =Auth::id();
        $user = Auth::id();
        $idColecction = Collection::pluck('id');
        $idItems = Item::pluck('id');
        /*         dd($idColecction->toArray());
         *//*$items = $user->items;  */// Accedio a la relacion y accede a los item que tiene ese usuario
        $items = Item::query()->where('user_id', $user)->with('user')->get();

        $art = Collection::with('items')->whereIn('id', $idItems)->get();

        /*         dd($art->toArray());
         */
        return view(
            'layouts.author',
            [
                'items' => $items,
                'art' => $art

            ]
        );
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