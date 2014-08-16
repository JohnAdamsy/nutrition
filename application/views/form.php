<!--echo '<html>-->
<script type="text/javascript">
	$(function() {
		// Fast and dirty
		$("article.tabs section > h2").click(function() {
			$("article.tabs section").removeClass("ON");
			$(this).closest("section").addClass("ON");
		});
		string ="<h1><?php if($main_title){	echo $main_title; } else {?> Dashboard <?php }?><small><i class='icon-double-angle-right'></i> <?php if($sub_title){echo $sub_title;}else {?> overview &amp; stats <?php }?> </small></h1>";		
		$("#main_title").html(string);		
	});
</script><!--
<style>
	select, input[type="file"] 
	{
    height: 20px;	
    }
	</style>
	</html>';-->
<?php

//echo $form;
$this -> load -> view($form,$form_id);
?>