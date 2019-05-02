<body class = "daybody productBody">
@extends('layout')
@section('title', 'Product')

@section('main')
@section('favorite')

@extends('show')

@foreach($products as $product)
<div class="productBody">

  <div class="productImage" style="background-image: url({{$product->imageLink}})"></div>
<div class="subheadGreen">   {{$product->brand}}</div>
<div class="pageTitle">   {{$product->productName}} </div>

<div id="underImage">
<div class="subheadGrey" style="text-align: left;"> Category </div>
<p class="bodyText">   {{$product->productType}} </p>
@endforeach



<div class="subheadGrey" style="text-align: left; margin-top: 30px;"> Ingredients </div>

<table class="table">
  <tbody>
    @foreach(explode(',',$product->ingredients) as $ingredient)
    <tr>
      <td>{{$ingredient}}</td>
      <!-- <td>
        <i class="fas fa-water"></i>
        <i class="fas fa-seedling"></i>
      </td> -->
    </tr>
    @endforeach

  </tbody>
</table>
</div>
</div>

</div>
@endsection
