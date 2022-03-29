<div class="container bg-white mx-auto my-20 p-5">
    <ul class="grid grid-cols-5 gap-4">
        @foreach($products as $product)
        <li class="bg-white shadow-lg relative hover:opacity-80">
            <a href="{{ route('product', $product->id) }}">
                <img src="{{ $product->image_path }}" class="product-image h-1/2" alt="{{ $product->name . ' image'}}">
                <div class="absolute top-4 right-0 bg-orange-400 text-white p-1">
                    olla
                </div>
                <div class="p-2 h-1/2">
                    <div class="text-center">{{ $product->name }}</div>
                    <div class="absolute bottom-4 right-3 left-3">
                        <div class="text-center">{{ $product->displayPrice }}</div>
                        <div class="text-center object-bottom"><button class="border rounded p-1">Koop nu</button></div>
                    </div>
                </div>
            </a>
        </li>
        @endforeach
    </ul>

    {{ $products->links() }}
</div>
