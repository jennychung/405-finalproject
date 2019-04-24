@extends('layout')
@section('title', 'Profile')

@section('main')
<div class="pageTitle"> Profile </div>
<div class="row">

<div class="col-3 profileText">
Your skin is
<span class="dynamicProfileText"> oily </span>
and
<span class="dynamicProfileText"> blemish-prone</span>
. Your most liked brands are
<span class="dynamicProfileText"> Laneige</span>
,
<span class="dynamicProfileText"> Innisfree</span>
, and
<span class="dynamicProfileText"> Neutrogena</span>
.


<button type="" class="profileButton">Upload New Photo</button>

</div>
<div class="col-1"> </div>


<div class="col-8">
  <div class="row profileRowHeight">
     <div class="col profileImage" style="background-image: url(https://source.unsplash.com/random/)">
       <p class="imageDate"> 3/20/19 </p>
     </div>
   <div class="col profileImage" style="background-image: url(https://source.unsplash.com/random/)">
        <p class="imageDate"> 3/20/19 </p>
     </div>
     <div class="col profileImage" style="background-image: url(https://source.unsplash.com/random/)">
        <p class="imageDate"> 3/20/19 </p>
     </div>
   </div>
   <div class="row profileRowHeight">
      <div class="col profileImage" style="background-image: url(https://source.unsplash.com/random/)">
        <p class="imageDate"> 3/20/19 </p>
      </div>
    <div class="col profileImage" style="background-image: url(https://source.unsplash.com/random/)">
         <p class="imageDate"> 3/20/19 </p>
      </div>
      <div class="col profileImage" style="background-image: url(https://source.unsplash.com/random/)">
         <p class="imageDate"> 3/20/19 </p>
      </div>
    </div>
    <div class="row profileRowHeight">
       <div class="col profileImage" style="background-image: url(https://source.unsplash.com/random/)">
         <p class="imageDate"> 3/20/19 </p>
       </div>
     <div class="col profileImage" style="background-image: url(https://source.unsplash.com/random/)">
          <p class="imageDate"> 3/20/19 </p>
       </div>
       <div class="col profileImage" style="background-image: url(https://source.unsplash.com/random/)">
          <p class="imageDate"> 3/20/19 </p>
       </div>
     </div>
</div>
</div>


@endsection
