@extends('layouts.master')
@section('inititle')
Title page index
@endsection
@section('isi')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://www.w3schools.com/w3css/img_lights.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2016/06/18/17/42/image-1465348_960_720.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.w3schools.com/w3css/img_lights.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<a href="{{url('coba/create')}}"><button>Tambah</button></a>
	<table>
		<thead>
			<tr>
				<th>Nama</th>
				<th>Deskripsi</th>
			</tr>
		</thead>
		@foreach($coba as $key)
		<tbody>
			<td>{{$key->nama}}</td>
			<td>{{$key->deskripsi}}</td>
			<td>
				<a href="{{route('editcoba',[$key->id])}}" class="btn btn-primary">Edit</a>
				<a href="{{route('deletecoba',[$key->id])}}" onclick="return confirm('Hapus ?')"><button>Delete</button></a>
			</td>
		</tbody>
		@endforeach
	</table>
@endsection