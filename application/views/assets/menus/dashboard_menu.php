<?php $active_link= $this->uri->segment(1, "dashboard");?>
<li id="ulink" class="<?php echo ($active_link==="manageVehicles")?"active":"";?>">
                <a href="<?php echo base_url()?>manageVehicles">
                    <i class="icon-ticket"></i>
                    <span class="menu-text"> Vehicles </span>
               </a>
</li>
<li id="clink" class="<?php echo ($active_link==="manageCompanies")?"active":"";?>">
                <a href="<?php echo base_url()?>manageCompanies">
                    <i class="icon-building"></i>
                    <span class="menu-text"> Companies </span>
               </a>
</li>

<?php if($this->read_rights==="true"){?>
<li id="ulink" class="<?php echo ($active_link==="manageUsers")?"active":"";?>">
                <a href="<?php echo base_url()?>manageUsers">
                    <i class="icon-group"></i>
                    <span class="menu-text"> Users </span>
               </a>
</li>
<?php }?>
