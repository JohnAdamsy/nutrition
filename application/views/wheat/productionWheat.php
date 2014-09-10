<script type="text/javascript">
function fillVal(cb)
{
	value=cb.value;
	$('#wheatFactory1').val(value);
}
</script>
<?php 
$sel_compid=1;
if($sessionEmail!="admin")
		{
		 $sel_compid= $this ->session -> userdata('companyID');
		}
		
if(isset($details))	
{
	$sel_compid=$details[0]->company_id;
	 $sel_month=$details[0]->prod_month;
	 $sel_year=$details[0]->year;
	 $category = trim($this -> session -> userdata('vehicle'));
}	
		?>
<form name="productionWheat" id="productionWheat" method="post"
      action="<?php echo base_url() ?>submit/c_form_wheat/productionWheat/0" class="form-horizontal">
   <input name="item_id" type="hidden" value="<?php echo (isset($item_id))? $item_id:"";?>" />
   <h3 align="center">FORTIFIED WHEAT</h3>
   <p align="center">PRODUCTION LOG FOR FORTIFIED WHEAT</p>
   <p align="center">&nbsp;</p>
    <div class="row-fluid">
        <div class="span5" >
        <div class="span12">
            <h2 class="blue" style="background: transparent; border: none;">Company Details</h2> 
            </div>
        <div class="span12"><br />

          <input name="wheatFactory1" id="wheatFactory1" type="hidden" value="<?php echo $sel_compid?>" />         
              <label>Wheat Factory<select name="wheatFactory" id="wheatFactory" <?php if($sel_compid>1){?>disabled="disabled"	<?php }?> style="width: 98% !important;">
                <option value="">Select One</option>
                 <?php foreach($this->company_list as $row):?>
                    <option value="<?php echo $row->company_id?>" <?php if (!(strcmp("$row->company_id", "$sel_compid"))) {echo "selected=\"selected\"";} ?>><?php echo $row->company_name?></option>
                <?php endforeach;?>
              </select></label>
              </div>  <div class="span12"><br />

                <?php if(isset($sel_year)){?> <label>Year<input type="text" id="harvestYear"  style="width: 98% !important; height: 25px;" name="harvestYear" readonly="readonly" value="<?=$sel_year?>"/></label>
                
                <?php }
				else
				{?>
                <label>Year<select name="harvestYear" id="harvestYear" style="width: 98% !important;"></select></label>
                <?php }?></div>
                  <div class="span12"><br />


            <label>Month<select name="prodMonth_1" id="prodMonth_1"  class="cloned" <?php if($sel_month){?>disabled="disabled"	<?php }?> style="width: 98% !important;">
                <option value="">Select month</option>
                <?php foreach(listMonths() as $row):?>
                    <option value="<?php echo $row?>" <?php if (!(strcmp("$row", "$sel_month"))) {echo "selected=\"selected\"";} ?>><?php echo $row?></option>
                <?php endforeach;?>
            </select></label>
</div>
<div class="span12">
            <h2 class="blue" style="background: transparent; border: none;">Premix Details</h2> 
            </div>
          <div class="span12"><br />


            <label>Opening Balance (kg)<input type="number" id="oBal_1" style="width: 98% !important; height: 25px;" name="oBal_1" class="cloned" value="<?php if(isset($details)){ echo $details[0]->opening_balance;}?>"/></label></div>
              <div class="span12"><br />

            <label>Qty Delivered (kg)<input type="number" id="qtyDel_1" style="width: 98% !important; height: 25px;" name="qtyDel_1" class="cloned" value="<?php if(isset($details)){ echo $details[0]->qty_delivered; }?>"/></label></div>
              <div class="span12"><br />

            <label>Supplier/Manufacturer<input type="text" id="pSup_1"  style="width: 98% !important; height: 25px;" name="pSup_1" class="cloned" value="<?php if(isset($details)){ echo $details[0]->supplier;}?>"/></label></div>
              <div class="span12"><br />


            <label>Qty Rejected (kg)<input type="number" id="reject_1" style="width: 98% !important; height: 25px;" name="reject_1" class="cloned" value="<?php if(isset($details)){ echo $details[0]->qty_rejected;}?>"/></label></div>
              <div class="span12"><br />

            <label>Qty Issued (kg)<input type="number" id="QI_1" style="width: 98% !important; height: 25px;" name="QI_1" class="cloned" value="<?php if(isset($details)){ echo $details[0]->qty_issued;}?>"/></label></div>
              <div class="span12"><br />


            <label>Closing Balance (kg)<input type="number" id="CBAL_1" style="width: 98% !important; height: 25px;"  name="CBAL_1" class="cloned" value="<?php if(isset($details)){ echo $details[0]->closing_balance;}?>"/></label></div>
      </div>
      
    <div class="span5">
    <div class="span12">
    <h2 class="blue" style="background: transparent; border: none;">Production Details</h2>
    </div>
    <div class="span12"><br />

            <label>Dosage Rate (g/mt)<input type="number" id="DRM_1" style="width: 98% !important; height: 25px;" name="DRM_1" class="cloned" value="<?php if(isset($details)){ echo $details[0]->dosage_rate;}?>"/></label></div><div class="span12"><br />

            <label>Theoretical Production Fortified (mt)<input type="number" id="tProdM_1" style="width: 98% !important; height: 25px;" name="tProdM_1" class="cloned" value="<?php if(isset($details)){ echo $details[0]->theoretical_prod;}?>"/></label></div>
            <div class="span12"><br />

      <label>Actual Production Fortified (mt)<input type="number" id="aProd_1" style="width: 98% !important; height: 25px;" name="aProd_1" class="cloned" value="<?php if(isset($details)){ echo $details[0]->actual_prod;}?>"/></label></div>
            <div class="span12"><br />

      <label>Production Unfortified (mt)<input type="number" id="prodU_1" style="width: 98% !important; height: 25px;" name="prodU_1" class="cloned" value="<?php if(isset($details)){ echo $details[0]->production_unfort;}?>"/></label></div>
            <div class="span12"><br />

      <label>Sales Fortified (Enter 0 for no value) (mt)<input type="number" id="sales_1" style="width: 98% !important; height: 25px;" name="sales_1" class="cloned" value="<?php if(isset($details)){ echo $details[0]->fort_sales;}?>"/></label></div>
            <div class="span12"><br />

      <label>Fortified Exports (mt)<input type="number" id="fortExp_1" style="width: 98% !important; height: 25px;" name="fortExp_1" class="cloned" value="<?php if(isset($details)){ echo $details[0]->exp_fort;}?>"/></label></div>
            <div class="span12"><br />

      <label>Sales Export Unfortified (mt)<input type="number" id="salexExpUn_1" style="width: 98% !important; height: 25px;" name="salexExpUn_1" class="cloned" value="<?php if(isset($details)){ echo $details[0]->exp_unfort;}?>"/></label></div>
        <?php if(!isset($item_id)){?>
        <div class="span12"><br />

      <fieldset id="checkArray">
      <label for="brandname">Brands with Fortification logo<br />

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
      </div>
      <br>
      <div class="span12"><br />

      <fieldset id="checkArray2">
      <label for="brandname2">Brands without Fortification logo<br />

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
        </div>
      <?php }?>
      <br><br>
      <div class="span12">
      <?php if(!isset($item_id)){?>
             <button type="submit" class="btn btn-primary">Save</button>
        <button type="submit" class="btn btn-warning" formaction="<?php echo base_url() ?>submit/c_form_wheat/productionWheat/1">Save and Continue</button>
         <?php }
		else
		{?>        
      <button type="submit" class="btn btn-primary">Save changes</button>
        <?php }?>
        </div>
        </div>

        </div>
    </div>
</form>