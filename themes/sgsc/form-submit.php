<?php 
require_once( "../../../wp-load.php" );

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$address = $_POST['address'];
$birthday = $_POST['birthday'];
$ethnicity = $_POST['ethnicity'];
$gender_radio = $_POST['gender_radio'];
$new_member_radio = $_POST['new_member_radio'];
$spanish_member_radio = $_POST['spanish_member_radio'];
$emergfirstname = $_POST['emergfirstname'];
$emerglastname = $_POST['emerglastname'];
$emergtelephone = $_POST['emergtelephone'];
$emergemail = $_POST['emergemail'];
$health_concerns = $_POST['health_concerns'];
$allergies = $_POST['allergies'];
$medications = $_POST['medications'];
$home_visit = $_POST['home_visit'];

//php mailer variables
$to = 'sgscdevs@gmail.com';
$subject = "Membership Application from ". $firstname ." ". $lastname;
$headers = 'From: '. $email . "\r\n" .'Reply-To: ' . $email . "\r\n";
$subject = "Membership Application from ". $firstname ." ". $lastname;
$message =  'Applicant Information: ' . "\r\n".
            'Name: '.$firstname . ' ' . $lastname ."\r\n".
            'Telephone: ' . $telephone . "\r\n".
            'Email: ' . $email . "\r\n".
            'Address: ' . $address . "\r\n".
            'Birthday: ' . $birthday . "\r\n".
            'Ethniticty: ' . $ethnicity . "\r\n".
            'Gender: ' . $gender_radio . "\r\n".
            'New Member: ' . $new_member_radio . "\r\n".
            'Spanish Member: ' . $spanish_member_radio . "\r\n".
            "\r\n".
            'Emergency Contact: ' . "\r\n".
            'Name: '.$firstname . ' ' . $lastname ."\r\n".
            'Telephone: ' . $telephone . "\r\n".
            "\r\n".
            'Medical Information: ' . "\r\n".
            'Health Concerns: ' . $health_concerns . "\r\n".
            'Allergies: ' . $allergies . "\r\n".
            'Medications: ' . $medications . "\r\n".
            'Visit from Committee: ' . $home_visit;

// $message = print_r($_POST, true);

//Here put your Validation and send mail
$sent = wp_mail($to, $subject, strip_tags($message), $headers);
if($sent) {
  echo wp_redirect( get_permalink(get_page_by_path( 'submission-success' )) );
}//message sent!
else  {
  echo esc_url( get_permalink(get_page_by_path( 'join_us' )) );
}//message wasn't sent
?>