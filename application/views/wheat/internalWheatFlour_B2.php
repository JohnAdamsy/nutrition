<form name="internalWheatFlour_B2" id="internalWheatFlour_B2" method="post" action="<?php echo base_url()?>submit/c_form_wheat/form_internalFort_B2">
    <h3>WHEAT FLOUR FORTIFICATION TABLE B-2</h3>
    <p align="center">PRODUCTION LOG OF FORTIFIED WHEAT FLOUR</p>
    <section class="block">
    <table border="0" width="100%">
	<tr>
	     <td width="16.6%"></td>
	     <td width="16.6%">FLOUR</td>
	     <td width="16.6%">PRODUCED</td>
	     <td width="16.6%"></td>
	     <td width="16.6%"></td>
	     <td width="16.6%"></td>
	</tr>
	<tr>
	     <td width="16.6%">SHIFT(TIME)</td>
	     <td width="16.6%">(MT)(A)</td>
	     <td width="16.6%">LOT ID</td>
	     <td width="16.6%">PREMIX USED(kg)(B)</td>
	     <td width="16.6%">FLOUR/PREMIX RATIO(A/B)</td>
	     <td width="16.6%">OBSERVATIONS</td>
	</tr>
	<tr class="clonable">
	     <td width="16.6%"><input type="text" name="shiftTime_1" id="shiftTime_1" class="cloned mobiscroll" readonly="true" placeholder="click for time"/></td>
	     <td width="16.6%"><input type="number" name="flourMT_1" id="flourMT_1" class="cloned fromZero"/></td>
	     <td width="16.6%"><input type="text" name="flourLotID_1" id="flourLotID_1" class="cloned"/></td>
	     <td width="16.6%"><input type="number" name="premixUsed_1" id="premixUsed_1" class="cloned positive"/></td>
	     <td width="16.6%"><input type="text" name="flourPremixRatio_1" id="flourPremixRatio_1" class="cloned" readonly="true" placeholder="computed"/></td>
	     <td width="16.6%"><input type="text" name="flourProducedObservations_1" id="flourProducedObservations_1" class="cloned"/></td>
	</tr>
	<tr id="formbuttons">

			<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>

		</tr>
	</table>
	</section>
	
	<p>Person Responsible:<input type="text" name="personResponsible" id="personResponsible"/></p>
	</form>