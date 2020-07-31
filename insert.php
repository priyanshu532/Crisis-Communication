<?php  
$username="root";  
$password="";  
$hostname = "localhost"; 

$dbhandle = mysqli_connect($hostname,$username,$password)  
or die("Unable to connect to MySQL ");  
echo "connected to MYSQL<br/>"; 

 
$selected = mysqli_select_db($dbhandle, "covid")  
or die("Could not select exercise DB"); 

echo "connected to DB"; 
echo "$selected"; 
$user= $_POST['email'];
$pass=$_POST['pass'];

$sql = "select * from login where email='".$user."' and password='".$pass."' ";

$result=mysqli_query($dbhandle,$sql);

$num =mysqli_num_rows($result);

if($num==1){
	header('Location:mainew.html');
}
else{
	header('Location:signup.html');
}

?>





