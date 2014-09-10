<!-- This is the template page. It is the root view in which all other mini views are loaded.-->
<?php
$is_logged_in=$this -> session -> userdata('logged_in');
if(empty($is_logged_in))
{
	redirect('c_front/access_site');
}
ob_start();
$sessionEmail = $this -> session -> userdata('email');
$accessLevel = $this -> session -> userdata('userRights');
$vehicle = $this -> session -> userdata('vehicle');
$affiliation = $this -> session -> userdata('affiliation');
$logged_user_id=$this -> session -> userdata('userID');
$this->userVehicle=$vehicle;
$this->my_vehicles=$this -> session -> userdata('my_vehicles');

$filter=array('role_id'=>$accessLevel);


//print_r($filter); die;
$res=$this->userrole->get_details($filter);//
foreach($res as $row){ $userRights=$row->role;}
$userRights=($userRights==="sa")? "Super Admin": $userRights;
?>
<!DOCTYPE html>
<html lang="en">
		<?php $this -> load -> view('sections/newheader'); ?>
        <!--class="skin-1"-->
        
<script type="text/javascript">
function changeAccPass()
{
url='<?php echo  $logged_user_id?>';
$( "#cont_div1" ).load( "<?php echo site_url()?>Users/change_pass/"+url );
$( "#myModalLabel1" ).html("Change account password");
$( "#add_b1" ).click();
}
</script>
<body>
<a href="#chngepass" role="button" class="btn btn-info" data-toggle="modal" id="add_b1" style="display:none"></a>
     
<div id="chngepass" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel1">Change account password</h3>
  </div>
  <div class="modal-body" id="cont_div1" style="padding: 0px;">
  </div>
</div>
   
<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="<?php echo base_url()?>" class="brand" style="padding:0px;">
                    
					<div style="padding:0px; width:474px">
                    <div style="width:14%;float: left">
                    <!--<span style="display:block; float:left">-->
                    <img src="<?php echo base_url(); ?>images/coat_of_arms-resized.png" style="width:60px; height:50px; padding-right:5px" />
                 <!--   </span>-->
                    </div>
                    <div style="width:85%;float: left; ">
					<span style="display:block; background:transparent; border:none; font-weight:bold;font-size: 16px; text-wrap:none; padding-top:3px;" class="red">Ministry Of Health
                    </span>
                    <span style="display:block; background:transparent; border:none; font-weight:bold; font-size:medium;font-size: 13px; text-wrap:none" class="white">Department of Preventive &amp; Promotive Health</span>
                     <span  class="blue" style="display:block; background:transparent; border:none; font-weight:bold; font-size:small;font-size: 13px; text-wrap:none">Division of Family Health, Nutrition &amp; Dietetics Unit</span>
                     </div>
					</div>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						<!--<li class="grey"></li>
						<li class="green"></li>-->

						<li class="grey">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url()?>assets/avatars/avatar2.png"/>
								<span class="user-info" style="text-wrap:none"><small>Welcome,</small><?php echo trim($sessionEmail);?>						</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>
									<a href="#">
										<i class="icon-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>
                              <?php  
                               if(count($this->my_vehicles)>1)
								{?>
                                 <li>
									<a href="<?php echo base_url()?>c_front/chooseVehicle">
										<i class="icon-exchange "></i>
										Switch Vehicle
									</a>
								</li>
                              <?php
								}
            					?>                    
                                <?php //if($sessionEmail!="admin")
		{?> 
                                <li>
									<a href="javascript:changeAccPass()">
										<i class="icon-user"></i>
										Change Password
									</a>
								</li>
                                
                                
               <?php }?>                 
                                
                                

								<li class="divider"></li>

								<li>
									<a href="<?php echo base_url().'c_auth/logout'?>">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>
			<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>
            <?php $this -> load -> view('sections/sidebar'); ?>
			<div class="main-content">
        	<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home home-icon"></i>
							<a href="<?php echo base_url()?>">Home</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>
						<li class="active">
                        
                        
                        <?php
						$items=array('Maize','Wheat','Salt','Sugar','Oil');
						//echo $this->userVehicle;
						$val=array_search($this->userVehicle,$items);
						$str=$val==""?"comp":"veh";
						
						 if($str==="veh")
						 {?>
                        Current Vehicle: <?=$this->userVehicle?>
                        <?php }
						else
						{?>
                         Company Type: <?=$affiliation?>
                        <?php } ?>
                        
                        
                        <span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span></li>
                        <li class="active" style="margin-left:1em">Access Rights: <?=$userRights?></li>
					</ul><!--.breadcrumb-->

					<div class="nav-search" id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="icon-search nav-search-icon"></i>
							</span>
						</form>
					</div><!--#nav-search-->
				</div>
               <div class="page-content"> 
                              
					<div class="page-header position-relative" id="main_title">
						<h1>
							  <?php if($mh_title)
								{
									echo $mh_title;
								}
								else
								{?>
								Dashboard
                                <?php 
								}?>
							<small>
								<i class="icon-double-angle-right"></i>
                                <?php if($h_title)
								{
									echo $h_title;
								}
								else
								{?>
								overview &amp; stats
                                <?php 
								}?>
							</small>
						</h1>
					</div><!--/.page-header-->
               <div class="row-fluid">
<div class="span12">
<!--PAGE CONTENT BEGINS-->	
			
<?php
$msg=$this -> session -> userdata('update_msg');
if($msg!=="")
{
?>
<script type="text/javascript">	
	$(function(){
		update_e_msg="<?php echo $msg;?>";
		//alert(update_e_msg);
		if(update_e_msg)
		{
		//	alert(update_e_msg);
			$( "#cont_div1" ).html(update_e_msg);
		    $( "#myModalLabel1" ).html("Duplicate Record error!!!");
		    $( "#add_b1" ).click();
			<?php $this->session->unset_userdata('update_msg');?>
		}
	});
</script>
<?php
}

if($this->data['form'])
{
	echo $this->data['form'];
}
else if($content_page)
{
	if($content_page =="chart")
	{
		$this -> load -> view('sections/chart',$chart_data);
	}
	if($content_page =="oil/fortifiedOil_B1_1" ||$content_page =="wheat/productionWheat" ||$content_page =="maize/productionMaize" ||$content_page =="oversight/adddatagain" ||$content_page =="oversight/adddatakebs" ||$content_page =="oversight/adddatanl" ||$content_page =="oversight/adddataco")
	{
		$this -> load -> view($content_page);
	}
	else{
		$this -> load -> view('dashboard/'.$content_page);
		$this -> load -> view('dashboard/load_scripts');
	}
	
}
?>

<!--PAGE CONTENT ENDS-->
</div><!--/.span-->
</div><!--/.row-fluid-->
               
                 
     
				</div><!--/.page-content-->
     	<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box" style="height:auto">
					
                    
            <section class="form-sidebar">
			<h3><strong>Actions</strong></h3>
			<section class="buttons">
			<!--	<a title="To Save entered info." id="submit_form_data" class="awesome blue medium"><span style="color:#FFF">Submit</span></a>-->
				<a title="To close the form." id="close_opened_form" class="awesome red medium"><span style="color:#FFF">Close</span></a>
			<!--	<a title="To get PDF version of the form."  class="awesome green medium"><span style="color:#FFF">PDF</span></a>-->
			</section>
		</section><!-- End of Form-SideBar -->
						
					</div>
				</div><!--/#ace-settings-container-->
			</div><!--/.main-content-->
		</div><!--/.main-container-->   
	</body>
	<!--
	End of Body
	-->
    <?php $this -> load -> view('sections/newfooter'); 
if($content_page) {
	$this -> load -> view('dashboard/load_scripts');
	}?>

</html>