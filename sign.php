<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $con = new mysqli('localhost', 'root', '', 'paypal');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("INSERT INTO users (fname, lname, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fname, $lname, $email, $password);

    if ($stmt->execute()) {
        // Redirect to account.html after successful insertion
        header("Location: account.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>