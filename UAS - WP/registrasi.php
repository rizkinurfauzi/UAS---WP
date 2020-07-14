<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2>Regis</h2>
    <form action="simpan.php" method="post">
        <div class="form-group">
            <label>username:</label>
            <input type="text" name="username" class="form-control" placeholder="Masukan Username" />
        </div>
	<div class="form-group">
            <label>password:</label>
            <input type="password" name="password" class="form-control" placeholder="Masukan Password" />
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
<a href="test.php" class="btn btn-primary">Go back</a>
    </form>
</div>
</body>
</html>