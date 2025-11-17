<!DOCTYPE html >
<html>
<head>
 <title>Electricity Bill</title>
 </head>
 <body>
 <form method="POST">
 Enter Units Consumed:
 <input type="number" name="units" required>
 <input type="submit" name="submit" value="Calculate">
 </form>
 <?php
   if(isset($_POST["submit"]))
   {
    $units=$_POST["units"];
    $bill=0;
    if($units<=10) 
    {
        $bill=$units*5;
    } 
    elseif($units<=20) 
    {
        $bill=(10*5)+(($units-10)*7); 
    } 
    else 
    {
        $bill = (10*5)+(10*7)+(($units-20)*10);  
    }
    echo "<H3>Your Electricity bill is $bill</h3>";
   }
  ?>
 </body>
 </html>
