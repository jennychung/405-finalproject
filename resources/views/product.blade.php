@extends('layout')
@section('title', 'Product')

@section('main')

<div class="productBody">
  <div class="productImage" style="background-image: url('/images/kale.jpg')"></div>
<div class="subheadGreen"> Krave Beauty </div>
<div class="pageTitle"> Kale-Lalu-yAHA </div>

<div id="underImage">
<div class="subheadGrey" style="text-align: left;"> Category </div>
<p class="bodyText"> Toner </p>

<div class="subheadGrey" style="text-align: left;"> Tags </div>
<div class="tags">
  <div class="tag-style"> Paraben Free </div>
  <div class="tag-style"> Vegan </div>
</div>


<div class="subheadGrey" style="text-align: left; margin-top: 30px;"> Ingredients </div>

<table class="table">
  <tbody>
    <tr>
      <td>Aloe Barbadensis Leaf Water</td>
      <td>
        <i class="fas fa-water"></i>
        <i class="fas fa-seedling"></i>
      </td>
    </tr>

    <tr>
      <td>Aloe Barbadensis Leaf Water</td>
      <td>
        <i class="fas fa-water"></i>
        <i class="fas fa-seedling"></i>
      </td>
    </tr>

    <tr>
      <td>Aloe Barbadensis Leaf Water</td>
      <td>
        <i class="fas fa-water"></i>
        <i class="fas fa-seedling"></i>
      </td>
    </tr>

  </tbody>
</table>
</div>
</div>

</div>
@endsection
