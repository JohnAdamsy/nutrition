<form name="fortifiedOil_A1" id="fortifiedOil_A1" method="post" action="<?php echo base_url() ?>submit/c_form_oil/form_Fort_A1">
   <h3 align="center">FORTIFIED OIL QC/QA-TABLE A-1</h3>
   <p align="center">VITAMIN A COMPOUND INVENTORY CONTROL LOG</p>
   <p align="center">&nbsp;</p>
   <p>Date of reporting:<input type="text" id="dateReported" name="dateReported" class="autoDate"  readonly="true" placeholder="click for date"/></p>
   <table border="0" width="100%">
                        <tr>
                           <td width="12.5%"></td>
                           <td width="12.5%">RECEIVED</td>
                           <td width="12.5%"></td>
                           <td width="12.5%"></td>
                           <td width="12.5%"></td>
                           <td width="12.5%">DISPATCHED</td>
                           <td width="12.5%"></td>
                           <!--<td width="12.5%"></td>-->
                         </tr>
                         <tr>
                           <td width="12.5%">DATE</td>
                           <td width="12.5%">SUPPLIER COA #</td>
                           <td width="12.5%"># CANS(A)</td>
                           <td width="12.5%">LOT ID (CAN NOs.)</td>
                           <td width="12.5%">EXPIRATION DATE</td>
                           <td width="12.5%">LOT ID (CAN Nos.)(B=# CANS)</td>
                           <td width="12.5%">IN STOCK (C)(C)=(A)-(B)</td>
                           <!--<td width="12.5%">Receipt and QC Review(Name & signature)</td>-->
                         </tr>
                         <tr class="clonable">
                           <td width="12.5%"><input type="text" id="dateA1_1" name="dateA1_1" class="cloned autoDate" readonly="true" placeholder="click for date"/></td>
                           <td width="12.5%"><input type="text" id="oilSupplierCOA_1" name="oilSupplierCOA_1" class="cloned"/></td>
                           <td width="12.5%"><input type="number" id="numberOfCans_1" name="numberOfCans_1" class="cloned fromZero"/></td>
                           <td width="12.5%"><input type="text" id="lotID_1" name="lotID_1" class="cloned"/></td>
                           <td width="12.5%"><input type="text" id="expirationDate_1" name="expirationDate_1" class="cloned futureDate" readonly="true" placeholder="click for date"/></td>
                           <td width="12.5%"><input type="number" id="dispatchedLotID_1" name="dispatchedLotID_1" class="cloned"/></td>
                          <td width="12.5%"><input type="text" id="inStock_1" name="inStock_1" class="cloned fromZero" placeholder="auto-calculated" readonly="true"/></td>
                           <!--<td width="12.5%"><input type="text" id="receiptName" name="receiptName"/></td>-->
                         </tr>
                         <tr id="formbuttons">
								<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			                    <input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
						</tr>
                         
                    </table>
                    <p>Name and Signature:<input type="text" name="transactedBy" id="transactedBy"/>
</form>