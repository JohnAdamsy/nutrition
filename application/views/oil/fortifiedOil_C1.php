<form name="fortifiedOil_C1" id="fortifiedOil_C1" method="post" action="<?php echo base_url()?>submit/c_form_oil/form_Fort_C1">
		                         <h3>FORTIFIED OIL QC/QA- TABLE C-1</h3>
                         <h4> PRODUCTION AND QUALITY CONTROL LOG FOR FORTIFIED OIL<sup>3</sup>WITH VITAMIN A</h4>
                         <!--p>
	                         <select name="manufacturer" id="manufacturer">
		                         <option value="1">Company 1</option>
		                         <option value="2">Company 2</option>
	                         </select>
                         </p-->
                         <table width="100%">
                         <tr>
                             <td width="15%">SHIFT(Time)</td>
                             <td width="15%">OIL PRODUCED M.T</td>
                             <td width="15%">PREMIX USED(Grams)</td>
                             <td width="15%">OIL FORTIFIED/ PREMIX USED</td>
                             <td width="18%">NOTES</td>
                             <td width="18%">COMMENTS</td>
                             <td width="15%">DATE<input type="text" name="dateC1" id="dateC1" readonly="true" placeholder="click for date"/></td>
                              
                         </tr>
                         <tr class="clonable">
                             <td width="15%"><input type="text" name="productionTime_1" id="productionTime_1" class="mobiscroll cloned" value="" readonly="true" placeholder="click for time"/></td>
                             <td width="15%"><input type="number" name="oilProduced_1" id="oilProduced_1" class="cloned fromZero"/></td>
                             <td width="15%"><input type="number" name="premixUsed_1" id="premixUsed_1" class="cloned positive"/></td>
                             <td width="15%"><input type="number" name="oilFortified_1" id="oilFortified_1" class="cloned fromZero" readonly="true" placeholder="computed"/></td>
                             <td width="18%"><input type="text" name="notes_1" id="notes_1" class="cloned"/></td>
                             <td width="18%"><input type="text" name="comments_1" id="comments_1" class="cloned"/></td>
                            
                          </tr>
                          <tr>
                             <td width="15%"></td>
                             <td width="15%"></td>
                             <td width="15%"></td>
                             <td width="15%"></td>
                             <td width="18%"></td>
                             <td width="18%"></td>
                             <td width="15%">Results from Quantitative Testing<sup>4</sup>:<input type="text" name="logDate" id="logDate" /></td>
                          </tr>
                          <tr id="formbuttons">
			                <input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
							<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>

		                  </tr>
                          
                         <tr>
                             <td width="15%">Daily Total</td>
                             <td width="15%"><input type="text" name="oilProduced2" id="oilProduced2" readonly="true" placeholder="auto-calculated"/></td>
                             <td width="15%"><input type="text" name="premixUsed2" id="premixUsed2" readonly="true" placeholder="auto-calculated"/></td>
                             <td width="15%"><input type="text" name="oilFortified2" id="oilFortified2" readonly="true" placeholder="auto-calculated"/></td>
                             <!--td width="18%"><input type="text" name="notes2" id="notes2"/></td-->
                             <td width="18%">Responsible:<input type="text" name="responsible" id="responsible"/></td>
                             <!--<td width="15%">Signature:<input type="text" name="sigNature" id="sigNature"/></td>-->
                         </tr>
                         <tr>
                             <td width="15%">Total to date</td>
                             <td width="15%"><input type="text" name="oilProduced3" id="oilProduced3"  readonly="true" placeholder="auto-calculated"/></td>
                             <td width="15%"><input type="text" name="premixUsed3" id="premixUsed3"  readonly="true" placeholder="auto-calculated"/></td>
                             <td width="15%"><input type="text" name="oilFortified3" id="oilFortified3"  readonly="true" placeholder="auto-calculated"/></td>
                             <!--td width="18%"><input type="text" name="notes3" id="notes3"/></td-->
                             <td width="18%"></td>
                             <td width="15%"></td>
                         </tr>
                      </table>
                      <br/>
                      <br/>
                 <p><sup>3</sup> This table is based on Log-form from the Los Tarros Refinery, S.A in Guatemala.</p>
                 <p><sup>4</sup> These results may be obtained in the factory quality control laboratory or from an external laboratory.</p>
				
             </form>