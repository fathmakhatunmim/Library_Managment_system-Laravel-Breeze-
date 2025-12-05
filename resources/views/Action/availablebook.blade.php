   {{-- <x-app-layout>
 <x-slot name="header">
        <div class="bg-[#EFFAFC] py-4 px-6 rounded-md shadow">
           
        </div>
    </x-slot>
</x-app-layout> --}}




@extends('library.default')

@section('title', "Available Books")

@section('content')


{{-- Navbar --}}
<div class="navbar bg-[#383033] shadow-sm px-6 py-4 flex justify-between items-center">
    <div class="flex items-center space-x-4">
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

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button 
                class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-all font-semibold">
                Logout
            </button>
        </form>

        {{-- Dashboard Link --}}
     
    </div>
 
</div>

{{-- Main Content --}}
<div class="flex h-screen bg-gray-100">

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
  <div class="p-6">
    <h1 class="text-4xl font-bold text-gray-800 mb-4 text-left">
        Dashboard Overview
    </h1>
    <p class="text-left">Welcome Back</p>
</div>
    
 <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4  gap-y-8 gap-x-5 px-6 pb-12 justify-items-center">


    <!-- Card 1 -->
    <div class="bg-[#DFECDE] shadow-lg p-6 flex flex-col items-center transition-transform hover:scale-105 rounded-3xl w-65">
        <div class="flex">
          <div>
            <img src="{{ asset('images/1.png') }}" alt="Review Book" class="w-15 h-15 rounded-full mb-4">
            </div>
            <div>
                <p>new Books Added</p>
                <h1 class="font-bold text-3xl">310</h1>
            </div>
        </div>
        <br>
        <p>310 New Books Added in Library</p>
        
    </div>


    <!-- Card 2 -->

    <div class="bg-[#E1E1FC]  shadow-lg p-6 flex flex-col items-center transition-transform hover:scale-105 rounded-3xl w-65">
        <div class="flex">
          <div>
            <img src="{{ asset('images/2.png') }}" alt="Review Book" class="w-15 h-15 rounded-full mb-4">
            </div>
            <div>
                <p>Lost Books</p>
                <h1 class="font-bold text-3xl">41</h1>
            </div>
        </div>
        <br>
        <p>41 Are Not In Library</p>
        
    </div>

    <!-- Card 3 -->
<div class="bg-[#F1E7FA]   shadow-lg p-6 flex flex-col items-center transition-transform hover:scale-105 rounded-3xl w-65">
        <div class="flex">
          <div>
            <img src="{{ asset('images/3.png') }}" alt="Review Book" class="w-15 h-15 rounded-full mb-4">
            </div>
            <div>
                <p>Borrowed Books</p>
                <h1 class="font-bold text-3xl">580</h1>
            </div>
        </div>
        <br>
        <p>80 Books Borrowed</p>
        
    </div>

    <!-- Card 4 -->
<div class="bg-[#FDF2E1] shadow-lg p-6 flex flex-col items-center transition-transform hover:scale-105 rounded-3xl w-65 ">
        <div class="flex">
          <div>
            <img src="{{ asset('images/6.png') }}" alt="Review Book" class="w-15 h-15 rounded-full mb-4">
            </div>
            <div>
                <p>Available Nooks</p>
                <h1 class="font-bold text-3xl">8580</h1>
            </div>
        </div>
        <br>
        <p>8580 Books Are Available To Borrow</p>
        
    </div>

</div>  
</div>





























        <h1 class="text-4xl font-bold text-gray-700 mb-8 text-center">
            Available Books
        </h1>

        <div class="w-full md:w-3/4 lg:w-2/3">
            <table class="min-w-full bg-white border border-gray-300 shadow-xl rounded-xl overflow-hidden">
                <thead class="bg-[#98DDED] text-gray-800">
                    <tr>
                        <th class="py-3 px-6 text-left font-semibold">Title</th>
                        <th class="py-3 px-6 text-left font-semibold">Author</th>
                        <th class="py-3 px-6 text-left font-semibold">Category</th>
                        <th class="py-3 px-6 text-left font-semibold">Available</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    @foreach($books as $book)
                        <tr class="hover:bg-gray-100">
                            <td class="py-3 px-6">{{ $book->title }}</td>
                            <td class="py-3 px-6">{{ $book->author }}</td>
                            <td class="py-3 px-6">{{ $book->category }}</td>
                            <td class="py-3 px-6">{{ $book->available ? 'Yes' : 'No' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>

@endsection
