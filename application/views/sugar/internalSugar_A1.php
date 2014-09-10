<form name="internalSugar_A1" id="internalSugar_A1" method="post" action="<?php echo base_url()?>submit/c_form_sugar/form_internalFort_A1" >
   <h3 align="center">SUGAR PREMIX: TABLE A-1</h3>
   <p align="center">DAILY CLEANING OF BLENDER USED IN VITAMIN A PREMIX PRODUCTION</p>
   <p align="center">&nbsp;</p>
   <section class="block">
   <table border="0" width="100%">
          <tr>
              <td width="25%">DATE</td>
              <td width="25%">CLEAN</td>
              <td width="25%">OBSERVATIONS</td>
              <td width="25%">RESPONSIBLE</td>
         </tr>
         <tr class="clonable">
              <td width="25%"><input type="text" name="dateA1_1" id="dateA1_1" class="cloned autoDate"/></td>
              <td width="25%"><select name="clean_1" id="clean_1" class="cloned">
                               <option>Yes</option>
                               <option>No</option>
                                  </select></td>
              <td width="25%"><input type="text" name="observations_1" id="observations-1" class="cloned"/></td>
              <td width="255"><input type="text" name="responsible_1" id="responsible_1" class="cloned"/></td>
           </tr>
           <tr id="formbuttons">
			<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
		</tr>
           </table>
           </section>
           <p>Date of reporting:<input type="text" name="reportingDate" id="reportingDate"/></p>
           <p>Name/ Signature:<input type="text" name="nameSignature" id="nameSignature"/></p>
           </form>