<?php
namespace models\Entities\entities_oil;
/**
 * @Entity
 * @Table(name="oil_productiontable")
 */
class E_Oil_Production{
		/**
* @Id
* @Column(name="OilProductionID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $OilProductionID;

/**
* @Column(name="prod_month", type="decimal", nullable=true)
* */
private $prod_month;

/**
* @Column(name="opening_balance", type="decimal", nullable=true)
* */
private $opening_balance;
/**
* @Column(name="qty_delivered", type="decimal", nullable=true)
* */
private $qty_delivered;
/**
* @Column(name="supplier", type="string",length=250, nullable=true)
* */
private $supplier;
/**
* @Column(name="qty_rejected", type="decimal", nullable=true)
* */
private $qty_rejected;
/**
* @Column(name="qty_issued_o_f", type="decimal", nullable=true)
* */
private $qty_issued_o_f;
/**
* @Column(name="qty_issued_m", type="decimal", nullable=true)
* */
private $qty_issued_m;
/**
* @Column(name="closing_balance", type="decimal", nullable=true)
* */

private $closing_balance;
/**
* @Column(name="dosage_rate_o_f", type="decimal", nullable=true)
* */
private $dosage_rate_o_f;
/**
* @Column(name="theoretical_prod", type="decimal", nullable=true)
* */
private $theoretical_prod;
/**
* @Column(name="actual_prod_oil", type="decimal", nullable=true)
* */
private $actual_prod_oil;
/**
* @Column(name="actual_prod_fats", type="decimal", nullable=true)
* */
private $actual_prod_fats;
/**
* @Column(name="dosage_rate_m", type="decimal", nullable=true)
* */
private $dosage_rate_m;
/**
* @Column(name="theoretical_prod_m", type="decimal", nullable=true)
* */
private $theoretical_prod_m;
/**
* @Column(name="actual_prod_m", type="decimal", nullable=true)
* */
private $actual_prod_m;
/**
* @Column(name="production_unfort", type="decimal", nullable=true)
* */
private $production_unfort;
/**
* @Column(name="exp_fats", type="decimal", nullable=true)
* */
private $exp_fats;
/**
* @Column(name="exp_oil", type="decimal", nullable=true)
* */
private $exp_oil;
/**
* @Column(name="sales", type="decimal", nullable=true)
* */
private $sales;

/**
* @Column(name="fort_brands", type="string",length=250, nullable=true)
* */
private $fort_brands='N/A';
/**
* @Column(name="unfort_brands", type="string",length=250, nullable=true)
* */
private $unfort_brands='N/A';


/**
* @Column(name="company_id", type="integer",length=11, nullable=true)
* */
private $company_id;

/**
* @Column(name="signature", type="string",length=250, nullable=true)
* */
private $signature;

/**
* @Column(name="year", type="string",length=4, nullable=true)
* */
private $year;

/**
* @Column(name="time_added", type="string",length=250, nullable=true)
* */
private $time_added;
/**
* @Column(name="edited_by", type="string",length=250, nullable=true)
* */
private $edited_by;
/**
* @Column(name="time_edited", type="string",length=250, nullable=true)
* */
private $time_edited;



//========================================================================================
public function getOilProductionID() 
{
		return $this -> OilProductionID;
}
public function setOilProductionID($OilProductionID) 
{ 
$this -> OilProductionID = $OilProductionID;
}
//========================================================================================
public function getprod_month() 
{
		return $this -> prod_month;
}
public function setprod_month($prod_month) 
{ 
$this -> prod_month = $prod_month;
}
//========================================================================================
public function getopening_balance() 
{
		return $this -> opening_balance;
}
public function setopening_balance($opening_balance) 
{ 
$this -> opening_balance = $opening_balance;
}
//========================================================================================
public function getqty_delivered() 
{
		return $this -> qty_delivered;
}
public function setqty_delivered($qty_delivered) 
{ 
$this -> qty_delivered = $qty_delivered;
}
//========================================================================================
public function getsupplier() 
{
		return $this -> supplier;
}
public function setsupplier($supplier) 
{ 
$this -> supplier = $supplier;
}
//========================================================================================
public function getqty_rejected() 
{
		return $this -> qty_rejected;
}
public function setqty_rejected($qty_rejected) 
{ 
$this -> qty_rejected = $qty_rejected;
}
//========================================================================================
public function getqty_issued_o_f() 
{
		return $this -> qty_issued_o_f;
}
public function setqty_issued_o_f($qty_issued_o_f) 
{ 
$this -> qty_issued_o_f = $qty_issued_o_f;
}
//========================================================================================
public function getqty_issued_m() 
{
		return $this -> qty_issued_m;
}
public function setqty_issued_m($qty_issued_m) 
{ 
$this -> qty_issued_m = $qty_issued_m;
}
//========================================================================================
public function getclosing_balance() 
{
		return $this -> closing_balance;
}
public function setclosing_balance($closing_balance) 
{ 
$this -> closing_balance = $closing_balance;
}
//========================================================================================
public function getdosage_rate_o_f() 
{
		return $this -> dosage_rate_o_f;
}
public function setdosage_rate_o_f($dosage_rate_o_f) 
{ 
$this -> dosage_rate_o_f = $dosage_rate_o_f;
}
//========================================================================================
public function gettheoretical_prod() 
{
		return $this -> theoretical_prod;
}
public function settheoretical_prod($theoretical_prod) 
{ 
$this -> theoretical_prod = $theoretical_prod;
}
//========================================================================================
public function getactual_prod_oil() 
{
		return $this -> actual_prod_oil;
}
public function setactual_prod_oil($actual_prod_oil) 
{ 
$this -> actual_prod_oil = $actual_prod_oil;
}
//========================================================================================
public function getactual_prod_fats() 
{
		return $this -> actual_prod_fats;
}
public function setactual_prod_fats($actual_prod_fats) 
{ 
$this -> actual_prod_fats = $actual_prod_fats;
}
//========================================================================================
public function getdosage_rate_m() 
{
		return $this -> dosage_rate_m;
}
public function setdosage_rate_m($dosage_rate_m) 
{ 
$this -> dosage_rate_m = $dosage_rate_m;
}
//========================================================================================
public function gettheoretical_prod_m() 
{
		return $this -> theoretical_prod_m;
}
public function settheoretical_prod_m($theoretical_prod_m) 
{ 
$this -> theoretical_prod_m = $theoretical_prod_m;
}
//========================================================================================
public function getactual_prod_m() 
{
		return $this -> actual_prod_m;
}
public function setactual_prod_m($actual_prod_m) 
{ 
$this -> actual_prod_m = $actual_prod_m;
}
//========================================================================================
public function getproduction_unfort() 
{
		return $this -> production_unfort;
}
public function setproduction_unfort($production_unfort) 
{ 
$this -> production_unfort = $production_unfort;
}
//========================================================================================
public function getexp_fats() 
{
		return $this -> exp_fats;
}
public function setexp_fats($exp_fats) 
{ 
$this -> exp_fats = $exp_fats;
}
//========================================================================================
public function getexp_oil() 
{
		return $this -> exp_oil;
}
public function setexp_oil($exp_oil) 
{ 
$this -> exp_oil = $exp_oil;
}
//========================================================================================
public function getsales() 
{
		return $this -> sales;
}
public function setsales($sales) 
{ 
$this -> sales = $sales;
}
//========================================================================================
public function getfort_brands() 
{
		return $this -> fort_brands;
}
public function setfort_brands($fort_brands) 
{ 
$this -> fort_brands = $fort_brands;
}
//========================================================================================
public function getunfort_brands() 
{
		return $this -> unfort_brands;
}
public function setunfort_brands($unfort_brands) 
{ 
$this -> unfort_brands = $unfort_brands;
}
//========================================================================================
public function getcompany_name() 
{
		return $this -> company_id;
}
public function setcompany_name($company_id) 
{ 
$this -> company_id = $company_id;
}
//========================================================================================
public function getyear() 
{
		return $this -> year;
}
public function setyear($year) 
{ 
$this -> year = $year;
}
//========================================================================================
public function getsignature() 
{
		return $this -> signature;
}
public function setsignature($signature) 
{ 
$this -> signature = $signature;
}
//========================================================================================
public function gettime_added() 
{
		return $this -> time_added;
}
public function settime_added($time_added) 
{ 
$this -> time_added = $time_added;
}

//========================================================================================
public function getedited_by() 
{
		return $this -> edited_by;
}
public function setedited_by($edited_by) 
{ 
$this -> edited_by = $edited_by;
}

//========================================================================================
public function gettime_edited() 
{
		return $this -> time_edited;
}
public function settime_edited($time_edited) 
{ 
$this -> time_edited = $time_edited;
}


}
?>