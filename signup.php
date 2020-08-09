<?php 
session_start();

if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BerryCorp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="action.php" method="POST">
           <div class="logoheader"><img src="images/circles.svg" alt="Company Logo"> <h3>We are glad you want to join us, please provide the following details.</h3>
            </div>
            <Label for="firstname">First Name:</label>
                <input type="text" id="firstname" class="fname" name="fname" placeholder="Enter your first name" required>
            <label for ="Secondname">Second Name:</label>
                <input type="text" id="Secondname" class="lname" name="lname" placeholder="Enter your second name" required>
            <label for="email">Email:</label>
                <input type="email" id="email" name="email" id="email" placeholder="Enter your email" required>
            <label for="dateofbirth">Date of Birth:</label>
                <input type="date" id="dateofbirth" name="date"
                value="2020-08-09" max="2020-08-09"
                required max = '<?php echo date('Y-m-d'); ?>'>
            <label for="favcolor">Favourite color</label>
                <input type="color" id="favcolor" name="favcolor" value="#ae5fce" required>
            <div class="labels"><label  for="male">Gender:</label><LABEL  class="male" FOR="male">Male</LABEL>
                <INPUT TYPE="Radio" Name="gender" ID="male" Value="Male" required>
            <LABEL class="fmale" FOR="female">Female</LABEL>
                <INPUT TYPE="Radio" Name="gender" ID="female" Value="Female">
            <LABEL class="amale" FOR="other">Other</LABEL>
                    <INPUT TYPE="Radio" Name="gender" ID="other" Value="Female">
                </div>
            <label for="mylist">Department:</label>
                    <select id = "myList" name="Dept" required>
                    <option  value = "">--Choose your field--</option>
                    <option value = "IT">IT</option>
                    <option value = "HR">HR</option>
                    <option value = "Applicant">Applicant</option>
                    <option value = "Others">Others</option>
                    </select>
            <label for="pass">Password (15 characters minimum):</label>
                <input type="password" id="pass" name="password"
                       minlength="15" placeholder="Enter your password" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required>
            <input onclick="checkGender()" type="submit" id="submit" name='submit' value="Sign in">
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>