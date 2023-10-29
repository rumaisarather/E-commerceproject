<?php
include("connection.php");


$id=$_GET["edit"];

$sql = "UPDATE myorder SET (first_name,last_name,address,DOB,email) VALUE('$FName','$LName','$Address','$DOB','$Email')  WHERE id=".$id;

if ($conn->query($sql) === TRUE) {
    echo "updated successfuly";
}
else{
    echo "Error:" . $conn->error;
}
$conn->close();
?>


