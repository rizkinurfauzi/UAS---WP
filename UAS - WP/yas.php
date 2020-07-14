<?php
include "bootstest.php"
?>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <body>
      <form action="search.php" method="GET">
        <input type="text" name="query" />
        <input type="submit" value="Search" />
    </form>
    </body>
</head>
<title>List</title>
<div class="card" align="center">
  <div class="card-body">
    <table class="table">
  <thead>
    <tr>

      <th scope="col">Nomor</th>
      <th scope="col">Nama</th>
    <
    <th scope="col">Size</th>
    <th scope="col">Link</th>
    
    </tr>
  <?php 
    include 'koneksi.php';
    $listing = mysqli_query($kon,"SELECT * FROM listing");
    $id = 1;    
    while($d = mysqli_fetch_array($listing)){
      ?>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $id++; ?></th>
      
    <td><?php echo $d['nama']; ?></td>
      <td><?php echo $d['size']; ?></td>
      <td><?php echo $d['link']; ?></td>
      <td>
        <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-primary">EDIT</a>
          <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-primary">HAPUS</a>
        
      </td>
    </tr>
  <?php 
    }
    ?>
  </tbody>
</table>
  </div>
</div>
<a href="test.php" class="btn btn-primary">Go back</a>
<a href="tambah.php" class="btn btn-primary">tambah</a>

<body>
  <!-- Button trigger modal -->


<!-- Modal -->

  
</div>
</body>

<script type="<script type="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>"></script>

<?php

?>