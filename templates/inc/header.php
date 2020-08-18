<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobLister</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <h5 class="navbar-brand">Job Lister</h5>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
            data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
          <?php
            if(isset($_SESSION['id'])){
              if($_SESSION['id'] != 'guest'){
                 echo '<li class="nav-item">
                        <a class="nav-link" href="index.php">| Home </a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" href="create.php">| Create Listing</a>
                      </li>';
              }
            }
          ?>
            <li class="border border-light p-1 rounded" style="background-color:#e3f2fd">
              <?php
                  if(isset($_SESSION['id'])){
                    if($_SESSION['id'] != 'guest'){
                      echo 'User: '.$_SESSION['id'];
                    }
                     echo '<form class="form-inline" action="logout.php">
                      <button type="submit" name="logout-submit" class="btn btn-outline-danger">Logout</button>
                      </form>';
                  }else{
                      echo '<form class="form-inline d-inline" action="login.php" method="POST">
                      <input type="text" name="mailuid" class="form-control" placeholder="Username/Email...">
                      <input type="password" name="pass" class="form-control" placeholder="Password...">
                      <button type="submit" name="login-submit" class="btn btn-outline-success">Login</button>
                      </form>
              
                      <a href="signup.php" class="btn btn-outline-secondary d-inline">signUp</a>
                      <a href="guest.php" class="btn btn-outline-primary d-inline">Guest Login</a>';
                  }
                 ?> 
              </li>
          </ul>
        </div>

      </nav>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>

<?php displayMessage(); ?>