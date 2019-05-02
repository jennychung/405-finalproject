<body class = "explore daybody">
@extends('layout')
@section('title', 'Explore')

@section('main')

@php
$msearch = '';

if(isset($search)) {
  $msearch = $search;

}

@endphp
<div class="pageTitle"> Explore </div>

<div class= "searchbody">

<form  method="get">
          @csrf
          <div class="subheadPink"> Search </div>
          <input type="text" placeholder="Keywords" class="col" name="search" value="{{$msearch}}">
<div class="filterGroup">
<div class="filter col">
  <div class="subheadGrey" style="padding-bottom: 10px;"> Categories </div>
  <select size="5" name="category">

    <option value="all" selected >All</option>
    @if(isset($categories))
    @foreach($categories->unique('productTypeSimple') as $category)
      <option value="{{$category->productTypeSimple}}">{{$category->productTypeSimple}}</option>
    @endforeach
  @endif
  </select>
</div>

<div class="filter col">
  <div class="subheadGrey" style="padding-bottom: 10px;"> Brands </div>
  <select size="5" name="brand">
    <option value="all" selected >All</option>
    @if(isset($categories))
      @foreach($brand->unique('brand') as $brand)
        <option value="{{$brand->brand}}">{{$brand->brand}}</option>
      @endforeach
    @endif
  </select>
</div>


</div>

<button type="submit" class="col"> Submit </button>

</form>


<a href="/explore/new" class="subheadGrey">Add a Product </a>


@if(isset($products))
@forelse($products->chunk(3) as $chunk)

<div class="cardGroup">
  @foreach($chunk as $product)
  <a href="/product/{{$product->productId}}">
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
</a>
  @endforeach

</div>

@empty
        <div> No products found </div>
@endforelse

{{ $products->links() }}

@endif
</div>
@endsection
</body>
