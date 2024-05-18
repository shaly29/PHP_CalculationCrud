<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
  
<?php

$connection=mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection,"demo");

if(isset($_POST['submit']))
{
    $phone=$_POST['phone'];
  
    $sql="insert into register(phone)values('$phone')";

    if(mysqli_query($connection,$sql))
           {
                  echo '<script> location.replace("index.php")</script>';  
           }
           else
           {
           echo "Some thing Error" . $connection->error;
           }
}

?>




<form action="register.php" method="post">
<div class="form-group">
    <label>Phone</label>
    <input type="text" name="phone" placeholder="enter mobile">
</div>
<input type="submit" name="submit" value="submit">
</form> 
</body>
</html>