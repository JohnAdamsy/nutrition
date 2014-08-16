<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<style type="text/css" title="currentStyle">
			@import "<?php echo base_url();?>css/demo_table.css";
			@import "<?php echo base_url();?>css/TableTools.css";
</style>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>js/ZeroClipboard.js"></script>
<script type="text/javascript">
var oTable, oTable1;
    $(document).ready(function() {
	 oTable = $('#big_table').dataTable( {
		"bProcessing": true,
		"bServerSide": true,				
		"sAjaxSource": '<?php echo base_url(); ?>vehicles/getVehicle',
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "iDisplayStart ":10,
        "oLanguage": {
        "sProcessing": "<img src='<?php echo base_url(); ?>images/ajax-loader_dark.gif'>"
        },  
        "fnInitComplete": function() {
                //oTable.fnAdjustColumnSizing();
         },
    	"aaSorting": [[0, 'asc']],
		"bStateSave": true,
        "aoColumns": [
			{ "bVisible": true, "bSearchable": true, "bSortable": true },
			<?php if($this->read_rights==="true")
			{?>
			{ "bVisible": true, "bSearchable": false, "bSortable": true}
			<?php }?>
	        ],
			"fnRowCallback": function( nRow, aData, iDisplayIndex ) {
                    $('td', nRow).attr('nowrap','nowrap');
                    return nRow;
                    },
			 "iDisplayLength": 10,
	        "aLengthMenu": [[10, 25, 50,100], [10, 25, 50,100]],
           'fnServerData': function(sSource, aoData, fnCallback)
            {
              $.ajax
              ({
                'dataType': 'json',
                'type'    : 'POST',
                'url'     : sSource,
                'data'    : aoData,
                'success' : fnCallback
              });
            }
	} );
	
///	alert("< ?=$vis?>");
 oTable1 = $('#big_table1').dataTable( {
		"bProcessing": true,
		"bServerSide": true,				
		"sAjaxSource": '<?php echo base_url(); ?>vehicles/getMap',
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "iDisplayStart ":10,
        "oLanguage": {
        "sProcessing": "<img src='<?php echo base_url(); ?>images/ajax-loader_dark.gif'>"
        },  
        "fnInitComplete": function() {
                //oTable.fnAdjustColumnSizing();
         },
    	"aaSorting": [[0, 'asc']],
		"bStateSave": true,
        "aoColumns": [
			{ "bVisible": true, "bSearchable": true, "bSortable": true },
			{ "bVisible": true, "bSearchable": true, "bSortable": true},
			<?php if($this->read_rights==="true")
			{?>			
			{ "bVisible": true, "bSearchable": false, "bSortable": true}
			<?php }?>
	        ],
			"fnRowCallback": function( nRow, aData, iDisplayIndex ) {
                    $('td', nRow).attr('nowrap','nowrap');
                    return nRow;
                    },
			 "iDisplayLength": 10,
	        "aLengthMenu": [[10, 25, 50,100], [10, 25, 50,100]],
           'fnServerData': function(sSource, aoData, fnCallback)
            {
              $.ajax
              ({
                'dataType': 'json',
                'type'    : 'POST',
                'url'     : sSource,
                'data'    : aoData,
                'success' : fnCallback
              });
            }
	} );	
	
	
$( "#add_c" ).click(function() 
{
<?php if($this->read_rights==="true"){?>
$( "#cont_div" ).load( "<?php echo site_url()?>vehicles/add_form" );
$( "#myModalLabel" ).html("Add Vehicle");
$( "#add_b" ).click();
<?php }?>
});

$( "#add_d" ).click(function() 
{
<?php if($this->read_rights==="true"){?>
$( "#cont_div" ).load( "<?php echo site_url()?>vehicles/add_map" );
$( "#myModalLabel" ).html("Add new mapping");
$( "#add_b" ).click();
<?php }?>
});


var usessval="<?php echo trim($this ->session -> userdata('updt_msg'))?>";
if(usessval.length>0)
{	
<?php $this->session->unset_userdata('updt_msg');?>
$( "#cont_div" ).html(usessval);
$( "#myModalLabel" ).html("Update vehicle details!!");
$( "#add_b" ).click();
}
var sessval="<?php echo trim($this ->session -> userdata('reg_msg'))?>";
if(sessval.length>0)
{	
<?php $this->session->unset_userdata('reg_msg');?>
$( "#cont_div" ).html(sessval);
$( "#myModalLabel" ).html("Vehicle registration!!");
$( "#add_b" ).click();
}

});

function edit(url)
{
<?php if($this->read_rights==="true"){?>
rl="<?php echo site_url()?>vehicles/add_form/"+url;
$( "#cont_div" ).load(rl);
$( "#myModalLabel" ).html("Edit vehicle Details");
$( "#add_b" ).click();
<?php }?>
}
function editMap(url)
{
<?php if($this->read_rights==="true"){?>	
rl="<?php echo site_url()?>vehicles/add_map/"+url;
$( "#cont_div" ).load(rl);
$( "#myModalLabel" ).html("Edit vehicle Mapping");
$( "#add_b" ).click();
<?php }?>
}
function editPerson(url)
{
<?php if($this->read_rights==="true"){?>	
rl="<?php echo site_url()?>vehicles/edit_cperson/"+url;
$( "#cont_div" ).load(rl);
$( "#myModalLabel" ).html("Contact Person Details");
$( "#add_b" ).click();
<?php }?>
}
function deleteMapping(iid)
{
	<?php if($this->read_rights==="true"){?>
	  var r=confirm("Are you sure you want to delete this mapping?");
			if (r==true)
  			{
  				url="<?php echo base_url();?>vehicles/delMapping/"+iid;
				$.get(url, function(data) 
				{				
					oTable1.fnClearTable(0);
	                oTable1.fnReloadAjax('<?php echo base_url(); ?>vehicles/getMap');
					$("#cont_div").html(data);	
					$( "#myModalLabel" ).html("Delete vehicle mapping");
					$( "#add_b" ).click();	
				});
 		 	}
			<?php }?>	
}
function deleteItem(iid)
{
<?php if($this->read_rights==="true"){?>	
	  var r=confirm("Are you sure you want to delete this vehicle?");
			if (r==true)
  			{
  				url="<?php echo base_url();?>vehicles/delvehicle/"+iid;
				$.get(url, function(data) 
				{				
					oTable.fnClearTable(0);
	                oTable.fnReloadAjax('<?php echo base_url(); ?>vehicles/getVehicle');
					$("#cont_div").html(data);	
					$( "#myModalLabel" ).html("Delete vehicle");
					$( "#add_b" ).click();	
				});
 		 	}	
<?php }?>
}

</script>

<a href="#myModal" role="button" class="btn btn-info" data-toggle="modal" id="add_b" style="display:none"></a>
 
<!-- Modal height:600px -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Add Vehicle</h3>
  </div>
  <div class="modal-body" id="cont_div" style="padding: 0px;">
  </div>
</div>

<div class="row-fluid">
<div class="span5">
									<div class="widget-box transparent">
										<div class="widget-header widget-header-flat">
											<h4 class="lighter">
												<i class="icon-align-justify"></i>
												Registered Vehicles
											</h4>
                                            <?php if($this -> session -> userdata('userRights')===1||$this -> session -> userdata('userRights')===2){?>
									<a href="#" class="btn btn-info btn-small" id="add_c">Add Vehicle</a>
                                    
<a href="#myModal" role="button" class="btn btn-info" data-toggle="modal" id="add_b" style="display:none"></a><?php }?>
                                    
											<div class="widget-toolbar">
												<a href="#" data-action="collapse">
													<i class="icon-chevron-up"></i>
												</a>
											</div>
										</div>

										<div class="widget-body">
											<div class="widget-main padding-4">
												<?php 
												 $tmpl = array ( 'table_open'  => '<table id="big_table" border="0" cellpadding="0" cellspacing="0" class="mytable" style="font-size:10px; width:100%">' );
             $this->table->set_template($tmpl);
             $this->table->set_heading($v_header);
												
												echo $this->table->generate(); ?>
											</div><!--/widget-main-->
										</div><!--/widget-body-->
									</div><!--/widget-box-->
								</div>
<div class="span7">
									<div class="widget-box transparent">
										<div class="widget-header widget-header-flat">
											<h4 class="lighter">
												<i class="icon-star orange"></i>
												Vehicle Mapping<span style="font-size:11px; color:#000"> ( manage vehicle mappings to existing companies )</span>
											</h4>
                                            <?php if($this -> session -> userdata('userRights')===1||$this -> session -> userdata('userRights')===2){?>
											<a href="#" class="btn btn-info btn-small" id="add_d">Add Mapping</a><a href="#myModal" role="button" class="btn btn-info" data-toggle="modal" id="add_e" style="display:none"></a><?php }?>
        
											<div class="widget-toolbar">
												<a href="#" data-action="collapse">
													<i class="icon-chevron-up"></i>
												</a>
											</div>
										</div>

										<div class="widget-body">
											<div class="widget-main no-padding">
										<?php 
		$tmpl1 = array ( 'table_open'  => '<table id="big_table1" border="0" cellpadding="0" cellspacing="0" class="mytable" style="font-size:10px; width:100%">' );
             $this->table->set_template($tmpl1);
             $this->table->set_heading($m_header);
												
												echo $this->table->generate(); ?>
											</div><!--/widget-main-->
										</div><!--/widget-body-->
									</div><!--/widget-box-->
  </div>

								
</div>