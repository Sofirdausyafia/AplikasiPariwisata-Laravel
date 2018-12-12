@extends('layouts.master')
@section('inititle')
Manage Data
@endsection
@section('isi')
<style type="text/css">
	.contain {
		margin-right: 1%;
		margin-left: 1%;
	}
</style>

<div class="contain" style="padding-top: 100px; margin-bottom:3%;">

<div class="box">
	<div class="card">
		<div class="card-header">
		<div class="row">
			<div class="col-6">	
				<h4>Data Tempat Pariwisata</h4>
			</div>
			<div class="col-6">	
				<a href="{{url('pariwisata/pdfall')}}" class="btn pull-right" style="background-color:#273c75;"><i class="fas fa-print"></i>&nbsp; Report Data</a>
        <a href="{{url('pariwisata/create')}}" class="btn pull-right" style="background-color:#273c75;"><i class="far fa-plus-square"></i>&nbsp;Tambah Data</a>
			</div>
		</div>
		</div>
	</div>
	<div class="box-body">
		
	</div>
</div>
<table class="table table-hover">
  <thead style="background-color:#2c3e50; color: white;" >
    <center>
    <tr>
      <th><b>Nama Tempat</b></th>
      <th><b>Foto</b></th>
      <th><b>Kategori</b></th>
      <th><b>Lokasi </b></th>
      <th><b>Hari Operasional</b></th>
      <th style="text-align: center;"><b>Aksi</th>
    </tr>
    </center>
  </thead>
  <tbody>
  @foreach($pariwisata as $key)
    <tr>
      <td>{{$key->namatempat}}</td>
      <td><a href="{{ route('detail', $key->id) }}"><img src="{{asset('foto/'. $key->foto)}}" style="height: 80px; width: 80px;"></a></td>
      <td>{{$key->kategori}}</td>
      <td>{!!substr($key->alamat,0,50) !!}...</td>
      <td>{{$key->haribuka}} ( {{$key->jambuka}} - {{$key->jambuka}} )</td>
      <td>
        <center>
      	 <a href="{{route('editpariwisata',[$key->id])}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
		      <a href="{{route('deletepariwisata',[$key->id])}}" onclick="return confirm('Hapus ?')" class="btn" style="background-color: #eb2f06;"><i class="fa fa-trash" style="color: white;"></i></a>
        </center>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection