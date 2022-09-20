<?php

include_once 'config.php';
if(isset($_POST['submit']))
{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$tnumber = $_POST['tnumber'];
		$subject = $_POST['subject'];
		$comment = $_POST['comment'];

     $sql = "INSERT INTO $dbtable (firstname,lastname,email,tnumber,subject,message)
     VALUES ('$fname','$lname','$email','$tnumber','$subject','$comment')";
     if (mysqli_query($conn, $sql)) {
        echo "ok";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

header('Location: ok.php');
     exit();
?>
