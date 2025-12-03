@extends('library.default')

@section('title', "Review Books")

@section('content')

{{-- Navbar --}}
<div class="navbar bg-[#383033] shadow-sm px-6 py-4 flex justify-between items-center">
    <div class="flex items-center space-x-6">
        <img src="{{ asset('images/logo.png') }}" alt="Book Icon" class="w-15 h-auto rounded-lg">
        <span class="text-xl font-bold text-white">Library Management System</span>
    </div>
</div>

<div class="flex h-screen bg-gray-100">

    {{-- Sidebar --}}
    <div class="w-80 h-full bg-[#1E1B1C] flex flex-col items-start p-6 space-y-4">
        <a href="{{ route('avaBook.index') }}"
           class="w-full px-6 py-4 bg-[#1E1B1C] hover:bg-[#BF82FB] text-white font-bold text-lg rounded-xl 
                  flex items-center justify-center gap-2 transition-all duration-300">
            <img src="{{ asset('images/1.png') }}" alt="Icon" class="w-7 h-7">
            Dashboard
        </a>
        <a href="{{ route('revBook.index') }}"
           class="w-full px-6 py-4 bg-[#1E1B1C] hover:bg-[#BF82FB] text-white font-bold text-lg rounded-xl 
                  flex items-center justify-center gap-2 transition-all duration-300">
            <img src="{{ asset('images/4.png') }}" alt="Icon" class="w-7 h-7">
            Review Book
        </a>
    </div>

    {{-- Main Panel --}}
    <div class="flex-1 p-10 flex flex-col items-center overflow-y-auto">

        {{-- Success Message --}}
        @if(session('success'))
            <div class="mb-6 p-3 bg-green-500 text-white rounded shadow w-full max-w-md text-center">
                {{ session('success') }}
            </div>
        @endif

        {{-- Review Cards --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 w-full max-w-6xl mb-10">
            @forelse($reviews as $review)
                <div class="bg-[#beeefa] shadow-xl p-6 rounded-3xl flex flex-col items-center border border-gray-200 hover:shadow-2xl transition-all duration-300">
                    <h1 class="text-xl font-bold text-gray-800 mb-2">{{ $review->book_name }}</h1>
                    <p><strong>ISBN:</strong> {{ $review->isbn }}</p>
                    <p><strong>Category:</strong> {{ $review->category }}</p>
                    <p class="mt-2"><strong>Review:</strong> {{ $review->review }}</p>
                </div>
            @empty
                <p class="text-center col-span-3 text-gray-500 mt-10">No reviews found.</p>
            @endforelse
        </div>

        {{-- Write Review Form --}}
        <div class="bg-[#beeefa] shadow-xl p-6 rounded-3xl w-full max-w-md flex flex-col items-center border border-gray-200 hover:shadow-2xl transition-all duration-300">
            <form class="w-full space-y-4" action="{{ route('review.store') }}" method="POST">
                @csrf
                <div>
                    <label for="book_name" class="block mb-2 text-sm font-medium">Book Name</label>
                    <input type="text" name="book_name" id="book_name" placeholder="Enter Book Name"
                           class="w-full px-3 py-2 border rounded-md" required>
                </div>
                <div>
                    <label for="isbn" class="block mb-2 text-sm font-medium">ISBN / Edition</label>
                    <input type="text" name="isbn" id="isbn" placeholder="Enter ISBN"
                           class="w-full px-3 py-2 border rounded-md" required>
                </div>
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium">Category</label>
                    <input type="text" name="category" id="category" placeholder="Enter Category"
                           class="w-full px-3 py-2 border rounded-md" required>
                </div>
                <div>
                    <label for="review" class="block mb-2 text-sm font-medium">Review</label>
                    <textarea name="review" id="review" rows="4" placeholder="Write your thoughts here..."
                              class="w-full px-3 py-2 border rounded-md" required></textarea>
                </div>
                <div>
                    <button type="submit" class="w-full bg-[#1E1B1C] hover:bg-[#BF82FB] text-white py-2.5 rounded-xl font-bold">
                        Submit Review
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection
