<?php include 'inc/header.php' ?>
<div class="container mt-5 card p-2">
          <h2 class="page-header">Sign Up</h2>
          
          <!-- <?php
            if(isset($_GET['error'])){
              if($_GET['error'] == 'emptyfields'){
                echo '<p>fill all the fields</p>';
              }
            }else if($_GET['signup'] == 'success'){
              echo '<p>invalid email</p>';
            }
          ?> -->

          <form action="includes/signup.inc.php" method="POST">
            <input class="form-control" type="text" name="un" id="" placeholder="User Name...">
            <input class="form-control" type="email" name="email" id="" placeholder="Email...">
            <input class="form-control" type="password" name="pwd" id="" placeholder="Password...">
            <input class="form-control" type="password" name="pwd_repeat" id="" placeholder="Repeat Password...">

            <button type="submit" name="signup_submit"  class="btn btn-primary mb-3">Sign Up</button>
          </form>
  </div>
  <?php include 'inc/footer.php' ?>