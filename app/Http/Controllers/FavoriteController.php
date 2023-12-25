<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Http\Requests\StoreFavoriteRequest;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Eloquent Query Builder
        $favoritesQB = Favorite::select("favorites.id", "books.title AS book", "users.name AS user")
        ->join("books", "books.id", "=", "favorites.book_id")
        ->join("users", "users.id", "=", "favorites.user_id")
        ->get();
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
    public function store(StoreFavoriteRequest $request)
    {
        // Eloquent Insert Mass Assignment
        Favorite::create([
            "book_id" => $request->book_id,
            "user_id" => $request->user_id,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Favorite $favorite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favorite $favorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdateFavoriteRequest $request, Favorite $favorite)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Eloquent Delete
        $queryData = Favorite::find($id);
        $queryData->delete();
    }
}
