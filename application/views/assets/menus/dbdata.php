<?php $active_link= $this->uri->segment(1, "dashboard");?>


  <?php if($this->userVehicle==="MOPHS" || $this->userVehicle==="Oil"){?>           
  <li id="ulink" class="<?php echo ($active_link==="prodOil")?"active":"";?>">
	<a href="<?php echo base_url()?>prodOil">
    <i class="icon-hand-right"></i>
	<span class="menu-text"> <?php echo menuname("Oil",$this->userVehicle,"Production");?> Data</span>
    </a>
  </li>
  <?php }?>
 <!-- < ?php if($this->userVehicle==="MOPHS" || $this->userVehicle==="Sugar"){?> 
  <li>
	 <a id="prent" href="#"><i class="icon-double-angle-right"></i>< ?php echo menuname("Sugar",$this->userVehicle);?> Production Data</a>
  </li>
  < ?php }?>-->
  <?php if($this->userVehicle==="MOPHS" || $this->userVehicle==="Maize"){?> 
  <li id="ulink" class="<?php echo ($active_link==="prodMaize")?"active":"";?>">
	 <a href="<?php echo base_url()?>prodMaize"><i class="icon-hand-right"></i>
	 <span class="menu-text"> <?php echo menuname("Maize",$this->userVehicle,"Production");?> Data
     </span></a>  </li>
  <?php }?>
  <?php if($this->userVehicle==="MOPHS" || $this->userVehicle==="Wheat"){?> 
  <li id="ulink" class="<?php echo ($active_link==="prodWheat")?"active":"";?>">
	 <a id="prent" href="<?php echo base_url()?>prodWheat"><i class="icon-hand-right"></i>
	 <span class="menu-text"> 
	 <?php echo menuname("Wheat",$this->userVehicle,"Production");?> Data
     </span></a>	  </li>
  <?php }?>
<!--  < ?php if($this->userVehicle==="MOPHS" || $this->userVehicle==="Salt"){?>     
  <li>
  <a id="prent" href="#"><i class="icon-hand-right"></i>< ?php echo menuname("Salt",$this->userVehicle);?> Production Data</a></li>
  < ?php }?>-->
<?php $active_link= $this->uri->segment(2, "dashboard");?>

             <?php if($this->userVehicle==="MOPHS" || $this->userVehicle==="Oil"){?>              
			<li id="ulink" class="<?php echo ($active_link==="oil")?"active":"";?>">
				<a id="prent" href="<?php echo base_url()?>reports/oil"><i class="icon-double-angle-right"></i><span class="menu-text"> 
				<?php echo menuname("Oil",$this->userVehicle);?> Reports</span></a>
			</li> <?php }?>
           <!--  < ?php if($this->userVehicle==="MOPHS" || $this->userVehicle==="Sugar"){?>  
			<li class="< ?php echo ($active_link==="oil")?"active":"";?>">
				<a id="prent" href="#"><i class="icon-double-angle-right"></i>< ?php echo menuname("Sugar",$this->userVehicle);?> Reports</a>
			</li> < ?php }?>-->
             <?php if($this->userVehicle==="MOPHS" || $this->userVehicle==="Maize"){?>  
			<li id="ulink" class="<?php echo ($active_link==="maize")?"active":"";?>">
				<a id="prent" href="<?php echo site_url()?>reports/maize"><i class="icon-double-angle-right"></i><span class="menu-text"> <?php echo menuname("Maize",$this->userVehicle);?> Reports</span></a></li> <?php }?>
                 <?php if($this->userVehicle==="MOPHS" || $this->userVehicle==="Wheat"){?>  
            <li class="<?php echo ($active_link==="wheat")?"active":"";?>">
				<a id="prent" href="<?php echo site_url()?>reports/wheat"><i class="icon-double-angle-right"></i><span class="menu-text"><?php echo menuname("Wheat",$this->userVehicle);?> Reports</span></a></li> <?php }?>
              <!--   < ?php if($this->userVehicle==="MOPHS" || $this->userVehicle==="Salt"){?>  
            <li>
				<a id="prent" href="#"><i class="icon-double-angle-right"></i>Salt</a></li> < ?php }?>-->
            