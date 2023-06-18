<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Item;
use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store($itemId)
    {

    $item = Item::findOrFail($itemId);


    $existingLike = Like::where('likeable_type', Item::class )
        ->where('likeable_id', $item->id)
        ->where('user_id', auth()->id())
        ->first();

    if ($existingLike) {

        $existingLike->delete();
    } else {

        $like = new Like();
        $like->user_id = auth()->id();
        $item->likes()->save($like);
    }
    $likeCount = $item->likes()->count();

    return redirect()->route('home')->with('likeCount', $likeCount);

    }
    public function likesCollection($collectionId){
        $collection = Collection::findorFail($collectionId);


        $existingLike = Like::where('likeable_type',Collection::class)
            ->where('likeable_id', $collection->id)
            ->where('user_id', auth()->id())
            ->first();
    
        if ($existingLike) {
    
            $existingLike->delete();
        } else {
    
            $like = new Like();
            $like->user_id = auth()->id();
            $collection->likes()->save($like);
        }
        $countCollection = $collection->likes()->count();
    
        return redirect()->route('home')->with('countCollection', $countCollection);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
