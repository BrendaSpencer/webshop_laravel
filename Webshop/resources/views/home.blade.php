<x-header>

<x-nav/>

<main class='flex justify-center flex-wrap  md:flex-row'>
    @foreach($products as $product)

    <div class=" rounded-md bg-cover w-1/2 md:w-1/3 lg:w-1/5 h-64 m-2" style="background-image: url(images/products/{{ $product->image }} )" >
        <div class="h-full w-2/4 p-2 pb-0 bg-gradient-to-l from-gray-100/25 to-gray-200 hover:bg-gray-100 hover:w-2/3">
            <a href=""><img class='w-5 mb-5' src="images/non-favorite.svg" alt="empty heart"></a>
            <a href="/product/{{ $product->id }}">
                <p class="mb-5 text-2xl"> {{ $product->name }}</p>
                <p>{{ $product->description }} </p>
             <span class="text-sm underline "> details </span>
            </a>
             <p class="mt-6">{{ $product->price }} &euro;</p>
        </div>

</div>    @endforeach
   
</main>

</x-header>