<?php
include('db_connection.php');
$bodyClass = "page-template-default page page-id-17 wp-custom-logo page-two-column elementor-default elementor-kit-160 elementor-page elementor-page-17";
$pageTitle = "Dashboard";
include('header.php');
?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mb-4" style="background-color: #4fa0e53b;">
        <div class="card-body p-4">
          <?php
          // If the user is not logged in, redirect to the index page
          if (!isset($_SESSION['user_id'])) {
            header("Location: index.php");
            exit();
          }
          if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];

            // Retrieve user details from the database
            $stmt = $conn->prepare("SELECT name, email, campus, class, phone FROM applications WHERE id = ?");
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
              $row = $result->fetch_assoc();
              $name = $row['name'];
              $email = $row['email'];
              $campus = $row['campus'];
              $class = $row['class'];
              $phone = $row['phone'];

              // Display user details in a table
              echo "<h1>Welcome, $name!</h1>";
              echo "<h2>Your Details:</h2>";
              echo "<table class='table'>";
              echo "<tr><td>Name:</td><td>$name</td></tr>";
              echo "<tr><td>Email:</td><td>$email</td></tr>";
              echo "<tr><td>Campus:</td><td>$campus</td></tr>";
              echo "<tr><td>Class:</td><td>$class</td></tr>";
              echo "<tr><td>Phone:</td><td>$phone</td></tr>";
              echo "</table>";

              // Add a "Change Password" button with similar styling to the Sign In button
              echo "<a href='change_password.php' class='btn btn-primary' style='background-color: #ef5921; border: none;'>Change Password</a>";
            } else {
              echo "User not found.";
            }

            $stmt->close();
          } else {
            echo "You are not logged in. Please sign in.";
            header("Location: index.php");
            exit();
          }

          $conn->close();
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>