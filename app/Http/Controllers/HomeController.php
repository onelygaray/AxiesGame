<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Item;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $users = User::query()->with('items.media', 'items.likes')->get();
        $collections = Collection::with('items.media')->take(3)->get();

        // dd($collections);
        // $items = $collection->items()->with('media')->get();

        $today = now()->format('Y-m-d');
        $cardstodays = Item::whereDate('created_at', $today)->get();

        $topSellers = User::withSum('items', 'price')
        ->orderBy('items_sum_price', 'asc')
        ->get();

         // Obtener los items agrupados por colección
        $collectionItems = Item::whereIn('collection_id', $collections->pluck('id'))
            ->with('media')
            ->get()
            ->groupBy('collection_id');

        return view('layouts.home', compact('users', 'collections', 'cardstodays', 'topSellers','collectionItems'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{

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
