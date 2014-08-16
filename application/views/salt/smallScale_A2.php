<form name="smallScale_A2" id="smallScale_A2" method="post" action="<?php echo base_url()?>submit/c_form_salt/form_smallScale_A2">
	<!--form for internal monitoring of salt fortification- A2-->

	<h3 align="center"> IODIZED SALT QA IN SMALL SCALE OPERATIONS-TABLE A2</h3>
	<p align="center">
		<strong>INVENTORY CONTROL LOG OF POTASSIUM IODATE PREMIX IN STOCK AND SALT PRODUCTION.</strong>
	</p>
	<p align="center">&nbsp;
		
	</p>
	<p>
		Harvest Year:<select name="harvestYear" id="harvestYear"></select>
	</p>

	<article class="tabs">
		<section  id="received" class="ON">

			<h2>Received</h2>
			<div>
				<table border="0" width="98%">
					<tr>
						<td width="12.5%">DATE</td>
						<td width="12.5%">SUPPLIER NAME</td>
						<td width="12.5%">KG(A)</td>
						<td width="12.5%">LOT #</td>
						<td width="12.5%">CONTENT OF IODINE(G/KG)</td>

					</tr>
					<tr class="clonable">
						<td width="144">
						<input type="text" name="controlDate_1" id="controlDate_1" class="autoDate cloned" readonly="true" placeholder="click for date"/>
						</td>
						<td width="144">
						<select name="supplierName_1" id="supplierName_1" class="cloned">
							<option value="" selected="selected">Select One</option><?php echo $this->selectCompManufacturers?>
						</select></td>
						<td width="144">
						<input type="number" name="weightKg_1" id="controlKg_1" class="cloned fromZero"/>
						</td>
						<td width="144">
						<input type="text" name="lotNumber_1" id="controlLot_1" class="cloned"/>
						</td>
						<td width="144">
						<input type="number" name="contentOfIodine_1" id="iodineContent_1" class="cloned" />
						</td>
					</tr>
					<tr id="formbuttons">
						<input type="button" title="Adds a new row after the last" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
						<input type="button" title="Removes the last row" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
					</tr>

				</table>

			</div>

		</section>
		<section id="dispatched">

			<h2>Dispatched</h2>

			<div>
				<table border="0" width="98%">
					<tr>
						<td width="12.5%">AMOUNT USED(B)</td>
						<td width="12.5%">IN STOCK(C) (C)=A-B</td>
						<td width="12.5%">AMOUNT OF SALT PRODUCED(KG)</td>
					</tr>
					<tr class="clonable">
						<td width="144">
						<input type="number" name="amountUsed_1" id="amountUsed_1" class="cloned fromZero" />
						</td>
						<td width="144">
						<input type="number" name="inStock_1" id="inStock_1" class="cloned" />
						</td>
						<td width="140">
						<input type="number" name="premixAmount_1" id="premixAmount_1" class="cloned" />
						</td>
					</tr>
					<tr id="formbuttons">
						<input type="button" title="Adds a new row after the last" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
						<input type="button" title="Removes the last row" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
					</tr>
				</table>

			</div>

		</section>

	</article>

</form>