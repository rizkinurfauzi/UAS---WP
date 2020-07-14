<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>

	<h2>edit</h2>
	<br/>
	<a href="yas.php">KEMBALI</a>
	<br/>	
	<br/>
	<h3>EDIT DATA</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($kon,"select * from listing where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>size</td>
					<td><input type="text" name="link" value="<?php echo $d['link']; ?>"></td>
				</tr>
				<tr>
					<td>link</td>
					<td><input type="text" name="size" value="<?php echo $d['size']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>