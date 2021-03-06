@extends('layouts.master')
@section('inititle')
Title page detail
@endsection
@section('isi')
<style type="text/css">
	.contain {
		padding-top: 90px;
		margin-right: 1%;
		margin-left: 1%;
        margin-bottom: 1%;
	}

	.imagez {
		height : 20rem;
		width : 35rem;
	}
</style>

<div class="contain">
	<div class="card box-danger">
        <div class="card-body" style="padding-bottom: 2%;">

        <div class="row">
            <div class="col-6">
                <p align="right"><h1 class="font-weight-bold text-monospace text-capitalize mt-2">{{$pariwisata->namatempat}}</h1></p>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
        	   <img class="imagez" src="{{asset('foto/'. $pariwisata->foto)}}" alt="Card image cap">
            </div>

            <div class="col-6">
        	   <p>
        		  <address class="mt-1"><strong>Lokasi : {{$pariwisata->alamat}}</strong></address>
        		  <strong>Jam Operasional : {{$pariwisata->haribuka}}</strong>, <strong>{{$pariwisata->jambuka}} - {{$pariwisata->jamtutup}}</strong>
        	   </p>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-12">
            <p align="justify" class="text-capitalize" style="line-height: 1.5;">{{$pariwisata->deskripsi}}</p>
            </div>
        </div>

        <div class="text-right" style="margin-top: 3%;">
            <a href="{{url('pariwisata')}}"><button type="button" class="btn btn-lg" style="background-color: #dcdde1;">Kembali</button></a>
        </div>
        </div>
    </div>
</div>
@endsection