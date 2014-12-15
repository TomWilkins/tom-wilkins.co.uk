<?php

$switch = true;
	$endMessage = null;

	// gets and validates email
	if(isset($_POST['email'])){
		$email = isset($_POST['email']);
		$result = filter_var( $email, FILTER_VALIDATE_EMAIL );
		if (!$result){
			$endMessage .= "Invalid Email \n";
			$switch = false;
		}
	}else{
		$endMessage .= "Invalid Email \n";
		$switch = false;
	}

	// checks if name is entered
	if (!isset($_POST['name']))
	{
		$endMessage .= "No name entered \n";
	}

	// checks if message is entered
	if (!isset($_POST['message']))
	{
		$endMessage .= "No message entered \n";
	}

	if ( isset($_POST['name']) && $switch && isset($_POST['message']) )
	  {
	  //remove characters from name
	  $name =htmlspecialchars($_POST['name']);

	  $email = $_POST['email'] ;
	  //remove characters from message
	  $message = htmlspecialchars($_POST['message']) ;

	  $message = preg_replace("/&#?[a-z0-9]+;/i","",$message);

	  // send mail 
	  echo "<script type='text/javascript'> alert(Message successfully sent); </script>";
	  }
	else
	  {	
	  	echo "<script type='text/javascript'> alert(". $endMessage ."); </script>";
	  }

?>