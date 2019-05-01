<?php
  require_once("bookmark_fns.php");
  do_html_header("Resetting password");

  // creating short variable name
  $username = $_POST['username'];

  try {  
    $password = reset_password($username);
	notify_password($username, $password); // had to configure sendmail for this to work see notes in function script
    echo 'Your new password has been emailed to you.<br>';
  }
  catch (Exception $e) {
    echo 'Your password could not be reset - please try again later.<br>';
	//echo $e; // show Exceptions during password reset process
} 
  
  do_html_url('login.php', 'Login');
  do_html_footer();
?>
