<?php
	echo '<link rel="stylesheet" href='.base_url().'public/css/foundation.min.css>';  
	echo 
	'<div class="row">
		<div class="small-12 columns">
			<h2>ADMIN PANEL</h2>
		</div>
	</div>';
	
	if (!isset($view_file)) {
		$view_file = '';
	}
	
	if (!isset($module)) {
		$module = $this->uri->segment(1);
	}
	
	if (($view_file!="") && ($module!="")) {
	$path = $module."/".$view_file;
	$this->load->view($path);
	}
?>
<script> 
	$(document).foundation();
</script> 