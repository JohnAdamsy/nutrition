<form name="qualityAssurance_B1" id="qualityAssurance_B1" method="post" action="<?php echo base_url()?>submit/c_form_sugar/form_internalQC_B1" >
	<h3>FORTIFIED SUGAR QC/QA -TABLE B-1</h3>
	<p align="center">
		FEEDER FLOW CONTROL FOR PRODUCTION OF SUGAR FORTIFIED WITH VITAMIN A
	</p>

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
			<td width="10%"></td>
			<td width="10%"></td>
			<td width="10%"></td>
			<td width="10%"></td>
			<td colspan="4" align="center">FEEDERFLOW(g/min)</td>
			<td width="10%"></td>
			<td width="10%"></td>
		</tr>
		<tr>
			<td width="10%">DATE</td>
			<td width="10%">TIME</td>
			<td width="10%">PRODUCTION RATE(MT/HOUR)</td>
			<td width="10%">THEORETICAL FEEDER FLOW(g/min)<sup>2</sup></td>
			<td width="10%">1</td>
			<td width="10%">2</td>
			<td width="10%">3</td>
			<td width="10%">Mean</td>
			<td width="10%">ADJUSTED</td>
			<td width="10%">OBSERVATIONS</td>
		</tr>
		<tr class="clonable">
			<td width="10%">
			<input type="text" name="qualityDate_1" id="qualityDate_1" class="cloned autoDate" />
			</td>
			<td width="10%">
			<input type="text" name="qualityTime_1" id="qualityTime_1" class="cloned mobiScroll"/>
			</td>
			<td width="10%">
			<input type="text" name="productionRate_1" id="productionRate_1" class="cloned"/>
			</td>
			<td width="10%">
			<input type="text" name="feederFlow_1" id="feederFlow_1" class="cloned"/>
			</td>
			<td width="10%">
			<input type="text" name="feederFlow1_1" id="feederFlow1_1" class="cloned"/>
			</td>
			<td width="10%">
			<input type="text" name="feederFlow2_1" id="feederFlow2_1" class="cloned"/>
			</td>
			<td width="10%">
			<input type="text" name="feederFlow3_1" id="feederFlow3_1" class="cloned"/>
			</td>
			<td width="10%">
			<input type="text" name="feederFlowMean_1" id="feederFlowMean_1" class="cloned"/>
			</td>
			<td width="10%">
			<select name="adjusted_1" id="adjusted_1" class="cloned">
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select></td>
			<td width="10%">
			<input type="text" name="feederFlowObservations_1" id="feederFlowObservations_1" class="cloned"/>
			</td>
		</tr>
	</table>
</form>