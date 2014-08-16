<form name="qualityAssurance_C1" id="qualityAssurance_C1" method="post" action="<?php echo base_url()?>submit/c_form_sugar/form_internalQC_C1" >
	<h3>FORTIFIED SUGAR QC/QA- TABLE C-1</h3>
	<p align="center">PRODUCTION AND QUALITY CONTROL LOG FOR FORTIFIED SUGAR<sup>1</sup>WITH VITAMIN A</p>
	<table width="100%">
                         <tr>
                             <td width="12%">SHIFT(Time)</td>
                             <td width="12%">SUGAR PRODUCED #50-kg sacks</td>
                             <td width="12%">PREMIX USED #25-kg bags</td>
                             <td width="12%">FORTIFIED SUGAR(M.T)</td>
                             <td width="12%">PREMIX USED</td>
                             <td width="12%">SUGAR/PREMIX</td>
                             <td width="12%">COMMENTS</td>
                             <td width="12%" rowspan="2" valign="top">DATE<input type="text" name="dateC1" id="dateC1"/></td>
                              
                         </tr>
                         <tr class="clonable">
                             <td width="12%"><input type="text" name="productionTime_1" id="productionTime_1" class="mobiscroll cloned" readonly="readonly" value="" /></td>
                             <td width="12%"><input type="text" name="sugarProduced_1" id="sugarProduced_1" class="cloned"/></td>
                             <td width="12%"><input type="text" name="premixUsed_1" id="premixUsed_1" class="cloned"/></td>
                             <td width="12%"><input type="text" name="sugarFortified_1" id="sugarFortified_1" class="cloned"/></td>
                             <td width="12%"><input type="text" name="usedPremix_1" id="usedPremix_1" class="cloned"/></td>
                             <td width="12%"><input type="text" name="sugarPremix_1" id="sugarPremix_1" class="cloned"/></td>
                             <td width="12%"><input type="text" name="comments_1" id="comments_1" class="cloned"/></td>
                            
      </tr>
                          <tr>
                             <td width="12%"></td>
                             <td width="12%"></td>
                             <td width="12%"></td>
                             <td width="12%"></td>
                             <td width="12%"></td>
                             <td width="12%"></td>
                             <td width="12%"></td>
                             <td width="12%">Results from Quantitative Testing<sup>2</sup>:<input type="text" name="logDate" id="logDate" /></td>
                          </tr>
                         <tr>
                             <td width="12%">Daily Total</td>
                             <td width="12%"><input type="text" name="sugarProduced2" id="sugarProduced2"/></td>
                             <td width="12%"><input type="text" name="premixUsed2" id="premixUsed2"/></td>
                             <td width="12%"><input type="text" name="sugarFortified2" id="sugarFortified2"/></td>
                             <td width="12%"><input type="text" name="usedPremix2" id="usedPremix2"/></td>
							 <td width="12%"><input type="text" name="sugarpremix2" id="sugarPremix2"/></td>
                             <td width="12%">&nbsp;</td>
                             <td width="12%"><!--[Vitamin A]:<input type="text" name="vitaminA" id="vitaminA"/>-->
                             </td>
                         </tr>
                         <tr>
                             <td width="12%">Total to date</td>
                             <td width="12%"><input type="text" name="sugarProduced3" id="sugarProduced3"/></td>
                             <td width="12%"><input type="text" name="premixUsed3" id="premixUsed3"/></td>
                             <td width="12%"><input type="text" name="sugarFortified3" id="sugarFortified3"/></td>
                             <td width="12%"><input type="text" name="notes3" id="notes3"/></td>
                             <td width="12%"></td>
                             <td width="12%">Responsible:
                               <input type="text" name="responsible" id="responsible"/></td>
                             <td width="12%">Signature:
                               <input type="text" name="sigNature" id="sigNature"/></td>
                         </tr>
                      </table>
                      <br/>
                      <br/>
                 <p><sup>1</sup> This table is based on Log-form from the Los Tarros Refinery, S.A in Guatemala.</p>
                 <p><sup>2</sup> These results may be obtained in the factory quality control laboratory or from an external laboratory.</p>
				
	</form>