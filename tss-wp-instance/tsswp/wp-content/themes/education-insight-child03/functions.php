<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bootstrap-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION



// self ..........

add_action( 'wpforms_process_complete', 'sendingDataToJava', 10, 4 );

   function sendingDataToJava( $fields, $entry, $form_data, $entry_id) {

    //Specify WPForm ID you have there

    //if form ID is 1
    if (form_data[id] == 4635) {
		
		alert("clicked ..");
//       $api_url = 'http://192.168.1.203/emis/workplace/RegistrationAPISS/api/UserLoginApi.php';
//       $body = array(
//         'email'                => $fields['1']['value'],
//         'password'               => $fields['2']['value'],
//         'phone'               => $fields['3']['value'],

//        );
//        $request = wp_remote_post( $api_url, array( 'body' => $body ) );

     }

   }
























// 	
// 	// // registration form self code for db
// add_action( 'WPForms/Admission Form', function( $record, $ajax_handler ) {
	
// 	echo '<script>alert("Welcome to Geeks for Geeks")</script>';
	
// 	if ( 'MY_FORM' == $form_name ) {
//         // logic for MY_FORM
//             $raw_fields = $record->get( 'fields' );
// 			$fields = [];
// 			foreach ( $raw_fields as $id => $field ) {
// 				$fields[ $id ] = $field['value'];
// 			}
			
// 			global $wpdb;
// 			$output['success'] = $wpdb->insert('demo', array( 'name' => $fields['name'], 'email' => $fields['email'], 'message' => $fields['message']));

// 			$ajax_handler->add_response_data( true, $output );
//     	}
    
// 	}, 10, 2);

// if(isset($_POST['submit'])){

// 	 $email = $_POST['email'];
// 	 $campus = $_POST['campus'];
// 	 $class = $_POST['class'];
// 	 $phone = $_POST['phone'];
// 	 $password = $_POST['password'];
// 	 $repassword = $_POST['re-password'];
	
// 	$jsonObj->email = $_POST['email'];
// 	$jsonObj->campus = $_POST['campus'];
// 	$jsonObj->clas = $_POST['class'];
// 	$jsonObj->phone = $_POST['phone'];
// 	$jsonObj->password = $_POST['password'];
	
// 	$myJSON = json_encode($jsonObj);
// 	 header('Location: https://thescienceschool.edu.pk/tsswp/admissions?name=$name');
	// 	echo '<script>alert("Welcome to Geeks for Geeks")</script>';
// } 

