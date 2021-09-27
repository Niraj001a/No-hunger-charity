<?php
$server_name="localhost";
$username="id17626885_root";
$password="DB@hungerdata1";
$database_name="id17626885_hungercontactform";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['submit']))
{	
	 $Name = $_POST['Name'];
	 $City = $_POST['City'];
	 
	 $Email= $_POST['Email'];
	
	 $Mobile = $_POST['mobile'];

	 $sql_query = "INSERT INTO donation (Name,City,Email,Mobile)
	 VALUES ('$Name','$City','$Email','$Mobile')";
    if (mysqli_query($conn, $sql_query)) 
    {
    header('location: index.html');
    } 
    else
      {
     echo "Error: " . $sql . "" . mysqli_error($conn);
    } 

	
	 mysqli_close($conn);
}



?>