<?php
namespace models\Entities\entities_wheat;
/**
 * @Entity
 * @Table(name="wheat_productiontable")
 */
class E_Wheat_Production{
		/**
* @Id
* @Column(name="WheatProductionID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $WheatProductionID;

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
* @Column(name="qty_issued", type="decimal", nullable=true)
* */
private $qty_issued;
/**
* @Column(name="closing_balance", type="decimal", nullable=true)
* */

private $closing_balance;
/**
* @Column(name="dosage_rate", type="decimal", nullable=true)
* */
private $dosage_rate;
/**
* @Column(name="theoretical_prod", type="decimal", nullable=true)
* */
private $theoretical_prod;
/**
* @Column(name="actual_prod", type="decimal", nullable=true)
* */
private $actual_prod;
/**
* @Column(name="production_unfort", type="decimal", nullable=true)
* */
private $production_unfort;
/**
* @Column(name="exp_fort", type="decimal", nullable=true)
* */
private $exp_fort;
/**
* @Column(name="fort_sales", type="decimal", nullable=true)
* */
private $fort_sales=0;
/**
* @Column(name="exp_unfort", type="decimal", nullable=true)
* */
private $exp_unfort;
/**
* @Column(name="fort_brands", type="string",length=250, nullable=true)
* */
private $fort_brands;
/**
* @Column(name="unfort_brands", type="string",length=250, nullable=true)
* */
private $unfort_brands;


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
* @Column(name="time_added", type="string",length=20, nullable=true)
* */
private $time_added;
/**
* @Column(name="edited_by", type="string",length=250, nullable=true)
* */
private $edited_by;
/**
* @Column(name="time_edited", type="string",length=20, nullable=true)
* */
private $time_edited;



//========================================================================================
public function getWheatProductionID() 
{
		return $this -> WheatProductionID;
}
public function setWheatProductionID($WheatProductionID) 
{ 
$this -> WheatProductionID = $WheatProductionID;
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
public function getsales() 
{
		return $this -> fort_sales;
}
public function setsales($fort_sales) 
{ 
$this -> fort_sales = $fort_sales;
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
public function getqty_issued() 
{
		return $this -> qty_issued;
}
public function setqty_issued($qty_issued) 
{ 
$this -> qty_issued= $qty_issued;
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
public function getdosage_rate() 
{
		return $this -> dosage_rate;
}
public function setdosage_rate($dosage_rate) 
{ 
$this -> dosage_rate = $dosage_rate;
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
public function getactual_prod() 
{
		return $this -> actual_prod;
}
public function setactual_prod($actual_prod) 
{ 
$this -> actual_prod = $actual_prod;
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
public function getexp_fort() 
{
		return $this -> exp_fort;
}
public function setexp_fort($exp_fort) 
{ 
$this -> exp_fort = $exp_fort;
}
//========================================================================================
public function getexp_unfort() 
{
		return $this -> exp_unfort;
}
public function setexp_unfort($exp_unfort) 
{ 
$this -> exp_unfort = $exp_unfort;
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