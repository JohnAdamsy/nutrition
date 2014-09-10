<?php 
$c_name="";
$c_code="";
$c_type="";
$c_oinfo="";
$f_type="";
$addr="";
$loc="";
if($result)
{	
$this->load->model("companytype",'company_type');
  foreach($result as $row):
	$c_name=$row->company_name;
	$c_code=$row->company_code;
	$c_type=$row->company_type_id;
	$addr=$row->address;
	$loc=$row->location;	
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
  endforeach;
}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css" title="currentStyle">
			@import "<?php echo base_url();?>css/demo_table.css";
			@import "<?php echo base_url();?>css/TableTools.css";
.dataTables_info {
width: 30%;
}
</style>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>js/ZeroClipboard.js"></script>
<script type="text/javascript">	
var user="<?php echo $this ->session -> userdata('companyID')?>";
$(document).ready(function() {
	oTable = $('#big_table').dataTable( {
		"bProcessing": true,
		"bServerSide": true,				
		"sAjaxSource": '<?php echo base_url(); ?>company/getBrands/<?php echo $company_id?>',
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
     //   "iDisplayStart ":25,
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

<?php if($this->read_rights==="true"){?>
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
if(user>1)
{	
$( "#cont_div" ).load( "<?php echo site_url()?>company/addProduct" );
}
else
{
	$( "#cont_div" ).html( "Operation not possible. Only the account administrator can do this." );
}
$( "#myModalLabel" ).html("Add Product/ Brand");
$( "#add_b" ).click();
<?php }?>
});

});


function edit(url)
{	
<?php if($this->read_rights==="true"){?>
	if(user>1)
{
$( "#cont_div" ).load( "<?php echo site_url()?>company/addProduct/"+url );
}
else
{
	$( "#cont_div" ).html( "Operation not possible. Only the account administrator can do this." );
}
$( "#myModalLabel" ).html("Edit Product/ Brand");
$( "#add_b" ).click();
<?php }?>
}
function deleteItem(iid)
{
	
<?php if($this->read_rights==="true"){?>
		if(user>1)
		{
			var r=confirm("Are you sure you want to delete this Product Brand?");
			if (r==true)
  			{
  				url="<?php echo base_url();?>company/delProduct/"+iid;
				$.get(url, function(data) 
				{
					oTable.fnClearTable(0);
	                oTable.fnReloadAjax('<?php echo base_url(); ?>company/getBrands/<?php echo $company_id?>');
					$("#cont_div").html(data);	
					$( "#myModalLabel" ).html("Delete Product/ Brand");
					$( "#add_b" ).click();
				});
 		 	}
		}
		else
		{
			$("#cont_div").html( "Operation not possible. Only the account administrator can do this." );
			$( "#myModalLabel" ).html("Delete Product/ Brand");
			$( "#add_b" ).click();
		}
	<?php }?>
}
</script>
</head>

<body>
<div class="control-group">
 <a href="#myModal" role="button" class="btn btn-info" data-toggle="modal" id="add_b" style="display:none"></a>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Edit Details</h3>
  </div>
  <div class="modal-body" id="cont_div" style="padding:0px">
 

</div></div>
  
  </div>
<div class="row-fluid">
<div class="span5">
									<div class="widget-box transparent">
										<div class="widget-header widget-header-flat">
											<h4 class="lighter">
												<i class="icon-star orange"></i>
												Company Details
											</h4>
											<!--<a href="#" class="btn btn-info btn-small" id="add_c">Edit Details</a>-->
											<div class="widget-toolbar">
												<a href="index.html#" data-action="collapse">
													<i class="icon-chevron-up"></i>
												</a>
											</div>
										</div>

										<div class="widget-body">
											<div class="widget-main no-padding">
												 <div class="control-group">
    Company Name: <?php echo $c_name?>
  </div>
  <div class="control-group">
   Company Code: <?php echo $c_code?>
  </div>
  <div class="control-group">
   Location: <?php echo $loc ?> 
  </div>
  <div class="control-group">
   Physical Address: <?php echo $addr ?> 
  </div>
											</div><!--/widget-main-->
										</div><!--/widget-body-->
									</div><!--/widget-box-->
  </div>

								<div class="span7">
									<div class="widget-box transparent">
										<div class="widget-header widget-header-flat">
											<h4 class="lighter">
												<i class="icon-align-justify"></i>
												Brands
											</h4>
                                            
<?php if($this->read_rights==="true"){?>
									<a href="#" class="btn btn-info btn-small" id="add_c">Add Brand</a>
                                    <?php }?>
											<div class="widget-toolbar">
												<a href="index.html#" data-action="collapse">
													<i class="icon-chevron-up"></i>
												</a>
											</div>
										</div>

										<div class="widget-body">
											<div class="widget-main padding-4">
												<?php echo $this->table->generate(); ?>
											</div><!--/widget-main-->
										</div><!--/widget-body-->
									</div><!--/widget-box-->
								</div>
</div>
 
 
</body>
</html>