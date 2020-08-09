<?php
session_start();
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $favcolor = $_POST['favcolor'];
    $gender = $_POST['gender'];
    $Dept = $_POST['Dept'];
    $password = $_POST['password'];
}else{
    $_SESSION['msg'] = '<div class = \'alert alert-warning container\'>please go through this page first</div>';
    header('location: signup.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Output</title>
</head>
<body style='background-color:<?php echo $favcolor;?>; padding: 5%; height: 100vh;'>
        <div style="color: #fff;">
            <?php
                echo "<h2> Hello there,</h2>". " " .$fname. " " . $lname. " " ."<h4> nice of you wanting to join us but this is a custom form that gives out back it's input,validates and sets your favorite color to background color </h4>". "<br>";
            ?>
        </div>
        <div style="color: #fff;">
            <?php 
                echo "<h4> However this are this are all of the things we got from you: </h4>"."<br>";
            ?>
        </div>
        <div style="color: #fff; ">
              <?php
                  echo "<p>Your firstname: </p>". " " .$fname."<br>";
                  echo "<p> Your Lastname:</p>". " " .$lname."<br>";
                  echo "<p> Your Email:</p>". " " .$email."<br>";
                  echo "<p> Your date of birth:</p>". " " . $date."<br>";
                  echo "<p> Your favourite color:</p>". " " .$favcolor."<br>";
                  echo "<p> Your Gender:</p>". " " .$gender."<br>";
                  echo "<p> Your Department:</p>". " " .$Dept."<br>";
                  echo "<p> Your password is safely secured with us ***************</p><br>";
              ?>
        </div>
</body>
</html>