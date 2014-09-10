<form name="internalFortified_C1" id="internalFortified_C1" method="post" action="<?php echo base_url()?>submit/c_form_salt/form_internalFort_C1"><!--form for internal fortification of salts-C1-->
                         <h3>FORTIFIED SALT QC/QA- TABLE C-1</h3>
                         <h4> PRODUCTION AND QUALITY CONTROL LOG FOR FORTIFIED SALT<sup>5</sup>WITH IODINE</h4>
                         <table width="99%">
                         <tr>
                             <td width="15%">SHIFT(Time)</td>
                             <td width="15%">SALT PRODUCED M.T</td>
                             <td width="15%">PREMIX USED(KG)</td>
                             <td width="15%">SALT FORTIFIED/ PREMIX USED</td>
                             <td width="18%">NOTES</td>
                             <td width="18%">COMMENTS</td>
                             <td width="15%">DATE<input type="text" name="dateC1" id="dateC1" readonly="true" placeholder="click for date"/></td>
                              
                         </tr>
                         <tr class="clonable">
                             <td width="15%"><input type="text" name="productionTime_1" id="productionTime_1" class="mobiscroll cloned" value="" readonly="true" placeholder="click for time"/></td>
                             <td width="15%"><input type="number" name="saltProduced_1" id="saltProduced_1" class="cloned fromZero"/></td>
                             <td width="15%"><input type="number" name="premixUsed_1" id="premixUsed_1" class="cloned positive"/></td>
                             <td width="15%"><input type="number" name="saltFortified_1" id="saltFortified_1" class="cloned fromZero" readonly="true" placeholder="computed"/></td>

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
                             <td width="15%">Results from Quantitative Testing<sup>6</sup>:<input type="text" name="logDate" id="logDate" /></td>
                          </tr>
                          <tr id="formbuttons">

			                <input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			                <input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>

		                 </tr>
                          
                         <tr>
                             <td width="15%">Daily Total</td>
                              <td width="15%"><input type="text" name="saltProduced2" id="saltProduced2" placeholder="auto-calculated" readonly="true"/></td>
                             <td width="15%"><input type="text" name="premixUsed2" id="premixUsed2" placeholder="auto-calculated" readonly="true"/></td>
                             <td width="15%"><input type="text" name="saltFortified2" id="saltFortified2" placeholder="auto-calculated" readonly="true"/></td>
                             <!--td width="18%"><input type="text" name="notes2" id="notes2"/></td-->
                             <td width="18%">Responsible:<input type="text" name="responsible" id="responsible"/></td>
                             <!--td width="15%">Signature:<input type="text" name="sigNature" id="sigNature"/></td-->
                         </tr>
                         <tr>
                             <td width="15%">Total to date</td>
                           <td width="15%"><input type="text" name="saltProduced3" id="saltProduced3" placeholder="auto-calculated" readonly="true"/></td>
                             <td width="15%"><input type="text" name="premixUsed3" id="premixUsed3" placeholder="auto-calculated" readonly="true"/></td>
                             <td width="15%"><input type="text" name="saltFortified3" id="saltFortified3" placeholder="auto-calculated" readonly="true"/></td>
                             <!--td width="18%"><input type="text" name="notes3" id="notes3"/></td-->
                             <td width="18%"></td>
                             <td width="15%"></td>
                         </tr>
                      </table>
                      <br/>
                      <br/>
                 <p><sup>5</sup> This table is based on Log-form from the Los Tarros Refinery, S.A in Guatemala.</p>
                 <p><sup>6</sup> These results may be obtained in the factory quality control laboratory or from an external laboratory.</p>
				
             </form>