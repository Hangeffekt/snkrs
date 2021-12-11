@foreach($Products as $product)
    {{ $product->brand }}
    {{ $product->type }}
    {{ $product->price }}
    {{ $product->size }}
    {{ $product->condition }}
@endforeach