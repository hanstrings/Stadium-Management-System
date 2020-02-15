@extends('layouts.app')
@section('content')




		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
			</ol>
		
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			  <div class="item">
				<img src="images/slider1.jpg" alt="slider image" >
			  </div>
		
			  <div class="item active" >
				<img src="images/slider2.jpg" alt="slider image" >
			  </div>
				<div class="item">
					<img src="images/slider4.jpg" alt="slider image" >
					</div>
				<div class="item ">
					<img src="images/slider5.jpg" alt="slider image" >
					</div>
				<div class="item">
					<img src="images/slider6.jpg" alt="slider image" >
					</div>	
			</div>
		
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>
		<!--content-->
			<div class="content">
				<div class="content-app">
					<div class="container">
						<h3>TOP NEWS</h3>
					<div class="content-from">
						@foreach ($news as $new)
							<div class="well" id=newsimages>
									<h3><a href="/news/{{$new->id}}">{{$new->headline}}</a></h3>
									<a href="/news/{{$new->id}}"><img src="{{ URL::asset('storage/'. $new->image) }}" alt="image not loaded" ></a>
									<h2>Description : {{$new->desc}}</h2>
									<h4>Date : {{$new->dateandtime}}</h4>
							</div>
						@endforeach
					</div>
				</div>
				<!---->
			</div>
		<!---->		
	</div>
	@endsection