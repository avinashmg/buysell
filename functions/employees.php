<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
public function add_employee($name, $designation, $dob, $address, $official_no, $personal_no, $email)
{
  $sql = "INSERT INTO employee
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
      echo "New employee record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

}
 ?>
