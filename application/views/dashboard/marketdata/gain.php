<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<style type="text/css" title="currentStyle">
			@import "<?php echo base_url();?>css/demo_table.css";
			@import "<?php echo base_url();?>css/TableTools.css";
</style>
<script type="text/javascript" charset="utf-8" src="<?php echo base_url();?>js/ZeroClipboard.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/TableTools.js"></script> 

<script type="text/javascript">
    $(document).ready(function() {
	    oTable = $('#big_table').dataTable( {
		"bProcessing": true,
		"bServerSide": true,				
		"sAjaxSource": '<?php echo base_url(); ?>c_oversight/getmarketMyData/<?=$sel_compid?>',
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "iDisplayStart ":50,
        "oLanguage": {
        "sProcessing": "<img src='<?php echo base_url(); ?>images/ajax-loader_dark.gif'>"
        }, 
		 "sScrollX": "100%",	
           "bScrollCollapse": true,
            "sScrollXInner": "110%",
    	"aaSorting": [[0, 'asc']],
			"sDom": 'T<"clear">lfrtip',
		"oTableTools": {
			"sSwfPath": "<?php echo base_url()?>swf/copy_csv_xls_pdf.swf",
			"aButtons": [
			{
					"sButtonText": "Pdf Export",
					"sExtends": "pdf",
					"sPdfOrientation": "landscape",
					"sPdfMessage": "Your custom message would go here.",
					"mColumns": [ 0, 1,2,3, 4,5,6,7,8,9,10,11,12,13 ]
				}
			,
			{
				"sExtends": "xls",
				"sButtonText": "Excel Export",
				"mColumns": [ 0, 1,2,3, 4,5,6,7,8,9,10,11,12,13 ]
            }
			,
			{
				"sExtends": "csv",
				"sButtonText": "CSV Export",
				"mColumns": [ 0, 1,2,3, 4,5,6,7,8,9,10,11,12,13 ]
            }]	},
		"bStateSave": false,
        "aoColumns": [
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
	<?php $category = trim($this -> session -> userdata('vehicle'));?>
	
	$("#producer").change( function() { fnFilterColumn("producer",0 ); } );
	$("#product").change( function() { fnFilterColumn("product", 1 ); } );
	$("#brand").change( function() { fnFilterColumn("brand",2 ); } );
	$("#production").change( function() { fnFilterColumn("production", 3 ); } );
	$("#store").change(function() { fnFilterColumn("store",6);} );
	$("#flogo").change(function() { fnFilterColumn("flogo",8);} );

});
</script>
<div class="span11">
<div class="span10">
<h5>
Filters
</h5>
</div>
<div class="span3">
  <label>Producer: 
    <select name="producer" id="producer">
        <option value="">Select One</option>
        <?php foreach($this->producer_list as $row):?>
        <option value="<?php echo $row->producer_name?>"><?php echo $row->producer_name?></option>
        <?php endforeach;?>
    </select>
</label>
</div>

<div class="span3">
<label>Product Type: 
    <select name="product" id="product">
        <option value="">Select One</option>
        <?php foreach($this->product_list as $row):?>
        <option value="<?php echo $row->type_of_poduct?>"><?php echo $row->type_of_poduct?></option>
        <?php endforeach;?>
    </select>
</label>
</div>
<div class="span3">
<label>Brand Name: 
    <select name="brand" id="brand">
        <option value="">Select One</option>
        <?php foreach($this->brand_list as $row):?>
        <option value="<?php echo $row->brand_name?>"><?php echo $row->brand_name?></option>
        <?php endforeach;?>
    </select>
</label>
</div>
<div class="span3">
<label>Production: 
    <select name="production" id="production">
        <option value="">Select One</option>
        <option value="Local">Local</option>
        <option value="Imported">Imported</option>
    </select>
</label>
</div>
<div class="span3">
<label>Store Type: 
    <select name="store" id="store">
        <option value="">Select One</option>
        <?php foreach($this->store_list as $row):?>
        <option value="<?php echo $row->store_type?>"><?php echo $row->store_type?></option>
        <?php endforeach;?>
    </select>
</label>
</div>
<div class="span3">
<label>Fortification Logo: 
    <select name="flogo" id="flogo">
        <option value="">Select One</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
</label>
</div>
</div>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Add Company</h3>
  </div>
  <div class="modal-body" id="cont_div">
 

</div></div>
<div class="span3" style="width:100%; margin-left: 0;">
<hr />
</div>
<?php echo $this->table->generate(); ?>