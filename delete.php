<?php
include("connection.php");

$id=$_POST["delete"];

$insertcustomer ="DELETE FROM myorder WHERE id=".$id;

if($conn->query($insertcustomer)===TRUE){
    echo "deleted successfully";

}
else{
    echo "Error:" .$insertcustomer . "<br>" .$conn->error;
}
$conn->close();
?>


