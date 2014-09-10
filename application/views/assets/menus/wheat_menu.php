<?php $active_link= $this->uri->segment(1, "dashboard");?>
<li id="ulink" class="<?php echo ($active_link==="addproductionwheat")?"active":"";?>">
                <a href="<?php echo base_url()?>addproductionwheat">
                    <i class="icon-edit"></i>
                    <span class="menu-text"> <?php echo menuname("Wheat",$this->userVehicle,'Production');?> Form </span>
               </a>
</li>
<!--
 <li>
						<a href="#" id="prent" class="dropdown-toggle">
							<i class="icon-edit"></i>
							<span class="menu-text"> < ?php echo menuname("Wheat",$this->userVehicle);?> Forms  </span>

							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
                        <li>
				<a id="productionWheat_li" class="wheat-url"><i class="icon-double-angle-right"></i>Production Log</a></li> -->
              <!--  <li>
                 <a id="Market_level_wheat_li" class="wheat-url"><i class="icon-double-angle-right"></i>Market Level Sampling </a>
             </li>
						 <li>
				<a id="internalWheatFlour_A1_li" class="wheat-url"><i class="icon-double-angle-right"></i>Internal Fortified Wheat-Table A-1</a>
			</li>
			<li>
				<a id="internalWheatFlour_A2_li" class="wheat-url"><i class="icon-double-angle-right"></i>Internal Fortified Wheat-Table A-2</a>
			</li>
			<li>
				<a id="internalWheatFlour_B1_li" class="wheat-url"><i class="icon-double-angle-right"></i>Internal Fortified Wheat-Table B-1</a>
			</li>
			<li>
				<a id="internalWheatFlour_B2_li" class="wheat-url"><i class="icon-double-angle-right"></i>Internal Fortified Wheat-Table B-2</a>
			</li>
			<li>
				<a id="internalWheatFlour_C1_li" class="wheat-url"><i class="icon-double-angle-right"></i>Internal Fortified Wheat-Table C-1</a>
			</li>
			<li>
				<a id="externalWheatFlour_B1_li" class="wheat-url"><i class="icon-double-angle-right"></i>External Fortified Wheat-Table B-1</a>
			</li>
			<li>
				<a id="externalWheatFlour_B2_li" class="wheat-url"><i class="icon-double-angle-right"></i>External Fortified Wheat-Table B-2</a>
			</li>
			<li>
				<a id="externalWheatFlour_B3_li" class="wheat-url"><i class="icon-double-angle-right"></i>External Fortified Wheat-Table B-3</a>
			</li>
            </ul>
			</li> -->