<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Eloquent Relationship
        $books = Book::with("type")->get();
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
    public function store(StoreBookRequest $request)
    {
        // Eloquent Insert Mass Assignment
        Book::create([
            "title" => $request->title,
            "type_id" => $request->type_id,
            "release_date" => $request->release_date,
            "pages" => $request->pages,
            "author" => $request->author,
            "description" => $request->description,
            "image" => $request->image,
            "price" => $request->price
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Eloquent Relationship Single Model
        $book = Book::with("type")->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, $id)
    {
        // Eloquent Update Mass Assignment
        Book::where("id", $id)->update([
            "title" => $request->title,
            "type_id" => $request->type_id,
            "release_date" => $request->release_date,
            "pages" => $request->pages,
            "author" => $request->author,
            "description" => $request->description,
            "image" => $request->image,
            "price" => $request->price
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Eloquent Delete
        $book = Book::find($id);
        $book->delete();
    }
}
