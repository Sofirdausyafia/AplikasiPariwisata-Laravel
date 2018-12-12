<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
<form action="{{url('coba/update')}}" method="post">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{$coba->id}}">
<input type="text" name="nama" value="{{$coba->nama}}">
<select type="text" name="deskripsi" value="{{$coba->deskripsi}}">
	<option disabled>++Pilih++</option>
    <option value="Museum">Museum</option>
    <option value="Taman">Taman</option>
    <option value="Wahana Hiburan">Wahana Hiburan</option>
</select>
<textarea name="alamat">{{$coba->alamat}}</textarea>

<button type="submit">Simpan</button>
</form>
</body>
</html>