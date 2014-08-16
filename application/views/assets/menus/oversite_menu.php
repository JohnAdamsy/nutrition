<?php $active_link= $this->uri->segment(1, "dashboard");?>
<li id="ulink" class="<?php echo ($active_link==="marketdata")?"active":"";?>">
                <a href="<?php echo base_url()?>marketdata">
                    <i class="icon-list-alt"></i>
                    <span class="menu-text"> Market Data </span>
               </a>
</li>