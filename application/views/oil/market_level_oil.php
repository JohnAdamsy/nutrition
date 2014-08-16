<form name="market_level_oil" id="market_level_oil" method="post"
      action="<?php echo base_url() ?>submit/c_form_oil/fortifiedOil_market/0" class="form-horizontal">
    <div class="row-fluid">
    <h2 class="blue" style="margin-left: 250px;border: none ! important; background: none;" >SAMPLING FORM</h2>
    </div>
    <div class="row-fluid">
        <div class="span5">
            <label>Sample No:</label>
            <input type="text" style="width:220px;" name="sampleNo" id="sampleNo"/>
        </div>
        <div class="span5">
         <p>Date Collected:</p>
            <input name="dateCol" type="text"  class="autoDate" id="dateCol" style="width:220px;" readonly="readonly"/>
         <p>Time Collected:</p>
         <input type="text" style="width:220px;" name="TimeCol" id="TimeCol" class="mobiscroll"/>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span5">
            <p>Product Name</p>
            <input type="text"  style="width:220px;" name="ProdName" id="ProdName"/>
            </div>
        <div class="span5">
            <p>Method of Collection</p>
            <input type="text"  style="width:220px;" name="ColletiocMethod" id="ColletiocMethod"/>
            </div>

    </div>
    <div class="row-fluid">
        <div class="span5">
        <p>Reason For Collection</p>
        <textarea rows="8" cols="5" style="width:220px;" name="collectionReason" id="collectionReason"></textarea>
        </div>
        <div class="span5">

                <p>Collector's Indentification on Package and Seal</p>
                <input type="text"  style="width:220px;" name="collector" id="collector"/>

            <p>Manufacturer</p>
            <input type="text" style="width:220px;" name="manufacturer"/>

            <p>Dealer</p>
            <input type="text" style="width:220px;" name="dealer">
        </div>
    </div>
    <div class="row-fluid">
        <div class="span5">
            <p>Size of lot sampled</p>
            <input type="number" style="width:220px;" name="sampleSize" id="sampleSize">
        </div>
        <div class="span5">
            <p>Date Dispatched</p>
            <input name="dateDispatched" type="text" class="autoDate" id="dateDispatched"  style="width:220px;" readonly="readonly">
        </div>
     </div>
     <div class="row-fluid">
         <div class="span5">
             <p>Laboratory</p>
             <input type="text" style="width:220px;" name="laboratory">
         </div>
         <div class="span5">
             <p>Invoice No:</p>
             <input type="text" style="width:220px;" name="invoiceNo" id="invoiceNo"/>

         </div>

     </div>
     <div class="row-fluid">
         <div class="span5">
             <p>Remark</p>
             <textarea rows="10" style="width:220px;" name="remarks"></textarea>
         </div>
         <div class="span5">
             <p>Invoice Date</p>
             <input  name="invoiceDate" type="text" class="autoDate" id="invoiceDate" style="width:220px;" readonly="readonly"/>
             <p>Specimen seal used</p>
             <input type="text"  style="width:220px;" name="specimenSeal" id="specimenSeal"><br><br>
             <button type="submit" class="btn btn-primary">Save</button>
             <button type="submit" class="btn btn-warning" formaction="<?php echo base_url() ?>submit/c_form_oil/fortifiedOil_market/1">Save and Continue</button>
         </div>
     </div>
</form>