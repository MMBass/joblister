<?php include_once 'config/init.php'; ?>

<?php 

session_start();

session_unset();

session_destroy();

redirect('index.php');

?>