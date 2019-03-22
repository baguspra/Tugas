<?php
// Check for the path elements
// Turn off error reporting
error_reporting(0);
// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Report all errors
error_reporting(E_ALL);
// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);
// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
$con=mysqli_connect("localhost","id8008130_magang","magangceria","id8008130_pkl");
// Check connection
if (mysqli_connect_errno())
	{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else
	{
		
	$arr = array();

	$sql = "SELECT status,username,password FROM User";
	$result = $con->query($sql);

	if ($result->num_rows > 0) 
		{
		// output data of each row
		while($row = $result->fetch_assoc()) {
        echo "Status: " . $row["status"]. " - Usernama: " . $row["username"]. " - Pass: " . $row["password"]. "<br>";
			$temp = array(
						"status" => $row["status"],
						"username" =>$row["username"],
						"password" => $row["password"]);
   
					array_push($arr, $temp);
		
		}
		} else {
		echo "0 results";
		}
		$data = json_encode($arr);	
		
	
	echo "<br>{\"MENAMPILKAN DATA USER dengan format JSON\":" . $data . "}<br><br><br>";
	}
	
	if (mysqli_connect_errno())
	{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else
	{
		
	$arr = array();

	$sql1 = "SELECT NIM,Nama,Telephone,Judul,Email,Jenis_kelamin,Progdi,alamat,id_kelompok FROM Mahasiswa";
	$result = $con->query($sql1);

	if ($result->num_rows > 0) 
		{
		// output data of each row
		while($row = $result->fetch_assoc()) {
        echo "NIM: " . $row["NIM"]. " - Nama: " . $row["Nama"]. " - Telephone: " . $row["Telephone"]. " - Judul: " . $row["Judul"]. " - Email: " . $row["Email"]. " - Jenis kelamin: " . $row["Jenis_kelamin"]. " - Progdi: " . $row["Progdi"]. " - alamat: " . $row["alamat"]. " - id kelompok: " . $row["id_kelompok"]. "<br>";
			$temp = array(
						"NIM" => $row["NIM"],
						"Nama" =>$row["Nama"],
						"Telephone" =>$row["Telephone"],
						"Judul" =>$row["Judul"],
						"Email" =>$row["Email"],
						"Jenis_kelamin" =>$row["Jenis_kelamin"],
						"Progdi" =>$row["Progdi"],
						"alamat" =>$row["alamat"],
						"id_kelompok" => $row["id_kelompok"]);
   
					array_push($arr, $temp);
		
		}
		} else {
		echo "0 results";
		}	
		
	$data = json_encode($arr);
 
	echo "<br>{\"MENAMPILKAN DATA MAHASISWA dengan format JSON\":" . $data . "}<br><br><br>";
	}
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else
	{
		
	$arr = array();

	$sql = "SELECT NIP,Nama_dosen,Alamat_dosen,Telp_dosen,Email_dosen FROM Dosen";
	$result = $con->query($sql);

	if ($result->num_rows > 0) 
		{
		// output data of each row
		while($row = $result->fetch_assoc()) {
        echo "NIP: " . $row["NIP"]. " - Nama dosen: " . $row["Nama_dosen"]. " - Alamat dosen: " . $row["Alamat_dosen"]. " - Telp dosen: " . $row["Telp_dosen"]. " - Email dosen: " . $row["Email_dosen"]."<br>";
	    
			$temp = array(
						"Nip" =>$row["Nip"],
						"Nama_dosen" =>$row["Nama_dosen"],
						"Alamat_dosen" =>$row["Alamat_dosen"],
						"Telp_dosen" =>$row["Telp_dosen"],
						"Email_dosen" =>$row["Email_dosen"]);
   
					array_push($arr, $temp);
					
			
		
		}
		} else {
		echo "0 results";
		}
	
	$data = json_encode($arr);
 
	echo "<br>{\"MENAMPILKAN DATA DOSEN dengan format JSON\":" . $data . "}<br><br>";
	}
	
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else
	{
		
	$arr = array();

	$sql = "SELECT id_baak,nama_baak,email,telp,alamat FROM BAAK";
	$result = $con->query($sql);

	if ($result->num_rows > 0) 
		{
		// output data of each row
		while($row = $result->fetch_assoc()) {
        echo "id_baak: " . $row["id_baak"]. " - nama_baak: " . $row["nama_baak"]. " - email: " . $row["email"]. " - Telp: " . $row["telp"]. " - Alamat: " . $row["alamat"]."<br>";
	    
			$temp = array(
						"id_baak" =>$row["id_baak"],
						"nama_baak" =>$row["nama_baak"],
						"email" =>$row["email"],
						"telp" =>$row["telp"],
						"alamat" =>$row["alamat"]);
   
					array_push($arr, $temp);
					
			
		
		}
		} else {
		echo "0 results";
		}
	
	$data = json_encode($arr);
 
	echo "<br>{\"MENAMPILKAN DATA BAAK dengan format JSON\":" . $data . "}<br><br>";
	}
	
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else
	{
		
	$arr = array();

	$sql = "SELECT NIP,nama,telp,email,alamat FROM Progdi";
	$result = $con->query($sql);

	if ($result->num_rows > 0) 
		{
		// output data of each row
		while($row = $result->fetch_assoc()) {
        echo "NIP: " . $row["NIP"]. " - nama: " . $row["nama"]. " - telp: " . $row["telp"]. " - email: " . $row["email"]. " - alamat: " . $row["alamat"]."<br>";
	    
			$temp = array(
						"NIP" =>$row["NIP"],
						"nama" =>$row["nama"],
						"telp" =>$row["telp"],
						"email" =>$row["email"],
						"alamat" =>$row["alamat"]);
   
					array_push($arr, $temp);
					
			
		
		}
		} else {
		echo "0 results";
		}
	
	$con->close();
	$data = json_encode($arr);
 
	echo "<br>{\"MENAMPILKAN DATA PROGDI dengan format JSON\":" . $data . "}<br><br>";
	}


?>