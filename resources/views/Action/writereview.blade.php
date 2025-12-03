@extends('library.default')

@section('title', "Available Books")

@section('content')

{{-- Navbar --}}
<div class="navbar bg-[#383033] shadow-sm px-6 py-4 flex justify-between items-center">
    <div class="flex items-center space-x-6">
        <img src="images/logo.png" alt="Book Icon" class="w-15 h-auto rounded-lg">
        <span class="text-xl font-bold text-white">Library Management System</span>
    </div>

    <div class="flex items-center space-x-4">
        {{-- Search Form --}}
        <form action="{{ route('avaBook.index') }}" method="GET" class="flex space-x-2 w-full max-w-md ">
            <input type="search" name="search" placeholder="Search by title, author, category"
                   class="w-full bg-white px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                   value="{{ request('search') }}">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                Search
            </button>
        </form>

        {{-- Dashboard Link --}}
     
    </div>
</div>

{{-- Main Content --}}
<div class="flex h-screen bg-gray-100 ">

    {{-- Sidebar --}}
    <div class="w-80 h-full bg-[#1E1B1C] flex flex-col items-start p-6 space-y-4">
        <a href="{{ route('avaBook.index') }}"
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
      
        <a href="{{ route('issue.index') }}"
           class="w-full px-6 py-4 bg-[#1E1B1C] hover:bg-[#BF82FB] text-white font-bold text-lg rounded-xl 
          flex items-center justify-center gap-2 transition-all duration-300">
           <img src="{{ asset('images/5.png') }}" alt="Icon" class="w-7 h-7">
            Issue Return
        </a>
        <a href="{{ route('over.index') }}"
               class="w-full px-6 py-4 bg-[#1E1B1C] hover:bg-[#BF82FB] text-white font-bold text-lg rounded-xl 
          flex items-center justify-center gap-2 transition-all duration-300">
           <img src="{{ asset('images/7.png') }}" alt="Icon" class="w-7 h-7">
            Overdue Books
        </a>
        <a href="{{ route('report.index') }}"
              class="w-full px-6 py-4 bg-[#1E1B1C] hover:bg-[#BF82FB] text-white font-bold text-lg rounded-xl 
          flex items-center justify-center gap-2 transition-all duration-300">
           <img src="{{ asset('images/2.png') }}" alt="Icon" class="w-7 h-7">
            Report & Analysis
        </a>
    </div>
 
    <div class="flex-1 p-10 flex flex-col items-center">
<div class="flex items-start">



 <div class="p-6  items-start justify-between gap-6 space-x-5">
    <!-- Text Section -->
    <div>
        <h1 class="text-4xl font-bold text-gray-800 mb-4">
          write  Review 
        </h1>
        <p class="mb-5">Welcome Back</p>
        <p class="mb-5">“Thank you! Please leave a review.<br>Keep reading books”</p>      
    </div>

    <!-- Button Section -->
    <div>
        <a href="{{ route('revBook.index') }}"
           class="flex w-40 px-6 py-4 bg-[#1E1B1C] hover:bg-[#BF82FB] text-white font-bold text-lg rounded-xl 
                  items-center justify-center gap-2 transition-all duration-300">
            Review Book
        </a>   
    </div>
</div>



<div>
      <!-- Cards Grid -->
   <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4  gap-y-8 gap-x-5 px-6 pb-12 justify-items-center">


  


</div>

  <!-- from -->
<div class="bg-[#beeefa] shadow-xl p-6 rounded-3xl w-150 flex flex-col items-center border border-gray-200 hover:shadow-2xl transition-all duration-300">

    <form class="max-w-sm w-200 mx-auto space-y-4" action="{{ route('review.store') }}" method="post">
        <!-- Book Name -->
        @csrf
        <div>
            <label for="book_name" class="block mb-2.5 text-sm font-medium text-heading">Book Name</label>
            <input type="text" id="book_name" name="book_name"
                   class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base 
                          focus:ring-brand focus:border-brand block w-full px-3 py-2 shadow-xs placeholder:text-body"
                   placeholder="Enter Book Name" required />
        </div>

        <!-- ISBN / Edition -->
        <div>
            <label for="isbn" class="block mb-2.5 text-sm font-medium text-heading">ISBN / Edition</label>
            <input type="text" id="isbn" name="isbn"
                   class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base 
                          focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                   placeholder="Enter ISBN / Edition" required />
        </div>

        <!-- Category -->
        <div>
            <label for="category" class="block mb-2.5 text-sm font-medium text-heading">Category</label>
            <input type="text" id="category" name="category"
                   class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base 
                          focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                   placeholder="Enter Category" required />
        </div>

        <!-- Review -->
        <div class="w-96">
            <label for="message" class="block mb-2.5 text-sm font-medium text-heading" name="review">Review</label>
  <textarea id="message" rows="4" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full p-3.5 shadow-xs placeholder:text-body" placeholder="Write your thoughts here..."></textarea>
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit"
                    class="w-full bg-[#1E1B1C] hover:bg-[#BF82FB] text-white font-bold text-lg py-2.5 rounded-xl 
                           transition-all duration-300">
                Submit Review
            </button>
        </div>
    </form>

</div>


</div>









</div>

</div>

  

   
@endsection
