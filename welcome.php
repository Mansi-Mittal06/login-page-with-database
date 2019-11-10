<?php 
$NAME = filter_input(INPUT_POST, 'NAME');
$EMAIL = filter_input(INPUT_POST, 'EMAIL');
$password = filter_input(INPUT_POST, 'password');
if(!empty($NAME) || !empty($password)){


//create connection
$conn = mysqli_connect ('127.0.0.1','root','','form');

if(mysqli_connect_error()){
	die('connection failed ('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{ 
$sql="INSERT INTO person (NAME,EMAIL,password)
values ('$NAME','$EMAIL','$password')";
if($conn->query($sql)){
	echo "New record is inserted successfuly";
}
else{
	echo "Error: ". $sql ."<br>". $conn->error;
}
mysqli_close($conn);
}
}
else{
	echo"password should not be empty";
	die();
}
header("refresh:3; url=form.html");
  
?>
