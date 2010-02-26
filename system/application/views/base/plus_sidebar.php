<?php if(isset($flashmessage) and $flashmessage) { ?><div class="center span-22 prepend-1"><?php echo $flashmessage; ?></div><?php } ?>
<div id="main-content" class="border span-14 prepend-2">
	<?php $this->load->view($main_content); ?>
</div>
<div class="prepend-1 append-1 span-6 last">
<?php 
	$this->load->view($sidebar);
?>
</div>
