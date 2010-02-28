<div>

</div>

	<?php //$this->load->view('base/stream'); ?>
<script type="text/javascript">
$(document).ready(function(){
//	settimeout($)
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