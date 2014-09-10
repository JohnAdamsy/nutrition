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
$c_person="";
$phone="";
$email="";

if($result)
{
  foreach($result as $row):
	$c_name=$row->company_name;
	$c_person=$row->contact_person;
	$email=$row->emailAddress;
	$phone=$row->phone;
	
  endforeach;
}?>
 <form class="form-horizontal" id="registration_form" novalidate action="<?php echo site_url()?>company/change_dets/<?php echo $item_id?>" style="margin:0px">
  <div class="control-group">
    Company Name: <?php echo $c_name?>
   </div><hr/>
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
    </div>
   </div>

   <!--<div class="modal-footer">-->
   <!-- <input type="hidden" name="save" value="contact">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary" >Save changes</button>-->
    
    <div class="form-actions" style="margin-top:0px; margin-bottom:0px">
        <input type="hidden" name="save" value="contact">
        <button type="submit" class="btn btn-success">Change Details</button>
      <!--  <button type="reset" class="btn">Resetform</button>-->
   <!-- </div>-->
  </div>
  </form>