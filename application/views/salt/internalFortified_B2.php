<form name="internalFortified_B2" id="internalFortified_B2" method="post" action="<?php echo base_url()?>submit/c_form_salt/form_internalFort_B2">
	<!--form for internal monitoring of salt fortification-B2-->
	<h3>SALT FORTIFICATION: TABLE B-2</h3>
	<h4>WEEKLY CHECK UP OF EQUIPMENT USED IN SALT FORTIFICATION WITH IODINE</h4>
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
				<label>CONDITION<p></p>(Adequate/Inadequate)</label>
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
				<textarea name="blenderObservations" id="blenderObservations" rows="2"></textarea>
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
				<textarea name="balanceObservations" id="balanceObservations"rows="2"></textarea>
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
				<textarea name="pumpObservations" id="pumpObservations" rows="2"></textarea>
			</section>
		</section>
		<section class="row">
			<section class = "left">
				<label>4. Drier</label>
				<input type="hidden" id="drier" name="drier_4" value=""/>
			</section>
			<section class="center">
				<select name="drierCondition" id="drierCondition">
					<option value="1">Adequate</option>
					<option value="0">Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="drierObservations" id="drierObservations"rows="2"></textarea>
			</section>
		</section>
		<section class="row">
			<section class = "left">
				<label>5. Spraying/Drip Equipment</label>
				<input type="hidden" id="sprayingEquipment" name="sprayingEquipment_5" value=""/>
			</section>
			<section class="center">
				<select name="sprayerCondition" id="sprayerCondition" >
					<option value="1">Adequate</option>
					<option value="0">Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="sprayerObservations" id="sprayerObservations" rows="2"></textarea>
			</section>
		</section>
	</section>
	<br/>
	<p>
		<label>Name/Signature:</label>
		<input type="text" name="checkupName" id="checkupName"/>
</form>