<script type="text/javascript">
function fillVal(cb)
{
	value=cb.value;
	$('#oilFactory1').val(value);
}
</script>
<?php
$sel_compid=1;
if($sessionEmail!="admin")
		{
		 $sel_compid= $this ->session -> userdata('companyID');
		}	
		?>
<form name="productionMaize" id="productionMaize" method="post"
      action="<?php echo base_url() ?>submit/c_form_oil/productionOil/0" class="form-horizontal">
   <h3 align="center">FORTIFIED OIL</h3>
   <p align="center">PRODUCTION LOG FOR FORTIFIED OIL</p>
   <p align="center">&nbsp;</p>
    <div class="row-fluid">
        <div class="span3" >
            <h2 class="blue" style="width:220px; background: transparent; border: none;">Company Details</h2>
          <p>Oil Factory:</p>
           <input name="oilFactory1" id="oilFactory1" type="hidden" value="<?php echo $sel_compid?>" />
          <select name="oilFactory" id="oilFactory" <?php if($sel_compid>1){?>disabled="disabled"	<?php }?>>
                <option value="">Select One</option>
                <?php foreach($this->company_list as $row):?>
                    <option value="<?php echo $row->company_id?>" <?php if (!(strcmp("$row->company_id", "$sel_compid"))) {echo "selected=\"selected\"";} ?>><?php echo $row->company_name?></option>
                <?php endforeach;?>
              </select>
               <p>Year:</p>
                <select name="harvestYear" id="harvestYear"></select>

           <p>Month:</p>

            <select name="prodMonth_1" id="prodMonth_1"  class="cloned">
                <option value="">Select month</option>
                <?php foreach(listMonths() as $row):?>
                    <option value="<?php echo $row?>"><?php echo $row?></option>
                <?php endforeach;?>
            </select>

            <h2 class="blue" style="width:220px; background: transparent; border: none;">Premix Details</h2>
            <p>Opening Balance (kg)</p>

            <input type="number" id="oBal_1" style="width: 220px !important; height: 25px;" name="oBal_1" class="cloned"/>
            <p>Qty Delivered (kg)</p>

            <input type="number" id="qtyDel_1" style="width: 220px !important; height: 25px;" name="qtyDel_1" class="cloned"/>
            <p>Supplier/Manufacturer </p>

            <input type="text" id="pSup_1"  style="width: 220px !important; height: 25px;" name="pSup_1" class="cloned"/>
            <p>Qty Rejected (kg)</p>

            <input type="number" id="reject_1" style="width: 220px !important; height: 25px;" name="reject_1" class="cloned"/>
              <p>Qty Issued (oils & fats)</p>

            <input type="number" id="QI_1" style="width: 220px !important; height: 25px;" name="QI_1" class="cloned"/>
              <p>Closing Balance </p>

            <input type="number" id="CBAL_1" style="width: 220px !important; height: 25px;"  name="CBAL_1" class="cloned"/>
      </div>
      
    <div class="span3">
            <p>Dosage Rate(oils & fats)</p>
            <input type="number" id="DRM_1" style="width: 220px !important; height: 25px;" name="DRM_1" class="cloned"/>
            <p>Theoretical Production Fortified</p>
            <input type="number" id="tProdM_1" style="width: 220px !important; height: 25px;" name="tProdM_1" class="cloned"/>
            <p>Actual Production Fortified</p>
            <input type="number" id="aProd_1" style="width: 220px !important; height: 25px;" name="aProd_1" class="cloned"/>
            <p> Production Unfortified</p>
            <input type="number" id="prodU_1" style="width: 220px !important; height: 25px;" name="prodU_1" class="cloned"/>
            <p>Local sales fortified MT</p>
            <input type="number" id="fortExp_1" style="width: 220px !important; height: 25px;" name="fortExp_1" class="cloned"/>
        <p>Export sales fortified</p>
        <input type="number" id="salexExpUn_1" style="width: 220px !important; height: 25px;" name="salexExpUn_1" class="cloned"/>
        <p>Brands with Fortification logo</p>
      <fieldset id="checkArray">
      <label for="brandname">
      <input  name="brandname[]" type="checkbox" id="brandname[0]" value="N/A" checked="checked" onchange="javascript:checkFields('checkArray','brandname',this,0)"><span class="lbl">N/A</span><br>
		<?php
		$CI =& get_instance();
		if($CI->radio_boxes() > 0){
			$i=1;
		foreach($CI->radio_boxes() as $r):?>
<!-- <label>	-->	
<input  name="brandname[]" type="checkbox" id="brandname[<?php echo $i;?>]" value="<?php echo $r->brand_name?>" onchange="javascript:checkFields('checkArray','brandname',this,<?php echo $i;?>)"><span class="lbl"> <?php echo $r->brand_name?></span><br>
<!--</label>	-->	
		<?php $i++;
		endforeach; }?>
        </label>  
      </fieldset>
      <br>
         <p>Brands with without Fortification logo</p>
      <fieldset id="checkArray2">
      <label for="brandname2">
      <input  name="brandname2[]" type="checkbox" id="brandname2[0]" value="N/A" checked="checked" onchange="javascript:checkFields('checkArray2','brandname2',this,0)"><span class="lbl">N/A</span><br>
      	<?php
		$CI =& get_instance();
		if($CI->radio_boxes() > 0){
			$i=1;
		foreach($CI->radio_boxes() as $r):?>
<!-- <label>	-->	
<input  name="brandname2[]" type="checkbox" id="brandname2[<?php echo $i;?>]" value="<?php echo $r->brand_name?>" onchange="javascript:checkFields('checkArray2','brandname2',this,<?php echo $i;?>)"><span class="lbl"> <?php echo $r->brand_name?></span><br>
<!--</label>	-->	
		<?php  $i++;
		endforeach; }?>
        </label>  
        </fieldset>
        <label id="alMsg" class="error">
        **Please select atleast one product.
        </label>
      <br><br>
      <button type="submit" class="btn btn-primary">Save</button>
        <button type="submit" class="btn btn-warning" formaction="<?php echo base_url() ?>submit/c_form_oil/productionOil/1">Save and Continue</button>
        </div>

        </div>
    </div>
</form>