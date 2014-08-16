<form name="internalMaizeFlour_C1" id="internalMaizeFlour_C1" method="post" action="<?php echo base_url() ?>submit/c_form_maize/form_internalFort_C1">
	<h3>FORTIFIED MAIZE FLOUR TABLE C-1</h3>
	<p align="center">PRODUCTION AND QUALITY CONTROL LOG FOR FPRTIFIED MAIZE FLOUR</p>
	<table width="99%">
                         <tr>
                             <td width="15%">SHIFT(Hour)</td>
                             <td width="15%">MAIZE FLOUR PRODUCED M.T</td>
                             <td width="15%">PREMIX USED(kg)</td>
                             <td width="15%">RATIO MAIZE FLOUR/ PREMIX</td>
                             <td width="18%">NOTES</td>
                             <td width="18%">COMPOSITE SAMPLE IDENTIFICATION:</td>
                             <td width="15%">DATE<input type="text" name="dateC1" id="dateC1" class="autoDate"  readonly="true" placeholder="click for date"/></td>
                              
                         </tr>
                         <tr class="clonable">
                             <td width="15%"><input type="text" name="productionTime_1" id="productionTime_1" class="mobiscroll cloned" value=""  readonly="true" placeholder="click for time"/></td>
                             <td width="15%"><input type="number" name="maizeProduced_1" id="maizeProduced_1" class="cloned fromZero"/></td>
                             <td width="15%"><input type="number" name="premixUsed_1" id="premixUsed_1" class="cloned positive"/></td>
                             <td width="15%"><input type="text" name="ratioMaizeFlour_1" id="ratioMaizeFlour_1" class="cloned" readonly="true" placeholder="computed"/></td>
                             <td width="18%"><input type="text" name="notes_1" id="notes_1" class="cloned"/></td>
                             <td width="18%"><input type="text" name="compositeSample_1" id="compositeSample_1" class="cloned"/></td>
                            
                          </tr>
                          <tr>
                             <td width="15%"></td>
                             <td width="15%"></td>
                             <td width="15%"></td>
                             <td width="15%"></td>
                             <td width="18%"></td>
                             <td width="18%"></td>
                             <td width="15%">Results from External Laboratory<sup>6</sup>:<input type="text" name="logDate" id="logDate" /></td>
                          </tr>
                          <tr id="formbuttons">

			<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>

		</tr>
                          
                         <tr>
                             <td width="15%">Daily Total</td>
                             <td width="15%"><input type="text" name="maizeProduced2" id="maizeProduced2" readonly="true" placeholder="computed"/></td>
                             <td width="15%"><input type="text" name="premixUsed2" id="premixUsed2" readonly="true" placeholder="computed"/></td>
                             <td width="15%"><input type="text" name="maizeFortified2" id="maizeFortified2" readonly="true" placeholder="computed"/></td>
                             <td width="18%"><input type="text" name="notes2" id="notes2"/></td>
                             <td width="18%">Responsible:<input type="text" name="responsible" id="responsible"/></td>
                             <!--td width="15%">Signature:<input type="text" name="sigNature" id="sigNature"/></td-->
                         </tr>
                         <tr>
                             <td width="15%">Total to date</td>
                             <td width="15%"><input type="text" name="maizeProduced3" id="maizeProduced3" readonly="true" placeholder="computed"/></td>
                             <td width="15%"><input type="text" name="premixUsed3" id="premixUsed3" readonly="true" placeholder="computed"/></td>
                             <td width="15%"><input type="text" name="maizeFortified3" id="maizeFortified3" readonly="true" placeholder="computed"/></td>
                             <td width="18%"><input type="text" name="notes3" id="notes3"/></td>
                             <td width="18%"></td>
                             <td width="15%"></td>
                         </tr>
                      </table>
                      <br/>
                      <br/>
                 <p><sup>5</sup> This table is based on Log-form from the Los Tarros Refinery, S.A in Guatemala.</p>
                 <p><sup>6</sup> These results may be obtained in the factory quality control laboratory or from an external laboratory.</p>
				
	</form>