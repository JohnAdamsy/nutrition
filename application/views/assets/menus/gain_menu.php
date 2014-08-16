<?php $active_link= $this->uri->segment(1, "dashboard");?>
<li id="ulink" class="<?php echo ($active_link==="adddatagain")?"active":"";?>">
                <a href="<?php echo base_url()?>adddatagain">
                    <i class="icon-edit"></i>
                    <span class="menu-text"> Samples data Form </span>
               </a>
</li>
<li id="ulink" class="<?php echo ($active_link==="dbdatagain")?"active":"";?>">
                <a href="<?php echo base_url()?>dbdatagain">
                    <i class="icon-hand-right"></i>
                    <span class="menu-text"> Stored data </span>
               </a>
</li>
<li id="ulink" class="<?php echo ($active_link==="reportsgain")?"active":"";?>">
                <a href="<?php echo base_url()?>reportsgain">
                    <i class="icon-double-angle-right"></i>
                    <span class="menu-text"> Reports</span>
               </a>
</li>