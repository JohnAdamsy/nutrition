<form name="externalMaizeFlour_B2" id="externalMaizeFlour_B2" method="post" action="<?php echo base_url()?>submit/c_form_maize/form_externalFort_B2">
		<h3>FORTIFIED MAIZE FLOUR- AUDITS AND INSPECTION- TABLE B-2</h3>
		<p align="center">
			CHECKLIST OF TECHNICAL AUDIT AND INSPECTION VISIT TO MAIZE MILLS
		</p>
		<section class="block">
			<section class="column">
				<section class="row">
					<section class="left">
						<label for="inspectionRegistry">Inspection Registry:</label>
					</section>
					<section class="right">
						<input id="inspectionRegistry" name="inspectionRegistry" type="text" placeholder=""  required>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label for="inspection_date">Date of Inspection:</label>
					</section>
					<section class="right">
						<input id="inspectionDate" name="inspectionDate" type="text" placeholder="datepicker"  required>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label for="inspectionOfficer">Public Health Officers Name:</label>
					</section>
					<section class="right">
						<input id="inspectionOfficer" name="inspectionOfficerName" type="text" placeholder="Surname, Other Names"  required>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label for="address">Address:</label>
					</section>
					<section class="right">
						<input id="address" name="address" type="text" placeholder=""  required>
					</section>
				</section>
				<!--section class="row">
				<section class="left">
				<label for="mill_name">Mill name:</label>
				</section>
				<section class="right">
				<input id="millName" name="millName" type="text" placeholder=""  required>
				</section>
				</section-->
			</section>
			<section class="column" style="margin-bottom:10px">
	
				<section class="row">
					<section class="left">
						<label for="telephone">Telephone:</label>
					</section>
					<section class="right">
						<input id="telephone" name="telephone" type="text" placeholder=""  required>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label for="fax">Fax:</label>
					</section>
					<section class="right">
						<input id="fax" name="fax" type="text" placeholder=""  required>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label for="email">Email:</label>
					</section>
					<section class="right">
						<input id="email" name="email" type="text" placeholder=""  required>
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
					1.1 Cleaning and sanitation:
				</section>
				<section class="row">
					<section class="left">
						<label> 1.1.1 Production area </label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="productionArea" id="pda_y" checked="checked" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="productionArea" id="pda_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="productionArea" id="pda_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 1.1.2 Packaging area</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="packagingArea" id="pga_y" checked="checked" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="packagingArea" id="pga_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="packagingArea" id="pga_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 1.1.3 Warehouse</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="warehouse" id="wh_y" checked="checked" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="warehouse" id="wh_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="warehouse" id="wh_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 1.1.4 Staff facilities and toilettes</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="staffFacilities" checked="checked" id="staff_f_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="staffFacilities" id="staff_f_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="staffFacilities" id="staff_f_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row-title">
					1.2 Personnel:
				</section>
				<section class="row">
					<section class="left">
						<label> 1.2.1 Hygiene as required in regulations</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="hygiene" id="hygiene_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="hygiene" id="hygiene_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="hygiene" id="hygiene_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 1.2.2 Wearing protective clothing</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="protectiveClothing" id="protective_clothing_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="protectiveClothing" id="protective_clothing_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="protectiveClothing" id="protective_clothing" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 1.2.3 Trained in the tasks they perform</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="trainedInTask" id="trained_y" checked="checked" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="trainedInTask" id="trained_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="trainedInTask" id="trained_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row-title">
					<label> 1.3 Written procedures or instructions for:</label>
				</section>
				<section class="row">
					<section class="left">
						<label> 1.3.1 Receipt and storage of premix</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="receiptAndStorage" checked="checked" id="rsp_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="receiptAndStorage" id="rsp_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="receiptAndStorage" id="rsp_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 1.3.2 Premix dilution (if applicable)</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="premixDilution" id="prem_dilution_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="premixDilution" id="prem_dilution_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="premixDilution" id="prem_dilution_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 1.3.3 Feeder verification</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="feederVerification" id="feeder_verification_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="feederVerification" id="feeder_verification_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="feederVerification" id="feeder_verification_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 1.3.4 Sampling of maize flour for QC</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="samplingMaize" checked="checked" id="sampling_maize_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="samplingMaize" id="sampling_maize_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="samplingMaize" id="sampling_maize_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 1.3.5 Iron spot test for maize flour</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="maizeSpotTest" checked="checked" id="maize_spot_test_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="maizeSpotTest" id="maize_spot_test_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="maizeSpotTest" id="maize_spot_test_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row-title">
					2.0 Micronutrient premix:
				</section>
				<section class="row">
					<section class="left">
						<label> 2.1 Premix inventory is upto date</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="premixInventoryUpToDate" checked="checked" id="premix_inventory_uptodate_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="premixInventoryUpToDate" id="premix_inventory_uptodate_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="premixInventoryUpToDate" id="premix_inventory_uptodate_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 2.2 Certificate of Analysis is received per lot</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="certificateOfAnalysis" id="certificate_of_analysis_y" checked="checked" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="certificateOfAnalysis" id="certificate_of_analysis_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="certificateOfAnalysis" id="certificate_of_analysis_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 2.3 Premix is stored under adequate conditions</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="premixStoredWell" id="premix_stored_well_y" checked="checked" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="premixStoredWell" id="premix_stored_well_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="premixStoredWell" id="premix_stored_well_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 2.4 "First-in, first-out" system used</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="fifoSystemPremix" id="fifo_systemP_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="fifoSystemPremix" id="fifo_systemP_na" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="fifoSystemPremix" id="fifo_systemP_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 2.5 Premix is handled well in fortification site</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="premixHandling" id="premix_handling_y" checked="checked" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="premixHandling" id="premix_handling_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="premixHandling" id="premix_handling_na" value="n/a" />
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
					3.0 Maize flour Fortification:
				</section>
				<section class="row">
					<section class="left">
						<label> 3.1 Premix dilution(if applicable)</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="premixDilutionApplicable" id="premix_dilution_applicable_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="premixDilutionApplicable" id="premix_dilution_applicable_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="premixDilutionApplicable" id="premix_dilution_applicable_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 3.1.1 Homogeneity assessed</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="homogeneityAssessed" id="homogeneityAssessed_y" checked="checked" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="homogeneityAssessed" id="homogeneityAssessed_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="homogeneityAssessed" id="homogeneityAssessed_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 3.1.2 Adequate storage and handling</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="storageHandlingArea" id="storage_handling_y" checked="checked" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="storageHandlingArea" id="storage_handling_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="storageHandlingArea" id="storage_handling_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 3.2 Records of feeder performance are available</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="feederRecordsAvailable" id="feeder_records_available_y" checked="checked" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="feederRecordsAvailable" id="feeder_records_available_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="feederRecordsAvailable" id="feeder_records_available_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 3.3 Premix level in feeder adequate during visit</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="premixLevelAdequate" id="premix_level_adequate_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="premixLevelAdequate" id="premix_level_adequate_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="premixLevelAdequate" id="premix_level_adequate_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 3.4 Records of flour produced/premix used up to date</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="flourRecordsUpToDate" id="flour_records_uptodate_y" checked="checked" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="flourRecordsUpToDate" id="flour_records_uptodate_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="flourRecordsUpToDate" id="flour_records_uptodate_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 3.5 Flour samples taken for analysis in every shift</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="shiftSamplesTaken" id="shift_samples_taken_y" checked="checked" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="shiftSamplesTaken" id="shift_samples_taken_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="shiftSamplesTaken" id="shift_samples_taken_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row-title">
					3.6 Corrective action taken when:
				</section>
				<section class="row">
					<section class="left">
						<label> 3.6.1 Ratio maize produced/premix is not right</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="ratioAction" id="ratio_action_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="ratioAction" id="ratio_action_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="ratioAction" id="ratio_action_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 3.6.2 Iron content above factory minimum </label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="ironContent" id="ironContent_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="ironContent" id="ironContent_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="ironContent" id="ironContent_na" checked="checked" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row-title">
					4.0 Fortified maize flour:
				</section>
				<section class="row">
					<section class="left">
						<label> 4.1 Records of flour samples analyzed using:</label>
						<!--/section>
						<section class="right">
						<section class="col">
						<input type="radio" name="maizeSamplesAnalyzed" id="maize_samples_analyzed_y" value="yes" />
						</section>
						<section class="col">
						<input type="radio" name="maizeSamplesAnalyzed" id="maize_samples_analyzed_n" value="no" />
						</section>
						<section class="col">
						<input type="radio" name="maizeSamplesAnalyzed" id="maize_samples_analyzed_na" value="n/a" />
						</section>
						</section-->
					</section>
					<section class="row">
						<section class="left">
							<label> 4.1.1 Spot test for iron</label>
						</section>
						<section class="right">
							<section class="col">
								<input type="radio" name="spotTest" id="spot_test_y" value="yes" />
							</section>
							<section class="col">
								<input type="radio" name="spotTest" id="spot_test_n" value="no" />
							</section>
							<section class="col">
								<input type="radio" name="spotTest" id="spot_test_na" value="n/a" />
							</section>
						</section>
					</section>
					<section class="row">
						<section class="left">
							<label> 4.1.2 Quantitative Method iron(external lab.)</label>
						</section>
						<section class="right">
							<section class="col">
								<input type="radio" name="externalLabIron" id="external_lab_y" value="yes" />
							</section>
							<section class="col">
								<input type="radio" name="externalLabIron" id="external_lab_n" value="no" />
							</section>
							<section class="col">
								<input type="radio" name="externalLabIron" id="external_lab_na" checked="checked" value="n/a" />
							</section>
						</section>
					</section>
					<section class="row">
						<section class="left">
							<label> 4.1.3 Quantitative Method Vitamin A(external lab.)</label>
						</section>
						<section class="right">
							<section class="col">
								<input type="radio" name="externalLabVitaminA" id="external_lab_y" value="yes" />
							</section>
							<section class="col">
								<input type="radio" name="externalLabVitaminA" id="external_lab_n" value="no" />
							</section>
							<section class="col">
								<input type="radio" name="externalLabVitaminA" id="external_lab_na" checked="checked" value="n/a" />
							</section>
						</section>
					</section>
					<section class="row">
						<section class="left">
							<label> 4.2 Daily composite samples are prepared</label>
						</section>
						<section class="right">
							<section class="col">
								<input type="radio" name="dailyCompPrepared" id="daily_compo_prepared_y" checked="checked" value="yes" />
							</section>
							<section class="col">
								<input type="radio" name="dailyCompPrepared" id="daily_compo_prepared_n" value="no" />
							</section>
							<section class="col">
								<input type="radio" name="dailyCompPrepared" id="daily_compo_prepared_na" value="n/a" />
							</section>
						</section>
					</section>
					<section class="row">
						<section class="left">
							<label>4.3 Last 30 samples are stored and available</label>
						</section>
						<section class="right">
							<section class="col">
								<input type="radio" name="lastSamplesStored" id="last_samples_stored_y" checked="checked" value="yes" />
							</section>
							<section class="col">
								<input type="radio" name="lastSamplesStored" id="last_samples_stored_n" value="no" />
							</section>
							<section class="col">
								<input type="radio" name="lastSamplesStored" id="last_samples_stored_na" value="n/a" />
							</section>
						</section>
					</section>
					<section class="row">
						<section class="left">
							<label>4.4 Labeling meets specifications</label>
						</section>
						<section class="right">
							<section class="col">
								<input type="radio" name="goodLabeling" id="good_labeling_y" checked="checked" value="yes" />
							</section>
							<section class="col">
								<input type="radio" name="goodLabeling" id="good_labeling_n" value="no" />
							</section>
							<section class="col">
								<input type="radio" name="goodLabeling" id="good_labeling_na" value="n/a" />
							</section>
						</section>
					</section>
					<section class="row">
						<section class="left">
							<label> 4.5 Fortified maize flour is stored adequately</label>
						</section>
						<section class="right">
							<section class="col">
								<input type="radio" name="fortifiedMaizeStored" id="fortifiedMaizeStored_y" checked="checked" value="yes" />
							</section>
	
							<section class="col">
								<input type="radio" name="fortifiedMaizeStored" id="fortifiedMaizeStored_n" value="no" />
							</section>
	
							<section class="col">
								<input type="radio" name="fortifiedMaizeStored" id="fortifiedMaizeStored_na" value="n/a" />
							</section>
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 4.6 "First-in, first out" system applied to dispatch</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="fifoSystemFlour" id="fifoSystemF_y" checked="checked" value="yes" />
						</section>
	
						<section class="col">
							<input type="radio" name="fifoSystemFlour" id="fifoSystemF_n" value="no" />
						</section>
	
						<section class="col">
							<input type="radio" name="fifoSystemFlour" id="fifoSystemF_na" value="n/a" />
						</section>
					</section>
				</section>
			</section>
		</section>
		</section>
		<section class="block">
			<section class="column-wide">
				<section class="row-title">
					Actions taken from recommendations of last technical auditing and inspection visit (Table B-2)
				</section>
				<section class="row">
					<section class="col-x4">
						Recommendations
						<textarea id="auditRecommendations" name="auditRecommendations"></textarea>
					</section>
					<section class="col-x4">
						Corrective actions taken
						<textarea id="correctiveActionTaken" name="correctiveActionTaken"></textarea>
					</section>
					<section class="right-wide">
						Assessment of corrective action(2)
						<section class="left-wide">
							<select name="assessmentCorrectiveAction" id="assessmentCorrectiveAction" >
								<option>Adequate</option>
								<option>Inadequate</option>
							</select>
						</section>
						<section class="right-wide">
							Comments
							<textarea id="auditComments" name="auditComments"></textarea>
						</section>
					</section>
				</section>
				<section class="row-title">
					New Recommmendations
				</section>
				<section class="row">
					<section class="left-wide">
						Non-compliances
						<textarea id="nonCompliancesIdentified" name="nonCompliancesIdentified"></textarea>
					</section>
					<section class="right-wide">
						Suggestions for improvement
						<textarea id="suggestionsForImprovement" name="suggestionsForImprovement"></textarea>
						</section>
				</section>
				<section class="row right-wide">																																																																
				           Type of Iodine in Premix(Iodine/iodate):
	                    <select name="iodineType" id="iodine_type">
	                        <option value="" selected="selected">Select One</option>
							<option value="Iodine">Iodine</option>
							<option value="Iodate">Iodate</option>
						</select>
			  </section>
		</section>
		<table>
			<tr>
				<td width="144"></td>
				<td width="144"></td>
				<td width="144">Lab results </td>
				<td width="144">from inspection</td>
				<td width="144"></td>
				<td width="144">Lab results</td>
				<td width="144">from inspection</td>
			</tr>
			<tr>
				<td width="144">ID Composite</td>
				<td width="144">Factory estimation[Iron](mg/kg)</td>
				<td width="144">[Iron](mg/kg)</td>
				<td width="144">[Vitamin A](mg/kg)</td>
				<td width="144">ID other samples</td>
				<td width="144">[Iron](mg/kg)</td>
				<td width="144">[Vitamin A](mg/kg)</td>
			</tr>
			<tr class="clonable">
				<td width="144">
				<input type="text"  name="IDComposite" id="IDComposite" class="cloned autodate"/>
				</td>
				<td width="144">
				<input type="number"  name="FactoryEstimatesIronMgPerKg" id="FactoryEstimatesIronMgPerKg" class="cloned fromZero"/>
				</td>
				<td width="144">
				<input type="number"  name="LabResultsIronMgPerKg" id="LabResultsIronMgPerKg" class="cloned"/>
				</td>
				<td width="144">
				<input type="number"  name="InspectionVitaminMgPerKg0" id="InspectionVitaminMgPerKg0" class="cloned fromZero"/>
				</td>
				<td width="144">
				<input type="text"  name="IDOther" id="IDOther" class="cloned"/>
				</td>
				<td width="144">
				<input type="number" name="IronMgPerKg2" id="IronMgPerKg2" class="cloned fromZero"/>
				</td>
				<td width="144">
				<input type="number" name="InspectionVitaminMgPerKg1" id="InspectionVitaminMgPerKg1" class="cloned fromZero"/>
				</td>
			</tr>
			<tr id="formbuttons" class="clonable">
				<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
				<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
			</tr>
		</table>
	
		<section class="row">
			<!--section class="left-wide">
			Public Health Officer (Name)
			<input id="inspection_officer" name="inspectionOfficerName" type="text" placeholder="Surname, Other Names"  required>
			</section-->
			<!--section class="right-wide">
			Date
			<input id="inspection_date" name="inspectionDate" type="text" placeholder="click for date" readonly="true">
			</section-->
		</section>
		<section class="column-wide">
			<section class="row">
				<section class="left-wide">
					Supervisor (Name)
					<input id="supervisor_name" name="supervisorName" type="text" placeholder="Surname, Other Names"  required>
				</section>
				<section class="right">
					Date
					<input id="supervision_date" name="supervisionDate" type="text" readonly="true" placeholder="click for date"/>
				</section>
			</section>
		</section>
	
	</form>