<?php
namespace models\Entities\entities_oil;
/**
 * @Entity
 * @Table(name="maize_markettable")
 */
class E_Oil_Market{
		/**
* @Id
* @Column(name="OilMarketID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $OilMarketID;
/**
* @Column(name="sample_no", type="string",length=100, nullable=true)
* */
private $sample_no;
/**
* @Column(name="date_collected", type="string",length=50, nullable=true)
* */
private $date_collected;
/**
* @Column(name="time_collected", type="string",length=50,nullable=true)
* */
private $time_collected;
/**
* @Column(name="prod_name", type="string",length=250, nullable=true)
* */
private $prod_name;
/**
* @Column(name="collection_method", type="string",length=250, nullable=true)
* */
private $collection_method;
/**
* @Column(name="collection_reason", type="string",length=250, nullable=true)
* */
private $collection_reason;
/**
* @Column(name="collector", type="string",length=250, nullable=true)
* */
private $collector;
/**
* @Column(name="dealer", type="string",length=250, nullable=true)
* */
private $dealer;
/**
* @Column(name="manufacturer", type="string",length=250, nullable=true)
* */
private $manufacturer;
/**
* @Column(name="sample_size", type="decimal", nullable=true)
* */
private $sample_size;
/**
* @Column(name="date_dispatched", type="string",length=50, nullable=true)
* */
private $date_dispatched;
/**
* @Column(name="laboratory", type="string",length=250, nullable=true)
* */
private $laboratory;
/**
* @Column(name="invoice_no", type="string",length=250, nullable=true)
* */
private $invoice_no;
/**
* @Column(name="remarks", type="string",length=250, nullable=true)
* */
private $remarks;
/**
* @Column(name="invoice_date", type="string",length=250, nullable=true)
* */
private $invoice_date;
/**
* @Column(name="signature", type="string",length=250, nullable=true)
* */
private $signature;
/**
* @Column(name="time_added", type="string",length=50, nullable=true)
* */
private $time_added;
/**
* @Column(name="edited_by", type="string",length=250, nullable=true)
* */
private $edited_by;
/**
* @Column(name="time_edited", type="string",length=50, nullable=true)
* */
private $time_edited;


//========================================================================================
public function getOilMarketID() 
{
		return $this -> OilMarketID;
}
public function setOilMarketID($OilMarketID) 
{ 
$this -> OilMarketID = $OilMarketID;
}
//========================================================================================
public function getsample_no() 
{
		return $this -> sample_no;
}
public function setsample_no($sample_no) 
{ 
$this -> sample_no = $sample_no;
}
//========================================================================================
public function getdate_collected() 
{
		return $this -> date_collected;
}
public function setdate_collected($date_collected) 
{ 
$this -> date_collected = $date_collected;
}
//========================================================================================
public function gettime_collected() 
{
		return $this -> time_collected;
}
public function settime_collected($time_collected) 
{ 
$this -> time_collected = $time_collected;
}
//========================================================================================
public function getprod_name() 
{
		return $this -> prod_name;
}
public function setprod_name($prod_name) 
{ 
$this -> prod_name = $prod_name;
}
//========================================================================================
public function getcollection_method() 
{
		return $this -> collection_method;
}
public function setcollection_method($collection_method) 
{ 
$this -> collection_method = $collection_method;
}
//========================================================================================
public function getcollection_reason() 
{
		return $this -> collection_reason;
}
public function setcollection_reason($collection_reason) 
{ 
$this -> collection_reason= $collection_reason;
}
//========================================================================================
public function getcollector() 
{
		return $this -> collector;
}
public function setcollector($collector) 
{ 
$this -> collector = $collector;
}
//========================================================================================
public function getdealer() 
{
		return $this -> dealer;
}
public function setdealer($dealer) 
{ 
$this -> dealer = $dealer;
}
//========================================================================================
public function getmanufacturer() 
{
		return $this -> manufacturer;
}
public function setmanufacturer($manufacturer) 
{ 
$this -> manufacturer = $manufacturer;
}
//========================================================================================
public function getsample_size() 
{
		return $this -> sample_size;
}
public function setsample_size($sample_size) 
{ 
$this -> sample_size = $sample_size;
}
//========================================================================================
public function getdate_dispatched() 
{
		return $this -> date_dispatched;
}
public function setdate_dispatched($date_dispatched) 
{ 
$this -> date_dispatched = $date_dispatched;
}
//========================================================================================
public function getlaboratory() 
{
		return $this -> laboratory;
}
public function setlaboratory($laboratory) 
{ 
$this -> laboratory = $laboratory;
}
//========================================================================================
public function getinvoice_no() 
{
		return $this -> invoice_no;
}
public function setinvoice_no($invoice_no) 
{ 
$this -> invoice_no = $invoice_no;
}
//========================================================================================
public function getremarks() 
{
		return $this -> remarks;
}
public function setremarks($remarks) 
{ 
$this -> remarks = $remarks;
}
//========================================================================================
public function getinvoice_date() 
{
		return $this -> invoice_date;
}
public function setinvoice_date($invoice_date) 
{ 
$this -> invoice_date = $invoice_date;
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