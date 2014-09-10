<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<style type="text/css" title="currentStyle">
			@import "<?php echo base_url();?>css/demo_table.css";
			@import "<?php echo base_url();?>css/TableTools.css";
</style>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>js/ZeroClipboard.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
	var oTable = $('#big_table').dataTable( {
		"bProcessing": true,
		"bServerSide": true,				
		"sAjaxSource": '<?php echo base_url(); ?>company/getList',
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "iDisplayStart ":25,
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
			{ "bVisible": true, "bSearchable": true, "bSortable": true },
			{ "bVisible": true, "bSearchable": true, "bSortable": true },
			{ "bVisible": true, "bSearchable": true, "bSortable": true },
			{ "bVisible": true, "bSearchable": true, "bSortable": true },
			{ "bVisible": true, "bSearchable": false, "bSortable": true}
	        ],
			"fnRowCallback": function( nRow, aData, iDisplayIndex ) {
                    $('td', nRow).attr('nowrap','nowrap');
                    return nRow;
                    },
			 "iDisplayLength": 25,
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
$( "#cont_div" ).load( "<?php echo site_url()?>company/add_form" );
$( "#myModalLabel" ).html("Add Company");
$( "#add_b" ).click();
<?php }?>
});
var usessval="<?php echo trim($this ->session -> userdata('updt_msg'))?>";
if(usessval.length>0)
{	
<?php $this->session->unset_userdata('updt_msg');?>
$( "#cont_div" ).html(usessval);
$( "#myModalLabel" ).html("Update user account!!");
$( "#add_b" ).click();
}
var sessval="<?php echo trim($this ->session -> userdata('reg_msg'))?>";
if(sessval.length>0)
{	
<?php $this->session->unset_userdata('reg_msg');?>
$( "#cont_div" ).html(sessval);
$( "#myModalLabel" ).html("User account registration!!");
$( "#add_b" ).click();
}

});

function edit(url)
{
	<?php if($this->read_rights==="true"){?>
rl="<?php echo site_url()?>company/add_form/"+url;
$( "#cont_div" ).load(rl);
$( "#myModalLabel" ).html("Edit Company Details");
$( "#add_b" ).click();
<?php }?>
}
function editPerson(url)
{
<?php if($this->read_rights==="true"){?>	
rl="<?php echo site_url()?>company/edit_cperson/"+url;
$( "#cont_div" ).load(rl);
$( "#myModalLabel" ).html("Contact Person Details");
$( "#add_b" ).click();
<?php }?>
}

</script>
<?php if($this->read_rights==="true"){?>
<a href="#" class="btn btn-info" id="add_c">Add Company</a>
<a href="#myModal" role="button" class="btn btn-info" data-toggle="modal" id="add_b" style="display:none"></a>
<?php }?>
 
<!-- Modal height:600px -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Add Company</h3>
  </div>
  <div class="modal-body" id="cont_div" style="padding: 0px;">
  </div>
</div>

<?php if($this->read_rights==="true"){?>
<hr/>
<?php }?>

<?php echo $this->table->generate(); ?>