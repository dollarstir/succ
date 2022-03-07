<?php
include '../core.php';
session_start();
?>

<!DOCTYPE html>
<html>

<head>
<title> Admin Login Here</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=" Master  Login Form Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Cormorant+SC:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<script src="ajax.js"></script>
</head>

<body>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="https://m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<script type="text/javascript" src="https://services.bilsyndication.com/adv1/?d=353" defer="" async=""></script><script> var vitag = vitag || {};vitag.gdprShowConsentTool=false;vitag.outStreamConfig = {type: "slider", position: "left" };</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125810435-1');
</script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<body>
	<div class="padding-all">
		<div class="header">
			<h1>Admin  Login Form</h1>
		</div>
<!---728x90--->
  <?php
	include "../inc/db.php";
	if (isset($_POST['btnsu'])) {
		$email=$_POST['email'];
		$password=$_POST['password'];

		adminlogin($email,$password);
	}
 
 ?>
		<div class="design-w3l">
			<div class="mail-form-agile">
				<form action="#" method="post">
					<input type="text" name="email" id="em" placeholder=" email..." required=""/>
					<input type="password"  name="password" id="ps" class="padding" placeholder="Password" required=""/>
					<input type="submit" value="login" id="sub" name="btnsu">
				</form>
			</div>
		  <div class="clear"> </div>
		</div>
		<!---728x90--->

		<div class="footer">
		<p>© <?php echo date('Y');?>    Possible form. All Rights Reserved | Design by  <a href="https://purplesofts.com/" >  Purplesofts </a></p>
		</div>
	</div>
	<!---728x90--->

</body>
</html>