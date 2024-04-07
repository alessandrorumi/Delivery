<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Dish;

class DishController extends Controller
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
        return view('dishes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request -> all();
        $user = Auth::user();

        $dish = new Dish();
        $dish -> name = $data['name'];
        $dish -> description = $data['description'];
        $dish -> price = $data['price'];
        $dish -> visible = $data['visible'];

        $user->dishes() -> save($dish);

        return redirect() -> route('dashboard');
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
        $dish = Dish::find($id);

        return view('dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request -> all();
        $dish = Dish::find($id);
        $user = Auth::user();

        $dish -> name = $data['name'];
        $dish -> description = $data['description'];
        $dish -> price = $data['price'];
        $dish -> visible = $data['visible'];

        $user->dishes() -> save($dish);

        return redirect()->route('dashboard', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dish = Dish::find($id);
        $dish -> delete();

        return redirect() -> route('dashboard', compact('dish'));
    }
}
