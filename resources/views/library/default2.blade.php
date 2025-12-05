<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title","my demo app")</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
 
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
       @yield("title2","my demo app")
    </h1>
    <p class="text-left">Welcome Back</p>
</div>
    
 <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4  gap-y-8 gap-x-5 px-6 pb-12 justify-items-center">

   @yield("content")


</div>
</body>
</html>