


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
<?php
$connection = mysqli_connect("localhost", "root", "", "demo");


if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
  
    $sql = "INSERT INTO register (phone) VALUES ('$phone')";

    if (mysqli_query($connection, $sql)) {
        echo '<script> location.replace("index.php")</script>';  
    } else {
        echo "Something went wrong: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
<div class="container ">

<div class="row">
<form action="login.php" method="post">
<div class="form-group">
    <label>Phone</label>
    <input type="text" name="phone" placeholder="Enter mobile" value="<?php echo isset($phone) ? $phone : '' ?>">
</div>

<input type="submit" name="submit" value="Submit">
</form>
</div>
</div>
</body>
</html>
