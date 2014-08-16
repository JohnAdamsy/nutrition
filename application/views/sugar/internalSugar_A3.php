<form name="internalSugar_A3" id="internalSugar_A3" method="post" action="<?php echo base_url()?>submit/c_form_sugar/internalSugar_A3">
	<h3>SUGAR PREMIX: TABLE A-3</h3>
	<p align="center">
		MAINTENANCE AND CALIBRATION PROGRAM RECORDS
	</p>
	<section class="block">
		<section class="column-wide">
			<section class="row-title">
				<section class="left-wide">
					<label>MAINTENANCE</label>
				</section>
				<section class="right-wide">
					<label>CALIBRATION<sup>1</sup></label>
				</section>

			</section>

			<section class="row-title">
				<section class="left-wide">
					<section class="left-wide">
						<label>EQUIPMENT/DEVICE</label>
					</section>
					<section class="right-wide">
						<label>DATE OF NEXT MAINTENANCE</label>
					</section>

				</section>
				<section class="right-wide">
					<section class="left-wide">
						<label>DATE OF NEXT CALIBRATION</label>
					</section>
					<section class="right-wide">
						<label>OBSERVATIONS</label>
					</section>

				</section>
			</section>

			<section class="row">
				<section class="left-wide">
					<section class="left-wide">
						<label>1.Blender</label>
					</section>
					<section class="right-wide">
						<input type="text" id="blenderDate" name="blenderDate"/>
					</section>

				</section>
				<section class="right-wide">
					<section class="left-wide">
						<input type="text" id="blenderCalibration" name="blenderCalibration"/>
					</section>
					<section class="right-wide">
						<textarea name="blenderCalibrationObservation" id="blenderCalibrationObservation" ></textarea>
					</section>

				</section>
			</section>

			<section class="row">
				<section class="left-wide">
					<section class="left-wide"></section>
					<section class="right-wide"></section>
				</section>

				<section class="right-wide">
					<section class="left-wide"></section>
					<section class="right-wide"></section>
				</section>
			</section>

			<section class="row">
				<section class="left-wide">
					<section class="left-wide">
						<label>2.Scales</label>
					</section>
					<section class="right-wide">
						<input type="text" id="scalesDate" name="scalesDate"/>
					</section>
				</section>

				<section class="right-wide">
					<section class="left-wide">
						<input type="text" name="scalesCalibration" id="scalesCalibration"/>
					</section>
					<section class="right-wide">
						<textarea name="scalesCalibrationObservation" id="scalesCalibrationObservation" ></textarea>
					</section>
				</section>
			</section>

			<section class="row">
				<section class="left-wide">
					<section class="left-wide">
						<label>3.Balance</label>
					</section>
					<section class="right-wide">
						<input type="text" id="balanceDate" name="balanceDate"/>
					</section>
				</section>

				<section class="right-wide">
					<section class="left-wide">
						<input type="text" name="balanceCalibration" id="balanceCalibration"/>
					</section>
					<section class="right-wide">
						<textarea name="balanceCalibrationObservation" id="balanceCalibrationObservation" ></textarea>
					</section>
				</section>
			</section>

			<section class="row">
				<section class="left-wide">
					<section class="left-wide">
						<label>4.Heating Bath</label>
					</section>
					<section class="right-wide">
						<input type="text" id="heatingBathDate" name="heatingBathDate"/>
					</section>
				</section>

				<section class="right-wide">
					<section class="left-wide">
						<input type="text" name="bathCalibration" id="bathCalibration"/>
					</section>
					<section class="right-wide">
						<textarea name="bathCalibrationObservation" id="bathCalibrationObservation" ></textarea>
					</section>
				</section>
			</section>

			<section class="row">
				<section class="left-wide">
					<section class="left-wide">
						<label>5. Electric Stirrer</label>
					</section>
					<section class="right-wide">
						<input type="text" name="electricStirrerDate" id="electricStirrerDate"/>
					</section>
				</section>

				<section class="right-wide">
					<section class="left-wide">
						<input type="text" name="stirrerCalibration" id="stirrerCalibration"/>
					</section>
					<section class="right-wide">
						<textarea name="stirrerCalibrationObservation" id="stirrerCalibrationObservation"></textarea>
					</section>
				</section>
			</section>

			<section class="row">
				<section class="left-wide">
					<section class="left-wide">
						<label>6.Nitrogen bubbling device</label>
					</section>
					<section class="right-wide">
						<input type="text" name="nitrogenDate" id="nitrogenDate"/>
					</section>
				</section>

				<section class="right-wide">
					<section class="left-wide">
						<input type="text" name="nitrogenCalibration" id="nitrogenCalibration"/>
					</section>
					<section class="right-wide">
						<textarea name="nitrogenCalibrationObservation" id="nitrogenCalibrationObservation" ></textarea>
					</section>
				</section>
			</section>

			<section class="row">
				<section class="left-wide">
					<section class="left-wide">
						<label>7. Carts</label>
					</section>
					<section class="right-wide">
						<input type="text" name="cartsDate" id="cartsDate"/>
					</section>
				</section>

				<section class="right-wide">
					<section class="left-wide">
						<input type="text" name="cartsCalibration" id="cartsCalibration" />
					</section>
					<section class="right-wide">
						<textarea name="cartsCalibrationObservation" id="cartsCalibrationObservation" ></textarea>
					</section>
				</section>
			</section>

			<section class="row">
				<section class="left-wide">
					<section class="left-wide">
						<label>8. Sewing machine</label>
					</section>
					<section class="right-wide">
						<input type="text" name="sewingMachineDate" id="sewingMachineDate"/>
					</section>
				</section>

				<section class="right-wide">
					<section class="left-wide">
						<input type="text" name="sewingCalibrated" id="sewingCalibrated"/>
					</section>
					<section class="right-wide">
						<textarea name="sewingCalibratedObservation" id="sewingCalibratedObservation" >
						</textarea>
					</section>
				</section>
			</section>

		</section>
	</section>
	<section class="column-wide">
		<section class="left-wide">
			Date:
			<input type="text" name="formA3Date" id="formA3Date"/>
		</section>
		<section class="right-wide">
			Signature:
			<input type="text" name="formA3Signature" id="formA3Signature"/>
		</section>

	</section>

</form>