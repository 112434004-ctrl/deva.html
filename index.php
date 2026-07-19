<?php

$name = trim($_POST['name']);
$email = trim($_POST['email']);

if (!empty($name) && !empty($email)) {

    echo "<h2 style='color:green;'>Form Submitted Successfully!</h2>";
    echo "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";

} else {

    echo "<h2 style='color:red;'>Submission Failed!</h2>";
    echo "<p>Please fill in all the required fields.</p>";

}

?>