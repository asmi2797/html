<?php
ini_set('display_errors', 1);
$host="localhost";

$username="root";

$password="root123";

$db_name="project";

$tbl_name="reg";

$conn = mysqli_connect($host , $username , $password,$db_name)or die( "cannot connect" ) ;

mysqli_select_db($conn,$db_name)or die("cannot select DB");

$myusername=$_POST['username'];

$mypassword=$_POST['password'];
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

$sql = "select * from $tbl_name where password='$mypassword' and username='$myusername' ";

$result=mysqli_query($conn,$sql);
$array=mysqli_fetch_assoc($result);
$count=mysqli_num_rows($result);

if( $count == 1 )
{
header("Location:http://localhost/personal.html");
}
else
{
	echo ":( :( AUTHENTICATION FAILURE :( :( " ;
}
mysqli_free_result($result);
mysqli_close($conn);
?>
