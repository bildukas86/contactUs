<?php


// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
include("validation.php");


 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>.error {color: #FF0000;}</style>
    <meta charset="utf-8">
    <title>Contact us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

<div class="c-form">
  <h1>Get in touch</h1>
  <p>Please fill the form</p>
    <form class="form-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="c-group">
      <label for="name"></label>
      <span class="error"> <?php echo $fnameErr;?></span>
      <input type="text" class="form-control" placeholder="First Name" name="fname" value="<?php echo $fname;?>">
    </div>
    <div class="c-group">
      <label for="lname"></label>
      <span class="error"> <?php echo $lnameErr;?></span>
      <input type="text" class="form-control" placeholder="Last Name" name="lname" value="<?php echo $lname;?>">
    </div>
    <div class="c-group">
      <label for="email"></label>
      <span class="error"> <?php echo $emailErr;?></span>
      <input type="email" class="form-control" placeholder="E-mail" name="email" value="<?php echo $email;?>">
    </div>
    <div class="c-group">
      <label for="tnumber"></label>
      <span class="error"> <?php echo $tnumberErr;?></span>
      <input type="text" class="form-control" placeholder="Telephone number" name="tnumber" value="<?php echo $tnumber;?>">
    </div>
    <div class="c-group">
      <label for="subject"></label>
      <span class="error"> <?php echo $subjectErr;?></span>
      <select name="subject" class="form-select">
        <option selected disabled>Please select:</option>
        <option value="Enquiry"<?php if (isset($subject) && $subject=="Enquiry") echo "selected";?>>Enquiry</option>
          <option value="Call Back"<?php if (isset($subject) && $subject=="Call Back") echo "selected";?>>Call Back</option>
        <option value="Complaint"<?php if (isset($subject) && $subject=="Complaint") echo "selected";?>>Complaint</option>
      </select>
    </div>
    <div class="c-group">
      <label for="comment"></label>
      <span class="error"> <?php echo $commentErr;?></span>
      <textarea class="form-control t-area" name="comment" placeholder="Leave a comment here"><?php echo $comment;?></textarea>
    </div>

      <br>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>

  </form>
</div>

  </body>
</html>
