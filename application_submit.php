<?php
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $campus = $_POST['campus'];
  $class = $_POST['class'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];

  // Hash password
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Check for duplicate email
  $check_duplicate = $conn->prepare("SELECT email FROM applications WHERE email = ?");
  $check_duplicate->bind_param("s", $email);
  $check_duplicate->execute();
  $check_duplicate->store_result();

  if ($check_duplicate->num_rows > 0) {
    echo "Email Error";
  } else {
    // Prepare SQL statement for inserting into the database
    $stmt = $conn->prepare("INSERT INTO applications (name, email, campus, class, phone, password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $campus, $class, $phone, $hashed_password);

    // Execute statement
    if ($stmt->execute()) {
      echo "Success";
    } else {
      echo "Error Occur";
    }

    // Close statement
    $stmt->close();
  }

  // Close database connection
  $conn->close();
}
?>
