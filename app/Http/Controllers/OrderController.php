<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Models\Book;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Eloquent Query Builder
        $ordersQB = Order::select("orders.id", "users.name AS user", "books.title AS book", "quantity", "total")
        ->join("users", "users.id", "=", "orders.user_id")
        ->join("books", "books.id", "=", "orders.book_id")
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
    public function store(StoreOrderRequest $request)
    {
        // Eloquent Insert Mass Assignment
        $book = Book::find($request->book_id);
        $total = $request->quantity * $book["price"];
        Order::create([
            "user_id" => $request->user_id,
            "book_id" => $book["id"],
            "quantity" => $request->quantity,
            "total" => $total,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdateOrderRequest $request, Order $order)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
