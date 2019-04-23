<body class="daybody">

@extends('layout')
@section('title', 'My Day')

@section('main')


<div class="pageTitle"> My Day </div>
<div id="timeBased" style=" display: inline-block;"> Today – <i> a.m </i>
</div>

<div style="float: right; display: inline-block; margin-top:0.2rem;">
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</div>

<div class="cardGroup">
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
</div>

<div class= "cardGroup">
  <div id= "tip1">
    <img src="{{ url('/images/tip1.jpg') }}" height="200" style="display: block; margin-left: auto; margin-right: auto;">
  </div>
</div>


@endsection
</body>
