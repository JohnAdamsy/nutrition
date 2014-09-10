<form name="qualityAssurance_A1" id="qualityAssurance_A1" method="post" action="<?php echo base_url()?>submit/c_form_sugar/form_internalQC_A1" >
	<h3>FORTIFIED SUGAR QC/QA- TABLE A-1</h3>
	<p align="center">
		VITAMIN A PREMIX INVENTORY CONTROL LOG
	</p>

	<section class="block">
		<section class="column">
			<section class="row">
				<section class="left">
					Harvest Year:
				</section>
				<section class="right">
					<select name="harvestYear" id="harvestYear"></select>
				</section>
			</section>

			<section class="row">
				<section class="left">
					Date of reporting:
				</section>
				<section class="right">
					<input type"text" id="reportingDate" name="reportingDate" class="autoDate"/>
				</section>
			</section>
		</section>
		<section class="column">
			<section class="row">
				<section class="left">
					Name and Signature:
				</section>
				<section class="right">
					<input type="text" id="nameSignature" name="nameSignature"/>
				</section>
			</section>
		</section>
	</section>

	<table border="0" width="100%">
		<tr>
			<td width="11%"></td>
			<td width="11%"></td>
			<td colspan="3" align="center">RECEIVED</td>
			<td colspan="2" align="center">DISPATCHED</td>
			<td width="11%"></td>
			<td width="11%"></td>
		</tr>
		<tr>
			<td width="11%">DATE</td>
			<td width="11%">TIME</td>
			<td width="11%">NO. OF BAGS(A)</td>
			<td width="11%">LOT ID(BAG NOs)</td>
			<td width="11%">PRODUCTION DATE</td>
			<td width="11%">NO. BAGS(B)</td>
			<td width="11%">LOT ID(BAG NOs.)</td>
			<td width="11%">IN STOCK(C) (C)=(A)-(B)</td>
			<td width="11%">OBSERVATIONS</td>
		</tr>
		<tr class="clonable">
			<td width="11%">
			<input type="text" name="dateA1_1" id="dateA1_1" class="cloned"/>
			</td>
			<td width="11%">
			<input type="text" name="timeA1_1" id="timeA1_1" class="cloned"/>
			</td>
			<td width="11%">
			<input type="text" name="bagNumbers_1" id="bagNumbers_1" class="cloned"/>
			</td>
			<td width="11%">
			<input type="text" name="lotID_1" id="lotID_1" class="cloned"/>
			</td>
			<td width="11%">
			<input type="text" name="productionDate_1" id="productionDate_1" class="cloned"/>
			</td>
			<td width="11%">
			<input type="text" name="dispatchedBags_1" id="dispatchedBags_1" class="cloned"/>
			</td>
			<td width="11%">
			<input type="text" name="dispatchedLotID_1" id="dispatchedLotID_1" class="cloned"/>
			</td>
			<td width="11%">
			<input type="text" name="inStock_1" id="inStock_1" class="cloned"/>
			</td>
			<td width="11%">
			<input type="text" name="observations_1" id="observations_1" class="cloned"/>
			</td>
		</tr>
	</table>
</form>