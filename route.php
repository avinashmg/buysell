<?php
if($_GET['r']=="add_employee"){
  include 'functions/employees.php';
  add_employee($_GET['name'],
    $_GET['designation'],
    $_GET['dob'],$_GET['address'],
    $_GET['offno'],
    $_GET['persno'],
    $_GET['email']
  );
}
 ?>
