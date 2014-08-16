<?php $active_link= $this->uri->segment(1, "dashboard");?>
<li id="ulink" class="<?php echo ($active_link==="adddataco")?"active":"";?>">
                <a href="<?php echo base_url()?>adddataco">
                    <i class="icon-edit"></i>
                    <span class="menu-text"> Samples data Form </span>
               </a>
</li>
<li id="ulink" class="<?php echo ($active_link==="dbdataco")?"active":"";?>">
                <a href="<?php echo base_url()?>dbdataco">
                    <i class="icon-hand-right"></i>
                    <span class="menu-text"> Stored data </span>
               </a>
</li>
<li id="ulink" class="<?php echo ($active_link==="reportsco")?"active":"";?>">
                <a href="<?php echo base_url()?>reportsco">
                    <i class="icon-double-angle-right"></i>
                    <span class="menu-text"> Reports</span>
               </a>
</li>