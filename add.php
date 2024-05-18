<?php

$connection=mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection,"demo");

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
  
    $sql="insert into name(name)values('$name')";

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<form action="add.php" method="post">
<div class="form-group">
    <label>x</label>
    <input type="text" name="name" placeholder="enter name">
</div>
<div class="form-group">
    <label>y</label>
    <input type="text" name="name" placeholder="enter name">
</div>
<div class="form-group">
    <label></label>
    <input type="text" name="name" placeholder="enter name">
</div>
<input type="submit" name="submit" value="add">
</form> 
</body>
</html>
