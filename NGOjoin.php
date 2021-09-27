<?php

$server_name="localhost";
$username="id17626885_root";
$password="DB@hungerdata1";
$database_name="id17626885_hungercontactform";


$conn = mysqli_connect($server_name, $username, $password, $database_name);
// now check the connection
if (!$conn) {
  die("Connection Failed:" . mysqli_connect_error());
}

if (isset($_POST['join'])) {

  $Email = $_POST['Email'];
  $Date=date('Y-m-d');

  $sql_query = "INSERT INTO ngojoin (Email, Date)
	 VALUES ('$Email','$Date')";

}

if (mysqli_query($conn, $sql_query)) {
  header('location: index.html');
}



mysqli_close($conn);



?>
