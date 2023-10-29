<?php
include("connection.php");

$data="";
$qry="SELECT * FROM myorder";
$detail=$conn->query($qry);
if($detail->num_rows>0){
    $rows=mysqli_fetch_all($detail,MYSQLI_ASSOC);
}
else{
echo "0 result";
}

$conn->close();
return $rows;
?>