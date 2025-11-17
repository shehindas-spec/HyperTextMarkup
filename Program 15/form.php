<!DOCTYPE html>
<html>
<head>
    <title>Validation</title>
</head>
<body>
<h2>Form Validation</h2>
<form method="POST">
    Name: <input type="text" name="name" id="name"> <br>
    Email: <input type="text" name="email" id="email"> <br>
    Password: <input type="password" name="pas" id="pas"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pas'];

    $isValid = true; 
    if (empty($name)) 
    {
        echo "Name is required.<br>";
        $isValid = false;
    }
    if (empty($email)) 
    {
        echo "Email is required.<br>";
        $isValid = false;
    } 
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email.<br>";
        $isValid = false;
    }

    if (empty($password))
     {
        echo "Password is required.<br>";
        $isValid = false;
    } 
    elseif (strlen($password) < 6) 
    {
        echo "Password must be at least 6 characters long.<br>";
        $isValid = false;
    }

    if ($isValid)
    {
        echo "<h3>Form Submitted Successfully!</h3>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
    }
}
?>


</body>
</html>

