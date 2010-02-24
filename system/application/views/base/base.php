<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>YouTastic</title>
	<link rel="stylesheet" href="/static/styles/styles.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="/static/styles/blueprint/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="/static/styles/blueprint/print.css" type="text/css" media="print"> 
  	<!--[if lt IE 8]>
    	<link rel="stylesheet" href="/static/styles/blueprint/ie.css" type="text/css" media="screen, projection">
  	<![endif]-->
	<link rel="canonical" href="http://www.youtastic.com"> 
	<script src="http://www.google.com/jsapi"></script>
	<script type="text/javascript">
		google.load("jquery", "1.4.2");
	</script>
	
</head>
<body>
<div class="container">
<?php
	$this->load->view('base/header');
?>
<div id="content" class="clear">
<?php
	$this->load->view($content);
?>
</div>
<?php
	$this->load->view('base/footer');
?>
</div>
</body>
</html>