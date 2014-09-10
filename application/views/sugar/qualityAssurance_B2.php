<form name="qualityAssurance_B2" id="qualityAssurance_B2" method="post" action="<?php echo base_url() ?>submit/c_form_sugar/form_internalQC_B2" >
	<h3>FORTIFIED SUGAR QC/QA TABLE B-2</h3>
	<p align="center">PRODUCTION LOG FOR SUGAR FORTIFIED WITH VITAMIN A</p>

	<section class="block">
		<section class="column">
			<section class="row">
				<section class="left">
					Sugar factory:
				</section>
				<section class="right">
					<select name="sugarFactory" id="sugarFactory">
						<option>Factory 1</option>
						<option>Factory 2</option>
					</select>
				</section>
			</section>

			<section class="row">
				<section class="left">
					Harvest year:
				</section>
				<section class="right">
					<select name="harvestYear" id="harvestYear"></select>
				</section>
			</section>
		</section>
		<section class="column">
			<section class="row">
				<section class="left">
					Feeder Location:
				</section>
				<section class="right">
					<input type="text" name="feederLocation" id="feederLocation"/>
				</section>
			</section>
		</section>
		<section class="column">
			<section class="row">
				<section class="left">
					Person Responsible:
				</section>
				<section class="right">
					<input type="text" name="personResponsible" id="personResponsible"/>
				</section>
			</section>
		</section>

	</section>	



	<table border="0" width="100%">
	<tr>
	       <td width="16%"></td>
	       <td width="16%">SUGAR PRODUCED </td>
	       <td colspan="2" align="center">PREMIXUSED</td>
	       <td width="16%"></td>
	       <td width="16%"></td>
	</tr>
	<tr>
	       <td width="16%">SHIFT(TIME)</td>
	       <td width="16%">NO. 50KG BAGS(A)</td>
	       <td width="16%">NO. 25KG BAGS(B)</td>
	       <td width="16%">LOT ID</td>
	       <td width="16%">SUGAR/PREMIX RATION(A/B)</td>
	       <td width="16%">OBSERVATIONS</td>
	</tr>
	<tr class="clonable">
	       <td width="16%"><input type="text" name="shiftTime_1" id="shiftTime_1" class="mobiscroll cloned"/></td>
	       <td width="16%"><input type="text" name="sugarProduced_1" id="sugarProduced_1" class="cloned"/></td>
	       <td width="16%"><input type="text" name="premixBags_1" id="premixBags_1" class="cloned"/></td>
	       <td width="16%"><input type="text" name="usedLotID_1" id="usedLotID_1" class="cloned"/></td>
	       <td width="16%"><input type="text" name="sugarPremixRatio_1" id="sugarPremixRatio_1" classs="cloned"/></td>
	       <td width="16%"><input type="text" name="sugarPremixRatioObservations_1" id="sugarPremixRatioObservations_1" class="cloned"/></td>
	</tr>
	</table>
	
	</form>