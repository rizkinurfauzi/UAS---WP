
<html>

<head>
	<title></title>
</head>
<body>
<h2> Regis Page</h2>
<button onclick="location.href = 'test.php';" id="myButton" class="float-left submit-button" >Click here to get back</button><br/><br/>
<form action="register.php" method="post"> 
Enter name: <input type="text" name="nama" required="required"/><br/>
Enter Username: <input type="text" name="username" required="required"/><br/>
Ener Password: <input type="password" name="password" required="required"/><br/>
<input type="submit" value="Register"/>
</form>
</body>
</html>

<?php
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$name=$_POST["nama"];

$password=md5($_POST["password"]); //untuk password digunakan enskripsi md5


//Query input menginput data kedalam tabel anggota
  $sql="insert into userz (username,password, nama) values
		('$username','$password','$nama')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil simpan data anggota";
	exit;
  }
else {
	echo "Gagal simpan data anggota";
	exit;
}  
?>