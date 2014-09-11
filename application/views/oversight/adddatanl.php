<?php $counties=counties();?>
<form name="adddatanl" id="adddatanl" method="post"
      action="<?php echo base_url() ?>submit/c_form_oversite/adddatanl/0" class="form-horizontal">
  <input name="item_id" type="hidden" value="<?php echo (isset($item_id))? $item_id:"";?>" />
     <div>
        <div class="span10">  
         <div class="span12"></div>            
               <div class="span10">
                <label>Producer/ Company name
                  <input name="prodName" id="prodName" type="text" value="<?=$details[0]->producer_name;?>" style="width: 99% !important; height: 25px;"/>
                </label>
               </div>
              
              <div class="span5"><br />
                  <label>Type of product
                <select name="prodtype" id="prodtype" style="width: 99% !important; height: 30px;margin-top: 3px">
                  <option value="" <?php if (!(strcmp("", $details[0]->type_of_poduct))) {echo "selected=\"selected\"";} ?>>Select one</option>
                 <?php foreach(product_types() as $key){?>
                    <option value="<?=$key?>" <?php if (!(strcmp($key, $details[0]->type_of_poduct))) {echo "selected=\"selected\"";} ?>><?=$key?></option>
                    <?php }?>
                </select>
                </label>
                
                </div>
                <div class="span5"><br />

                <label>Brand name                
                  <input name="brandname" id="brandname" type="text" value="<?=$details[0]->brand_name;?>" style="width: 98% !important; height: 25px;"/>
                </label>
                </div>
          <div class="span5"><br />

                <label>Production
                <select name="production" id="production" style="width: 99% !important; height: 30px;margin-top: 3px">
                  <option value="" <?php if (!(strcmp("", $details[0]->production))) {echo "selected=\"selected\"";} ?>>Select one</option>
                  <option value="Local" <?php if (!(strcmp("Local", $details[0]->production))) {echo "selected=\"selected\"";} ?>>Local</option>
                  <option value="Imported" <?php if (!(strcmp("Imported", $details[0]->production))) {echo "selected=\"selected\"";} ?>>Imported</option>
                </select>
                </label>
                </div>
           <div class="span5"><br />

                <label>Date of sample collection
                 <input name="collectionDate" id="collectionDate" type="text" value="<?=$details[0]->date_of_sample_collection;?>" style="width: 98% !important; height: 25px;"/>
                </label>
                </div>  
                <div class="span5"><br />
                <label>County
                  <select name="county" id="county" style="width: 99% !important; height: 30px;margin-top: 3px">
                    <option value="" <?php if (!(strcmp("", $details[0]->county))) {echo "selected=\"selected\"";} ?>>Select one</option>
                    <?php foreach($counties as $key){?>
                    <option value="<?=$key?>" <?php if (!(strcmp($key, $details[0]->county))) {echo "selected=\"selected\"";} ?>><?=$key?></option>
                    <?php }?>
                 </select>
                </label>
                </div> 
                <div class="span5"><br />
                <label>Sample collection site
                  <input name="collectionPlace" id="collectionPlace" type="text" value="<?=$details[0]->sample_collection_location;?>" style="width: 98% !important; height: 25px;"/>
                </label>
                </div>
                <!-- <div class="span5"><br />
                <label>Store Type
                 <input name="store" id="store" type="text" value="< ?=$details[0]->store_type;?>" style="width: 98% !important; height: 25px;"/>
                </label>
                </div> -->
                  <div class="span5"><br />
                <label>Date of sample reception in the laboratory
                 <input name="labDate" id="labDate" type="text" value="<?=$details[0]->date_received_lab;?>" style="width: 98% !important; height: 25px;"/>
                </label>
                </div> 
                <div class="span5"><br />
                <label>Date of manufacture
                 <input name="manufactureDate" id="manufactureDate" type="text" value="<?=$details[0]->manufacture_date;?>" style="width: 98% !important; height: 25px;"/>
                </label>
                </div>                 
                 <div class="span5"><br />
                <label>Sample expiry date
                  <input name="expiryDate" id="expiryDate" type="text" value="<?=$details[0]->expiry_date;?>" style="width: 98% !important; height: 25px;"/>
                </label>
                </div>      
                  <div class="span5"><br />
                <label>Labelled as fortified
                  <select name="labelled" id="labelled" style="width: 99% !important; height: 30px;margin-top: 3px">
                    <option value="" <?php if (!(strcmp("", $details[0]->labelled_as_fortified))) {echo "selected=\"selected\"";} ?>>Select one</option>
                    <option value="Yes" <?php if (!(strcmp("Yes", $details[0]->labelled_as_fortified))) {echo "selected=\"selected\"";} ?>>Yes</option>
                    <option value="No" <?php if (!(strcmp("No", $details[0]->labelled_as_fortified))) {echo "selected=\"selected\"";} ?>>No</option>
                 </select>
                </label>
                </div>
                <div class="span5"><br />
                <label>Date of analysis
                 <input name="analysisDate" id="analysisDate" type="text" value="<?=$details[0]->date_of_analysis;?>" style="width: 98% !important; height: 25px;"/>
                </label>
                </div> 
                  <div class="span2"><br />
                <label>Result 1
                  <input name="resultA" id="resultA" type="text" value="<?=$details[0]->result_a;?>" style="width: 98% !important; height: 25px;"/>
                </label>
                </div> 
                 <div class="span2"><br />
                <label>Result 2
                  <input name="resultB" id="resultB" type="text" value="<?=$details[0]->result_b;?>" style="width: 98% !important; height: 25px;"/>
                </label>
                </div> 
                  <div class="span2"><br />
                <label>Result 3
                  <input name="resultC" id="resultC" type="text" value="<?=$details[0]->result_c;?>" style="width: 98% !important; height: 25px;"/>
                </label>
                </div> 
                 <div class="span11" style="margin-top:2em">

      <?php if(!isset($item_id)){?>
             <button type="submit" class="btn btn-primary">Save</button>
        <button type="submit" class="btn btn-warning" formaction="<?php echo base_url() ?>submit/c_form_oversite/adddatanl/1">Save and Continue</button>
         <?php }
		else
		{?>        
      <button type="submit" class="btn btn-primary">Save changes</button>
        <?php }?>
        </div>  
                </div>             
      </div>
</form>