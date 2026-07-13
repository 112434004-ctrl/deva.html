<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$course = $_POST['course'];
$address = $_POST['address'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Details</title>
</head>
<body>

<h2>Registration Successful</h2>

Name: <?php echo $name; ?><br><br>

Email: <?php echo $email; ?><br><br>

Password: <?php echo $password; ?><br><br>

Gender: <?php echo $gender; ?><br><br>

Course: <?php echo $course; ?><br><br>

Address: <?php echo $address; ?><br><br>

</body>
</html>