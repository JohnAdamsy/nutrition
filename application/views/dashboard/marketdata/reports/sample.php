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
<div class="span3" style="width:100%; margin-left: 0;">
<hr />
</div>