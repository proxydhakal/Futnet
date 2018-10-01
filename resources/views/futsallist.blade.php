@extends('layout.app')
@section('content')
 
<div class="container">
	<div class="row justify-content-center mt-3 p-3">
		 @if(count($futsal)>0)
<table class="table table-striped"  data-toggle="table">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">FUtsal Name</th>
      <th scope="col">Futsal Location</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($futsal as $fut)
    <tr>
      <td>{{$fut->id}}</td>
      <td>{{$fut->fname}}</td>
      <td>{{$fut->flocation}}</td>
      <td>{{$fut->fphone}}</td>
       <td><a class="btn btn-sm btn-success" href=""><i class="fas fa-eye"></i>View Details</a></td>
    </tr>
     @endforeach
  </tbody>
</table>
 @endif
 
	</div>
	{{ $futsal->links() }}
</div>
@include('inc.footr')
@endsection