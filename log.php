<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $con = new mysqli('localhost', 'root', '', 'paypal');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Use prepared statements to prevent SQL injection
    $stmt = $con->prepare("INSERT INTO login (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $password);

    if ($stmt->execute()) {
        // Redirect to account.php after successful insertion
        header("Location: account.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>