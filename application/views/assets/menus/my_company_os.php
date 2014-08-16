<?php $active_link= $this->uri->segment(1, "dashboard");?>
<li id="clink" class="<?php echo ($active_link==="openCompany")?"active":"";?>">
                <a href="<?php echo base_url()?>openCompany/settings">
                    <i class="icon-building"></i>
                    <span class="menu-text"> Company settings </span>
               </a>
</li>

<?php if($this->read_rights==="true"){?>
<li id="ulink" class="<?php echo ($active_link==="manageUsers")?"active":"";?>">
                <a href="<?php echo base_url()?>manageUsers">
                    <i class="icon-group"></i>
                    <span class="menu-text"> User Management </span>
               </a>
</li>
<?php }?>
