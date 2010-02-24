<div id="main-content" class="border span-14 prepend-2">
	<span class="large">
	</span>
</div>
<div class="prepend-1 append-1 span-6 last">
<?php 
	$this->load->view('app/sidebar');
?>
</div>
<script type="text/javascript">
$(document).ready(function(){
	settimeout($)
});

function getMore($last_id){
	$.ajax({
		type:"GET",
		dataType:"json",
		url:'/ajax/getMore',
		data:({}),
		success: function(){
			
		}
		error: function(){
			return;
		}
	});
}
</script>