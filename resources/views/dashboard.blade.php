<x-app-layout>
    <!-- Header -->
    <x-slot name="header">
        <div class="bg-[#EFFAFC] py-4 px-6 rounded-md shadow">
            <h2 class="font-semibold text-xl text-gray-800 text-center">
                {{ __('Library Management System') }}
            </h2>
        </div>
    </x-slot>

    <!-- Welcome Section -->
    <div class="p-6">
        <h1 class="text-4xl font-bold text-gray-500
        mb-8 text-center">
            Welcome to Our Library
        </h1>
    </div>

    <!-- Cards Grid -->
   <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  gap-y-8 gap-x-0 px-6 pb-12 justify-items-center">



    <!-- Card 1 -->
    <div class="bg-[#beeefa] shadow-lg p-6 flex flex-col items-center transition-transform hover:scale-105 rounded-3xl w-3/4">
        <img src="{{ asset('images/1.png') }}" alt="Review Book" class="w-24 h-24 rounded-full mb-4">
        <a href="{{ route('revBook.index') }}"
           class="px-6 py-2 bg-[#313C2C] hover:bg-yellow-600 text-white font-bold rounded-lg transition-all">
            Review Book
        </a>
    </div>






    <!-- Card 2 -->
    <div class="bg-[#beeefa] shadow-lg p-6 flex flex-col items-center transition-transform hover:scale-105 w-3/4 rounded-3xl">
        <img src="{{ asset('images/2.png') }}" alt="Available Books" class="w-24 h-24 rounded-full mb-4">
        <a href="{{ route('avaBook.index') }}"
           class="px-6 py-2 bg-[#313C2C] hover:bg-yellow-600 text-white font-bold rounded-lg transition-all">
            Available Books
        </a>
    </div>

    <!-- Card 3 -->
    <div class="bg-[#beeefa] shadow-lg p-6 flex flex-col items-center transition-transform hover:scale-105 w-3/4 rounded-3xl">
        <img src="{{ asset('images/3.png') }}" alt="My Account" class="w-24 h-24 rounded-full mb-4">
        <a href="{{ route('profile.edit') }}"
           class="px-6 py-2 bg-[#313C2C] hover:bg-yellow-600 text-white font-bold rounded-lg transition-all">
            My Account
        </a>
    </div>

    <!-- Card 4 -->
    <div class="bg-[#beeefa] shadow-lg p-6 flex flex-col items-center transition-transform hover:scale-105 w-3/4 rounded-3xl">
        <img src="{{ asset('images/4.png') }}" alt="Issued Book" class="w-20 h-22 mb-4">
        <a href="{{ route('login') }}"
           class="px-6 py-2 bg-[#313C2C] hover:bg-yellow-600 text-white font-bold rounded-lg transition-all">
            Issued Book
        </a>
    </div>

    <!-- Card 5 -->
    <div class="bg-[#beeefa] shadow-lg p-6 flex flex-col items-center transition-transform hover:scale-105 w-3/4 rounded-3xl">
        <img src="{{ asset('images/5.png') }}" alt="Reservation Request" class="w-24 h-24 mb-4">
        <a href="{{ route('login') }}"
           class="px-6 py-2 bg-[#313C2C] hover:bg-yellow-600 text-white font-bold rounded-lg transition-all">
            Reservation Request
        </a>
    </div>

    <!-- Card 6 -->
    <div class="bg-[#beeefa] shadow-lg p-6 flex flex-col items-center transition-transform hover:scale-105 w-3/4 rounded-3xl">
        <img src="{{ asset('images/6.png') }}" alt="Issued Book" class="w-24 h-24 rounded-full mb-4">
        <a href="{{ route('login') }}"
           class="px-6 py-2 bg-[#313C2C] hover:bg-yellow-600 text-white font-bold rounded-lg transition-all">
            Issued Requests
        </a>
    </div>
</div>

</x-app-layout>
