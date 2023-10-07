<?php
include('db_connection.php');
$bodyClass = "page-template-default page page-id-19";
$pageTitle = "Change Password";
include('header.php');
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

// Check if user is logged in
if (!$user_id) {
  header("Location: login.php"); // Redirect to login page if not logged in
  exit();
}
?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card" style="margin-bottom: 20px; background-color: #4fa0e53b;">
        <div class="card-body" style="padding: 20px;"> <!-- Added padding style -->
          <h1 class="card-title" style="font-family: Roboto, Sans-serif; font-weight: 600; color: #000;">Change Password</h1>
          <form id="changePasswordForm" class="mt-3">
            <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($user_id); ?>"> <!-- Ensure user_id is properly escaped -->
            <div class="form-group form-field">
              <label for="password">New Password:</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter New Password" required>
            </div>
            <div class="form-group form-field">
              <label for="re-password">Confirm Password:</label>
              <input type="password" class="form-control" id="re-password" name="re-password" placeholder="Confirm New Password" required>
            </div>
            <button type="submit" class="btn btn-primary form-field" style="background-color: #ef5921; border: none;">Change Password</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>

<!-- Handle Change Password Form Submission -->
<script>
  document.getElementById('changePasswordForm').addEventListener('submit', function(e) {
    e.preventDefault();

    var password = document.getElementById('password').value;
    var rePassword = document.getElementById('re-password').value;

    // Check if passwords match
    if (password !== rePassword) {
      Swal.fire({
        icon: 'error',
        title: 'Password Mismatch',
        text: 'Password and Confirm Password should match.',
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
      return;
    }

    // Proceed with AJAX submission
    var user_id = <?php echo json_encode((string)$user_id); ?>; // Ensure user_id is a string

    // Ensure user_id is not null
    if (user_id === null) {
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'User ID is not available.',
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
      return;
    }

    jQuery.ajax({
      type: 'POST',
      url: 'process_change_password.php',
      data: {
        user_id: user_id,
        password: password
      },
      dataType: 'json', // Expect JSON response
      success: function(response) {
        if (response.success) {
          Swal.fire({
            icon: 'success',
            title: 'Password Updated',
            text: response.message,
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          }).then((result) => {
            location.reload(); // Reload the page after successful password change
          });
        } else {
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: response.message,
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          });
        }
      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText); // Log the error response to the console
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'An error occurred while updating the password: ' + error, // Show the error message
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });
      }
    });
  });
</script>