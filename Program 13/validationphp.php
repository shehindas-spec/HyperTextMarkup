<html>
 <head>
  <title>validation</title>
 </head>
 <body>
  <h2>Form Validation</h2>
  <form onsubmit="return validation()">
  name=<input type="text" id="name"> <br>
  email=<input type="text" id="email"> <br>
  password=<input type="password" id="pas"><br>
  <input type="submit" value="Submit">
  </form>
 <?php
  if(isset($_POST[''submit']))
  {
   $name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['pas'];
  if(empty($name))
  {
   echo "Name is required.<br>";
   }
  if(empty($email))
  {
   echo "Email is required.<br>";
   }
   elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
   {
   echo " Invalid email<br>";
   }
   if(empty($pas)) 
   {
    echo "Password is required.<br>";
   }
   if(!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($pas))
   {
    echo "<h3>Form Submitted Successfully!</h3>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
  }
}
?>
</body>
</html>
