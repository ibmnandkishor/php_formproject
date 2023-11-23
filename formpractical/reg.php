<?php
$d=$_POST['sl'];
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['mob'];

$con=mysqli_connect('localhost','root','','adit');
if($con==true){
$sql="insert into student values('$d','$a','$b','$c')";
if(mysqli_query($con,$sql))
{echo "your form is submited";}
else{echo "error";}
}
?>