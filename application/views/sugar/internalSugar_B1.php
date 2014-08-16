<form name="internalSugar_B1" id="internalSugar_B1" method="post" action="<?php echo base_url()?>submit/c_form_sugar/form_internalFort_B1" >
	<h3>SUGAR PREMIX: TABLE B-1</h3>
	<p align="center">
		INGREDIENTS AND MATERIALS REQUIRED FOR VITAMIN A PREMIX PRODUCTION
	</p>

	<section class="block">
		<section class="column">
			<section class="row">
				<section class="left">
					Harvest:
				</section>
				<section class="right">
					<input type="text" name="harvest" id="harvest"/>
				</section>
			</section>

			<section class="row">
				<section class="left">
					Quantity of premix required (MT):
				</section>
				<section class="right">
					<input type="text" name="premixRequired" id="premixRequired"/>
				</section>
			</section>
		</section>
		<section class="column">
			<section class="row">
				<section class="left">
					Sugar Production Goal(MT):
				</section>
				<section class="right">
					<input type="text" name="sugarProduction" id="sugarProduction"/>
				</section>
			</section>
		</section>
	</section>
	<section class="block">
		<table border="0" width="100%">
			<tr>
				<td width="15%">INGREDIENTS & MATERIALS</td>
				<td width="14%">REFERENCE FOR 100 MT(R)</td>
				<td width="14%">QUANTITY REQUIRED(Q) (Q)=(P)*(R)/100</td>
				<td width="14%">CURRENT INVENTORY(I)</td>
				<td width="14%">QUANTITY TO PURCHASE(S) (S)=(Q)-(I)</td>
				<td width="14%">COST PER UNIT(in US$) (U)</td>
				<td width="14%">TOTAL COST(in US$) (T) (T)=(S)*(U)</td>
			</tr>
			<tr>
				<td width="15%">Sugar</td>
				<td width="14%">75 MT</td>
				<td width="14%">
				<input type="text" name="sugarQuantity0" id="sugarQuantity0"/>
				</td>
				<td width="14%">
				<input type="text" name="sugarInventory" id="sugarInventory"/>
				</td>
				<td width="14%">
				<input type="text" name="sugarQuantity1" id="sugarQuantity1"/>
				</td>
				<td width="14%">
				<input type="text" name="sugarCost" id="sugarCost"/>
				/M.T</td>
				<td width="14%">
				<input type="text" name="sugarTotal" id="sugarTotal"/>
				</td>
			</tr>
			<tr>
				<td width="15%">Vitamin A fortification compound</td>
				<td width="14%">22,030 kg</td>
				<td width="14%">
				<input type="text" name="vitaminAQuantity" id="vitaminAQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="vitaminAInventory" id="vitaminAInventory"/>
				</td>
				<td width="14%">
				<input type="text" name="vitaminAQuantity" id="vitaminAQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="vitaminACost" id="vitaminACost"/>
				/Kg</td>
				<td width="14%">
				<input type="text" name="vitaminATotal" id="vitaminATotal"/>
				</td>
			</tr>
			<tr>
				<td width="15%">Antioxidant (Ronoxan)</td>
				<td width="14%">8 kg</td>
				<td width="14%">
				<input type="text" name="antioxidantQuantity" id="antioxidantQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="antioxidantInventory" id="antioxidantInventory"/>
				</td>
				<td width="14%">
				<input type="text" name="antioxidantQuantity" id="antioxidantQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="antioxidantCost" id="antioxidantCost"/>
				/kg</td>
				<td width="14%">
				<input type="text" name="antioxidantTotal" id="antioxidantTotal"/>
				</td>
			</tr>
			<tr>
				<td width="15%">Vegetable oil</td>
				<td width="14%">2,000 L</td>
				<td width="14%">
				<input type="text" name="vegetableQuantity" id="vegetableQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="vegetableInventory" id="vegetableInventory"/>
				</td>
				<td width="14%">
				<input type="text" name="vegetableQuantity" id="vegetableQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="vegetableCost" id="vegetableCost"/>
				/liter</td>
				<td width="14%">
				<input type="text" name="vegetableTotal" id="vegetableTotal"/>
				</td>
			</tr>
			<tr>
				<td width="15%">Polythene black bags</td>
				<td width="14%">4,500</td>
				<td width="14%">
				<input type="text" name="polytheneBlackQuantity" id="polytheneBlackQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="polytheneBlackInventory" id="polytheneBlackInventory"/>
				</td>
				<td width="14%">
				<input type="text" name="polytheneBlackQuantity" id="polytheneBlackQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="polytheneBlackCost" id="polytheneBlackCost"/>
				/thousand</td>
				<td width="14%">
				<input type="text" name="polytheneBlackTotal" id="polytheneBlackTotal"/>
				</td>
			</tr>
			<tr>
				<td width="15%">Polythene black bags</td>
				<td width="14%">4,500</td>
				<td width="14%">
				<input type="text" name="polytheneQuantity" id="polytheneQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="polytheneInventory" id="polytheneInventory"/>
				</td>
				<td width="14%">
				<input type="text" name="polytheneQuantity" id="polytheneQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="polytheneCost" id="polytheneCost"/>
				/thousand</td>
				<td width="14%">
				<input type="text" name="polytheneTotal" id="polytheneTotal"/>
				</td>
			</tr>
			<tr>
				<td width="15%">Nitrogen</td>
				<td width="14%">2 cylinders (100 lb each)</td>
				<td width="14%">
				<input type="text" name="nitrogenQuantity" id="nitrogenQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="nitrogenInventory" id="nitrogenInventory"/>
				</td>
				<td width="14%">
				<input type="text" name="nitrogenQuantity" id="nitrogenQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="nitrogenCost" id="nitrogenCost"/>
				/cylinder</td>
				<td width="14%">
				<input type="text" name="nitrogenTotal" id="nitrogenTotal"/>
				</td>
			</tr>
			<tr>
				<td width="15%">TOTALS (US$)</td>
				<td width="14%"></td>
				<td width="14%"></td>
				<td width="14%"></td>
				<td width="14%"></td>
				<td width="14%"></td>
				<td width="14%">
				<input type="text" name="grandTotal" id="grandTotal"/>
				</td>
			</tr>

		</table>
	</section>
	
	<section class="column">
		<section class="row">
			<section class="left">
				Prepared by:
			</section>
			<section class="right">
				<input type="text" name="preparedBy" id="preparedBy"/>
			</section>
		</section>

		<section class="row">
			<section class="left">
				Date:
			</section>
			<section class="right">
				<input type="text" name="preparedDate" id="preparedDate"/>
			</section>
		</section>
	</section>
	<section class="column">
		<section class="row">
			<section class="left">
				Approved By:
			</section>
			<section class="right">
				<input type="text" name="approvedBy" id="approvedBy"/>
			</section>
		</section>
		<section class="row">
			<section class="left">
				Date:
			</section>
			<section class="right">
				<input type="text" name="approvedDate" id="approvedDate"/>
			</section>
		</section>
	</section>
</form>