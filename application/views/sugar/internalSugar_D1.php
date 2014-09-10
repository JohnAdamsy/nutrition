<form name="internalSugar_D1" id="internalSugar_D1" method="post" action="<?php echo base_url()?>submit/c_form_sugar/form_internalFort_D1" >
	<h3>Sugar premix: table D-1</h3>
	<p align="center">VITAMIN A PREMIX QUALITY CONTROL: RETINOL RESULTS</p>
	<table border="0" width="100%">
	<tr>
	     <td width="14.2%">LOTS ID(BAGS NUMBERS)</td>
	     <td width="14.2%">DATE OF PRODUCTION</td>
	     <td width="14.2%">DATE SAMPLES SENT TO THE LABORATORY</td>
	     <td width="14.2%">LABORATORY REPORT(# ID)</td>
	     <td width="14.2%">REPORT DATE</td>
	     <td width="14.2%">[Vit. A](g/kg)</td>
	     <td width="14.2%">OBSERVATIONS</td>
	</tr>
	<tr class="clonable">
	     <td width="14.2%"><input type="text" name="bagNumbers_1" id="bagNumbers_1" class="cloned"/></td>
	     <td width="14.2%"><input type="text" name="productionDate_1" id="productionDate_1" class="autoDate cloned"/></td>
	     <td width="14.2%"><input type="text" name="samplesSent_1" id="samplesSent_1" class="autoDate cloned"/></td>
	     <td width="14.2%"><input type="text" name="laboratoryReport_1" id="laboratoryReport_1" class="cloned"/></td>
	     <td width="14.2%"><input type="text" name="dateReported_1" id="dateReported_1" class="autoDate cloned"/></td>
	     <td width="14.2%"><input type="text" name="vitaminA_1" id="vitaminA_1" class="cloned"/></td>
	     <td width="14.2%"><input type="text" name="vitaminAObservations_1" id="vitaminAObservations_1" class="cloned"</td>
	</tr>
	<tr id="formbuttons">
			<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
		</tr>
	
	</table>
	</form>