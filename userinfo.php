<?php 


$con = mysqli_connect('localhost', 'root');

if($con) {
    echo "connection successfull";
} else {

    echo "no connection";
}

mysqli_select_db($con,'shops_vendor_data' );

$user = $_POST['user'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$message = $_POST['message'];

$query = "INSERT INTO vendor_data (user, mobile, address, message)
values ('$user', '$mobile', '$address', '$message')";

mysqli_query($con, $query);

header("location:index.php");

?>