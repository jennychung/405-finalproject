@extends('layout')
@section('title', 'Login')

@section('main')

<div class="login">
<div class="row">
    <div class="col-1"> </div>
<div class="pageTitle col-4"> Welcome </div>
<!-- <div class="col-1"> </div> -->
<div class= "searchbody col-6">
  <div class="col-1"> </div>

<div class="subheadPink"> Email </div>
<input type="text" placeholder="Email" class="col">

<p style="margin-top: 10px;"> </p>

<div class="subheadPink"> Password </div>
<input type="text" placeholder="Password" class="col">

<button type="submit" style="margin-top: 20px;" class="col col-lg-2">Submit</button>

</div>
</div>
</div>

@endsection
