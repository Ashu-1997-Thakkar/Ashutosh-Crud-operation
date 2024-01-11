<?php
$conn=mysqli_connect("localhost", "root", "", "user_info");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}
echo 'Connected successfully';
?>




