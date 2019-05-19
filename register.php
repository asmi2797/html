<?php
ini_set('display_errors',1);
$host="localhost";
$username="root";
$password="root123";
$db_name="project";
$tbl_name="reg";

$conn=mysqli_connect("$host","$username","$password","$db_name")or die("cannot connect");
if($conn)
{
	echo"connection successful";
}
else
{
	echo"connection unsuccessful";
}

mysqli_select_db($conn,"$db_name")or die("cannot select db");

$nm=$_POST[ 'Name' ];
$phn=$_POST[ 'Telephone' ];
$email=$_POST[ 'Email' ];
$myusername=$_POST[ 'user' ];
$mypassword=$_POST[ 'Password' ];


$myusername=stripslashes($myusername);
$mypassword=stripslashes($mypassword);
$nm=stripslashes($nm);
$phn=stripslashes($phn);
$email=stripslashes($email);

$myusername=mysqli_real_escape_string($conn,$myusername);
$mypassword=mysqli_real_escape_string($conn,$mypassword);
$nm=mysqli_real_escape_string($conn,$nm);
$phn=mysqli_real_escape_string($conn,$phn);
$email=mysqli_real_escape_string($conn,$email);



//$sql="update $tbl_name set password='$mypassword' where name='$myusername'";
$sql="insert into $tbl_name(name,phone,email,username,password)values('$nm','$phn','$email','$myusername','$mypassword')";

$result=mysqli_query($conn,$sql);

if($result)
{
	echo "registered successfully";
}
else
{
	echo "failed";
}

mysqli_close($conn);

?>
