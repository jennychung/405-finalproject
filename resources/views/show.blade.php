
@section('title', 'Product')

@section('main')

@php
$newId = $product->productId;
$favoriteCheck = App\Product::favoritedBy(Auth::user());

@endphp

{{$favoriteCheck}}

@if(!$favoriteCheck)

  <a href="#" onclick="event.preventDefault(); document.getElementById('product-fav-form').submit();" >
        <i  class="far fa-heart fa-2x"></i></a>

  <form id="product-fav-form" class="hidden" action="{{ route('product.fav.store', $newId) }}" method="POST">
@csrf
  </form>
    <!-- <i  class="fas fa-heart fa-2x"></i></a> -->
@endif
                        @yield('favorite')

@endsection
