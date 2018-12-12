<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
<form action="{{url('coba/save')}}" method="post">
{{ csrf_field() }}
<input type="text" name="nama">
<select type="text" name="deskripsi">
	<option disabled selected>++Pilih++</option>
    <option value="Museum">Museum</option>
    <option value="Taman">Taman</option>
    <option value="Wahana Hiburan">Wahana Hiburan</option>
</select>
<textarea name="alamat"></textarea>

<button type="submit">Simpan</button>
</form>
</body>
</html>