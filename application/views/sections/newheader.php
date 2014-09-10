<head>
<link rel="icon" href="<?php echo base_url(); ?>images/index.jpg" type="image/x-icon">
<meta charset="utf-8" />
<title>Fortification</title>

<meta name="description" content="overview &amp; stats" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!--basic styles-->

<link rel="stylesheet" href="<?php echo base_url()?>css/styles1.css"/>

<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url()?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css" />

<!--[if IE 7]>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome-ie7.min.css" />
<![endif]-->

<!--page specific plugin styles-->

<!--fonts-->

<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

<!--ace styles-->

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/ace.min.css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/ace-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/ace-skins.min.css" />

<!--[if lte IE 8]>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/ace-ie.min.css" />
<![endif]-->
<!--basic scripts-->

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

<!--inline styles related to this page-->
<!--<script src="<?php //echo base_url()?>js/js_libraries.js"></script>-->
<!--<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>-->

<!--<script src="< ? php echo base_url();?>/js/js_libraries.js"></script>
-->
<script src="<?php echo base_url(); ?>assets/js/jquery-2.0.3.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>
<script src="<?php echo base_url();?>js/ui/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.dataTables.js"></script>
<!--<script src="< ? php echo base_url();?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>
-->
<!--<script src="< ?php echo base_url();?>/js/js_ajax_load.js"></script>
-->
<script src="<?php echo base_url();?>/js/js_ajax_load.js"></script>
<!--script to form client side validation functions-->
<!-- Run the TAB plugin -->
<script type="text/javascript">
    // Place all Javascript code here

//================================================================my custom function====================
var oTable=null;
function fnFilterGlobal(fld)
{
	user=$("#vehicleFactory").val();
	oTable.fnClearTable(0);
	oTable.fnReloadAjax('<?php echo base_url(); ?>c_'+fld+'/get'+fld+'Data/'+user);
}
function fnFilterGlobal_market(c)
{
	user=$("#dataCompany").val();
	oTable.fnClearTable(0);
	oTable.fnReloadAjax('<?php echo base_url(); ?>c_oversight/'+c+'/'+user);
}
function fnFilterColumn (fld,i)
{
	$('#big_table').dataTable().fnFilter( 
		$("#"+fld).val(),i,true,true);
}
function checkFields(cont,ele,cb,index)
{
  var cnt = $('#'+cont+' :checkbox:checked').length > 0;
  elem_id=cb.id;
  checked=cb.checked;
  if(ele+"[0]"===elem_id)
  {
	 if(checked==true)
	 {
		 $('#'+cont+' input[type="checkbox"]').prop('checked', false);
		 $('#'+cont+' input[type="checkbox"]').first().prop('checked', true);
	 }
	 else
	 {
	 $('#'+cont+' input[type="checkbox"]').first().prop('checked', true); 
	 }
  }
  else
  {
	if(cnt==false)
	{
		$('#'+cont+' input[type="checkbox"]').first().prop('checked', true);
	}
	else
	{
		$('#'+cont+' input[type="checkbox"]').first().prop('checked', false);
		if(ele==="brandname2")
		{
			 e_item="brandname["+index+"]";
			//  alert('#'+e_item);
			 document.getElementById(e_item).checked=false;
			 $('#'+e_item).prop('checked', false); 
			 $('#checkArray :checkbox:checked').length > 0;
			
			 cnt = $('#checkArray :checkbox:checked').length > 0;
			// alert(e_item);
			 if(cnt==false)
				{
				   $('#checkArray input[type="checkbox"]').first().prop('checked', true);
				}
		}
		else
		{
			 e_item="brandname2["+index+"]";
			//  alert('#'+e_item);
			 document.getElementById(e_item).checked=false;
			 $('#'+e_item).prop('checked', false);
			 
			 cnt = $('#checkArray2 :checkbox:checked').length > 0;
			// alert(e_item);
			 if(cnt==false)
				{
				   $('#checkArray2 input[type="checkbox"]').first().prop('checked', true);
				}
		}
		
	}
  }
  ctrl = document.getElementById('brandname[0]').checked;
  ctrl1 =document.getElementById('brandname2[0]').checked;
  if(ctrl1==true && ctrl==true)
  {
  document.getElementById('alMsg').style.display="block";
  }
  else
  {
	document.getElementById('alMsg').style.display="none";
  }
 }
 //========================================================================================================
    $(document).ready(function() {		
		
        $('.received.title').click(function(){
        //    alert('Clicked Received');
            $('.tab.received').show();
            $('.tab.dispatched').hide();

        });

        $('.dispatched.title').click(function(){

            $('.tab.dispatched').show();
            $('.tab.received').hide();

        });
        $("#showFancyModal").click(function() {
            $("#profile-fancy").addClass("show");
            return false;
        });

        $("#closeFancy").click(function() {
            $("#profile-fancy").removeClass("show");
            return false;
        });
    });/*end of doc ready*/

</script>

<!--initialize all date pickers-->
<script>

    $().ready(function() {

    });/*close ready doc*/
</script>
<script type="text/javascript">
    $(function() {
        /* For zebra striping */
        $("table tr:nth-child(odd)").addClass("odd-row");
        /* For cell text alignment */
        $("table td:first-child, table th:first-child").addClass("first");
        /* For removing the last border */
        $("table td:last-child, table th:last-child").addClass("last");
    });

</script>
<script>
$().ready(function(){
	$("#ace-settings-btn").hide();
	$("#ace-settings-box").hide();
				
    /**
     * variables
     */
    var form_id='';
    var link_id='';
    var linkIdUrl='';
    var linkSub='';
    var linkDomain='';
    var visit_site = '';
    var devices='';

    /*----------------------------------------------------------------------------------------------------------------*/

    /*get devices by manufacturer/category type...in the long term, do it nicely with some dynamic html:)*/
    function getDevices(){
        $(function(){
            if(form_id=='#internalFortified_B2'){
                devices=['drier','balance','pump','sprayingEquipment','blender'];
            }else if(form_id=='#fortifiedOil_B2'){
                devices=['balance','pump','feeding','blender','stirrers','tank'];
            }
            <?php if($this -> session -> userdata('devices'))
            foreach($this -> session -> userdata('devices') as $key=>$value){?>
            $('#'+devices['<?php print $key ?>']).val('<?php print $value['deviceCompNumber']?>');
            <?php }?>

        });
    }/*end of getDevices*/

    /*----------------------------------------------------------------------------------------------------------------*/

    //start of close_opened_form click event
    $("#close_opened_form").click(function() {
        $(".row-fluid").load('<?php echo base_url().'c_front/formviewer';?>',function(){
            //delegate events
			loadGlobalScript();
			
		/*	$("#ace-settings-box").removeClass('ace-settings-box open').addClass("ace-settings-box");			
			$("#ace-settings-btn").removeClass('btn btn-app btn-mini btn-warning ace-settings-btn open').addClass("btn btn-app btn-mini btn-warning ace-settings-btn");*/
			$("#ace-settings-box").removeClass('ace-settings-box open').addClass("ace-settings-box");			
			$("#ace-settings-btn").removeClass('btn btn-app btn-mini btn-warning ace-settings-btn open').addClass("btn btn-app btn-mini btn-warning ace-settings-btn");
			$("#ace-settings-box").hide("slow");
			$("#ace-settings-btn").hide("slow");
			
			
        });
    });/*end of close_opened_form click event

     /*----------------------------------------------------------------------------------------------------------------*/

    /*start of loadGlobalJS*/
    var onload_queue = [];
    var dom_loaded = false;

    function loadGlobalJS(src, callback) {
       var script = document.createElement('script');
        script.type = "text/javascript";
        script.async = true;
        script.src = src;
        script.onload = script.onreadystatechange = function() {
            if (dom_loaded)
                callback();
            else
                onload_queue.push(callback);
            // clean up for IE and Opera
            script.onload = null;
            script.onreadystatechange = null;
        };
        var head = document.getElementsByTagName('head')[0];
        head.appendChild(script);
    }/*end of loadGlobalJS*/

    function domLoaded() {
        dom_loaded = true;
        var len = onload_queue.length;
        for (var i = 0; i < len; i++) {
            onload_queue[i]();
        }
        onload_queue = null;
    };/*end of domLoaded*/

    /*-----------------------------------------------------------------------------------------------------------*/
    function isCheckBoxChecked(thisForm){/*start of function isCheckBoxChecked*/
        //form_id='#'+$(".row-fluid").find('form').attr('id'); /*what form has been loaded now?*/
        if(thisForm=='#internalFortified_A1' || thisForm=='#internalMaizeFlour_A1' || thisForm=='#internalWheatFlour_A1')
        {
            var widowed=''; var cbo='';
            //set value of a non-checked checkbox
            $(thisForm).find(':checkbox').each(function(){
                if($(this).is(':unchecked')){
                    cbo=$(this).attr("id");
                    $('#'+cbo+'_cb').val('no');
                }else if($(this).is(':checked')){
                    cbo=$(this).attr("id");
                    $('#'+cbo+'_cb').val('yes');
                }

            });
        }//end of if(form_id=='#internalFortified_A1')

    }/*end of function isCheckBoxChecked*/

    /*-----------------------------------------------------------------------------------------------------------*/

    function getAreasVisited(thisForm){/*start of function getAreasVisited*/
        visit_site=''; //reset previous values if any
        if(thisForm=='#externalFortified_B3' || thisForm=='#externalMaizeFlour_B3' || thisForm=='#externalWheatFlour_B3')
        {
            //do collect visited sites
            $(thisForm).find(':checkbox').each(function()
            {
                if($(this).is(':checked'))
                {

                    visit_site=visit_site+$(this).val()+",";
                }
            });
            //alert('Visited: '+visit_site);
            $('#areas_visited').val(visit_site);
        }
    }/*end of function getAreasVisited*/

    /*--------------------------------------------------------------------------------------------------------------------------*/

    domLoaded();

    /*----------------------------------------------------------------------------------------------------------------*/

    /*submit form event*/
    /*start of submit_form_data click event*/
    //function triggerFormSubmit(){
    $("#submit_form_data").click(function() {

        /*set names of the areas visited*/
        getAreasVisited(form_id);

        /*integrity of the boxes*/
        isCheckBoxChecked(form_id);

        //get devices if needed
        getDevices();

        $(form_id).submit();

    });//}/*end of submit_form_data click event*/

    /*----------------------------------------------------------------------------------------------------------------*/

    /*reset form event*/
    /*start of reset_current_form click event*/
    $("#reset_current_form").click(function() {
        $(form_id).resetForm();

    });/*end of reset_current_form click event*/

    /*----------------------------------------------------------------------------------------------------------------*/
    var loaded=false;
    function loadGlobalScript(){
	//	alert("here");
        loaded=true;
        var scripts=['<?php echo base_url().'js/js_ajax_load.js';?>'];
        for(i=0;i<scripts.length;i++){

            loadGlobalJS(scripts[i],function(){});
        }
        form_id='#'+$(".row-fluid").find('form').attr('id');
        //alert(form_id);

    }
    /*----------------------------------------------------------------------------------------------------------------*/

    //so which link was clicked?
    $('li').on('click',function(){
        link_id='#'+$(this).find('a').attr('id');
		if(link_id!="#prent")
		{
        linkSub=$(link_id).attr('class');
        linkIdUrl=link_id.substr(link_id.indexOf('#')+1,(link_id.indexOf('_li')-1));
        //alert(linkIdUrl);
        //load url based on the class and id returned
        switch(linkSub){
            case "salt-url":
                linkDomain='c_salt';
                break;
            case "oil-url":
                linkDomain='c_oil';
                break;
            case "maize-url":
                linkDomain='c_maize';
                break;
            case "wheat-url":
                linkDomain='c_wheat';
                break;
            case "sugar-url":
                linkDomain='c_sugar';
                break;
        }
		if(linkDomain)
					
      //  alert('< ?php echo base_url();?>'+linkDomain+'/'+linkIdUrl);
            $(".row-fluid").load('<?php echo base_url();?>'+linkDomain+'/'+linkIdUrl,function(){
                //delegate events
                //if(loaded==false)
                loadGlobalScript();//getRecordsByForm();
				$("#ace-settings-box").removeClass('ace-settings-box').addClass("ace-settings-box open");
				$("#ace-settings-btn").removeClass('btn btn-app btn-mini btn-warning ace-settings-btn').addClass("btn btn-app btn-mini btn-warning ace-settings-btn open");
				$("#ace-settings-btn").show();
			    $("#ace-settings-box").show("slow");
				
			//	if(update_e_msg)
			//	{
				
			//	}
				
				
				//$("#displayPanel div").removeClass('someClass');
				//alert("dfgdfg");

            });
		}

    })/*end of which link was clicked*/
    /*----------------------------------------------------------------------------------------------------------------*/

    /*-----------------------------------------------------------------------------------------------------------------*/
    /*start of ajax data requests*/
    function getRecordsByForm(){
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>c_salt/getRecordsViaJSON",
            dataType:"json",
            cache:"true",
            data:"",
            success: function(data){
                //$("#edit_panel").show();
                if(data.rTotal >0)
                //alert(data.rTotal);
                    var clone_max=data.rTotal; //limit of values to be cloned
                do{
                    var yourclass = ".clonable";
                    //The class you have used in your form
                    var clonecount = $(yourclass).length;
                    //how many clones do we already have?
                    var newid = Number(clonecount) + 1;
                    //Id of the new clone



                    $(yourclass + ":first").fieldclone({//Clone the original element
                        newid_ : newid, //Id of the new clone, (you can pass your own if you want)
                        target_ : $("#formbuttons"), //where do we insert the clone? (target element)
                        insert_ : "before", //where do we insert the clone? (after/before/append/prepend...)
                        limit_ : clone_max  //Maximum Number of Clones
                    });


                    /*reinitialize datepicker options on the cloned item*/
                    $('.clonable label.error').remove();
                    $('.cloned').removeClass('error');
                    $('.autoDate').removeClass('hasDatepicker error');
                    $('.futureDate').removeClass('hasDatepicker error');
                    $('.autoDate').datepicker({changeMonth: true,changeYear: true,dateFormat:"yy-mm-dd",minDate: '-10y', maxDate: "0D"});
                    $('.futureDate').datepicker({changeMonth: true,changeYear: true,dateFormat:"yy-mm-dd",minDate: '0y', maxDate: "2y"});

                    /*reinitialize timepicker options on the cloned item*/
                    $('.mobiscroll').removeClass('scroller');
                    $('.mobiscroll').scroller({preset:'time'});

                    var t = 'default';
                    var m = 'mixed';
                    $('.mobiscroll').scroller('destroy').scroller({ preset: 'time', theme: t, mode: m });


                    data.rTotal--;
                }while(data.rTotal>1);
                //render data into the cloned elements
                $.each(data.rData,function(i,n){
                    //	alert((i+1)+"th val: "+n["transactedBy"]);
                    $("#fortifiedDate_"+(i+1)).val(n["dates"]);
                    $("#fortifiedWeight_"+(i+1)).val(n["fillerWeight"]);
                    $("#compoundWeight_"+(i+1)).val(n["iodineWeight"]);
                    $("#finalWeight_"+(i+1)).val(n["finalPremixWeight1"]);
                    $("#startTime_"+(i+1)).val(n["startTime"]);
                    $("#endTime_"+(i+1)).val(n["endTime"]);
                    $("#iodineWeight_"+(i+1)).val(n["finalPremixWeight"]);
                    $("#qcReview_"+(i+1)).val(n["transactedBy"]);
                });
                //return false;
            },
            beforeSend:function()
            {
                $("#results_panel").show();
                $("#search_err").html("Loading...");
            },
            afterSend:function()
            {
                $("#search_err").html("Still working...");
            }
        });
        return false;
    }
    /*end of ajax data requests*/
	$.fn.dataTableExt.oApi.fnReloadAjax = function ( oSettings, sNewSource, fnCallback, bStandingRedraw )
{
    if ( typeof sNewSource != 'undefined' && sNewSource != null )
    {
        oSettings.sAjaxSource = sNewSource;
    }
    this.oApi._fnProcessingDisplay( oSettings, true );
    var that = this;
    var iStart = oSettings._iDisplayStart;
     
    oSettings.fnServerData( oSettings.sAjaxSource, [], function(json) {
        /* Clear the old information from the table */
        that.oApi._fnClearTable( oSettings );
         
        /* Got the data - add it to the table */
        var aData =  (oSettings.sAjaxDataProp !== "") ?
            that.oApi._fnGetObjectDataFn( oSettings.sAjaxDataProp )( json ) : json;
         
        for ( var i=0 ; i<aData.length ; i++ )
        {
            that.oApi._fnAddData( oSettings, aData[i] );
        }
         
        oSettings.aiDisplay = oSettings.aiDisplayMaster.slice();
        that.fnDraw();
         
        if ( typeof bStandingRedraw != 'undefined' && bStandingRedraw === true )
        {
            oSettings._iDisplayStart = iStart;
            that.fnDraw( false );
        }
         
        that.oApi._fnProcessingDisplay( oSettings, false );
         
        /* Callback user function - for event handlers etc */
        if ( typeof fnCallback == 'function' && fnCallback != null )
        {
            fnCallback( oSettings );
        }
    }, oSettings );
}
    /*-----------------------------------------------------------------------------------------------------------------*/

}); /*close document ready*/

</script>

</head>