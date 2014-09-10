<form name="fortifiedOil_B1" id="fortifiedOil_B1" method="post" action="<?php echo base_url() ?>submit/c_form_oil/form_Fort_B1">
   <h3 align="center">FORTIFIED OIL QC/QA-TABLE B-1</h3>
   <p align="center">PRODUCTION LOG FOR OIL FORTIFIED WITH VITAMIN A</p>
   <p align="center">&nbsp;</p>
   <p>Oil Factory:<select name="oilFactory" id="oilFactory">
                     <option value="1">Oil Factory 1</option>
                     <option value="2">Oil Factory 2</option>
                                              </select>                                                           
   <p>Year:<select name="harvestYear" id="harvestYear"></select></p>
   <table border="0" width="100%">
                        <tr>
                           <td width="12.5%"></td>
                           <td width="12.5%"></td>
                           <td width="12.5%"></td>
                           <td width="12.5%"></td>
                           <td width="12.5%">PREMIX</td>
                           <td width="12.5%">PREPARATION(Time)</td>
                           <td width="12.5%"></td>
                           
                         </tr>
                         <tr>
                           <td width="12.5%">DATE</td>
                           <td width="12.5%">BATCH #</td>
                           <td width="12.5%">BATCH SIZE (M.T)</td>
                           <td width="12.5%">VITAMIN A AMOUNT(g)</td>
                           <td width="12.5%">START</td>
                           <td width="12.5%">END</td>
                           <td width="12.5%">PREMIX ADDITION(Time)</td>
                           
                         </tr>
                         <tr class="clonable">
                           <td width="12.5%"><input type="text" id="dateA2_1" name="dateB1_1" class="cloned autoDate" readonly="true" placeholder="click for date"/></td>
                           <td width="12.5%"><input type="text" id="batchNumber_1" name="batchNumber_1" class="cloned"/></td>
                           <td width="12.5%"><input type="number" id="batchSize_1" name="batchSize_1" class="cloned fromZero"/></td>
                           <td width="12.5%"><input type="number" id="vitaminAAmount_1" name="vitaminAAmount_1" class="cloned fromZero"/></td>
                           <td width="12.5%"><input type="text" id="premixStart_1" name="premixStart_1" class="cloned mobiscroll" readonly="true" placeholder="click for time"/></td>
                           <td width="12.5%"><input type="text" id="premixEnd_1" name="premixEnd_1" class="cloned mobiscroll" readonly="true" placeholder="click for time"/></td>
                           <td width="12.5%"><input type="text" id="premixAddition_1" name="premixAddition_1" class="cloned" placeholder="auto-calculated "readonly="true"/></td>
                           <!--<td width="12.5%"><input type="text" id="receiptName" name="receiptName"/></td>-->
                         </tr>
                         <tr id="formbuttons">
							<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			                <input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
						</tr>
                         
                    </table>
                    <p>Name and Signature<input type="text" id="nameSignature" name="nameSignature"/>
                    </form>