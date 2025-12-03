<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReviewBook;

class ReviewBookController extends Controller
{
    public function index()
    {
        // সব review fetch করা হচ্ছে
        $reviews = ReviewBook::latest()->get();

        return view('reviewbook', compact('reviews'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_name' => 'required|string|max:255',
            'isbn' => 'required|string|max:100',
            'category' => 'required|string|max:100',
            'review' => 'required|string|max:1000',
        ]);

        ReviewBook::create($request->all());

        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
}
