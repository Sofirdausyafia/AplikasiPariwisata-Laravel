@extends('layouts.master')
@section('inititle')
Title page index
@endsection
@section('isi')
<style type="text/css">
	.space {
		margin-top: 2%;
		margin-bottom: 2%;
		margin-right: 2%;
		margin-left: 2%;
	}

	.pace-slide {
		padding-right: 1%;
		padding-left: 1%;
	}

	.foto {
		width : 19rem;
		height : 18rem;
	}

  
</style>
<body style="background-color: #f5f6fa">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 100%;height: 100vh;overflow: hidden;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="height: 100%">
    <div class="carousel-item active caption left-align" style="height: 100%">
      <img class="d-block w-100" src="carousel/pict4.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h1 style="font-size: 60px;"><b>Mau pergi kemana hari ini?</b></h1>
          <p style="font-size: 20px;">Temukan destinasi tempat wisatamu hari ini disini!</p>
        </div>
    </div>
    <div class="carousel-item" style="height: 100%">
      <img class="d-block w-100" src="carousel/pict1.jpeg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h1 style="font-size: 60px;"><b>Mau pergi kemana hari ini?</b></h1>
          <p style="font-size: 20px;">Temukan destinasi tempat wisatamu hari ini disini!</p>
        </div>
    </div>
    <div class="carousel-item" style="height: 100%">
      <img class="d-block w-100" src="carousel/pict2.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h1 style="font-size: 60px;"><b>Mau pergi kemana hari ini?</b></h1>
          <p style="font-size: 20px;">Temukan destinasi tempat wisatamu hari ini disini!</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="space">
<div class="row">  
@foreach($pariwisata as $key)
<div class="card" style="width: 19rem; margin-right: 1%; margin-left: 1%;margin-bottom: 1%; margin-top: 1%;">
  <img class="card-img-top foto" src="{{asset('foto/'. $key->foto)}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$key->namatempat}}</h5>
    <p class="card-text">{!!substr($key->alamat,0,50) !!}...</p>
    <a href="{{ route('detail', $key->id) }}" class="btn pull-right" style="background-color:#273c75;">Detail</a>
  </div>
</div>
@endforeach
</div>
</div>		
</body>
@endsection