@extends('layouts.master')
@section('inititle')
Title page index
@endsection
@section('isi')
<body style="background-color: #f5f6fa">
<div class="container" style="padding-top: 100px; margin-bottom:3%;">
            <div class="box box-danger">
                <div class="card" style="padding-bottom: 2%;">
                    <h5 class="card-header white-text text-left" style="background-color: #273c75;">
                        <strong>Masukan Data</strong>
                    </h5>

                    <form action="{{url('pariwisata/save')}}" method="post" enctype="multipart/form-data">
                        <div class="box-body" style="margin-top: 1%;">
                            <div class="col-sm-12">
                            {{ csrf_field() }}

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="namatempat">Nama Tempat</label>
                                        <input class="form-control" type="text" name="namatempat">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="kategori">Kategori</label>
                                        <select class="custom-select" name="kategori">
                                            <option disabled>++Pilih++</option>
                                            <option value="Museum">Museum</option>
                                            <option value="Peninggalan Sejarah">Peninggalan Sejarah</option>
                                            <option value="Taman">Taman</option>
                                            <option value="Pusat Perbelanjaan">Pusat Perbelanjaan</option>
                                            <option value="Rumah Makan">Rumah Makan</option>
                                            <option value="Wahana Edukasi Anak">Wahana Edukasi Anak</option>
                                            <option value="Wahana Hiburan">Wahana Hiburan</option>
                                            <option value="Wisata Alam">Wisata Alam</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Lokasi</label><br>
                                    <input class="form-control" type="text" name="alamat">
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="haribuka">Hari Operasional</label>
                                        <input class="form-control" type="text" name="haribuka">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="jambuka">Jam Buka</label>
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" data-autoclose="true" name="jambuka">
                                            <span class="input-group-addon">
                                                <i class="far fa-clock"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="jamtutup">Jam Tutup</label>
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" data-autoclose="true" name="jamtutup">
                                            <span class="input-group-addon">
                                                <i class="far fa-clock"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control" rows="3" name="deskripsi"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Foto</label><br>
                                    <div class="custom-file">
	                                   <input type="file" class="custom-file-input" id="validatedCustomFile" name="foto">
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>  
                                    </div>
                                </div>

                                <div class="text-right" style="margin-top: 3%;">
                                    <button type="submit" class="btn btn-lg" style="background-color:#273c75;">Submit</button>
                                    <a href="{{url('pariwisata')}}"><button type="button" class="btn btn-lg" style="background-color: #dcdde1;">Cancel</button></a>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>
</body>
@endsection