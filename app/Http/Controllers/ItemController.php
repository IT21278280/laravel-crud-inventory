<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::latest()->paginate(5);

        return view('items.index', compact('items'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validate the input

        $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);

        //Create a new Item in the db

        Item::create($request->all());

        //Redirect the user and send friendly message

        return redirect()->route('items.index')->with('success','Item created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        //Validate the input

        $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);

        //Create a new Item in the db

        $item->update($request->all());

        //Redirect the user and send friendly message

        return redirect()->route('items.index')->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //Delete the Item

        $item->delete();

        //Redirect the user and display success msg

        return redirect()->route('items.index')->with('success','Item deleted successfully');

    }
}
