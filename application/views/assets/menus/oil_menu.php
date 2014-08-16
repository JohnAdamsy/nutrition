<?php $active_link= $this->uri->segment(1, "dashboard");?>
<li id="ulink" class="<?php echo ($active_link==="addproductionoil")?"active":"";?>">
                <a href="<?php echo base_url()?>addproductionoil">
                    <i class="icon-edit"></i>
                    <span class="menu-text"> <?php echo menuname("Oil",$this->userVehicle,"Production");?> Form</span>
               </a>
</li>
<!-- 
<li>
						<a href="#" id="prent" class="dropdown-toggle">
							<i class="icon-edit"></i>
							<span class="menu-text"> < ?php echo menuname("Oil",$this->userVehicle);?> Forms </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							                           
               <li>
				<a id="fortifiedOil_B1_1_li" class="oil-url"><i class="icon-double-angle-right"></i>QC/QA - Production Log</a>
			</li> 
             <li>
				<a id="productionOil_li" class="oil-url"><i class="icon-double-angle-right"></i>Production Log (Alt)</a>
			</li> -->
            <!--  <li>
                 <a id="Market_level_oil_li" class="oil-url"><i class="icon-double-angle-right"></i>Market Level Sampling </a>
             </li>           
            <li>
				<a id="fortifiedOil_A1_li" class="oil-url"><i class="icon-double-angle-right"></i>QC/QA - Inventory Log</a>
			</li>
			
           
			<li>
				<a id="fortifiedOil_B2_li" class="oil-url"><i class="icon-double-angle-right"></i>Fortified Oil-Table B-2</a>
			</li>
			<li>
				<a id="fortifiedOil_C1_li" class="oil-url"><i class="icon-double-angle-right"></i>Fortified Oil-Table C-1</a>
			</li>     
						</ul>
					</li>-->