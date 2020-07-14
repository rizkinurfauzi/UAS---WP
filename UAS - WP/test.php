
<html>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shirnk-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="cs.css">


<head>
		<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shirnk-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<title></title>
</head>
<body>
<div class="header">
  <h1>Steam Backup</h1>
  <p>Legally Small size</p>
</div>

<div class="navbar">
  <a href="test.php">Home</a>

  <a href="request.php">Request</a>
<a href="registrasi.php">Register</a>
<a href="login.php">Login</a>
<a href="yas.php">list</a>
</div>
<div class="widewrapper main">
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-main">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <article class=" blog-teaser">
                                <header>
                                    <img src="" alt="">
                                    <h3><a href="single.html">Welcome!</a></h3>
                                    <span class="meta">Youre not login yet</span>
                                    <hr>
                                </header>
                            
                            </article>
                      
 


<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = mysqli_real_escape_string($_POST['username']);
	$password = mysqli_real_escape_string($POST['password']);
}
?>
