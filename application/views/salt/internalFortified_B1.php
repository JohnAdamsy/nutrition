<form name="internalFortified_B1" id="internalFortified_B1" method="post" action="<?php echo base_url()?>submit/c_form_salt/form_internalFort_B1"><!--Form for internal monitoring of salt fortification- B1-->
						<h3 align="center"> FORTIFIED SALT QC/QA- TABLE B-1</h3>
						<p align="center"><strong>PRODUCTION LOG FOR IODINE PREMIX</strong></p>
						<!--p>Salt factory:<select name="saltFactory" id="saltFactory">
						<option value="" selected="selected">Select One</option>
						<option value="1">Kensalt</option>
						<option value="2">Magadi Salt</option>
						</select></p-->
						<!--<p>Year:  &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
						  <select name="year_1" id="year_1">
						  </select></p>-->
						
						<table width="100%"><!--beggining of table-->
						<tr>
							<td width="12.5%"></td>
							<td width="12.5%"></td>
							<td width="12.5%"></td>
							<td width="12.5%"></td>
							<td width="12.5%">Premix </td>
							<td width="12.5%">Preparation(Time)</td>
							<td width="12.5%"></td>
						</tr>
						<tr>
						   <td width="12.5%">DATE</td>
						   <td width="12.5%">Weight<sup>3</sup>of filler(kg)</td>
						   <td width="12.5%">Weight of the iodine compound(kg)</td>
						   <td width="12.5%">Final weight of the premix(kg)</td>
						   <td width="12.5%">Start</td>
						   <td width="12.5%">End</td>
						   <td width="12.5%">Final premix weight/weight of iodine compound</td>
						   <td width="12.5%">QC review(Name and Signature)</td>
						</tr>
						<tr class="clonable">
						   <td width="12.5%"><input type="text" name="fortifiedDate_1" id="fortifiedDate_1" class="autoDate cloned" readonly="true" placeholder="click for date"/></td>
						   <td width="12.5%"><input type="number" name="fortifiedWeight_1" id="fortifiedWeight_1" class="cloned" /></td>
						   <td width="12.5%"><input type="number" name="compoundWeight_1" id="compoundWeight_1" class="cloned"/></td>
						   <td width="12.5%"><input type="number" name="finalWeight_1" id="finalWeight_1" class="cloned"/></td>
						   <td width="12.5%">
                           <input type="text" name="startTime_1" id="startTime_1" class="mobiscroll cloned" readonly="readonly" value=""  placeholder="click for time"/></td>
						   <td width="12.5%"><input type="text" name="endTime_1" id="endTime_1" class="mobiscroll cloned" readonly="readonly" value="" placeholder="click for time"/></td>
						   <td width="12.5%"><input type="number" name="iodineWeight_1" id="iodineWeight_1" class="cloned" /></td>
						   <td width="12.5%"><input type="text" name="qcReview_1" id="qcReview_1" class="cloned"/></td>
						</tr>
						<tr id="formbuttons">
			                <input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
							<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>

		                </tr>
						
						<tr>
						   <td width="12.5%"></td>
						   <td width="12.5%"></td>
						   <td width="12.5%"></td>
						   <td width="12.5%"></td>
						   <td width="12.5%"></td>
						   <td width="12.5%"></td>
						   <td width="12.5%"></td>
						   <td width="12.5%"></td>
						
						</table>
						<p><sup>3</sup>For premixes in solution, it is the volume in litres.</p>
						</form>