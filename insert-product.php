<?php
include("../backend/connection.php");
?>

<?php
session_start();
if($_SESSION['user'] == ""){
   header("location:https://localhost/rumi/views/login.php");
}
$error ="";
if(isset($_POST['submit'])){
  $product_name=$_POST['product_name'];
  $qty=$_POST['qty'];
  $product_category=$_POST['product_category'];

  $uploadfile=$_FILES['uploadfile']['name'];
  $tmpname =$_FILES['uploadfile']['tmp_name'];
  $folder ="../images/".$uploadfile;
  move_uploaded_file($tmpname,$folder);
  $product_price=$_POST['product_price'];
  $tax=$_POST['tax'];
  
 

  if($product_name!="" && $qty!="" &&  $product_category!="" && $folder!="" && $product_price!="" && $tax!="")
  {
    $q ="INSERT INTO products VALUES ('','$product_name','$qty','$product_category','$folder','$product_price','$tax')";
$conn->query($q);
$error .= "<div class='alert alert-success'>Data Insert</div>";
  }
  else{
$error .="<div class='alert alert-danger'>All fields required..</div>";
  }

  }
  if (isset($_GET['action']) && $_GET['action']=='logout'){
    session_unset();
     header("location:https://localhost/rumi/views/login.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CLOTHING BRAND</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/89f77e38cb.js" crossorigin="anonymous"></script>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
        <link rel="stylesheet" href="ecommerce.css"/>
</head>
<body>

   <nav class="navbar navbar-expand-lg navbar-dark bg-danger py-2" style="background-color: #003153">
   <div class="container p-0 m-0 ">
    <a class="navbar-brand" href="#">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="https://localhost/rumi/views/index.php" target="blank">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="https://localhost/rumi/views/dashboard.php" target="blank">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://localhost/rumi/views/login.php ?action=logout" target="blank">Logout</a>
        </li>  
    </div>
  </div>
</nav>


<section class="insert-form my-3 py-3">
<div class="container-fluid mt-3">
 <h1 class="fs-3 form-weight-bold"><?php echo $error;?>Product Details</h1> 
 <h3 style="margin-left:15px; color:red"></h3>
<hr class="mx-auto">
   
     <form method="POST" enctype="multipart/form-data">
     <div class="row my-4 py-4">  
    <div class="form-group col-md-6">
     <label>Product Name</label>
    <input type ="text" class="form-control"  name="product_name">
</div>
<div class="form-group col-md-6">
    <label>Product Price</label>
    <input type ="text" class="form-control" name="product_price">
</div>
<div class="form-group col-md-6">
    <label>Product Quantity</label>
    <input type ="text" class="form-control" name="qty">
</div>
<div class="form-group col-md-6">
    <label>Product category</label>
    <input type ="text" class="form-control" name="product_category">
</div>
<div class="form-group col-md-6">
    <label>Product Tax</label>
    <input type ="text" class="form-control" name="tax">
</div>
<br>
<div class="form-group col-md-6">
    <label for="customerfile">Product Image</label>
    <div class="custom-file mb-3">
        <input type="file" name="uploadfile" class="custom-file-input" id="customerFile">
        <label class="custom-file-label" for="customFile"></label>
</div>
<div class="form-group col-lg">
    <button type="submit"  id="item-btn" class="btn" name="submit">Add item</button>
</div>
</div>
</form>
</div>


<script>
    $(".custom-file-input").on("change",function(){
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".customer-file-label").addClass("selected").html(fileName);  
    });
    </script>
</section>


<?php
        include("../fragment/footer.php");
        ?>
