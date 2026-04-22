<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <a href="A.php">Home | </a>
    <a href="https://www.example.com">Login |</a>
    <a href="B.php">Registration</a>
    <br><br>

    <fieldset>
        <legend><strong>Registration</strong></legend>
        <label>Name : </label><input type="text" name="name" placeholder="Name"><br><hr>
        <label>Email : </label><input type="email" name="email" placeholder="Email"><br><hr>
        <label>Password : </label><input type="password" name="password" placeholder="Password"><br><hr>
        <label>Confirm Password : </label><input type="password" name="confirm_password" placeholder="Confirm Password"><br><hr>
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other
        </fieldset>

        <hr>

        <fieldset>
            <legend>Date of Birth</legend>
            <input type="text" name="dd"> /
            <input type="text" name="mm"> /
            <input type="text" name="yyyy"> <i>(dd/mm/yyyy)</i>
        </fieldset>
        
        <hr>
        <button>Submit</button>
        <button>Reset</button>

    </fieldset>

    <h5>Copyright ©2017</h5>
</body>
</html>

<?php
    // echo "Welcome to X company."; 
?>