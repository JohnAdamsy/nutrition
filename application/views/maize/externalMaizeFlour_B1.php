<form name="externalMaizeFlour_B1" id="externalMaizeFlour_B1" action="<?php echo base_url()?>submit/c_form_maize/form_externalFort_B1" method="post">
			<h3>FORTIFIED MAIZE FLOUR AUDITS AND INSPECTION TABLE B-1</h3>
			<p align="center">
				BRIEFING SESSIONS- TECHNICAL AUDIT AND INSPECTIONS VISITS
			</p>
			<p>
			<section class="block">
				<section class="column">
					<section class="row">
						<section class="left">
							Date:
						</section>
						<section class="right">
							<input type="text" name="dateB1" id="dateB1" class="autoDate" readonly="true" placeholder="click for date"/>
						</section>
					</section>
					<section class="row">
						<section class="left">
							Maize mill:
						</section>
						<section class="right">
							<select name="maizeMill" id="maizeMill">
								<option value="" selected="selected">Select One</option>
						        <?php echo $this->selectIodizationCentre ?>
							</select>
						</section>
					</section>
		
					<section class="row">
						<section class="left">
							Health Officer:
						</section>
						<section class="right">
							<input type="text" name="publicHealthOfficer" id="publicHealthOfficer"/>
						</section>
					</section>
		
				</section>
				<section class="column">
					<section class="row">
						<section class="left">
							Time:
						</section>
						<section class="right">
							<input type="text" name="time" id="time" class="mobiscroll" readonly="true" placeholder="click for time"/>
						</section>
					</section>
		
					<section class="row">
						<section class="left">
							Address:
						</section>
						<section class="right">
							<input type="text" name="address" id="address"/>
						</section>
					</section>
				</section>
			</section>
		
				<table border="0" width="100%">
					<tr>
						<td width="20%">NAME</td>
						<td width="20%">POSITION</td>
						<td width="20%">SIGNATURE</td>
						<td width="20%">Opening</td>
						<td width="20%">Closing</td>
					</tr>
					<tr class="clonable">
						<td width="20%">
						<input type="text" name="nameB1_1" id="nameB1_1" class="cloned"/>
						</td>
						<td width="20%">
						<input type="text" name="position_1" id="position_1" class="cloned"/>
						</td>
						<td width="20%">
						<input type="text" name="signature_1" id="signature_1" class="cloned"/>
						</td>
						<td width="20%">
						<input type="text" name="opening_1" id="opening_1" class="cloned"/>
						</td>
						<td width="20%">
						<input type="text" name="closing_1" id="closing_1" class="cloned"/>
						</td>
					</tr>
					<tr id="formbuttons">
		
					<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
					<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
		
					</tr>
				</table>
		</form>