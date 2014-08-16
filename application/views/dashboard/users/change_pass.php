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
        <script src="< ?php echo base_url()?>js/js_libraries.js"></script>
<link href="< ?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" />-->

<!--<script src="< ?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js"></script>
<link href="< ?php echo base_url()?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />

<link href="< ?php echo base_url(); ?>css/form_validation.css" rel="stylesheet">-->
<script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
<script>
$(document).ready(function () {

$('#registration_form').validate({
    rules: {
        opass: {
            minlength: 6,
            required: true
        },
        npass: {
            required: true,
			minlength: 6,
        },
        cpass: {
            minlength: 6,
            required: true,
			equalTo: "#npass",
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
<form class="form-horizontal" id="registration_form" novalidate action="<?php echo site_url()?>Users/changePass/<?php echo $usersID?>" style="margin:0px; width:99%">
  <div class="control-group">
    <label class="control-label" for="opass">Old Password</label>
    <div class="controls">
      <input type="password" id="opass" name="opass" placeholder="Old Passwword" style="width: 80% !important; height: 25px;" >
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="npass">New Password</label>
    <div class="controls">
      <input type="password" id="npass" name="npass" placeholder="New Password" style="width: 80% !important; height: 25px;" >
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputCType">Confirm Password</label>
    <div class="controls">
      <input type="password" id="cpass" name="cpass" placeholder="Confirm Password" style="width: 80% !important; height: 25px;"  />
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