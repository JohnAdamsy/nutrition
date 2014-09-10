<form name="externalfortifiedB1" id="externalfortifiedB1" method="post" action="<?php echo base_url()?>submit/c_form_salt/form_externalFort_B1">
	<!--form for externalmonitoring of fortified salt-B1-->
	<h3> FORTIFIED SALT- AUDITS AND INSPECTION- TABLE B-1</h3>
	<p align="center">
		TECHNICAL AUDIT AND INSPECTION VISIT SESSIONS
	</p>

	<section class="block">
		<section class="column">
			<section class="row">
				<section class="left">
					Date:
				</section>
				<section class="right">
					<input type="text" name="visitDate" id="visitDate" readonly="true" placeholder="click for date"/>
				</section>
			</section>

			<section class="row">
				<section class="left">
					Time:
				</section>
				<section class="right">
					<input type="text" name="visitTime" id="visitTime" class="mobiscroll"  value="" readonly="true" placeholder="click for time"/>

				</section>
			</section>

			<section class="row">
				<section class="left">
					Salt Factory:
				</section>
				<section class="right">
					<select name="saltFactory" id="saltFactory">
						<option value="" selected="selected">Select One</option>
					<?php echo $this -> selectIodizationCentre ?>
					</select>

				</section>
			</section>
		</section>
		<section class="column">

			<section class="row">
				<section class="left">
					Address:
				</section>
				<section class="right">
					<input type="text" name="visitAddress" id="visitAddress"/>
				</section>
			</section>

			<section class="row">
				<section class="left">
					Public health Officer:
				</section>
				<section class="right">
					<select name="phealthOfficer" id="phealthOfficer">
					    <option value="" selected="selected">Select One</option>
						<option value="Adams Opiyo">Adams Opiyo</option>
						<option value="Rufus Mbugua">Rufus Mbugua</option>
						<option value="Nicodemus Maingi">Nicodemus Maingi</option>
					</select>
				</section>
			</section>

		</section>

	</section>

	<table width="100%">
		<!--begginning of table-->
		<tr>
			<td width="20%">NAME</td>
			<td width="20%">POSITION</td>
			<td width="20%">SIGNATURE</td>
			<td width="20%">Opening</td>
			<td width="20%">Closing</td>
		</tr>
		<tr class="clonable">
			<td width="25%">
			<input type="text" name="auditorName_1" id="auditorName_1" class="cloned"/>
			</td>
			<td width="20%">
			<input type="text" name="auditorPosition_1" id="auditorPosition_1" class="cloned"/>
			</td>
			<td width="25%">
			<input type="text" name="auditorSignature_1" id="auditorSignature_1" class="cloned"/>
			</td>
			<td width="15%">
			<input type="text" name="auditorOpening_1" id="auditorOpening_1" class="cloned"/>
			</td>
			<td width="15%">
			<input type="text" name="auditorClosing_1" id="auditorClosing_1" class="cloned"/>
			</td>
		</tr>
		<tr id="formbuttons">

			<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
		</tr>
	</table><br>

</form>