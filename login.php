<?php
$bodyClass = "page-template-default page page-id-18 wp-custom-logo page-two-column elementor-default elementor-kit-160 elementor-page elementor-page-18";
$pageTitle = "Admissions";
include('header.php');

// If the user is already logged in, redirect to the dashboard
if (isset($_SESSION['user_id'])) {
  header("Location: dashboard.php");
  exit();
}
?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card" style="margin-bottom: 20px; background-color: #4fa0e53b;">
        <div class="card-body" style="padding: 20px;"> <!-- Added padding style -->
          <h1 class="card-title" style="font-family: Roboto, Sans-serif; font-weight: 600; color: #000;">Sign In</h1>
          <p>Don't have an account? <a href="application_form.php" style="color: #ef5921;">Submit Application</a>.</p>
          <form id="loginForm" method="post" class="mt-3">
            <div class="form-group form-field">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email address" autocomplete="email" required>
            </div>
            <div class="form-group form-field">
              <label for="password">Password:</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
            </div>
            <p>Forgot Password? <a href="forgot_password.php" style="color: #ef5921;">Request reset password</a>.</p>
            <button type="submit" class="btn btn-primary form-field" style="background-color: #ef5921; border: none;">Sign In</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>
<!-- Handle Login Form Submission -->
<script>
  document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();

    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    // Proceed with AJAX submission
    jQuery.ajax({
      type: 'POST',
      url: 'login_process.php',
      data: {
        email: email,
        password: password
      },
      dataType: 'text', // Expect text response
      success: function(response) {
        // Remove any leading/trailing whitespaces and newlines
        response = response.trim();

        // Check for different response scenarios
        if (response.toLowerCase().includes("invalid email or password")) {
          Swal.fire({
            icon: 'info',
            title: 'Login Status',
            text: 'Invalid email or password.',
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          }).then((result) => {
            // Reload the page if login is unsuccessful
            location.reload();
          });
        } else {
          // Redirect to dashboard if login is successful
          window.location.href = 'dashboard.php';
        }
      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText);
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: 'An error occurred while processing the login.',
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });
      }
    });
  });
</script>