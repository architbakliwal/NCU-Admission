<?php

/*	--------------------------------------------------
	:: CONFIG SETTINGS
	-------------------------------------------------- */

	if($_SERVER['SERVER_ADDR'] == '127.0.0.1') {
		$hostname_Connection = "127.0.0.1";
	    $database_Connection = "ncu_admission_2017";
	    $username_Connection = "root";
	    $password_Connection = "";
	    $baseurl = 'http://127.0.0.1/NCUAdmission/';
	    $physicalpath = "C:\\Users\\Archit\\Documents\\GitHub\\NCU-Admission\\";
	} else {
		//Settings for production
		$hostname_Connection = "localhost";
	    $database_Connection = "ncu_admission_2017";
	    $username_Connection = "root";
	    $password_Connection = "ncuindia@!sge";
	    $physicalpath = "/var/www/html/ncuindia.edu/";

	    // Enter your URL here without http:// only domain!
		$url = 'ncuindia.edu';
		
		if ($_SERVER['SERVER_NAME'] == $url) {
		    // Enter your BASEURL here without WWW!
			$baseurl = 'http://ncuindia.edu/admission-form/';
		} else {
		    // Enter your BASEURL here with WWW!
			$baseurl = 'http://www.ncuindia.edu/admission-form/';
		}
	}

	error_reporting(0);

	// error_reporting(E_ALL & ~E_NOTICE);

	// Enter your Name here!
    $yourname = 'NCU Admission';

    // Enter your Email here!
    $youremail = 'admission.pgdm@ncuindia.edu';

	// Turn true SMTP if you want don´t forget to turn false sendmail and mail

	$sendmail = false;
	$mail = false;

	$SMTP = true;
	
	$protocol = 'ssl';                       					// Can be 'ssl' or 'tls' or ''
	$host = 'smtp.gmail.com';
	$port = 465;                             				// Can be 465, 587, 25
	$smtpusername = 'admission.pgdm@ncuindia.edu';        // Need to be equal to $youremail
	$smtppassword = 'ncuindia2018';

	// If you want file upload turn this to true!
	$upload = true;
	
	// Enter your default time zone
	date_default_timezone_set('Asia/Kolkata');
	
	$localtime = date("l jS \of F Y h:i:s A");	
	
	// Enter your Website here!
	$website = 'http://www.ncuindia.edu/';

	// Enter Company here!
	$company = 'The NorthCap University';
	
	// Enter Next Year here!
	$year = date("Y") + 1;
	
	// If you want captcha turn this to true!
	$captcha = true;
	
	// If you want social turn this to true!
	$social = false;
	
	// Add here your password salt before add members to your website
	// You can go here to generate a good salt http://randomkeygen.com/
	$passwordsalt = 'l4vWLA7U83';
	
	// Remote IP Address!
	$finaluserip = $_SERVER['REMOTE_ADDR'];
	
	// Don't change order of tables may cause some conflicts
	$mysql 			     = true;										       
    $admission_users   	 = "admission_users";
	$mysqltable_name_2   = "login_system_login_attempts";
	$mysqltable_name_3   = "login_system_forgot_password";
	$mysqltable_name_4   = "login_system_email_activation";
	$mysqltable_name_5   = "login_system_register_social_networks";

    

    if ($mysql) {
        $connection = mysql_connect($hostname_Connection, $username_Connection, $password_Connection) or die ('<div class="error-message"><i class="icon-close"></i>Failed to connect to MySQL '.mysql_error().'</div>');
        $database = mysql_select_db ($database_Connection, $connection) or die ('<div class="error-message"><i class="icon-close"></i>Failed to connect to MySQL '.mysql_error().'</div>');

        $sqlconfig = "SELECT * FROM  `admission_config`";

		$selectconfig = mysql_query($sqlconfig);

		if(! $selectconfig )
		{
		  die('Could not enter data: ' . mysql_error());
		}

		while ($row = mysql_fetch_array($selectconfig, MYSQL_ASSOC)) {
			$registration_closed = $row['registration_closed'];
			$year = $row['admission_year'];
		}
	}

?>