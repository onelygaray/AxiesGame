<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Item;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

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

    // $itemImage = Item::create($itemData);


    // $itemImage->addMediaFromRequest('image')

    //     ->toMediaCollection();
    $user_id = Auth::id();
    $data = $request->validate([
        'name' => 'required',
    ]);

    $data['user_id'] = $user_id;
    // dd($data);
    $itemImage = Collection::query()->create($data);

    $itemImage->addMediaFromRequest('image')

    ->toMediaCollection();

    //$collection = Collection::query()->where('user_id', $user)->with('items', );
    // Collection::create([
    //     'name' => $request->input('name'),
    //     'user_id' => $request-> $user,
    // ]);

    /*         $images = $itemImage->getMedia();
     */

     return redirect()->back()->withErrors(['message' => '¡Colección creada exitosamente!']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {

   $collections = Collection::All()->with('items.media');
//    dd($collection);

   return redirect()->route('layouts.home')->with('collections', $collections);


// $user = Auth::id();
        // $collection = Collection::query()->where('user_id', $user)->with('items', );

   // Obtener el usuario
//    $user = User::findOrFail($userId);

   // Obtener la colección del usuario con el nombre especificado
   $collections = Collection::All();
//    dd($collection);

   return redirect()->route('layouts.home')->with('collections', $collections);
//    return redirect()->route('home')->with(''collection', $collection);
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
