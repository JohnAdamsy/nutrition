<form name="fortifiedOil_B2" id="fortifiedOil_B2" method="post" action="<?php echo base_url() ?>submit/c_form_oil/form_Fort_B2">

	<h3>OIL FORTIFICATION: TABLE B-2</h3>
	<h4>WEEKLY CHECK UP OF EQUIPMENT USED IN OIL FORTIFICATION WITH VITAMIN A</h4>
	<!--p>
		<select name="manufacturer" id="manufacturer">
			<option value="1">Company 1</option>
			<option value="2">Company 2</option>
		</select>
	</p-->
	<p>
		Date:
		<input type="text" name="checkupDate" id="checkupDate" readonly="true" placeholder="click for date"/>
	</p>
	<section class="column-wide">
		<section class="row-title">
			<section class = "left">
				<label>EQUIPMENT</label>
			</section>
			<section class="center">
				<label>CONDITION</label>
			</section>
			<section class="right">
				<label>OBSERVATIONS</label>
			</section>
		</section>
		<section class="row">
			<section class = "left">
				<label>1. Blender</label>
				<input type="hidden" id="blender" name="blender_1" value=""/>
			</section>
			<section class="center">
				<select name="blenderCondition" id="blenderCondition" >
					<option value="1">Adequate</option>
					<option value="0">Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea type="text" name="blenderObservations" id="blenderObservations"></textarea>
			</section>
		</section>
		<section class="row">
			<section class = "left">
				<label>2. Balance</label>
				<input type="hidden" id="balance" name="balance_2" value=""/>
			</section>
			<section class="center">
				<select name="balanceCondition" id="balanceCondition" >
					<option value="1">Adequate</option>
					<option value="0">Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea type="text" name="balanceObservations" id="balanceObservations"></textarea>
			</section>
		</section>
		<section class="row">
			<section class = "left">
				<label>3. Pump</label>
				<input type="hidden" id="pump" name="pump_3" value=""/>
			</section>
			<section class="center">
				<select name="pumpCondition" id="pumpCondition" >
					<option value="1">Adequate</option>
					<option value="0">Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea type="text" name="pumpObservations" id="pumpObservations"></textarea>
			</section>
		</section>
		<section class="row">
			<section class = "left">
				<label>4. Stirrers</label>
				<input type="hidden" id="stirrers" name="stirrers_4" value=""/>
			</section>
			<section class="center">
				<select name="stirrersCondition" id="stirrersCondition">
					<option value="1">Adequate</option>
					<option value="0">Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea type="text" name="stirrersObservations" id="stirrersObservations"></textarea>
			</section>
		</section>
		<section class="row">
			<section class = "left">
				<label>5. Feeding tubes</label>
				<input type="hidden" id="feeding" name="feeding_5" value=""/>
			</section>
			<section class="center">
				<select name="feedingTubesCondition" id="feedingTubesCondition" >
					<option value="1">Adequate</option>
					<option value="0">Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea type="text" name="feedingTubesObservations" id="feedingTubesObservations"></textarea>
			</section>
		</section>
		<section class="row">
			<section class = "left">
				<label>6. Blending tank</label>
				<input type="hidden" id="tank" name="tank_6" value=""/>
			</section>
			<section class="center">
				<select name="blendingTankCondition" id="blendingTankCondition" >
					<option value="1">Adequate</option>
					<option value="0">Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea type="text" name="blendingTankObservations" id="blendingTankObservations"></textarea>
			</section>
		</section>
	</section>
	<br/>
	<p>
		<label>Name/Signature:</label>
		<input type="text" name="checkupName" id="checkupName"/>
</form>