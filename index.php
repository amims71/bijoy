<!DOCTYPE html>
<?php include_once("analyticstracking.php") ?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>বিজয় ২০১৬</title>
    <link href="./file/css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./file/normalize.css">
    <link rel="stylesheet" href="./file/skeleton.css">
    <link rel="shortcut icon" type="image/x-icon" href="icon.ico">
    <link href="./file/bootstrap.min.css" rel="stylesheet">

    
<style>
.panel-title {
	margin-top: 0;
	margin-bottom: 0;
	font-size: 18px;
	color: inherit;
	font-family: Hind Siliguri;
}

label {
	font-weight: normal;
	font-family: Hind Siliguri;
}

.u-full-width {
	width: 100%;
	box-sizing: border-box;
	box-shadow: 1px 0px 9px 4px #ddd;
}

.btn {
	text-transform: uppercase;
	border: none;
	-webkit-box-shadow: 1px 1px 4px rgba(0,0,0,0.4);
	box-shadow: 1px 1px 4px rgba(0,0,0,0.4);
	-webkit-transition: all 0.4s;
	-o-transition: all 0.4s;
	transition: all 0.4s;
	font-family: Hind Siliguri;
}

.btn-primary {
	color: #ffffff;
	background-color: #3B5998;
	border-color: transparent;
}

.button.button-primary:hover, button.button-primary:hover, input.button-primary[type="submit"]:hover, input.button-primary[type="reset"]:hover, input.button-primary[type="button"]:hover, .button.button-primary:focus, button.button-primary:focus, input.button-primary[type="submit"]:focus, input.button-primary[type="reset"]:focus, input.button-primary[type="button"]:focus {
	color: #FFF;
	background-color: #1F3B75;
	border-color: #1EAEDB;
}

.btn-primary:hover, .btn-primary:active:hover {
	background-color: #274583;
}

.btn-primary:active {
	background-color: #274583;
	/* background-image: -webkit-radial-gradient(circle, #0b76cc 10%, #2196f3 11%); */
	/* background-image: -o-radial-gradient(circle, #0b76cc 10%, #2196f3 11%); */
	background-image: radial-gradient(circle, #274583 10%, #3D588F 11%);
	background-repeat: no-repeat;
	-webkit-background-size: 1000% 1000%;
	background-size: 1000%;
	-webkit-box-shadow: 2px 2px 4px rgba(0,0,0,0.4);
	box-shadow: 2px 2px 4px rgba(0,0,0,0.4);
}

.btn-primary:focus {
	background-color: #2F4D8B;
}

.bg {
	box-shadow: 1px 1px 4px rgba(0,0,0,0.4);
	background-color: #2f2f2f;
}
</style>
  </head>  
  <body cz-shortcut-listen="true">
  	<!-- <img src= class="bg"> -->
       <div class="container">
      <div class="row">
        <div class="panel panel-danger">
  <div class="panel-heading" style="background-color: #274583">
    <h3 class="panel-title"><a href='http://bijoy1971.org/'>বিজয়ের সূর্যোদয়, বাংলাদেশ বিশ্বময়</a></h3>
  </div>
  <div class="panel-body">
      
    <div class="omb_login">
  
		<div class="row omb_row-sm-offset-3 omb_loginOr">
			<div class="col-xs-12 col-sm-6">
<?php

session_start();
				require 'getfb.php';

			if (isset($name)) {
				?>
				<form action="logout.php" method="post">
	   	 <label style="color: black;">Logged as:<?php echo $name; ?></label>

		  <input class="button-primary" value="Log Out" type="submit">
		</form>


				<?php
			}


			?>


				<hr class="omb_hrOr">
				<span class="omb_spanOr"></span>
			</div>
		</div>

		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">	
					
<?php 
if (isset($final)) {
	?>
	<center><img class="profile" src="<?php echo $final;  ?>" alt="" width='60%'></center>
	<?php
	$text='Download this image';
$dl='download="Bijoy2016"';
	$loginUrl=$final;
$query= "INSERT INTO `fb_user` ( `serial`,`name` ,  `last_name` ,  `email` ,  `id` )  VALUES ( '','".mysql_real_escape_string($name)."', '".mysql_real_escape_string($last_name)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($username)."')";
$query_run=mysql_query($query);

}
else{
	?>
	<center><img class="profile" src="profiled.jpg" alt="" width="60%"></center>

	<?php
	$text='Login with Facebook';
$dl='';
}

?>

				<p>&nbsp;</p>


				               	<a class="btn btn-lg btn-primary btn-block" href='<?php echo $loginUrl;  ?>' target="_top" <?php echo $dl;  ?>><?php echo $text; ?></a>

			</div>
    	</div>
	<br>
	<br>
	
     <div class="copy">
     <a target="_blank" href="http://apps.bijoy1971.org/privacy.php" style="color: #274583">Privacy</a>
 
        <a target="_blank" href="http://apps-bd.com/" style="float: right; color: #274583" >Get More</a>
    
</div>

  </div>
</div>

      </div>
    </div>
	   <!--<iframe src="" name="frame" width="300" height="400" frameborder="0">
    alternative content for browsers which do not support iframe.
</iframe>-->

<!--<script data-cfasync='false' type='text/javascript' src='//p184570.clksite.com/adServe/banners?tid=184570_334818_0&type=footer&size=468x60'></script>
<script data-cfasync='false' type='text/javascript' src='//p184570.clksite.com/adServe/banners?tid=184570_334818_5&type=slider&size=160x600&position=center'></script>
<script data-cfasync='false' type='text/javascript' src='//p184570.clksite.com/adServe/banners?tid=184570_334818_6&type=slider&side=right&size=160x600&position=center'></script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<script data-cfasync="false" src="//dk7rftbivnkgr.cloudfront.net/?tfrkd=632561"></script>
<script data-cfasync="false" src="//dk7rftbivnkgr.cloudfront.net/?tfrkd=632562"></script>-->


<!-- Bijoy APPS -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-1476411962827832"
     data-ad-slot="6822603707"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

  
</div>
</body></html>

