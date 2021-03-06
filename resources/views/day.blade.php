<body class="daybody" onload="timeBased()">

@extends('layout')
@section('title', 'My Day')

@section('main')
@extends('fav')

<div class="pageTitle"> My Day </div>
<div style=" display: inline-block;">
  <p id="timeBased"> Today – <i> a.m </i> </p>
</div>


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


<!-- <div class="cardGroup">
<div class="card">
  <div class="image" style="background-image: url('/images/kale.jpg')"></div>
  <div class="content">
    <div class="brand">
      Krave Beauty
    </div>
    <div class="name">
      Kale-Lalu-yAHA
    </div>

    <div class="description">
      <div class="category">
        Toner
      </div>
      <div class="tags">
        <div class="tag-style"> Paraben Free </div>
        <div class="tag-style"> Vegan </div>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="image" style="background-image: url('/images/kale.jpg')"></div>
  <div class="content">
    <div class="brand">
      Krave Beauty
    </div>
    <div class="name">
      Kale-Lalu-yAHA
    </div>

    <div class="description">
      <div class="category">
        Toner
      </div>
      <div class="tags">
        <div class="tag-style"> Paraben Free </div>
        <div class="tag-style"> Vegan </div>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="image" style="background-image: url('/images/kale.jpg')"></div>
  <div class="content">
    <div class="brand">
      Krave Beauty
    </div>
    <div class="name">
      Kale-Lalu-yAHA
    </div>

    <div class="description">
      <div class="category">
        Toner
      </div>
      <div class="tags">
        <div class="tag-style"> Paraben Free </div>
        <div class="tag-style"> Vegan </div>
      </div>
    </div>
  </div>
</div>
</div> -->

<div class= "cardGroup">
  <div id= "tip1">
    <img src="{{ asset('/images/tip1.jpg') }}" height="200" style="display: block; margin-left: auto; margin-right: auto;">
  </div>
</div>


@endsection
</body>
