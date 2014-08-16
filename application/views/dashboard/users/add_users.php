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
        names: {
            minlength: 2,
            required: true
        },
        uname: {
            required: true,
			minlength: 2
        },
        userEmail: {
            //minlength: 2,
            required: true,
            email: true
        },
        rights: {
           // minlength: 2,
            required: true
        }, 
		/*roles: {
           // minlength: 2,
            required: true
        }*/
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
$usersFullnames="";
$userEmail="";
$role="";
$rights="";

if($result)
{
  foreach($result as $row):
	$usersFullnames=$row->usersFullnames;
	$userEmail=$row->userEmail;
	$rights=$row->rights;
	$role=$row->role;
  endforeach;
}?>
 <form class="form-horizontal" id="registration_form" novalidate action="<?php echo site_url()?>Users/register" style="margin:0px">
  <div class="control-group">
    <label class="control-label" for="names">Full Names</label>
    <div class="controls">
      <input type="text" id="names" name="names" placeholder="Full Names" value="<?php echo $usersFullnames?>" style="width: 80% !important; height: 25px;" >
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputCType">Email</label>
    <div class="controls">
      <input type="text" id="userEmail" name="userEmail" placeholder="User Email" value="<?php echo $usersFullnames?>" style="width: 80% !important; height: 25px;"  />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="rights">Rights</label>
    <div class="controls">
    <select name="rights" id="rights" style="width: 82% !important; height: 25px;" >
      <option value="" selected="selected" <?php if (!(strcmp("", "$rights"))) {echo "selected=\"selected\"";} ?>>Select One</option>
      <option value="0" selected="selected" <?php if (!(strcmp(0, "$rights"))) {echo "selected=\"selected\"";} ?>>N/A</option> 
      
       <?php foreach ($foodtype as $key) 
		{?>
         <option value="<?php echo $key->role_id?>" selected="selected" <?php
		 $str=$key->role_id;		 
		  if (!(strcmp("$str", "$rights"))) {echo "selected=\"selected\"";} ?>><?php echo $key->role?></option>
		<?php }   ?> 
	</select>        
                    
    </div>
  </div>
  <!--<div class="control-group">
    <label class="control-label" for="inputOInfo">User Role</label>
    <div class="controls">
      <select name="roles" id="roles" style="width: 82% !important; height: 25px;" >
        <option value="" selected="selected" < ?php if (!(strcmp("", "$role"))) {echo "selected=\"selected\"";} ?>>Select One</option>
        < ?php foreach ($roles as $key) 
		{?>
        <option value="< ?php echo $key->role_id?>" selected="selected" < ?php if (!(strcmp("$key->role_id", "$role"))) {echo "selected=\"selected\"";} ?>>< ?php echo $key->role?></option>
        < ?php }   ?>
      </select>
    </div>
  </div>-->
  

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