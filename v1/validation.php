<?php

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";



$fnameErr = $lnameErr = $emailErr = $tnumberErr = $subjectErr = $commentErr = "";
$fname = $lname = $email = $tnumber = $subject = $comment = "";



//first name
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "Name is required";

  } else {
    $fname = test_input($_POST["fname"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
      $fnameErr = "Only letters allowed";
    }
  }
//last name
  if (empty($_POST["lname"])) {
    $lnameErr = "Last name is required";
  } else {
    $lname = test_input($_POST["lname"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
      $lnameErr = "Only letters allowed";
    }
  }
//email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
//tel number
  if (empty($_POST["tnumber"])) {
    $tnumberErr = "Telephone number is required";
  } else {
    $tnumber = test_input($_POST["tnumber"]);
//todo
  }
// subject
  if (empty($_POST["subject"])) {
    $subjectErr = "Subject is required";
  } else {
    $subject = $_POST["subject"];
  }
  // comment
    if (empty($_POST["comment"])) {
      $commentErr = "Comment is required";
    } else {
      $comment = test_input($_POST["comment"]);
    }
  }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>
