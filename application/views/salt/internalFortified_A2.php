<form id="internalFortified_A2" method="post" action="<?php echo base_url()?>submit/c_form_salt/form_internalFort_A2">
	<!--form for internal monitoring of salt fortification- A2-->
	<h3 align="center"> FORTIFIED SALT QC/QA- TABLE A-2</h3>
	<p align="center">
		<strong>IODINE COMPOUND INVENTORY CONTROL LOG.</strong>
	</p>
	<p align="center">&nbsp;
		
	</p>
	<p>
		Compound Manufacturer:
		<select name="compManufacturer" id="compManufacturer">
			<option value="" selected="selected">Select One</option>
			<?php echo $this -> selectCompManufacturers ?>
		</select>
	</p>

	<!--<legend>Iodine Compound Inventory Control Log</legend>-->
	<div class="tab-title">
		<div class="title received awesome blue medium">
			Received
		</div>
		<div class="title dispatched awesome blue medium">
			Dispatched
		</div>
	</div>
	<div class="tab received">
		<table border="0" width="98%">
			<tr>
				<td width="144">DATE</td>
				<td width="144">Supplier COA#</td>
				<td width="144">#DRUMS(A)</td>
				<td width="144">LOT ID(DRUMS Nos.)</td>
				<td width="144">EXPIRATION DATE</td>

			</tr>
			<tr class="clonable">
				<td width="144">
				<input type="date"  name="iodineDate_1" id="iodineDate_1" class="autoDate cloned" readonly="true" placeholder="click for date"/>
				</td>
				<td width="144">
				<input type="text"  name="iodineSupplier_1" id="iodineSupplier_1" class="cloned"/>
				</td>
				<td width="144">
				<input type="number"  name="iodineDrums_1" id="iodineDrums_1" class="cloned fromZero"/>
				</td>
				<td width="144">
				<input type="text"  name="iodineLot_1" id="iodineLot_1" class="cloned"/>
				</td>
				<td width="144">
				<input type="text"  name="iodineExpiration_1" id="iodineExpiration_1" class="futureDate cloned" readonly="true" placeholder="click for date"/>
				</td>
			</tr>
			<tr id="">
				<input type="button" title="Adds a new row after the last" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
				<input type="button" title="Removes the last row" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
			</tr>

		</table>
	</div>
	<div class="tab dispatched" style="display:none">
		<table border="0" width="98%">
			<tr>
				<td width="144">LOT ID (DRUM Nos.)(B=# DRUMS)</td>
				<td width="144">IN STOCK(C) (C)=(A)-(B)</td>
				<td width="141">Receipt & QC-Review (Name & signature)</td>
			</tr>
			<tr class="clonable">
				<td width="144">
				<input type="number" name="iodineDispatched_1" id="iodineDispatched_1" class="cloned fromZero" />
				</td>
				<td width="144">
				<input type="text" name="iodineStock_1" id="iodineStock_1" class="cloned fromZero" placeholder="auto-calculated" readonly="true" />
				</td>
				<td width="141">
				<input type="text" name="iodineReceipt_1" id="iodineReceipt_1" class="cloned"/>
				</td>
			</tr>
			<tr id="formbuttons">
				<input type="button" title="Adds a new row after the last" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
				<input type="button" title="Removes the last row" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
			</tr>
		</table>

	</div>

	<table width="100%">
		<tr>
			<td width="25%">Fortificant sample sent to external lab:</td>
			<td width="25%">&nbsp;</td>
			<td width="25%">Identification:</td>
			<td width="25%">
			<input type="text" name="identification" id="identification"/>
			</td>
		</tr>
		<tr>
			<td width="25%">Iodine(mg/kg)</td>
			<td width="25%">
			<input type="number" name="iodineKgs" id="iodineKgs"/>
			</td>
			<td width="25%">Identification:</td>
			<td width="25%">
			<input type="text" name="iodineIdentification" id="iodineIdentification"/>
			</td>
		</tr>
		<tr>
			<td width="25%">Iodine(mg/kg)=</td>
			<td width="25%">
			<input type="number" name="iodineMgs" id="iodineMgs"/>
			</td>
			<td width="25%">Date of reporting:</td>
			<td width="25%">
			<input type="text" name="reportingDate" id="reportingDate" readonly="true" placeholder="click for date"/>
			</td>
		</tr>
		<tr>
			<td width="25%">Name:</td>
			<td width="25%">
			<input type="text" name="reportersName" id="reportersName"/>
			</td>
			<td width="25%">Signature:</td>
			<td width="25%">
			<input type="text" name="reportersSignature" id="reportersSignature"/>
			</td>
		</tr>
	</table>
</form>