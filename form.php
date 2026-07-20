<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $address = $_POST['address'];

    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head><title>Registration Details</title></head>";
    echo "<body>";

    echo "<h2>Registration Successful</h2>";

    echo "<p><strong>Full Name:</strong> " . htmlspecialchars($fullname) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Password:</strong> " . htmlspecialchars($password) . "</p>";
    echo "<p><strong>Gender:</strong> " . htmlspecialchars($gender) . "</p>";
    echo "<p><strong>Course:</strong> " . htmlspecialchars($course) . "</p>";
    echo "<p><strong>Address:</strong> " . nl2br(htmlspecialchars($address)) . "</p>";

    echo "</body>";
    echo "</html>";
}
?>