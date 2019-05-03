@section('title', 'Product')

@section('main')
@if($products)
  @if($products->count())
                        @foreach($products as $product)
                        <div>
                            <h4><a href="{{ route('product.show', $product) }}"></a></h4>
                            <br>
                            <span class="pull-left">Added {{ $product->pivot->created_at->diffforHumans() }}</span>

                            <span class="pull-right">
                                <a href="#" onclick="event.preventDefault(); document.getElementById('product-fav-destroy-{{ $product->id }}').submit();">Remove from favorites</a>
                            </span>

                            <form action="{{ route('product.fav.destroy', $product) }}" method="POST" id="product-fav-destroy-{{ $product->id }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                        </div>

                        <hr>
                        @endforeach
                        @else
                            No favorite items found.
<a href="/explore">
                            Add your favorite products.
</a>

                        @endif
  @endif
@yield('favoritelist')
@endsection
