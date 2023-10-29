<?php include("../fragment/header.php");
?>

<?php 
include("../backend/connection.php");
?>

<?php
if(isset($_POST['add_to_cart'])){
  $product_id=$_POST['product_id'];
  $product_name = $_POST['product_name'];
  $qty = $_POST['qty'];
  $product_category = $_POST['product_category'];
  $product_image = $_POST['product_image'];
  $product_price= $_POST['product_price'];
$product_price =100;
$total = $product_price * $qty;

  $sql= "INSERT INTO cart (product_id, product_name, qty, product_category, product_image, product_price) VALUES ($product_id,$product_name, $qty, $product_category, $product_image, $product_price)";
}

?>

<div class="container mt-3">
   <h1>Your Cart</h1>
</div>
<table class="mt-4 pt-3"> 
<thead>
  <tr>
    <th>Product</th>
    <th>Quainty</th>
    <th>Price</th>
    <th>GST rate</th>
    <th>Total</th>
</tr>
</thead>
<tbody>
  <tr>
    <td><input type="text" class="form-control from-control-sm text-center"
    value="<?php echo $product_name; ?>" ></td>
    <td><input type="number" class="form-control from-control-sm text-center"
     min="1" id="qty" value="<?php echo $qty; ?>"></td>
     <td><input type="text" class="form-control from-control-sm text-center"
    value="<?php echo $product_price; ?>" id="price"></td>
    <td><input type="text" name="total" class="form-control from-control-sm text-center"
    id="total"></td>
</tr>
</tbody>
</table>

<div class="row">
  <div class="col-sm-12 col-md-4 col-lg-4">
    <div class="card">
      <img class="card-img" src="<?php echo $product_image; ?>" alt="">
      <div class="card-body">
        <h6 class="card-title"><?php echo $product_name; ?></h6>
        <h6 class="card-title">qty:<?php echo $qty; ?></h6>
        <h4 class="card-title">$>?php echo $product_price; ?></h4>
        <a class="btn btn-danger mt-3">checkout</a>
</div>
</div>
</div>
</div>
</div>
</div>
    <!-- <tr>
  <td> -->
  <!-- <div class="product-info">  
  <img src="../images/men2.jpg" alt="" style="height:150px">
     <div>
      <p>H & M</p>
         <small><span>$</span>1600.00</small>
         <br>
    <a class="remove-btn" href="#">Remove</a>
</div>
</div>
</td>
<td><input type ="number" value="1"/>
<a class="edit-btn">Edit</a>
</td>
<td>
  <span>$</span>
  <span class="product-price">1600</span>
</td>
    </tr>
    <tr>
  <td>
  <div class="product-info">  
  <img src="../images/bag3.jpg" alt="" style="height:150px">
     <div>
      <p>GUESS</p>
         <small><span>$</span>2000.00</small>
         <br>
    <a class="remove-btn" href="#">Remove</a>
</div>
</div>
</td>
<td><input type ="number" value="1"/>
<a class="edit-btn">Edit</a>
</td>
<td>
  <span>$</span>
  <span class="product-price">2000</span>
</td>
    </tr> -->
</section>

<section id="cart-add" class="section-p1">
    <div id="coupon">
        <h3>Apply Coupon</h3>
<div>
<input type="text" placeholder="Enter Your Coupon">
<button class="btn btn-success p-2 "type ="submit">Apply</button>
</div>
</div>
<div id="subtotal">
    <h3>Cart Totals</h3>
    <table>
        <tr>
            <td>Cart Subtotal</td>
            <td>$ 1200</td>
</tr>
<tr>
<td>Shipping</td>
<td>Free</td>
</tr>
<tr>
<td><strong>Total</strong></td>
<td><strong>$ 1200</strong></td>
</tr>
</table>
<a href="https://localhost/rumi/views/checkout.php "class="btn btn-success p-2 "type ="submit">Proceed to checkout</a>
</div>
</section>



</div>  
</div> 
</div>




<?php
        include("../fragment/footer.php");
        ?>

    