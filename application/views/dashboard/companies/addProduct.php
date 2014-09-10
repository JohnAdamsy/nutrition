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
        descr: {
            minlength: 2,
            required: true
        }, 
		brand: {
            minlength: 2,
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
$b_name="";
$description="";
if($result)
{
  foreach($result as $row):
	$b_name=$row->brand_name;
	$description=$row->description;	
  endforeach;
}
?>
 <form class="form-horizontal" id="registration_form" novalidate action="<?php echo site_url()?>company/add_prod/<?php echo $item_id?>" style="margin:0px">
 <div class="control-group">
    Company Name: <?php echo $c_name?>
   </div><hr/>
  <div class="control-group">
    <label class="control-label" for="brand">Brand Name</label>
    <div class="controls">
      <input type="text" id="brand" name="brand" placeholder="Brand name" value="<?php echo $b_name?>" style="width: 80% !important; height: 25px;">
    </div>
  </div>
   <div class="control-group">
    <label class="control-label" for="descr">Description</label>
    <div class="controls">
      <textarea name="descr" rows="5" id="descr" style="width: 82% !important;" placeholder="Brief product description"><?php echo $description?></textarea>
    </div>
  </div>

   <!--<div class="modal-footer">-->
   <!-- <input type="hidden" name="save" value="contact">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary" >Save changes</button>-->
    
    <div class="form-actions" style="margin-top:0px; margin-bottom:0px">
        <input type="hidden" name="save" value="contact">
        <button type="submit" class="btn btn-success">Add/ Edit Brand</button>
      <!--  <button type="reset" class="btn">Resetform</button>-->
   <!-- </div>-->
  </div>
  </form>