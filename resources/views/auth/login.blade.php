@extends('library.default')
@section('title',"Login ")
    @section('content')
             {{-- @if($errors->any())
<div class="alert alert-error mb-4">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div> --}}
{{-- @endif --}}
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
      <a href="{{ route('register') }}"
       class="px-6 py-2 bg-[#313C2C]
       hover:bg-yellow-600 rounded-lg font-bold transition-all text-white ">
       Register
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

<div class="min-h-screen flex items-center justify-center bg-[#EFFAFC]">

   <div class="flex flex-col md:flex-row rounded-3xl shadow-lg overflow-hidden w-full max-w-6xl border-4 border-dashed border-gray-400 p-2">


          <div class="hidden md:block text-white p-5 flex flex-col items-center justify-center rounded-3xl py-50 w-2xl shadow-cyan-700"
     style="background-image: url('{{ asset('images/log.avif') }}'); background-size: 450px; background-repeat: no-repeat; background-position: center;">
   </div>

        {{-- <div class="hidden md:flex flex-col items-center justify-center bg-[#004754] text-white p-10 w-1/2 rounded-l-3xl">

            <h2 class="text-4xl font-bold mb-3 text-center">Welcome Back!</h2>
            <p class="text-center mb-8 text-gray-200">
                Already have an account? Sign in to access all features.
            </p>

            <a href="{{ route('register') }}"
                class="px-8 py-3 bg-yellow-500 hover:bg-yellow-600 rounded-lg font-bold text-white shadow-md transition-all">
                Sign up
            </a>

        </div> --}}

        
        <div class="flex flex-col justify-center p-10 w-full md:w-1/2">

            <h2 class="text-3xl font-bold mb-6 text-gray-800 text-center md:text-left">Log in</h2>

            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" placeholder="Email"
                        class="w-full px-4 py-2 border border-dark rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none">
                </div>

                <!-- Password -->
                <div>
                    <label class="block mb-1 text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" placeholder="Password"
                        class="w-full px-4 py-2 border border-dark rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none">
                </div>

        
                <button type="submit"
                    class="w-full py-2 mt-4 bg-[#313C2C] hover:bg-yellow-600 text-white font-bold rounded-lg transition-all">
                    Log in
                </button>
                     
            </form>

        </div>

    </div>

</div>


    @endsection

           















        </header>



























        

        @if (Route::has('login'))
            <div class=" hidden lg:block"></div>
        @endif