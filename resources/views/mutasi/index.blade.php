<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Mutasi</h3>

	<a href="/mutasi/tambah"> + Tambah Mutasi Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID Pegawai</th>
			<th>Departemen</th>
			<th>Sub Departemen</th>
			<th>Mulai Bertugas</th>
			<th>Opsi</th>
		</tr>
		@foreach($mutasi as $mut)
		<tr>
			<td>{{ $mut->IDPegawai }}</td>
			<td>{{ $mut->Departemen }}</td>
			<td>{{ $mut->SubDepartemen }}</td>
			<td>{{ $mut->MulaiBertugas }}</td>
			<td>
				<a href="/mutasi/edit/{{ $mut->ID }}">Edit</a>
				|
				<a href="/mutasi/hapus/{{ $mut->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
