<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderCollection;
use App\Http\Resources\OrderResource;
use App\Models\Book;
use Exception;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $queryData = Order::select("orders.id", "users.name AS user", "books.title AS book", "quantity", "total")
            ->join("users", "users.id", "=", "orders.user_id")
            ->join("books", "books.id", "=", "orders.book_id")
            ->get();
            $formattedDatas = new OrderCollection($queryData);
            return response()->json([
                "message" => "success",
                "data" => $formattedDatas
            ], 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
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
        $validatedRequest = $request->validated();
        try {
            $book = Book::find($validatedRequest["book_id"]);
            $total = $validatedRequest["quantity"] * $book["price"];
            $queryData = Order::create([
                "user_id" => $validatedRequest["user_id"],
                "book_id" => $book["id"],
                "quantity" => $validatedRequest["quantity"],
                "total" => $total,
            ]);
            $formattedDatas = new OrderResource($queryData);
            return response()->json([
                "message" => "success",
                "data" => $formattedDatas
            ], 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
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
