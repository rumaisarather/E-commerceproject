<?php
   include("../fragment/header.php");
   ?>


<section class="my-3 py-3">
<div class="container text-center mt-3">
 <h1 class="form-weight-bold" >Login</h1> 
<hr class="mx-auto">
</div>
    <div class="mx-auto container">
     <form id="login-form">
    <div class="form-group">
     <label>Email</label>
    <input type ="text" class="form-control" id="login-email" name="email" placeholder="Enter your email">
</div>
<div class="form-group">
    <label>Password</label>
    <input type ="password" class="form-control" id="login-password" name="password" placeholder ="Enter your password">
</div>
<div class="form-group">
    <input type="submit" class="btn" id="login-btn" value="Login"/>
</div>

<div class="form-group">
    <a href="https://localhost/rumi/views/register.php" class="btn text-secondary">Dont have account? Register</a>
</div>
</form>
</div>
</section>

<?php
   include("../fragment/footer.php");
   ?>