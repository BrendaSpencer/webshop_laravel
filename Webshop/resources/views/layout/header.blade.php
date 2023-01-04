<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Webshop</title>
</head>

<body class="text-lg tracking-wide text-black bg-cover" >
    {{-- style="background-image: url('/img/background.jpg')" --}}
    <nav class=" p-6 flex justify-between m-3 rounded bg-gray-200/50">
        <ul class='flex items-center '>
            <li>
                <a class="p-4 opacity-60 rounded hover:bg-gray-200/75 " href="{{ route('home') }}">Home</a>
            </li>
            @auth
            {{-- <li>
                <a class="p-4 opacity-60 rounded hover:bg-gray-200/75 " href="{{ route('receptToevoegen') }}">Recept toevoegen</a>
            </li> --}}
            @endauth
        </ul>
        
        <ul class=' flex items-center '>
        @auth
            <li>
                <a class="p-4 opacity-60 rounded hover:bg-gray-200/75" href="{{ route('userpage') }}">{{auth()->user()->firstname}}</a>
            </li>
            <li>
            <form action="{{ route('logout') }}" method="post" class='inline' >
                    @csrf
                    <button class="p-4  opacity-60 rounded hover:bg-gray-200/75" type="submit">Logout</button>
                    </form>
                
            </li>
            @endauth
            @guest
            <li>
                <a class="p-4 opacity-60 rounded hover:bg-gray-200/75" href="{{ route('login') }}">Login</a>
            </li>

            <li>
                <a class="p-4 opacity-60 rounded hover:bg-gray-200/75" href="{{ route('register') }}">Register</a>
            </li>
            @endguest
        </ul>
    </nav>
    


    @yield("content")
</body>

</html>