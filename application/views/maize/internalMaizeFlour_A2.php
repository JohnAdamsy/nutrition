<form name="internalMaizeFlour_A2" id="internalMaizeFlour_A2" method="post" action="<?php echo base_url()?>submit/c_form_maize/form_internalFort_A2" >
	<h3>FORTIFIED MAIZE FLOUR TABLE A-2</h3>
	<p align="center">
		VITAMINS AND IRON PREMIX INVENTORY CONTROL LOG
	</p>
	<p>Compound Manufacturer:<select name="compManufacturer" id="compManufacturer">
						<option value="" selected="selected">Select One</option>
						<?php echo $this->selectCompManufacturers ?>
					</select></p>
	<section class="block">
	<table width="100%">
		<tr>
			<td width="12.5%"></td>
			<td width="12.5%"></td>
			<td width="12.5%">RECEIVED</td>
			<td width="12.5%"></td>
			<td width="12.5%"></td>
			<td width="12.5%">DISPATCHED</td>
			<td width="12.5%"></td>
			<td width="12.5%"></td>
		</tr>
		<tr>
			<td width="12.5%">DATE</td>
			<td width="12.5%">TIME</td>
			<td width="12.5%">QUANTITY(kg) (A)</td>
			<td width="12.5%">LOT ID</td>
			<td width="12.5%">EXPIRY DATE</td>
			<td width="12.5%">QUANTITY(kg) (B)</td>
			<td width="12.5%">LOT ID</td>
			<td width="12.5%">BALANCE(C)<sup>1</sup>(C)=(A)-(B)</td>
		</tr>
		<tr class="clonable">
			<td width="12.5%">
			<input type="text" name="theDate_1" id="theDate_1" class="cloned autoDate" readonly="true" placeholder="click for date"/>
			</td>
			<td width="12.5%">
			<input type="text" name="theTime_1" id="theTime_1" class="cloned mobiscroll" readonly="true" placeholder="click for time" />
			</td>
			<td width="12.5%">
			<input type="number" name="quantity_1" id="quantity_1" class="cloned fromZero"/>
			</td>
			<td width="12.5%">
			<input type="text" name="lotID_1" id="lotID_1" class="cloned"/>
			</td>
			<td width="12.5%">
			<input type="text" name="expiryDate_1" id="expiryDate_1" class="cloned futureDate" readonly="true" placeholder="click for date"/>
			</td>
			<td width="12.5%">
			<input type="number" name="dispatchedQuantity_1" id="dispatchedQuantity_1" class="cloned fromZero"/>
			</td>
			<td width="12.5%">
			<input type="text" name="dispatchedLotID_1" id="dispatchedLotID_1" class="cloned"/>
			</td>
			<td width="12.5%">
			<input type="text" name="balance_1" id="balance_1" class="cloned fromZero" placeholder="auto-calculated" readonly="true"/>
			</td>
		</tr>
		<tr id="formbuttons">
			<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
		</tr>

	</table>
	</section>
	<section class="column-wide">
	<section class="left-wide">
		Date of reporting:<p></p>
		<input type="text" name="dateOfReporting" id="dateOfReporting" class="autoDate" readonly="true" placeholder="click for date"/>
		</section>
	<section class="right-wide">
		Signature:<p></p>
		<input type="text" name="signature" id="signature"/>
		</section>
		</section>
	</p>
	<p>
	<p>
		<sup>1</sup>When premix is received, C=<strong>previous C+ Received A</strong> but when premix is dispatched C=<strong>previous C- dispatched B</strong>
	</p>

</form>