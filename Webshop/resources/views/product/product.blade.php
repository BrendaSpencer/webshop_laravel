<x-header>

<x-nav/>
    
<main class='flex justify-center flex-wrap m-3 '>
    <div class='  rounded  m-4 p-3 w-1/3 items-center bg-gray-200/50 '>
        <h1 class="p-3"> {{ $product->name }} </h1>
        <img src="../images/products/{{ $product->images[0]->image }} " alt="">
        <p class="p-3"> description {{ $product->description }}</p>
        <span class="p-3"> price: {{ $product->price }} </span>

    <p class="p-3"> geplaatst door: {{ $product->user->firstname }}</p>
    </div>



</main>
</x-header>