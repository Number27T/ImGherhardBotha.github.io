<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];

    $data = "Username: " . $username . "\nEmail: " . $email . "\n";

    $filename = "user_data.txt";

    // Append the data to the file
    file_put_contents($filename, $data, FILE_APPEND | LOCK_EX);

    echo "Data submitted successfully!";
} else {
    echo "Invalid request.";
}
?>