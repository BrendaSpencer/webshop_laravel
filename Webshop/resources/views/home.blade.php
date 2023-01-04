@extends('layout.header')

@section('content')
<main class='flex justify-center flex-wrap m-3 '>
    @foreach($products as $product)
    <div class="rounded flex justify-between m-4 p-3 w-1/5 items-center bg-gray-200/50">
        <div>
            <h2> {{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            <ul>
                <li>{{ $product->price }} </li>
            </ul>
        </div>
        <div>
            <a href=""><img src="images/non-favorite.svg" alt="empty heart"></a>
             <a href=""><img src="images/products/{{ $product->image }} " alt="calender"></a> 
            <a href="/recept/{{ $product->id }}"> details</a>
        </div>
    </div>
    @endforeach
   
</main>
@endsection