<?php
// Create connection
require "./config/mysql.php";
function add_employee($name, $designation, $dob, $address, $official_no, $personal_no, $email)
{
  $conn = new mysqli("localhost", "buysell2_buysell", "(2(?fujH+%@t", "buysell2_buysell");
  // Create connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "INSERT INTO Employee
    (
    name,
    designation,
    dob,
    address,
    official_no,
    personal_no,
    email
    ) VALUES (
      '$name',
      '$designation',
      '$dob',
      '$address',
      '$official_no',
      '$personal_no',
      '$email'
    )";
  if ($conn->query($sql) === TRUE) {
      echo "1";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

}
function edit_employee($gmail, $name, $designation, $dob, $address, $official_no, $personal_no, $email)
{
  $sql = "UPDATE employee
    SET (
    name,
    designation,
    dob,
    address,
    official_no,
    personal_no,
    email
    ) VALUES (
      '$name',
      '$designation',
      '$dob',
      '$address',
      '$official_no',
      '$personal_no',
      '$email'
    ) WHERE email='$gmail'";
  if ($conn->query($sql) === TRUE) {
      echo "New employee record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

}
 ?>
