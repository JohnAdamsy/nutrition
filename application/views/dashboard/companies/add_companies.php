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
 <!--
<link href="< ?php echo base_url(); ?>css/form_validation.css" rel="stylesheet">-->
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
        },
		 c_person: {
            minlength: 2,
            required: true
        }, 
		email: {
            minlength: 2,
            required: true,
            email: true
        }, 
		phone: {
            minlength: 2,
            required: true
        },
		addr: {
            minlength: 2,
            required: true,
            //email: true
        }, 
		loc: {
            minlength: 2,
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
$c_name="";
$c_code="";
$c_type="";
$c_oinfo="";
$f_type="";
$c_person="";
$phone="";
$email="";
$loc="";
$addr="";

if($result)
{
  foreach($result as $row):
	$c_name=$row->company_name;
	$c_code=$row->company_code;
	$c_type=$row->company_type_id;
	$f_type=$row->foodtype;
	$c_oinfo=$row->other_info;
	$c_person=$row->contact_person;
	$addr=$row->address;
	$loc=$row->location;
	$email=$row->emailAddress;
	$phone=$row->phone;
	
  endforeach;
}?>
 <form class="form-horizontal" id="registration_form" novalidate action="<?php echo site_url()?>company/add/<?php echo $item_id?>" style="margin:0px">
  <div class="control-group">
    <label class="control-label" for="inputCName">Company Name</label>
    <div class="controls">
      <input type="text" id="inputCName" name="inputCName" placeholder="Company name" value="<?php echo $c_name?>" style="width: 80% !important; height: 25px;" >
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputCcode">Company Code</label>
    <div class="controls">
      <input type="text" id="inputCcode" name="inputCcode" placeholder="Company code" value="<?php echo $c_code?>" style="width: 80% !important; height: 25px;" >
    </div>
  </div>
  <?php if($item_id===""){?>
   <div class="control-group">
    <label class="control-label" for="c_person">Main contact person</label>
    <div class="controls">
      <input type="text" id="c_person" name="c_person" placeholder="Contact person" value="<?php echo $c_person?>" style="width: 80% !important; height: 25px;" >
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="email">Email Address (contact person)</label>
    <div class="controls">
      <input type="text" id="email" name="email" placeholder="Email Address" value="<?php echo $email?>" style="width: 80% !important; height: 25px;" >
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="addr">Phone number (Contact person)</label>
    <div class="controls">
      <input type="text" id="phone" name="phone" placeholder="Phone number" value="<?php echo $phone?>" style="width: 80% !important; height: 25px;" >
    </div><?php }?>
  </div>
  <div class="control-group">
    <label class="control-label" for="addr">Location</label>
    <div class="controls">
      <input type="text" id="loc" name="loc" placeholder="Location" value="<?php echo $loc?>" style="width: 80% !important; height: 25px;" >
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="addr">Address</label>
    <div class="controls">
      <input type="text" id="addr" name="addr" placeholder="Physical Address" value="<?php echo $addr?>" style="width: 80% !important; height: 25px;" >
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="inputCType">Company Type</label>
    <div class="controls">
    <select name="inputCType" id="inputCType" style="width: 82% !important; height: 25px;" >
      <option value="" <?php if (!(strcmp("", "$c_type"))) {echo "selected=\"selected\"";} ?>>Select One</option>
       <?php foreach ($comptypes as $key) 
		{?>
         <option value="<?php echo $key->company_type_id?>" <?php if (!(strcmp("$key->company_type_id", "$c_type"))) {echo "selected=\"selected\"";} ?>><?php echo $key->company_type_name?></option>
		<?php }   ?>  
	</select>  
                    
                    
          
                    
    </div>
  </div>
  <?php if($item_id===""){?>
  <div class="control-group">
    <label class="control-label" for="inputFType">Food Type</label>
    <div class="controls">
    <select name="inputFType" id="inputFType" style="width: 82% !important; height: 25px;" >
      <option value="" <?php if (!(strcmp("", "$f_type"))) {echo "selected=\"selected\"";} ?>>Select One</option>
      <option value="0" <?php if (!(strcmp(0, "$f_type"))) {echo "selected=\"selected\"";} ?>>N/A</option> 
      
       <?php foreach ($foodtype as $key) 
		{		
		 $str=$key->vehicleId;?>
         <option value="<?php echo $str ?>" <?php
		  if (!(strcmp("$str", "$f_type"))) {echo "selected=\"selected\"";} ?>><?php echo $key->vehicleName?></option>
		<?php }   ?> 
	</select>  
                    
                    
          
                    
    </div>
  </div>
  <?php }?>
  <div class="control-group">
    <label class="control-label" for="inputOInfo">Other Info</label>
    <div class="controls">
      <textarea name="inputOInfo" rows="8" id="inputOInfo" placeholder="Other info" style="width: 80% !important; "  ><?php echo $c_oinfo?></textarea>
    </div>
  </div>
  

  <!--<div class="modal-footer">-->
   <!-- <input type="hidden" name="save" value="contact">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary" >Save changes</button>-->
    
    <div class="form-actions" style="margin-top:0px; margin-bottom:0px">
        <input type="hidden" name="save" value="contact">
        <button type="submit" class="btn btn-success">Submit Details</button>
      <!--  <button type="reset" class="btn">Resetform</button>-->
   <!-- </div>-->
  </div>
  </form>