<?php
$is_logged_in=$this -> session -> userdata('logged_in');
if(empty($is_logged_in))
{
	redirect('c_front/access_site');
}
ob_start();
$this->my_vehicles=$this -> session -> userdata('my_vehicles');
$this->load->model("foodtypes",'f');
?>
<!DOCTYPE html>
<html lang="en">
<head>

<!--basic scripts-->

<!--[if !IE]>-->

<script src="<?php echo base_url(); ?>js/jquery-1.11.0.min.js"></script>

<!--<![endif]-->

<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->


<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<!--page specific plugin scripts-->

<!--ace scripts-->

<script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/ace.min.js"></script>
<script src="<?php echo base_url();?>js/jquery.validate.js"></script>
<script>
$(document).ready(function () 
{
$("#vehiclechooser").validate({	
	// validate  form on keyup and submit
		rules: {		
				'selectedvehicle[]': 
				{
                required: true
            	},				
			   },
		messages: {
			
			'selectedvehicle[]': {required: "*Please select a vehicle to proceed"}	
		},
		errorPlacement: function( label, element ) {
	if( element.attr( "name" ) === "selectedvehicle[]") 
	{
		element.parent().append( label ); // this would append the label after all your checkboxes/labels (so the error-label will be the last element in <div class="controls"> )
	}
	else {
		label.insertAfter( element ); // standard behaviour
	}
}
	});	
});
</script>
</head>
<?php $this->load->view("assets/asset") ?>
<body class="login-layout">
<div class="main-container container-fluid">
<div class="main-content">
<div class="row-fluid">
<div class="span12">
<div class="login-container" style="width: 580px;">
<div class="row-fluid" >
    <div class="center">
        <h1>
            <!--<i class="icon-leaf green"></i>-->
            <img src="<?php echo base_url(); ?>images/coat_of_arms-resized.png" style="width:100px; height:100px;" />
            <span style="display: block;" class="red ">Ministry Of  Health</span>
            <span class="white">Department of Preventive and Productive Health Services</span>
        </h1>
        <h4 class="blue">Division of Family Health, Nutrition &amp; Dietetics Unit</h4>
    </div>
</div>
<div class="space-6"></div>

<div class="row-fluid">
    <div class="position-relative">
        <div id="login-box" class="login-box visible widget-box no-border">
            <div class="widget-body">
                <div class="widget-main">
                   <div class="space-6"></div>
					
					<h4 class="header blue lighter bigger">
                        <i class="icon-coffee green"></i>
                        Please select a vehicle type to proceed</h4>
                    <form method="post" id="vehiclechooser" class="form-horizontal" action="<?php echo base_url().'c_auth/proceedToAccount'?>" novalidate>
                        <fieldset>
                       <label for="selectedvehicle">
                           <?php						   
						    foreach($this->my_vehicles as $row):?>
                           <input  name="selectedvehicle[]" type="radio" value="<?php echo $row->vehicle_company_id?>"><span class="lbl"> <?php echo $this->f->get_vehicleName($row->vehicle_id)?></span><br>
                           <?php endforeach;?>
</label>
                            <div class="space"></div>

                            <div class="clearfix">

                               <button type="submit" class="width-35 pull-right btn btn-small btn-primary">
                                                                       Proceed <i class="icon-arrow-right"></i>
                              </button>
                            </div>

                          <div class="space-4"></div>
                        </fieldset>
                    </form>
                  
                </div><!--/widget-main-->

            </div><!--/widget-body-->
        </div><!--/login-box--><!--/forgot-box--><!--/signup-box-->
    </div><!--/position-relative-->
</div>
</div>
</div><!--/.span-->
</div><!--/.row-fluid-->
</div>
</div><!--/.main-container-->

<?php $this->load->view("assets/footerVehicle") ?>