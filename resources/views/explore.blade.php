<body class = "explore daybody">
@extends('layout')
@section('title', 'Explore')

@section('main')

<div class="pageTitle"> Explore </div>

<div class= "searchbody">

<div class="subheadPink"> Search </div>

<!-- index is from controller @index -->
<form action="index.php" method="get">
          @csrf
<input type="text" placeholder="Keywords" class="col" name="search" value="{{$search}}">
<button type="submit" class="col col-lg-2"> Submit </button>
</form>


<div class="filterGroup">
<div class="filter col">
  <div class="subheadGrey" style="padding-bottom: 10px;"> Categories </div>
  <select size="5">

    <option value="all" selected >All</option>
    @foreach($categories->unique('productTypeSimple') as $category)
    <option value="{{$category->productTypeSimple}}">{{$category->productTypeSimple}}</option>
      @endforeach
  </select>
</div>

<div class="filter col">
  <div class="subheadGrey" style="padding-bottom: 10px;"> Brands </div>
  <select size="5">
    <option value="all" selected >All</option>
      @foreach($brand->unique('brand') as $brand)
    <option value="{{$brand->brand}}">{{$brand->brand}}</option>
          @endforeach
  </select>
</div>

<div class="filter col">
  <div class="subheadGrey" style="padding-bottom: 10px;"> Tags </div>
  <select size="5">
    <option value="all" selected >All</option>
    <option value="moisturizer">Paraben Free</option>
    <option value="toner">Vegan</option>
    <option value="wash">Cruelty Free</option>
  </select>
</div>
</div>

@forelse($products->chunk(3) as $chunk)

<div class="cardGroup">
  @foreach($chunk as $product)
<div class="card exploreCard col-md">
  <div class="image" style="background-image: url({{$product->imageLink}})"></div>

  <div class="content">
    <div class="brand">
      <!-- Krave Beauty  -->
      {{$product->brand}}
      <!-- {{$product->imageLink}} -->
    </div>
    <div class="name">
      <!-- Kale-Lalu-yAHA -->
          {{$product->productName}}
    </div>

    <div class="description">
      <div class="category">
        <!-- Toner -->
          {{$product->productType}}
      </div>
      <!-- <div class="tags">
        <div class="tag-style"> Paraben Free </div>
        <div class="tag-style"> Vegan </div>
      </div> -->
    </div>
  </div>

</div>
  @endforeach

</div>

@empty
        <div> No products found </div>
@endforelse
{{ $products->links() }}
</div>
@endsection
</body>
