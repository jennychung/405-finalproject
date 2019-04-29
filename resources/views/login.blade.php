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

  <form method="post">
        @csrf
  <div class="form-group">
<div class="subheadPink"> Email </div>
<input type="email" id="email" name="email" placeholder="Email" class="col">
</div>
<p style="margin-top: 10px;"> </p>

  <div class="form-group">
<div class="subheadPink"> Password </div>
<input type="password" id="password" name="password" placeholder="Password" class="col">
</div>
<button type="submit" value="Login" style="margin-top: 20px;" class="col col-lg-2">Submit</button>
</form>

<p class="subtext">Don't have an account? <a href="/quiz">Take the quiz!</a></p>

</div>
</div>
</div>

@endsection
