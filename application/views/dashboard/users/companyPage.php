<?php 
$c_name="";
$c_code="";
$c_type="";
$c_oinfo="";
$f_type="";
if($result)
{	
$this->load->model("companytype",'company_type');
  foreach($result as $row):
	$c_name=$row->company_name;
	$c_code=$row->company_code;
	$c_type=$row->company_type_id;
	//$det=array('company_type_id'=>$c_type);
	$res=$this->company_type->get_companyName($c_type);	
	foreach($res as $row)
	{
		$c_type=$row->company_type_name;
	}
	$f_type=$row->foodtype;
	if($f_type==0)
	{
		$f_type="N/A";
	}
	$c_oinfo=$row->other_info;
  endforeach;
}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
$(document).ready(function() {
$( "#add_c" ).click(function() 
{
$( "#cont_div" ).load( "<?php echo site_url()?>company/edit_user/<?php echo $company_id?>" );
$( "#add_b" ).click();
});

});
</script>
</head>

<body>
<div class="control-group">
  
<a href="#" class="btn btn-info btn-small" id="add_c">Edit Details</a>
<a href="#myModal" role="button" class="btn btn-info" data-toggle="modal" id="add_b" style="display:none"></a>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Edit Details</h3>
  </div>
  <div class="modal-body" id="cont_div">
 

</div></div>
  
  </div>
  <div class="control-group">
    Company Name: <?php echo $c_name?>
  </div>
  <div class="control-group">
   Company Code: <?php echo $c_code?>
  </div>
  <div class="control-group">
   Company Type: <?php echo $c_type ?> 
  </div>
  <div class="control-group">
   Food Type: <?php echo $f_type ?> 
  </div>
  <div class="control-group">
  Other Info
    <div class="controls">
      <?php echo $c_oinfo?>
    </div>
  </div>
 
</body>
</html>