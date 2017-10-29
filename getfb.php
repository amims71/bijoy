<?php
require 'connect.inc.php';

if ((function_exists('session_status')&& session_status() != PHP_SESSION_ACTIVE) || !session_id()) {
  session_start();
}


//session_start();

require_once __DIR__ . '/src/Facebook/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '',
  'app_secret' => '',
  'default_graph_version' => 'v2.5',
  ]);

$helper = $fb->getRedirectLoginHelper();
$_SESSION['FBRLH_state']=$_GET['state'];

$permissions = ['email']; // optional
	
try {
	if (isset($_SESSION['localhost_app_token'])) {
		$accessToken = $_SESSION['localhost_app_token'];
	} else {
  		$accessToken = $helper->getAccessToken();
	}
}
 catch(Facebook\Exceptions\FacebookResponseException $e) {
 	//When Graph returns an error
 	echo 'Graph returned an error: ' . $e->getMessage();

  	exit;
}
 catch(Facebook\Exceptions\FacebookSDKException $e) {
 	// When validation fails or other local issues
	echo 'Sorry! Facebook Server found an error. Please go back and refresh. then continue. It will work.1 - ' . $e->getMessage();
  	//exit;
 }

if (isset($accessToken)) {
	if (isset($_SESSION['localhost_app_token'])) {
		$fb->setDefaultAccessToken($_SESSION['localhost_app_token']);
	} else {
		// getting short-lived access token
		$_SESSION['localhost_app_token'] = (string) $accessToken;

	  	// OAuth 2.0 client handler
		$oAuth2Client = $fb->getOAuth2Client();

		// Exchanges a short-lived access token for a long-lived one
		$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['localhost_app_token']);

		$_SESSION['localhost_app_token'] = (string) $longLivedAccessToken;

		// setting default access token to be used in script
		$fb->setDefaultAccessToken($_SESSION['localhost_app_token']);
	}

	// redirect the user back to the same page if it has "code" GET variable
	if (isset($_GET['code'])) {
		header('Location: ./');
	}

	// getting basic info about user
	try {
		$profile_request = $fb->get('/me?fields=id,first_name,last_name,email');
		$profile = $profile_request->getGraphNode()->asArray();
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
		// When Graph returns an error
		echo 'Sorry! Facebook Server found an error. Please go back and refresh. Then continue. It will work. - 2' . $e->getMessage();
		session_destroy();
		// redirecting user back to app login page
		header("Location: apps.bijoy1971.org");
		//exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		// When validation fails or other local issues
		echo 'Sorry! Facebook Server found an error. Please go back and refresh. Then continue. It will work. - 3 ' . $e->getMessage();
		//exit;
	}
	
	// printing $profile array on the screen which holds the basic info about user
	$username= $profile['id'];
	$name=$profile['first_name'];
        $last_name=$profile['last_name'];
        $email=$profile['email'];



$path='path/';

	

	$source='https://graph.facebook.com/'.$profile['id'].'/picture?width=655&height=655';
	$water = 'Profile.png';

	// $watermark_size=getimagesize($water);
	// echo $width=$watermark_size[1];
	// echo $height=$watermark_size[0];

	$source_size=getimagesize($source);
	$width=$source_size[1];
	$height=$source_size[0];

	// // $new_size= ($width+$height)/($width*($height/45));

	$watermark_width= 655;
	$watermark_height = 655;


	// $old= imagecreatefrompng($water);
	$old = imagecreatefromjpeg($source);
	$image= imagecreatetruecolor($watermark_width, $watermark_height);
	imagecopyresized($image, $old, 0, 0, 0, 0, $watermark_width, $watermark_height, $width, $height);


	$watermark= imagecreatefrompng($water);

	$x=0;
	$y=0;



	imagecopy($image, $watermark, $x, $y, 0, 0, 655, 655 );
	imagejpeg($image, $path.'1971'.$username.'bijoy2016.jpg');


	$final=$path.'1971'.$username.'bijoy2016.jpg';

	// $fold= imagecreatefromjpeg($final);
	// $fsize=getimagesize($final);
	// $fwidth=$fsize[0];
	// $fheight=$fsize[1];

	// $fmark=imagecreatetruecolor($fwidth, $fheight);
	// imagecopyresized($fmark, $fold, 0, 0, 0, 0, $fwidth, $fheight, $fsize[0], $fsize[1]);

	// $r=rand(0000,9999);
	// $s=md5($username);
	// imagejpeg($fmark, $final);



	// unlink($path.$username.'done.jpg');
	// unlink($path.$username.'.jpg');
	// unlink($final);

	imagedestroy($image);
	imagedestroy($watermark);
        //imagedestroy($water);


// header('Location: index.php');






  	// Now you can redirect to another page and use the access token from $_SESSION['localhost_app_token']
} else {
	// replace your website URL same as added in the developers.facebook.com/apps e.g. if you used http instead of https and you used non-www version or www version of your website then you must add the same here
	$loginUrl = $helper->getLoginUrl('http://apps.bijoy1971.org/getfb.php',$permissions);
	// echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
}
?>


