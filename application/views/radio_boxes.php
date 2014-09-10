<?php foreach($radio as $r):?>
<input type="checkbox"  name="brand_name[]" value="<?php echo $r->brand_name?>"><?php echo $r->brand_name?><br>
<?php endforeach;?>