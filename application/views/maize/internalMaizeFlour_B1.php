<form name="internalMaizeFlour_B1" id="internalMaizeFlour_B1" method="post" action="<?php echo base_url()?>submit/c_form_maize/form_internalFort_B1">
	<h3>MAIZE FLOUR FORTIFICATION TABLE B-1</h3>
	<p align="center">FEEDER FLOW CONTROL FOR FORTIFIED MAIZE FLOUR</p>
	<p>FEEDER LOCATION:<input type="text" name="feederLocation" id="feederLocation" /></p>
	<table width="100%" border="0">
	<tr>
	     <td></td>
	     <td></td>
	     <td></td>
	     <td></td>
	     <td></td>
	     <td></td>
	     <td></td>
	     <td></td>
	     <td></td>
	     <td></td>
    </tr>
	<tr>
	     <td>DATE</td>
	     <td>SHIFT(TIME)</td>
	     <td>PRODUCTIONRATE(MT/hour)</td>
	     <td>THEORETIC FEEDER FLOW(g/min)<sup>4</sup></td>
	     <td>FEEDER <strong>(1)</strong></td>
	     <td>FLOW <strong>(2)</strong></td>
	     <td>(g/min) <strong>(3)</strong></td>
	     <td>Average</td>
	     <td>CV</td>
	     <td>ADJUSTED</td>
	     <td>OBSERVATIONS</td>
    </tr>
    <tr class="clonable">
	     <td><input type="text" name="feederDate_1" id="feederDate_1" class="cloned autoDate" readonly="true" placeholder="click for date"/></td>
	     <td><input type="text" name="feederTime_1" id="feederTime_1" class="cloned mobiscroll" readonly="true" placeholder="click for time"/></td>
	     <td><input type="number" name="productionRate_1" id="productionRate_1" class="cloned fromZero"/></td>
	     <td><input type="number" name="theoreticFeeder_1" id="theoreticFeeder_1" class="cloned fromZero" readonly="true" placeholder="computed"/></td>
	     <td><input type="number" name="feederFlow1_1" id="feederFlow1_1" class="cloned"/></td>
	     <td><input type="number" name="feederFlow2_1" id="feederFlow2_1" class="cloned"/></td>
	     <td><input type="number" name="feederFlow3_1" id="feederFlow3_1" class="cloned"/></td>
	     <td><input type="number" name="feederFlowAverage_1" id="feederFlowAverage_1" class="cloned" placeholder="computed" readonly="true"/></td>
	     <td><input type="number" name="CV_1" id="CV_1" class="cloned"</td>
	     <td><select name="adjusted_1" id="adjusted_1" class="cloned">
	            <option>Yes</option>
	            <option>No</option></select></td>
	     <td><input type="text" name="observations_1" id="observations_1" class="cloned"/></td>
    </tr>
	
	<tr id="formbuttons">
			<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>

	</tr>
	</table>
	<p><sup>4</sup>Feeder flow (g/min) =MT/hour*100/6</p>
	<p>Person Responsible:<input type="text" name="personResponsible" id="personResponsible"/></p>
	</form>