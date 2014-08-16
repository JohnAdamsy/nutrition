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
if(isset($details))	
{
	$sel_compid=$details[0]->company_id;
	 $sel_month=$details[0]->prod_month;
	 $sel_year=$details[0]->year;
	 $category = trim($this -> session -> userdata('vehicle'));
}	
		?>
<form name="fortifiedOil_prod" id="fortifiedOil_prod" method="post"
      action="<?php echo base_url() ?>submit/c_form_oil/fortifiedOil_prod/0" class="form-horizontal">
      <input name="item_id" type="hidden" value="<?php echo (isset($item_id))? $item_id:"";?>" />
   <h3 align="center">FORTIFIED OIL QC/QA-TABLE B-1</h3>
   <p align="center">PRODUCTION LOG FOR OIL FORTIFIED WITH VITAMIN A</p>
   <p align="center">&nbsp;</p>
    <div class="row-fluid">
        <div class="span5" >
        <div class="span12">
            <h2 class="blue" style="background: transparent; border: none;">Company Details</h2>
            </div>
            <div class="span12"><br />

			<input name="oilFactory1" id="oilFactory1" type="hidden" value="<?php echo $sel_compid?>" />
          <label for="oilFactory">Oil Factory<select name="oilFactory" id="oilFactory" <?php if($sel_compid>1){?>disabled="disabled"	<?php }?> onchange="fillVal(this)" style="width: 98% !important;">

                    <option value="">Select One</option>
                   <?php foreach($this->company_list as $row):?>
                    <option value="<?php echo $row->company_id?>" <?php if (!(strcmp("$row->company_id", "$sel_compid"))) {echo "selected=\"selected\"";} ?>><?php echo $row->company_name?></option>
                <?php endforeach;?>
                </select></label></div>
                <div class="span12"><br />

              <?php if(isset($sel_year)){?> <label for="harvestYear">Year<input type="text" id="harvestYear"  style="width: 98% !important; height: 25px;" name="harvestYear" readonly="readonly" value="<?=$sel_year?>"/></label>
                
                <?php }
				else
				{?>
                <label for="harvestYear">Year<select name="harvestYear" id="harvestYear" style="width: 98% !important;"></select></label>
                <?php }?>
</div>
<div class="span12"><br />

          <label for="prodMonth_1">Month<select name="prodMonth_1" id="prodMonth_1"  class="cloned" <?php if($sel_month){?>disabled="disabled"	<?php }?> style="width: 98% !important;">
                <option value="">Select month</option>
                <?php foreach(listMonths() as $row):?>
                    <option value="<?php echo $row?>" <?php if (!(strcmp("$row", "$sel_month"))) {echo "selected=\"selected\"";} ?>><?php echo $row?></option>
                <?php endforeach;?>
            </select></label>
</div>

            <div class="span12"><br />

            <h2 class="blue" style="background: transparent; border: none;">Premix Details</h2>
            </div>
            
            <div class="span12"><br />

            <label for="oBal_1">Opening Balance (kg)<input name="oBal_1" type="number" class="cloned" id="oBal_1" style="width: 98% !important; height: 25px;" value="<?php if(isset($details)){ echo $details[0]->opening_balance;}?>"/></label></div>
            <div class="span12"><br />

            <label for="qtyDel_1">Qty Delivered (kg)<input type="number" id="qtyDel_1" style="width: 98% !important; height: 25px;" name="qtyDel_1" class="cloned" value="<?php if(isset($details)){ echo $details[0]->qty_delivered; }?>"/></label></div>
            <div class="span12"><br />


          <label for="pSup_1">Supplier/Manufacturer<input type="text" id="pSup_1"  style="width: 98% !important; height: 25px;" name="pSup_1" class="cloned" value="<?php if(isset($details)){ echo $details[0]->supplier;}?>"/></label></div>
          <div class="span12"><br />


          <label for="reject_1">Qty Rejected (kg)<input type="number" id="reject_1" style="width: 98% !important; height: 25px;" name="reject_1" class="cloned" value="<?php if(isset($details)){ echo $details[0]->qty_rejected;}?>"/></label></div>
			  <div class="span12"><br />


            <label for="QIOF_1">Opening Issued (Oil and Fats: kg)<input type="number" id="QIOF_1" style="width: 98% !important; height: 25px;" name="QIOF_1" class="cloned" value="<?php 
			if(isset($details))
			{
	 			echo $details[0]->qty_issued_o_f;
	 		}?>"/></label>
</div>  <div class="span12"><br />

             <label for="QIM_1">Opening Issued (Margarine: kg)<input type="number" id="QIM_1" style="width: 98% !important; height: 25px;" name="QIM_1" class="cloned" value="<?php 
			if(isset($details))
			{
	 			echo $details[0]->qty_issued_m;
	 		}?>"/></label>
</div>  <div class="span12"><br />


            <label for="CBAL_1">Closing Balance (kg)<input type="number" id="CBAL_1" style="width: 98% !important; height: 25px;"  name="CBAL_1" class="cloned" value="<?php 
			if(isset($details))
			{
	 			echo $details[0]->closing_balance;
	 		}?>"/></label></div></div>
            <div class="span5">
            <div class="span12">

            <h2 class="blue" style="background: transparent; border: none;">Production Details</h2>
            </div>
            
            <div class="span12"><br />
            <label for="DROF_1">Dosage Rate (Oil & Fats: g/mt)<input type="number" id="DROF_1" style="width: 98% !important; height: 25px;" name="DROF_1" class="cloned" value="<?php 
			if(isset($details))
			{
	 			echo $details[0]->dosage_rate_o_f;
	 		}?>" /></label></div>  <div class="span12"><br />

            <label for="tProd_1">Theoretical Production (mt)
            <input type="number" id="tProd_1" style="width: 98% !important; height: 25px;" name="tProd_1" class="cloned" value="<?php 
			if(isset($details))
			{
	 			echo $details[0]->theoretical_prod;
	 		}?>"/></label></div>  <div class="span12"><br />

            <label for="aProdf_1">Actual Prodution (Fats: mt)
            <input type="number" id="aProdf_1" style="width: 98% !important; height: 25px;"  name="aProdf_1" class="cloned" value="<?php 
			if(isset($details))
			{
	 			echo $details[0]->actual_prod_fats;
	 		}?>"/></label>
</div>  <div class="span12"><br />

             <label for="aProdo_1">Actual Prodution (Oil: mt)
            <input type="number" id="aProdo_1" style="width: 98% !important; height: 25px;" name="aProdo_1" class="cloned" value="<?php 
			if(isset($details))
			{
	 			echo $details[0]->actual_prod_oil;
	 		}?>"/></label></div>
      <div class="span12"><br />

            <label for="DRM_1">Dosage Rate (Margarine: g/mt)
            <input type="number" id="DRM_1" style="width: 98% !important; height: 25px;" name="DRM_1" class="cloned" value="<?php 
			if(isset($details))
			{
	 			echo $details[0]->dosage_rate_m;
	 		}?>"/></label></div>
              <div class="span12"><br />

            <label for="tProdM_1">Theoretical Production (Magarine: mt)
            <input type="number" id="tProdM_1" style="width: 98% !important; height: 25px;" name="tProdM_1" class="cloned" value="<?php 
			if(isset($details))
			{
	 			echo $details[0]->theoretical_prod_m;
	 		}?>"/></label></div>  <div class="span12"><br />

             <label for="aProd_1">Actual Production (Margarine: mt)
            <input type="number" id="aProd_1" style="width: 98% !important; height: 25px;" name="aProd_1" class="cloned" value="<?php 
			if(isset($details))
			{
	 			echo $details[0]->actual_prod_m;
	 		}?>"/></label></div>  <div class="span12"><br />
             <label for="prodU_1">Production Unfortified (mt)
            <input type="number" id="prodU_1" style="width: 98% !important; height: 25px;" name="prodU_1" class="cloned" value="<?php 
			if(isset($details))
			{
	 			echo $details[0]->production_unfort;
	 		}?>"/></label></div>  <div class="span12"><br />

            <label for="exportedFats">Exported Fats (mt)
            <input type="number" id="exportedFats" style="width: 98% !important; height: 25px;" name="exportedFats" class="cloned" value="<?php 
			if(isset($details))
			{
	 			echo $details[0]->exp_fats;
	 		}?>"/>
            </label></div>  <div class="span12">
            <br />
        <label for="exportedOil">Exported Oil (mt)
        <input type="number" id="exportedOil" style="width: 98% !important; height: 25px;" name="exportedOil" class="cloned" value="<?php 
			if(isset($details))
			{
	 			echo $details[0]->exp_oil;
	 		}?>"/></label>      
        </div>
            <div class="span12">
            <br />               
      <label for="sales">
        Sales (mt)
        <input type="number" id="sales" style="width: 98% !important; height: 25px;" name="sales" class="cloned" value="<?php 
			if(isset($details))
			{
	 			echo $details[0]->sales;
	 		}?>"/>    
            </label>  
        </div>
   <?php if(!isset($item_id)){?>  
     <!--<div class="span12">
  <p>Brands with Fortification logo</p>
   <div id="c_k">
  <label for="brandname">
 
		< ?php
		$CI =& get_instance();
		if($CI->radio_boxes() > 0){
		foreach($CI->radio_boxes() as $r):?>
<!-- <label>	-- >	
<input  name="brandname[]" type="checkbox" value="< ?php echo $r->brand_name?>"><span class="lbl"> < ?php echo $r->brand_name?></span><br>
<!--</label>	-- >	
		< ?php endforeach; }?>
        </label>
        </div>
        </div>-->
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
      </div><br />
<div class="span12"><br />

      <fieldset id="checkArray2">
      <label for="brandname2">Brands  without Fortification logo<br />

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
        <br/><br />
          <div class="span12">
        <?php if(!isset($item_id)){?>
             <button type="submit" class="btn btn-primary">Save</button>
        <button type="submit" class="btn btn-warning" formaction="<?php echo base_url() ?>submit/c_form_oil/fortifiedOil_prod/1">Save and Continue</button>
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