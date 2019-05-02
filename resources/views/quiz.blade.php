<body class="quizbody">
@extends('layout')
@section('title', 'Quiz')

@section('main')

<form  method="POST" >
          @csrf

<!-- <div class="questionBody child"> -->
  <div class ="questions" style="margin-top: 0"> Sign Up to View Results </div>
<div class="textfield col" style="background-color: #F5F5F5;">
  <div class="row justify-content-center">
      <label for="email" class="questions" style="margin-top: 5vh; font-size: 1.5rem; color: #535353;" >Email</label>
      <input type="email" autofocus="false" id="email" name="email" class="form-control" placeholder="Email">
    </div>
  </div>

    <div class="textfield col" style="background-color: #F5F5F5;">
        <div class="row justify-content-center">
      <label for="password" class="questions" style="margin-top: 1rem; font-size: 1.5rem; color: #535353;">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password">
    </div>
  </div>

<!-- </div> -->

<button type="submit" class="col submitButton">Submit</button>


</form>

@endsection
</body>
