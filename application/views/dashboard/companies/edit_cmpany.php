<!--[if !IE]>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<!--<![endif]-->

<!--[if IE]
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

<!--[if !IE]>-->

<script type="text/javascript">
    window.jQuery || document.write("<script src='<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>

<!--<![endif]

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='<?php echo base_url(); ?>assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<!--[endif]-->
<link href="<?php echo base_url(); ?>css/form_validation.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
<script>
$(document).ready(function () {

$('#registration_form').validate({
    rules: {
        inputCName: {
            minlength: 2,
            required: true
        },
        inputCcode: {
            required: true,
			 minlength: 2
            //email: true
        },
        inputOInfo: {
            minlength: 2,
            required: true
        },
        inputCType: {
           // minlength: 2,
            required: true
        }, 
		inputFType: {
           // minlength: 2,
            required: true
        }
    },
    highlight: function (element) {
        $(element).closest('.control-group').removeClass('success').addClass('error');
    },
    success: function (element) {
        element.text('OK!').addClass('valid')
            .closest('.control-group').removeClass('error').addClass('success');
    }
});
});
</script>
<?php 
$this->load->model("companytype",'company_type');
$c_name="";
$c_code="";
$c_type="";
$c_oinfo="";
$f_type="";

if($result)
{
  foreach($result as $row):
	$c_name=$row->company_name;
	$c_code=$row->company_code;
	$c_type=$row->company_type_id;
	//$det=array('company_type'=>$row->company_type_id);
	//$res=$this->company_type->get_companyName($c_type);	
	//$c_type=$this->company_type->get_companyName($det);
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
 <form class="form-horizontal" id="registration_form" novalidate action="<?php echo site_url()?>company/update_dets/<?php echo $item_id?>">
  <div class="control-group">
    <label class="control-label" for="inputCName">Company Name</label>
    <div class="controls">
      <input type="text" id="inputCName" name="inputCName" placeholder="Company name" value="<?php echo $c_name?>" style="width: 80% !important; height: 25px;" >
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputOInfo">Other Info</label>
    <div class="controls">
      <textarea name="inputOInfo" rows="5" id="inputOInfo" placeholder="Other info" style="width: 80% !important;" ><?php echo $c_oinfo?></textarea>
    </div>
  </div>
  

  <!--<div class="modal-footer">-->
   <!-- <input type="hidden" name="save" value="contact">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary" >Save changes</button>-->
    
    <div class="form-actions">
        <input type="hidden" name="save" value="contact">
        <button type="submit" class="btn btn-success">Submit Details</button>
      <!--  <button type="reset" class="btn">Resetform</button>-->
   <!-- </div>-->
  </div>
  </form>