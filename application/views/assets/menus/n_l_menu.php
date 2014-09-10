<?php $active_link= $this->uri->segment(1, "dashboard");?>
<li id="ulink" class="<?php echo ($active_link==="adddatanl")?"active":"";?>">
                <a href="<?php echo base_url()?>adddatanl">
                    <i class="icon-edit"></i>
                    <span class="menu-text"> Samples data Form </span>
               </a>
</li>
<li id="ulink" class="<?php echo ($active_link==="dbdatanl")?"active":"";?>">
                <a href="<?php echo base_url()?>dbdatanl">
                    <i class="icon-hand-right"></i>
                    <span class="menu-text"> Stored data </span>
               </a>
</li>
<li id="ulink" class="<?php echo ($active_link==="reportsnl")?"active":"";?>">
                <a href="<?php echo base_url()?>reportsnl">
                    <i class="icon-double-angle-right"></i>
                    <span class="menu-text"> Reports</span>
               </a>
</li>