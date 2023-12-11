<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'muhammadfayaz6584@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $brototype@gmail.com;
  $contact->from_name = $_POST['Muha'];
  $contact->from_email = $_POST['muhammadfayaz6584@gmail.com'];
  $contact->subject = $_POST['HI GOOD']

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'MUHAMMED FAYAZ');
  $contact->add_message( $_POST['email'], 'muhammadfayaz6584@gmail,com');
  $contact->add_message( $_POST['message'], 'I LOVE YOU', 10);

  echo $contact->send();
?>
