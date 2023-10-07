<?php
session_start(); // Start session
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Retrieve hashed password based on the provided email
  $stmt = $conn->prepare("SELECT id, password FROM applications WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $hashed_password = $row['password'];

    // Verify the provided password 
    if (password_verify($password, $hashed_password)) {
      $_SESSION['user_id'] = $row['id']; // Store user ID in session
      header("Location: dashboard.php");
      exit();
    } else {
      echo "Invalid email or password.";
    }
  } else {
    echo "Invalid email or password.";
  }

  $stmt->close();
}

$conn->close();
