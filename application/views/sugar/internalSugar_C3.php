<form name="internalSugar_C3" id="internalSugar_C3" method="post" action="<?php echo base_url() ?>submit/c_form_sugar/form_internalFort_C3" >
	<h3>SUGAR PREMIX:TABLE C-3</h3>
	<p align="center">
		VITAMIN A PREMIX INVENTORY
	</p>
	<section class="block">
		<table width="100%">
			<tr>
				<td width="12.5%">PRO</td>
				<td width="12.5%">DUC</td>
				<td width="12.5%">TION</td>
				<td width="12.5%"></td>
				<td width="12.5%">DIST</td>
				<td width="12.5%">RIB</td>
				<td width="12.5%">UTION</td>
				<td width="12.5%"></td>
			</tr>
			<tr>
				<td width="12.5%">DATE</td>
				<td width="12.5%">LOG ID(BAG No)</td>
				<td width="12.5%">#25-kg BAGS produced</td>
				<td width="12.5%">DELIVERY No.</td>
				<td width="12.5%">DESTINATION(SUGAR FACTORY NAME)</td>
				<td width="12.5%">LOT ID(BAG No.s)</td>
				<td width="12.5%">#25-kg BAGS DISPATCHED</td>
				<td width="12.5%">OBSERVATIONS</td>
			</tr>
			<tr id="formbuttons">
				<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
			</tr>

			<tr class="clonable">
				<td width="12.5%">
				<input type="text" name="dates_1" id="dates_1" class="cloned"/>
				</td>
				<td width="12.5%">
				<input type="text" name="lotID_1" id="lotID_1" class="cloned"/>
				</td>
				<td width="12.5%">
				<input type="text" name="bagsProduced_1" id="bagsProduced_1" class="cloned"/>
				</td>
				<td width="12.5%">
				<input type="text" name="deliveryNumber_1" id="deliveryNumber_1" class="cloned"/>
				</td>
				<td width="12.5%">
				<select name="factoryName_1" id="factoryName_1" class="cloned">
					<option>Sugar Factory 1</option>
					<option>Sugar factory 2</option>
					<option>Sugar factory 3</option>
				</select></td>
				<td width="12.5%">
				<input type="text" name="dispatchedLotID_1" ID="dispatchedLotID_1" class="cloned" />
				</td>
				<td width="12.5%">
				<input type="text" name="dispatchedBags_1" id="dispatchedBags_1" class="cloned"/>
				</td>
				<td width="12.5%">
				<input type="text" name="observations_1" id="observations_1" class="cloned"/>
				</td>
			</tr>
			<tr>
				<td width="12.5%">TOTAL</td>
				<td width="12.5%">25-kg bags</td>
				<td width="12.5%">
				<input type="text" name="totals0" id="totals0"/>
				</td>
				<td width="12.5%"></td>
				<td width="12.5%">TOTALS</td>
				<td width="12.5%">RIB</td>
				<td width="12.5%">
				<input type="text" name="totals1" id="totals1"/>
				</td>
				<td width="12.5%"></td>
			</tr>
		</table>
	</section>
	<section class="column">
		<section class="row">
			<section class="left">
				Balance for next week:
			</section>
			<section class="right">
				<input type="text" name="balance" id="balance"/>
			</section>
		</section>
		<section class="row">
			<section class="left">
				Date:
			</section>
			<section class="right">
				<input type="text" name="dateResponsible" id="dateResponsible"/>
			</section>
		</section>
	</section>
	<section class="column">
		<section class="row">
			<section class="left">
				Responsible:
			</section>
			<section class="right">
				<input type="text" name="nameResponsible" id="nameResponsible">
			</section>
		</section>
	</section>

</form>