<form name="internalSugar_C1" id="internalSugar_C1" method="post" action="<?php echo base_url()?>submit/c_form_sugar/form_internalFort_C1" >
	<h3>SUGAR PREMIX:TABLE C-1</h3>
	<p align="center">RECEPTION RECORD OF VITAMIN A FORTIFICANT COMPOUND</p>
	<p>Ingredient:<input type="text" name="ingredients" id="ingredients"/></p>
	<table border="0" width="100%">
	<tr>
	    <td width="12.5%">DATE RECEIVED</td>
	    <td width="12.5%">QUANTITY RECEIVED(KG)</td>
	    <td width="12.5%">LOT NUMBER</td>
	    <td width="12.5%">EXPIRATION DATE</td>
	    <td width="12.5%">SUPPLIER</td>
	    <td width="12.5%">CERTIFICATE OF ANALYSIS</td>
	    <td width="12.5%">RECEIVED BY</td>
	    <td width="12.5%">OBSERVATIONS</td>
	</tr>
	<tr class="clonable">
	    <td width="12.5%">
	                 <input type="text" name="dateReceived_1" id="dateReceived_1" class="cloned"/></td>
	    <td width="12.5%"><input type="text" name="quantityReceived_1" id="quantityReceived_1" class="cloned"/></td>
	    <td width="12.5%"><input type="text" name="lotNumber_1" id="lotNumber_1" class="cloned"/></td>
	    <td width="12.5%"><input type="text" name="expirationDate_1" id="expirationDate_1" class="cloned"/></td>
	    <td width="12.5%"><input type="text" name="supplier_1" id="supplier_1" class="cloned"/></td>
	    <td width="12.5%"><input type="text" name="certificateOfAnalysis_1" id="certificateOfAnalysis_1" class="cloned"/></td>
	    <td width="12.5%"><input type="text" name="receivedBy_1" id="receivedBy_1" class="cloned"/></td>
	    <td width="12.5%"><input type="text" name="observations_1" id="observations_1" class="cloned"/></td>
	</tr>
	<tr id="formbuttons">
			<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
		</tr>
	
	</table>
	</form>