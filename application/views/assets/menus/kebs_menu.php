<?php $active_link= $this->uri->segment(1, "dashboard");?>
<li id="ulink" class="<?php echo ($active_link==="adddatakebs")?"active":"";?>">
                <a href="<?php echo base_url()?>adddatakebs">
                    <i class="icon-edit"></i>
                    <span class="menu-text"> Samples data Form </span>
               </a>
</li>
<li id="ulink" class="<?php echo ($active_link==="dbdatakebs")?"active":"";?>">
                <a href="<?php echo base_url()?>dbdatakebs">
                    <i class="icon-hand-right"></i>
                    <span class="menu-text"> Stored data </span>
               </a>
</li>
<li id="ulink" class="<?php echo ($active_link==="reportskebs")?"active":"";?>">
                <a href="<?php echo base_url()?>reportskebs">
                    <i class="icon-double-angle-right"></i>
                    <span class="menu-text"> Reports</span>
               </a>
</li>