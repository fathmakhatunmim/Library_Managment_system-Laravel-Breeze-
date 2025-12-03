<?php

namespace App\Http\Controllers;
use App\Models\ReviewBook;
use Illuminate\Http\Request;

class writtereviewcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = ReviewBook::all(); 
         // DB থেকে সব review
         return view('Action.reviewbook', compact('reviews'));
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
    $request->validate([
        'book_name' => 'required|string|max:255',
        'isbn_edition' => 'required|string|max:100',
        'category' => 'required|string|max:100',
        'review' => 'required|numeric|min:0|max:5',
    ]);

    // DB save
    ReviewBook::create([
        'book_name' => $request->book_name,
        'isbn_edition' => $request->isbn_edition,
        'category' => $request->category,
        'review' => $request->review,
    ]);

    // Flash success message
    return redirect()->back()->with('success', 'Review submitted successfully!');
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
