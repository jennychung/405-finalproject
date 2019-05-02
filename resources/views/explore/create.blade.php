
@extends('layout')

@section('title', 'Add a Product')

@section('main')
  <div class="row justify-content-center" style="width: 80%;   display: block;
    margin-left: auto;
    margin-right: auto;">
    <div class="col">
      <form action="/explore" method="post">
        @csrf
        <div class="form-group">
          <label for="name">Product Name</label>
          <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}" >
          <small class="text-danger">{{$errors->first('name')}} </small>
        </div>

        <div class="form-group">
          <label for="category">Category</label>
          <input type="text" id="category" name="category" class="form-control" value="{{old('category')}}">
          <small class="text-danger">{{$errors->first('category')}} </small>
        </div>

        <div class="form-group">
          <label for="brand">Brand</label>
          <input type="text" id="brand" name="brand" class="form-control" value="{{old('brand')}}">
          <small class="text-danger">{{$errors->first('brand')}} </small>
        </div>

        <div class="form-group">
          <label for="ingredient">Paste an Ingredient List with Commmas Separating Each Item</label>
          <!-- <textarea  -->
          <input type="text"
          id="ingredient" name="ingredient" class="form-control" value="{{old('ingredient')}}">

          <!-- </textarea> -->
          <small class="text-danger">{{$errors->first('ingredient')}} </small>
        </div>

        <div class="form-group">
          <label for="volume">Volume</label>
          <input type="text" id="volume" name="volume" class="form-control" value="{{old('volume')}}">
          <small class="text-danger">{{$errors->first('volume')}} </small>
        </div>

        <div class="form-group">
          <label for="ph">pH</label>
          <input type="text" id="ph" name="ph" class="form-control" value="{{old('ph')}}">
          <small class="text-danger">{{$errors->first('ph')}} </small>
        </div>

        <div class="form-group">
          <label for="directLink">Link to Purchase</label>
          <input type="url" id="directLink" name="directLink" class="form-control" value="{{old('directLink')}}">
          <small class="text-danger">{{$errors->first('directLink')}} </small>
        </div>

        <div class="form-group">
          <label for="imageLink">Link an Image</label>
          <input type="url" id="imageLink" name="imageLink" class="form-control" value="{{old('imageLink')}}">
          <small class="text-danger">{{$errors->first('imageLink')}} </small>
        </div>


        <button type="submit" class="btn btn-primary">
          Save
        </button>
      </form>
    </div>
  </div>
@endsection
