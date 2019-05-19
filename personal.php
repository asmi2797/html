<?php
ini_set('display_errors',1);
$host="localhost";
$username="root";
$password="root123";
$db_name="project";
$tbl_name="pdetails";

$conn=mysqli_connect("$host","$username","$password","$db_name")or die("cannot connect");
if($conn)
{
	echo"connection successful";
}
else
{
	echo"connection unsuccessful";
}
mysqli_select_db($conn,$db_name)or die("cannot select db");


$fname=$_POST[ 'fname' ];
$mname=$_POST[ 'mname' ];
$lname=$_POST[ 'lname' ];
$dob=$_POST[ 'bdate' ];
$email=$_POST[ 'email' ];
$address=$_POST[ 'address' ];
$phone=$_POST[ 'phone' ];
$bloodgroup=$_POST[ 'bloodgroup' ];
$sex=$_POST[ 'sex' ];

$sql="insert into $tbl_name(fname, mname,lname,bdate,phone,email,address,bloodgroup,sex) values ('$fname', '$mname', '$lname','$dob', '$phone', '$email','$address','$bloodgroup', '$sex')";

$result=mysqli_query($conn,$sql);
if ( false===$result ) {
  printf("error: %s\n", mysqli_error($conn));
}
else {
  echo 'done.';
}
mysqli_close($conn);

?>


