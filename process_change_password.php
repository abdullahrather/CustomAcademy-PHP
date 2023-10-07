<?php
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user_id = $_POST['user_id'];
  $password = $_POST['password'];

  // Hash the new password
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  // Update the password in the 'applications' table based on user_id
  $stmt = $conn->prepare("UPDATE applications SET password = ? WHERE id = ?");
  $stmt->bind_param("si", $hashed_password, $user_id);

  if ($stmt->execute()) {
    echo json_encode(array('success' => true, 'message' => 'Password updated successfully.'));
  } else {
    echo json_encode(array('success' => false, 'message' => 'Error updating password: ' . $stmt->error));
  }

  $stmt->close();
} else {
  echo json_encode(array('success' => false, 'message' => 'Password not provided.'));
}
?>
