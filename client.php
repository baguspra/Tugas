<?php

$jsonfile = file_get_contents("https://abdulazizkurniawan.000webhostapp.com/tugas4/server.php/data");
$data = json_decode($jsonfile, true);

$data = $data["data"];
	
?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>CRUD  JSON DATA</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">
 
</head>
<body>
  <br>
<div class="container">
 <div class="btn-toolbar">
  <a class="btn btn-primary" href="Tambahdata.php"><i class="icon-plus"></i> Insert Data</a>
  <div class="btn-group"> </div>
 </div>
</div>
<br>
<br>
<div class="container">
 <div class ="row">
  <div class="col-md-9">
   <table class="table table-striped table-bordered table-hover">
    <tr>
     <th>id_BAAK</th>
     <th>Nama</th>
     <th>Email</th>
     <th>Telpon</th>
     <th>Alamat</th>
     
    </tr>  

    <?php 
    foreach ($data as $row) :   ?>
    <tr>
     
     <td><?=$row["id_baak"]; ?></td>
     <td><?=$row["nama_baak"]; ?></td>
     <td><?=$row["email"]; ?></td>
     <td><?=$row["telp"]; ?></td>
     <td><?=$row["alamat"]; ?></td>
    
    

     
     <td>
      <form method="post" action="update.php">
        <input type="hidden" name="id_baak" value="<?=$row['id_baak']?>">      
        <button class="btn btn-xs btn-primary" type="submit">Edit</button>
      </form>
      <form method="post" action="delete.php">
        <input type="hidden" name="id_baak" value="<?=$row['id_baak']?>">        
        <button class="btn btn-xs btn-danger" type="submit">Delete</button>
      </form>
     </td>
    </tr>
    <?php endforeach; ?>
   </table>
  </div> 
 </div>
</div>
</body>
</html>

