<div class="clear">
<div class="center">
<h3>Existing Accounts</h3>
</div>
<?php 
	if(!(isset($services) and count($services))){
		?>
			<div class="center">You have not added any accounts yet.</div>
		<?php
	}else{
		foreach($services as $service){
			$data_array=unserialize($service['data']);
		?>
		<div class="prepend-2 span-4">
			<div class="span-1">
				<a href="http://www.<?php echo $data_array['service']; ?>.com/<?php echo $data_array['username']; ?>" >
					<img src="/static/images/icons/<?php echo $data_array['service']; ?>_32.png" alt="<?php echo $data_array['service']; ?>" title="<?php echo $data_array['username']; ?>" />
				</a>
			</div>
			<div class="span-3 last large">
				<?php echo $data_array['username']; ?>
			</div>
		</div>
		<?php
		}
	}
?>
</div><br /><hr>
<div class="center">
	<h3>Add Accounts</h3>
</div>
	<div class="span-4 prepend-2">
		<a href="/oauth/twitter" >
			<div class="span-1">
				<img src="/static/images/icons/twitter_32.png" />
			</div>
			<div class="span-3 last large">
				Twitter
			</div>
		</a>
	</div>