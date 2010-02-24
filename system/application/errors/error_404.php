<html>
<head>
<title>404 Page Not Found</title>
	<link rel="stylesheet" href="/static/styles/styles.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="/static/styles/blueprint/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="/static/styles/blueprint/print.css" type="text/css" media="print"> 
  	<!--[if lt IE 8]>
    	<link rel="stylesheet" href="/static/styles/blueprint/ie.css" type="text/css" media="screen, projection">
  	<![endif]-->
	<link rel="canonical" href="http://www.youtastic.com"> 
</head>
<body>
<div class="container">
<?php
	$CI =& get_instance(); 
	$CI->load->view('base/header'); 
?>
	<div id="content" class="clear">
		<div class="prepend-2">
			<h1><?php echo $heading; ?></h1>
			<?php echo $message; ?>
		</div>
	</div>
<?php $CI->load->view('base/footer'); ?>
</div>
</body>
</html>