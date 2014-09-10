<form name="externalIodization_B1" id="externalIodization_B1" method="post" action="<?php echo base_url()?>submit/c_form_salt/form_externalIod_B1">
	<h3 align="center">IODIZED SALT- AUDITS AND INSPECTION- TABLE B-1</h3>
	<h4 align="center">CHECKLISTS OF TECHNICAL AUDIT AND INSPECTION VISIT TO IODIZATION CENTERS</h4>
	<section class="block">
		<section class="column">
			<section class="row">
				<section class="left">
					Date
				</section>
				<section class="right">
					<input type="text" name="inspectionsDate" id="inspectionsDate" value="" readonly="true" placeholder="click for date"/>
				</section>
			</section>

			<section class="row">
				<section class="left">
					Iodization Center
				</section>
				<section class="right">
					<select name="iodizationCenter" id="iodizationCenter">
					<option value="" selected="selected">Select One</option>
					<?php echo $this -> selectIodizationCentre ?>
					</select>
				</section>
			</section>
			<section class="row">
				<section class="left">
					Address
				</section>
				<section class="right">
					<input type="text" name="inspectionAddress" id="inspectionAddress" value=""/>
				</section>
			</section>
		</section>
		<section class="column">
			
			<section class="row">
				<section class="left">
					Telephone
				</section>
				<section class="right">
					<input type="text" name="inspectorTelephone" id="inspectorTelephone" value=""/>
				</section>
			</section>
			<section class="row">
				<section class="left">
					Fax
				</section>
				<section class="right">
					<input type="text" name="inspectorFax" id="inspectorFax" value=""/>

				</section>
			</section>
			<section class="row">
				<section class="left">
					Email
				</section>
				<section class="right">
					<input type="email" name="inspectorEmail" id="inspectorEmail" value="" placeholder="valid email"/>
				</section>
			</section>

		</section>
	</section>
	<section class="block">
	<section class="column">
		<section class="row-title">
		<section class="left">
			 ASPECTS
		</section>
		<section class="right" style="float:right">
			<section class="col">
				YES
			</section>
			<section class="col">
				NO
			</section>
			<section class="col">
				N/A
			</section>
		</section>
	</section>
	<section class="row-title">
		     		1. Iodate and Premix:
	</section>
		<section class="row">
			<section class="left">
				1.1 Inventory is up to date
			</section>
			<section class="right">
				<section class="col">
					<input type="radio" name="inventory" id="inventoryYes" value="yes" checked="checked"/>
				</section>

				<section class="col">
					<input type="radio" name="inventory" id="inventoryNo" value="no"/>
				</section>

				<section class="col">
					<input type="radio" name="inventory" id="inventoryNa" value="n/a"/>
				</section>
			</section>
		</section>
		<section class="row">

			<section class="row">
				<section class="left">
					1.2 Suffcient Iodate Premix for 3 months
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="sufficient" id="sufficientYes" value="yes" checked="checked"/>
					</section>
					<section class="col">
						<input type="radio" name="sufficient" id="sufficientNo" value="no"/>
					</section>

					<section class="col">
						<input type="radio" name="sufficient" id="sufficientNa" value="n/a"/>
					</section>

				</section>
			</section>
			<section class="row">
				<section class="left">
					1.3 Storage is adequate
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="storage" id="storageYes" value="yes" checked="checked"/>
					</section>

					<section class="col">
						<input type="radio" name="storage" id="storageNo" value="no"/>
					</section>

					<section class="col">
						<input type="radio" name="storage" id="storageNa" value="n/a"/>
					</section>
				</section>
			</section>
			<section class="row-title">
				2.Premix preparation:
			</section>
			<section class="row">
				<section class="left">
					2.1 Potassium iodate amount as
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="potassium" id="potassiumYes" value="yes"/>
					</section>

					<section class="col">
						<input type="radio" name="potassium" id="potassiumNo" value="no"/>
					</section>

					<section class="col">
						<input type="radio" name="potassium" id="potassiumNa" value="n/a"/>
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					2.2 Records of premix
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="precord" id="precordsYes" value="yes" checked="checked"/>
					</section>

					<section class="col">
						<input type="radio" name="precord" id="precordsNo" value="no"/>
					</section>

					<section class="col">
						<input type="radio" name="precord" id="precordsNa" value="n/a"/>
					</section>

				</section>
			</section>
			<section class="row">
				<section class="left">
					2.3 "First in, first-out" system
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="fifo" id="fifoYes" value="yes"/>
					</section>

					<section class="col">
						<input type="radio" name="fifo" id="fifoNo" value="no"/>
					</section>

					<section class="col">
						<input type="radio" name="fifo" id="fifoNa" value="n/a"/>
					</section>
				</section>
			</section>
		</section>
	</section>
	<section class="column">
		<section class="row-title">
		<section class="left">
			 ASPECTS
		</section>
		<section class="right" style="float:right">
			<section class="col">
				YES
			</section>
			<section class="col">
				NO
			</section>
			<section class="col">
				N/A
			</section>
		</section>
	</section>
	<section class="row-title">
		   3. Iodization Process:
	</section>
		<section class="row">
			<section class="left">
				3.1 Salt/ Premix proportion as
			</section>
			<section class="right">
				<section class="col">
					<input type="radio" name="premix" id="premixYes" value="yes" checked="checked"/>
				</section>
				<section class="col">
					<input type="radio" name="premix" id="premixNo" value="no"/>
				</section>
				<section class="col">
					<input type="radio" name="premix" id="premixNa" value="n/a"/>
				</section>
			</section>

		</section>
		<section class="row">
			<section class="left">
				3.2 Records of iodized salt updated
			</section>
			<section class="right">
				<section class="col">
					<input type="radio" name="records" id="recordsYes" value="yes" checked="checked"/>
				</section>
				<section class="col">
					<input type="radio" name="records" id="recordsNo" value="no"/>
				</section>
				<section class="col">
					<input type="radio" name="records" id="recordsNa" value="n/a"/>
				</section>
			</section>

		</section>
		<section class="row-title">
			4.Packaging and labelling

		</section>
		<section class="row">
			<section class="left">
				4.1 Salt packaged in adequately
			</section>
			<section class="right">
				<section class="col">
					<input type="radio" name="packaging" id="packagingYes" value="yes" checked="checked"/>
				</section>
				<section class="col">
					<input type="radio" name="packaging" id="packagingNo" value="no"/>
				</section>
				<section class="col">
					<input type="radio" name="packaging" id="packagingNa" value="n/a"/>
				</section>
			</section>
		</section>
     </section>
	</section>
<section class="block">
	<section class="row-title">
		Results of the iodine content.
	</section>
	
	<section class="row">
		<section class="col-x4">
		    Sample #&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="sampleNumber" id="sampleNumber"/>
		</section>
		<section class="col-x4">
		    Iodine Content
			<input type="number" name="iodineContent0" id="iodineContent0"/>
		</section>
		<section class="col-x4">
		    Sample# - of processed samples
			<input type="text" name="reprocessedSamples" id="reprocessedSamples"/>
		</section>
		<section class="col-x4">
		    Iodine Content
			<input type="number" name="iodineContent1" id="iodineContent1"/>
		</section>
	</section>

	<section class = "row-title">
		<section clas="left">
			Average(mg/kg)
		</section>
		<section class="right">
			Average(mg/kg)
		</section>
	</section>

	<section class = "row">
		<section clas="left">
			<input type="number" name="averageSample1" id="averageSample1" readonly="true" />
		</section>
		<section class="right">
			<input type="number" name="averageSample2" id="averageSample2" readonly="true" />
		</section>
	</section>

	<section class="column-wide">
		<section class="row-title">
			New Recommendations
		</section>
		<section class="row">
			<section class="left-wide">
				Non-compliances:
				<textarea name="nonCompliances" id="nonCompliances" value=""></textarea>
			</section>
			<section class="right-wide">
				Suggestions for Improvement:
				<textarea name="improvementSuggestions" id="improvementSuggestions" value=""></textarea>
			</section>
		</section>
		</section>
		<section class="row">
			<section class="col">
				Inspector<p></p>

				<input type="text" name="inspector" id="insPector"/>
			</section>
			<section class="col">
				Received by(Factory representative):<p></p>

				<input type="text" name="factoryRepresentative" id="factoryRepresentative"/>

			</section>
			<section class="col">
				Date<p></p>
				<input type="text" name="externalIodB1_date_rep_signed" id="externalIodB1_date_rep_signed" value="" readonly="true" placeholder="click for date"/>
			</section>
		</section>
		<section class="row">
			<section class="col">
				Signature:(Inspector)<p></p>
				<input type="text" name="inspectorSignature" id="inspectorSignature" value=""/>
			</section>
			<section class="col">
				Signature(Factory representative):<p></p>

				<input type="text" name="signaturefRepresentative" id="signaturefRepresentative" value=""/>
			</section>
			<section class="col">
				Date <p></p>
				<input type="text" name="signatureDate" id="signatureDate" readonly="true" placeholder="click for date" value=""/>
			</section>
		</section>
		<section class="row">
			<section class="col">
				Supervisor(Name):<p></p>
				<input type="text" name="supervisorName" id="supervisorName" value=""/>

			</section>
			<section class="col">
				Signature(supervisor):<p></p>
				<input type="text" name="signatureSupervisor" id="signatureSupervisor" value=""/>
			</section>
			<section class="col">
				Date<p></p>
				<input type="text" name="supervisorDate" id="supervisorDate" value="" readonly="true" placeholder="click for date"/>
			</section>
		</section>
	</section>
</form>