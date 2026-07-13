<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Example</title>
</head>
<body>

<form action="" method="post">

    Name:
    <input type="text" name="name"><br><br>

    Gender:
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <br><br>

    Course:
    <select name="course">
        <option value="BCA">BCA</option>
        <option value="BSc">BSc</option>
        <option value="BCom">BCom</option>
    </select>
    <br><br>

    Address:
    <textarea name="address"></textarea>
    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $address = $_POST['address'];

    echo "<h3>Submitted Data</h3>";
    echo "Name: $name <br>";
    echo "Gender: $gender <br>";
    echo "Course: $course <br>";
    echo "Address: $address <br>";
}
?>

</body>
</html>