<?php

require("db_connection.php");



if(isset($_POST['submit']))
 {
  $municipality = $_POST['municipality'];
  $contact_person = $_POST['contact_person'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $designation = $_POST['designation'];
  $department = $_POST['department'];
  $project_data = $_POST['project_data'];
  

  $sql = "INSERT into projects (municipality, contact_person, email, phone, designation, department, project_data) VALUES ('$municipality', '$contact_person', '$email','$phone','$designation','$department', '$project_data')";

  if (mysqli_query($conn, $sql));
  
  echo "feedback sucessufully submitted";
  }
  else
  {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  header("Location: projects.php");  
exit;
  mysqli_close($conn);

  ?>
