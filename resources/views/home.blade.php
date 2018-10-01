@extends('layout.app')

@section('content')
 @include('inc.body')
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-12">
           
            <br>
            <div class="card shadow-lg" style="background-color:#22556E;color: #fff;text-transform:uppercase;">
                <div class="card-header text-center"><h3>Find Your Favourite Match</h3></div>
                
            </div>
            <br>
{{csrf_field()}}
<? php $no=1; ?>
@foreach($post as $key=>$value)
<div class="card" style="background-color:#4799B7;color: #fff;">
    <div class="card-body">
        <div class="row">
            
            <a href="#">
                <img class="shadow-lg" src="/assets/ashok.jpg" style="height:80px;width:80px;border-radius:50%;">
            </a>
            <ul class="list-unstyled" style="font-size:10px;" >
                <li > <i class="fas fa-map-marker-alt"></i><small>:{{$value->venue}}</small></li>
                <li>  <i class="fas fa-calendar"> </i><small>: {{ date('M j,Y',strtotime($value->date))}}</small> </li>
                <li>   <i class="fas fa-clock"></i><small>: {{$value->time}}</small> </li>
            </ul>
        </div>
        <center >
        <a class="btn btn-sm btn-success mr-3" href="" ><i class="far fa-eye"></i> View</a>
        <a class="btn btn-sm btn-success mr-3" href="tel:9849073379"  data-rel="external"><i class="fas fa-mobile"></i> Call</a>
        <a class="btn btn-sm btn-success mr-3" href=""><i class="fas fa-comment-alt"></i> SMS</a>
        </center>
    </div>
    
</div>
<br>
@endforeach
</div>
    </div>
</div>
@endsection
