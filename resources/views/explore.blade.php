<body class = "explore daybody">
@extends('layout')
@section('title', 'Explore')

@section('main')

<div class="pageTitle"> Explore </div>

<div class= "searchbody">

<div class="subheadPink"> Search </div>
<input type="text" placeholder="Keywords" class="col">
<button type="submit" class="col col-lg-2">Submit</button>


<div class="filterGroup">
<div class="filter col">
  <div class="subheadGrey" style="padding-bottom: 10px;"> Categories </div>
  <select size="5">
    <option value="all" selected >All</option>
    <option value="moisturizer">Moisturizer</option>
    <option value="toner">Toner</option>
    <option value="wash">Face Wash</option>
  </select>
</div>

<div class="filter col">
  <div class="subheadGrey" style="padding-bottom: 10px;"> Brands </div>
  <select size="5">
    <option value="all" selected >All</option>
    <option value="moisturizer">Innisfree</option>
    <option value="toner">Glow Recipe</option>
    <option value="wash">Krave Beauty</option>
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


<div class="cardGroup">

<div class="card exploreCard col-md">
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

<div class="card exploreCard col-md">
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

<div class="card exploreCard col-md">
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
</div>

</div>
@endsection
</body>
