@extends('layout.app')
@section('content')
<div class="container shadow p-3 mt-4">
<form action="/submit/list" method="POST">
	@csrf
  <div class="form-group">
    <label for="formGroupExampleInput">Name:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="fname" placeholder="Futsal Name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Location:</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="flocation" placeholder="Futsal Location">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Phone:</label>
    <input type="tel" class="form-control" id="formGroupExampleInput" name="fphone" placeholder="Phone NUmber">
  </div>
   <button type="submit" class="btn btn-primary">Add</button>
</form>
</div>
@include('inc.footr')
@endsection