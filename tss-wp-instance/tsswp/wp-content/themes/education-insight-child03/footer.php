<?php
/**
 * The template for displaying the footer
 *
 * @subpackage Education Insight
 * @since 1.0
 */

?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="copyright">
			<div class="container footer-content">
				<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>			
			</div>
		</div>
		<?php get_template_part( 'template-parts/footer/site', 'info' ); ?> 
	</footer>
<?php wp_footer(); ?>

<!-- <script>
window.onload = function() {
    alert('Page is loaded');
	element.classList.remove("BOARD_MESSAGE");
};
document.getElementById("BOARD-MEMBER-MESSAGE").onclick = function() {myFunction2()};

function myFunction2() {
  var element = document.getElementById("BOARD_MESSAGE");
  element.classList.add("BOARD_MESSAGE");
}
</script> -->

<!-- For registration form submission -->
<!--  <script>
	 $('#registrationForm').on('click', function() {
		 var name = document.getElementById("123qwe").value;
		 
	 });
 </script> -->

<script>
// $(".result_2020").click(function(){
// 	$(".result2021").hide();
//     $(".result2020").show();
// });

// $(".result_2021").click(function(){
//     $(".result2020").hide();
// 	$(".result2021").show();
// });
</script>

<script>
// jQuery(function($) {
// 		$('#registrationForm').on('submit', function (e) {
// 			e.preventDefault();
// 			 var formData = {
// 				  email: "test@gmail.com",//$("#email").val(),
// // 				  campus: "h9",//$("#campus").val(),
// // 				  class: "8",//$("#class").val(),
// // 				  phone: "123",//$("#phone").val(),
// 				  password: "123",//$("#password").val(),
// 				};
// 			$.ajax({
// 				type: 'POST',
// 				  url: 'http://192.168.1.203/emis/workplace/RegistrationAPISS/api/UserLoginApi.php',
// 				  data: {
// 				  email: "test@gmail.com",
// 				  password: "123",
// 				},
// // 			    dataType: "json",
// // 				encode: true,
// 				success: function (data) {
// 					console.log(data);
// // 					var jsonResponse= JSON.parse(data);
// //                     alert(jsonResponse.message);
// 				},
// 				error: function(data) { 
// 					console.log(data);
					
// // 					var jsonResponse= JSON.parse(data);
// //                        alert(jsonResponse.message);
//                 }
// 			});

// 		});

// 	});
</script>

<!-- <script>
	 $("#registrationForm").on("submit", function(event){
        event.preventDefault();
        var formValues= $(this).serialize();
		 alert(formValues);
//         $.post("RegisterUserTest.php", formValues, function(data){
//             // Display the returned data in browser
//              alert(data);
//             $("#result").html(data);
//         });
    });
</script> -->

<!-- Acces form value data in RegisterUserTest.php file using  echo $_POST["name"] ?? ''; -->

<!-- Submit Admission Form   -->
<script type="text/javascript">
	//alert('a1');
	jQuery(document).ready(function($){
			//alert('a2');
	// hide messages 
		$("#error").hide();
		$("#show_message").hide();
		// on submit...
		$('#registrationForm').submit(function(e){
				//alert('a3');
			e.preventDefault();
			$("#error").hide();
			//name required
			var name = $("input#name").val();
			if(name == ""){
				$("#error").fadeIn().text("Name required.");
				$("input#name").focus();
				return false;
			}
			// email required
			var email = $("input#email").val();
			if(email == ""){
				$("#error").fadeIn().text("Email required");
				$("input#email").focus();
				return false;
			}
			// email required
			var campus = $("input#email").val();
			if(campus == ""){
				$("#error").fadeIn().text("Campus required");
				$("input#campus").focus();
				return false;
			}
			// email required
			var clas = $("input#email").val();
			if(clas == ""){
				$("#error").fadeIn().text("Class required");
				$("input#class").focus();
				return false;
			}
			// phone number required
			var phone = $("input#phone").val();
			if(phone == ""){
				$("#error").fadeIn().text("Mobile number required");
				$("input#phone").focus();
				return false;
			}
			// password number required
			var password = $("input#password").val();
			if(password == ""){
				$("#error").fadeIn().text("Password number required");
				$("input#password").focus();
				return false;
			}
			// password number required
			var re_password = $("input#re-password").val();
			if(re_password == ""){
				$("#error").fadeIn().text("Re-Password number required");
				$("input#re-password").focus();
				return false;
			}
			if(re_password != password){
				$("#error").fadeIn().text("Password and re-password should be same");
				$("input#re-password").focus();
				return false;
			}
			// ajax
			$.ajax({
					type:"POST",
					url: "https://emis.thescienceschool.edu.pk/RegistrationAPI/api/UserRegistrationApi.php",
					data: $(this).serialize(), // get all form field value in serialize form
					success: function(){
						$("#show_message").fadeIn();
						//$("#ajax-form").fadeOut();
					}
			});
		});  
		return false;
	});
</script>



</body>
</html>