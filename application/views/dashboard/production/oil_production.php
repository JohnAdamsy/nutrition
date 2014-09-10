<?php 
$sel_compid=1;
if($sessionEmail!="admin")
		{
		 $sel_compid= $this ->session -> userdata('companyID');
		}
?>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<style type="text/css" title="currentStyle">
			@import "<?php echo base_url();?>css/demo_table.css";
			@import "<?php echo base_url();?>css/TableTools.css";
</style>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>js/ZeroClipboard.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/TableTools.js"></script> 

<script type="text/javascript">
    $(document).ready(function() {
		user=$('#oilFactory1').val();
	    oTable = $('#big_table').dataTable( {
		"bProcessing": true,
		"bServerSide": true,				
		"sAjaxSource": '<?php echo base_url(); ?>c_oil/getoilData/'+user,
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "iDisplayStart ":50,
        "oLanguage": {
        "sProcessing": "<img src='<?php echo base_url(); ?>images/ajax-loader_dark.gif'>"
        },  
        "fnInitComplete": function() {
                //oTable.fnAdjustColumnSizing();
         },
    	"aaSorting": [[0, 'asc']],
			"sDom": 'T<"clear">lfrtip',
		"oTableTools": {
			"sSwfPath": "<?php echo base_url()?>swf/copy_csv_xls_pdf.swf",
			"aButtons": [
			{
					"sExtends": "pdf",
					"sPdfOrientation": "landscape",
					"sPdfMessage": "Your custom message would go here."
				}
			,"xls","csv"]	},
		"bStateSave": false,
        "aoColumns": [
			{ "bVisible": true, "bSearchable": false, "bSortable": true },
			{ "bVisible": true, "bSearchable": true, "bSortable": true },
			{ "bVisible": true, "bSearchable": true, "bSortable": true },
			{ "bVisible": true, "bSearchable": true, "bSortable": true },
			{ "bVisible": true, "bSearchable": true, "bSortable": true },
			{ "bVisible": true, "bSearchable": true, "bSortable": true },
			{ "bVisible": true, "bSearchable": true, "bSortable": true },
			{ "bVisible": true, "bSearchable": true, "bSortable": true },
			{ "bVisible": true, "bSearchable": true, "bSortable": true },
			{ "bVisible": true, "bSearchable": true, "bSortable": true },
			{ "bVisible": true, "bSearchable": true, "bSortable": true },
			{ "bVisible": true, "bSearchable": true, "bSortable": true },
			{ "bVisible": true, "bSearchable": true, "bSortable": true },
			{ "bVisible": true, "bSearchable": true, "bSortable": true },
			{ "bVisible": true, "bSearchable": false, "bSortable": true}
	        ],
		//	"oLanguage": {"sSearch": "Search all columns:"},
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
	
	$("#harvestYear").change( function() { fnFilterColumn("harvestYear",1 ); } );
	$("#viewMonth").change( function() { fnFilterColumn("viewMonth", 2 ); } );
	$("#vehicleFactory").change(function() { fnFilterGlobal("oil");} );
		
$( "#add_c" ).click(function() 
{
$( "#cont_div" ).load( "<?php site_url()?>company/add_form" );
$( "#myModalLabel" ).html("Add Company");
$( "#add_b" ).click();
});

});

function edit(url)
{
rl="<?php site_url()?>company/add_form/"+url;
$( "#cont_div" ).load(rl);
$( "#myModalLabel" ).html("Edit Company Details");
$( "#add_b" ).click();
}


</script>
<a href="#myModal" role="button" class="btn btn-info" data-toggle="modal" id="add_b" style="display:none"></a>
<label for="viewCompany">Company: </label>
<input name="oilFactory1" id="oilFactory1" type="hidden" value="<?php echo $sel_compid?>" />
            <select name="vehicleFactory" id="vehicleFactory" <?php if($sel_compid>1){?>disabled="disabled"	<?php }?>>

                    <option value="">Select One</option>
                   <?php foreach($this->company_list as $row):?>
                    <option value="<?php echo $row->company_id?>" <?php if (!(strcmp("$row->company_id", "$sel_compid"))) {echo "selected=\"selected\"";} ?>><?php echo $row->company_name?></option>
                <?php endforeach;?>
                </select>
</select>

<label for="harvestYear">Year: </label>
<select name="harvestYear" id="harvestYear"></select>
</select>

<label for="viewMonth">Month: </label>
<select name="viewMonth" id="viewMonth">
 <option value="">Select month</option>
                <?php foreach(listMonths() as $row):?>
                    <option value="<?php echo $row?>"><?php echo $row?></option>
                <?php endforeach;?>
</select>
<hr />
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Add Company</h3>
  </div>
  <div class="modal-body" id="cont_div">
 

</div></div>

<?php echo $this->table->generate(); ?>