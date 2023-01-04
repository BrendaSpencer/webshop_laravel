@extends('layout.header')




@section('content')
<div class="flex justify-center">  
   
    <div class="w-4/12 bg-gray-200/50  p-6 rounded-lg ">
    <h1 class="p-4 text-gray-600">Register</h1>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="firstname" class="sr-only">firstname</label>
                <input type="text" name="firstname" id="firstname" placeholder=" firstname"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg
                @error('name') border-red-500 @enderror" value="{{ old('firstname') }}">
            
                @error('firstname')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="lastname" class="sr-only">lastname</label>
                <input type="text" name="lastname" id="lastname" placeholder="lastname"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg
                @error('lastname') border-red-500 @enderror" value="{{ old('lastname') }}">
            
                @error('lastname')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="username" class="sr-only">username</label>
                <input type="text" name="username" id="username" placeholder="username"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" value="{{ old('username') }}">
                @error('username')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                
                </div>
                @enderror
            </div>


            <div class="mb-4">
                <label for="email" class="sr-only">email</label>
                <input type="email" name="email" id="email" placeholder="email"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                
                </div>
                @enderror
            </div>


            <div class="mb-4">
                <label for="password" class="sr-only">password</label>
                <input type="password" name="password" id="password" placeholder="password"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">
                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="sr-only">repeat password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" 
                placeholder="password herhalen" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
            
            </div>
            <div>
                <button type="submit" class="bg-lime-600 text-white px-4 py-3 rounded font-medium w-full">
                    Register
                </button>
            </div>
        </form>
        
    </div>
</div>
@endsection