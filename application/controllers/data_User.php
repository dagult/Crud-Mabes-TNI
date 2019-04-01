<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Users</title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<h1>Latihan CRUD</h1>

	<a href="data/add" class="btn btn-primary">Tambah Data Anggota</a>
		<a href="User/add" class="btn btn-primary">Setting User</a>

	<table class="table" rules= "all" border="2">
		<thead>
			<tr>
				<th>#</th>
				<th>username</th>
				<th>password</th>
				
			</tr>
		</thead>
		<tbody>

			<tr>
			<td>#</th>
				<td>username</td>
				<td>password</td>
			</tr>

		</tbody>
	</table>
</div>
	
</body>
</html>
