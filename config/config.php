<?php
	// error_reporting(E_ALL);

	$siteInfo= [
			//general info
			"company_name" => "Boyet's Saddlery.", 
			"phone" =>  "0928-7385-900",
			"phone2" => "0948-065-1464", 		  //either no format or dashed format
			"email" => "boyetleathercraft@gmail.com",   //by default is used as recipient email  
			"address" => "#10 Purok 3 Gibraltar <br>
										Baguio City, 2600 Philippines", 
			
			// email related
			"site_key" => "6Lc23x0UAAAAACGIT_C0_gyWO3bkj6Q5n-f_pqbe",
			"secret_key" => "6Lc23x0UAAAAAEhw1XBprAmlFaRVmS7-PZBmVwV5",
			"email_from" => "mailer@domain.com",
			"email_from_name" => "Company Name", //by default is the same as company name
			"email_bcc" => "", //accepts multiple emails. Comma separated eg: email1@domain.com,email2@domain.com
			"email_cc" => "", //accepts multiple emails. Comma separated eg: email1@domain.com,email2@domain.com

			//social media links
			"fb_link" =>"https://www.facebook.com/boyetsleathercraft",
			"tt_link" =>"https://twitter.com",
			"gp_link" =>"https://plus.google.com/",
			"ig_link" =>"https://instagram.com",
			"yt_link" =>"https://youtube.com",
			"li_link" =>"https://www.linkedin.com/",
			"tb_link" =>"https://www.tumblr.com",
			"yp_link" =>"https://yelp.com",

			//seo
			"ga_tracking_id" => '',

			//private policy link 
			"policy_link" => '', //change the value to privacy-policy for Privacy Policy Page

			//Cookie
			"cookie" => true, //false to disable cookie

			//suspension
			"suspended" => false
			];

			
	define('MVC', dirname(__DIR__) . '/' . 'app' . '/');
	define('URL_PUBLIC_FOLDER', '');
	define('URL_PROTOCOL', 'http://');
	define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
	define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
	if(substr(URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER, -1) == '/') {
		define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);
	} else{
		define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER . '/');
	}

	require MVC . 'controller/controller.php';
	require MVC . 'app.php';