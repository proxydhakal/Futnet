@extends('layout.app')
@section('content')
<div class="container">
	<div class="inner-container" style="width: 100%;">
		<hr class="line" style="width: 25%;">
		<h1 class="
		text-center">About Futnet</h1>
		<div class="section-text align-center mbr-fonts-style display-5">
			<p align="justify">Welcome to Futnet, the largest community platform for futsal & fitness enthusiasts. Futnet is the definitive one-stop solution for all your activity needs, be it to meet playpals, book futsal, join playgroups, find trainers & coaches or register for semainers, treks and other events. We help you stay fit & active and have fun while doing it. Put on your sneakers and get access to futsal all over Nepal.<p>
		</div>
		<hr class="line" style="width: 25%;">
	</div>
	<h2 class="text-center"> Key Features of Futnet</h2>
	<div class="row">

		<div class="col-sm-4 mb-3">
			<div class="card" style="background-color:#22556E; color:white;">
			<center><img src="/assets/findopponent.jpg" class="shadow-lg" style="border-radius:50%;height:150px;width:150px;margin-top: 10px;"></center>
			<div class="card-title p-3" >
			<p align="justify">	Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
			<center><a class="btn btn-primary mb-3 shadow-lg p-2" style="border-radius:15%;color:#fff;">Find Opponent</a></center>
			</div>
		</div>
		<div class="col-sm-4 mb-3">
			<div class="card" style="background-color:#22556E; color:white;">
				<center><img src="/assets/venue.jpg" class="shadow-lg" style="border-radius:50%;height:150px;width:150px;margin-top: 10px;"></center>
			<div class="card-title p-3" >
			<p align="justify">	Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
			<center><a class="btn btn-primary mb-3 shadow-lg p-2" style="border-radius:15%;color:#fff;">Find Venue</a></center>
			</div>
		</div>
		<div class="col-sm-4 mb-3">
			<div class="card" style="background-color:#22556E; color:white;">
			<center><img src="/assets/training.jpg" class="shadow-lg" style="border-radius:50%;height:150px;width:150px;margin-top: 10px;"></center>
			<div class="card-title p-3" >
			<p align="justify">	Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
			</div>
			<center><a class="btn btn-primary mb-3 shadow-lg p-2" style="border-radius:15%;color:#fff;">User Training</a></center>	
			</div>
		</div>
	</div>
</div>
@include('inc.testimonial')
@endsection