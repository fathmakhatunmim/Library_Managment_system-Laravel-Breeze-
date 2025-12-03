
@extends('library.default')
@section('title', 'Register')
@section('content')

<div class="navbar bg-[#98DDED] shadow-sm">
  <div class="flex-1 flex item-center">
  <img src="images/icons8-book-50.png" alt="Flower Image" class="w-10 h-auto rounded-lg">

    <a class="btn btn-ghost text-xl"
    >Library Managment system</a>
  </div>
  {{-- <div class="flex-none">
    <ul class="menu menu-horizontal px-1 space-x-4">
       <div class="flex justify-center">
      <a href="{{ route('login') }}"
       class="px-6 py-2 bg-[#313C2C] hover:bg-yellow-600 rounded-lg font-bold transition-all text-white ">
       Log in
        </a>
</div> --}}

 <div class="flex justify-center">
      <a href="{{ route('login') }}"
       class="px-6 py-2 bg-[#313C2C]
       hover:bg-yellow-600 rounded-lg font-bold transition-all text-white ">
       Log In
        </a>
</div>


    
      <li>
        {{-- <details>
          <summary>Parent</summary>
          <ul class="bg-base-100 rounded-t-none p-2">
            <li><a>Link 1</a></li>
            <li><a>Link 2</a></li>
          </ul>
        </details> --}}
      </li>
    </ul>
  </div>
</div>




<div class="min-h-screen flex items-center justify-center bg-[#EFFAFC] ">

   <div class="flex flex-col md:flex-row rounded-3xl shadow-lg overflow-hidden w-full max-w-6xl border-4 border-dashed border-gray-400 dark:border-gray-700 p-2">

    <form method="POST" action="{{ route('register') }}" class="w-full md:w-1/2 p-10">
        @csrf
        <h2 class="text-2xl font-bold mb-6 text-gray-800 ">Register</h2>
       
        <!-- Name -->
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-700">Full Name</label>
            <x-text-input id="name" class="w-full mb-2 px-4 py-2 border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 dark:bg-gray-800 dark:text-gray-100 dark:border-gray-600" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label class="block mb-2 text-sm font-medium text-gray-700 ">Email</label>
            <x-text-input id="email" class="w-full mb-1 px-4 py-2 border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 dark:bg-gray-800 dark:text-gray-100 dark:border-gray-600" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label class="block mb-2 text-sm font-medium text-gray-700">Password</label>
            <x-text-input id="password" class="w-full mb-2 px-4 py-2 border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 dark:bg-gray-800 dark:text-gray-100 dark:border-gray-600"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label class="block mb-2 text-sm font-medium text-gray-700">Confirm Password</label>
            <x-text-input id="password_confirmation" class="w-full mb-6 px-4 py-2 border border-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500 dark:bg-gray-800 dark:text-gray-100 dark:border-gray-600"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
           <a href="{{ route('login') }}"
       class="text-sm font-medium text-blue-600 dark:text-blue-400 hover:text-dark dark:hover:text-blue-200 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:focus:ring-offset-gray-800 transition-colors">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <!-- Image Section -->
    <div class="hidden md:block text-white p-5 flex flex-col items-center justify-center rounded-3xl py-50 w-2xl shadow-cyan-700"
         style="background-image: url('{{ asset('images/log.avif') }}'); background-size: 450px; background-repeat: no-repeat; background-position: center;">
    </div>

   </div>
</div>



@endsection


