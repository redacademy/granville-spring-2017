<?php 

require_once( "../../../wp-load.php" );

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$address = $_POST['address'];
$birthday = $_POST['birthday'];
$ethnicity = $_POST['ethnicity'];
$gender = $_POST['gender'];
$newmember = $_POST['newmember'];
$spanishmember = $_POST['spanishmember'];
$emergfirstname = $_POST['emergfirstname'];
$emerglastname = $_POST['emerglastname'];
$emergtelephone = $_POST['emergtelephone'];
$emergemail = $_POST['emergemail'];
$eng_healthconcerns = $_POST['eng_healthconcerns'];
$engallergies = $_POST['engallergies'];
$engmedications = $_POST['engmedications'];
$eng_visit = $_POST['eng_visit'];

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
            'Gender: ' . $gender . "\r\n".
            'New Member: ' . $newmember . "\r\n".
            'Spanish Member: ' . $spanishmember . "\r\n".
            "\r\n".
            'Emergency Contact: ' . "\r\n".
            'Name: '.$firstname . ' ' . $lastname ."\r\n".
            'Telephone: ' . $telephone . "\r\n".
            "\r\n".
            'Medical Information: ' . "\r\n".
            'Health Concerns: ' . $eng_healthconcerns . "\r\n".
            'Allergies: ' . $engallergies . "\r\n".
            'Medications: ' . $engmedications . "\r\n".
            'Visit from Committee: ' . $eng_visit;

// $message = print_r($_POST, true);

//Here put your Validation and send mail
$sent = wp_mail($to, $subject, strip_tags($message), $headers);
if($sent) {
  echo 'mail sent';
}//message sent!
else  {
  echo 'try again';
}//message wasn't sent


// get_footer();
?>