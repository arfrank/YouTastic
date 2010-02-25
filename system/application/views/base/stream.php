<?php
	if(!(isset($feed) and count($feed))){
?>
<h3>Unfortunately this stream has nothing to show yet.  I'm sure something will show up here soon. Please check back at your greatest convenience.</h3>
In the meantime, here's a picture for your enjoyment.<br /><br />
<div class="center">
<img src="/static/images/enjoy.jpg" alt="ENJOY!" title="Picture for Enjoyment!">
</div>
<?php
	}else{
		foreach($feed as $row){
?>
		<div class="span-14">
			<div class="prepend-1 append-1 span-2 border">Image</div><div class="prepend-1 span-8 append-1">Content area</div>
		</div>
<?php	
		} 
	}
?>