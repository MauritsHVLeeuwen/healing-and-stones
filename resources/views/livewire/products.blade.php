<div class="container bg-white mx-auto opacity-90 my-20 p-5">
    <ul>
        @foreach($products as $product)
        <li>
            {{$product->name}}
            {{$product->price}}
        </li>
        @endforeach
    </ul>
</div>
