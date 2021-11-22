<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Mutasi</h3>

	<a href="/mutasi"> Kembali</a>

	<br/>
	<br/>

	@foreach($mutasi as $mut)
	<form action="/mutasi/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="ID" value="{{ $mut->ID }}"> <br/>
		ID Pegawai <input type="text" required="required" name="IDPegawai" value="{{ $mut->IDPegawai }}"> <br/>
		Departemen <input type="text" required="required" name="Departemen" value="{{ $mut->Departemen }}"> <br/>
		Sub Departemen <input type="text" required="required" name="SubDepartemen" value="{{ $mut->SubDepartemen }}"> <br/>
		Mulai Bertugas <input type="date" required="required" name="MulaiBertugas" value="{{ $mut->MulaiBertugas}}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</body>
</html>
