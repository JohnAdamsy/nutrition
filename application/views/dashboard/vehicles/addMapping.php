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
        company: {
            required: true
        }, 
		vehicle: {
            required: true,
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
$comp="";
$veh="";
if($result)
{
  foreach($result as $row):
	$comp=$row->company_id;
	$veh=$row->vehicle_id;	
  endforeach;
}
?>
 <form class="form-horizontal" id="registration_form" novalidate action="<?php echo site_url()?>vehicles/addMapping/<?php echo $item_id?>" style="margin:0px">
 
  <div class="control-group">
  <label class="control-label" for="descr">Company</label>
    <div class="controls">
      <label for="company"></label>
      <select name="company" id="company">
       <option value="" <?php if (!(strcmp("", "$comp"))) {echo "selected=\"selected\"";} ?>>Select One</option>
       <?php foreach ($companies as $key) :
		
			if($key->company_id>1)
			{?>
         <option value="<?php echo $key->company_id?>" <?php if (!(strcmp("$key->company_id", "$comp"))) {echo "selected=\"selected\"";} ?>><?php echo $key->company_name?></option>
		<?php } 
		endforeach;?>  
      </select>
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="descr">Vehicle</label>
    <div class="controls">
      <label for="vehicle"></label>
      <select name="vehicle" id="vehicle">
        <option value="" <?php if (!(strcmp("", "$veh"))) {echo "selected=\"selected\"";} ?>>Select One</option>
       <?php foreach ($c_vehicles as $key) 
		{?>
         <option value="<?php echo $key->vehicleId?>" <?php if (!(strcmp("$key->vehicleId", "$veh"))) {echo "selected=\"selected\"";} ?>><?php echo $key->vehicleName?></option>
		<?php }   ?>  
      </select>
    </div>
  </div>

   <!--<div class="modal-footer">-->
   <!-- <input type="hidden" name="save" value="contact">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary" >Save changes</button>-->
    
    <div class="form-actions" style="margin-top:0px; margin-bottom:0px">
        <input type="hidden" name="save" value="contact">
        <button type="submit" class="btn btn-success">Add Mapping</button>
      <!--  <button type="reset" class="btn">Resetform</button>-->
   <!-- </div>-->
  </div>
  </form>