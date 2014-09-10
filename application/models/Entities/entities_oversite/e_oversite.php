<?php
namespace models\Entities\entities_oversite;
/**
 * @Entity
 * @Table(name="market_samples_table")
 */
class E_Oversite{
		/**
* @Id
* @Column(name="item_id", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $item_id;

/**
* @Column(name="company_id", type="integer",length=11, nullable=true)
* */
private $company_id;

/**
* @Column(name="company_type", type="string",length=250, nullable=true)
* */
private $company_type;

/**
* @Column(name="producer_name", type="string",length=250, nullable=true)
* */
private $producer_name;

/**
* @Column(name="type_of_poduct", type="string",length=250, nullable=true)
* */
private $type_of_poduct;

/**
* @Column(name="brand_name", type="string",length=250, nullable=true)
* */
private $brand_name;

/**
* @Column(name="production", type="string",length=250, nullable=true)
* */
private $production;

/**
* @Column(name="date_of_sample_collection", type="string",length=50, nullable=true)
* */
private $date_of_sample_collection;

/**
* @Column(name="sample_collection_location", type="string",length=250, nullable=true)
* */
private $sample_collection_location;

/**
* @Column(name="store_type", type="string",length=250, nullable=true)
* */
private $store_type;

/**
* @Column(name="date_received_lab", type="string",length=50, nullable=true)
* */
private $date_received_lab;

/**
* @Column(name="expiry_date", type="string",length=50, nullable=true)
* */
private $expiry_date;

/**
* @Column(name="labelled_as_fortified", type="string",length=250, nullable=true)
* */
private $labelled_as_fortified;

/**
* @Column(name="sample_amount_taken", type="decimal", nullable=true)
* */
private $sample_amount_taken;

/**
* @Column(name="date_of_analysis", type="string",length=250, nullable=true)
* */
private $date_of_analysis="0000-00-00";

/**
* @Column(name="result_a", type="decimal", nullable=true)
* */
private $result_a;

/**
* @Column(name="result_b", type="decimal", nullable=true)
* */
private $result_b;

/**
* @Column(name="result_c", type="decimal", nullable=true)
* */
private $result_c;

/**
* @Column(name="added_by", type="string",length=250, nullable=true)
* */
private $added_by;

/**
* @Column(name="date_added", type="string",length=20, nullable=true)
* */
private $date_added="0000-00-00";
/**
* @Column(name="edited_by", type="string",length=250, nullable=true)
* */
private $edited_by;
/**
* @Column(name="date_edited", type="string",length=20, nullable=true)
* */
private $date_edited="0000-00-00";



//========================================================================================
public function getitem_id() 
{
		return $this -> item_id;
}
public function setitem_id($item_id) 
{ 
$this -> item_id = $item_id;
}
//========================================================================================
public function getcompany_id() 
{
		return $this -> company_id;
}
public function setcompany_id($company_id) 
{ 
$this -> company_id = $company_id;
}
//========================================================================================
public function getcompany_type() 
{
		return $this -> company_type;
}
public function setcompany_type($company_type) 
{ 
$this -> company_type = $company_type;
}
//========================================================================================
public function getproducer_name() 
{
		return $this -> producer_name;
}
public function setproducer_name($producer_name) 
{ 
$this -> producer_name = $producer_name;
}
//========================================================================================
public function gettype_of_poduct() 
{
		return $this -> type_of_poduct;
}
public function settype_of_poduct($type_of_poduct) 
{ 
$this -> type_of_poduct = $type_of_poduct;
}
//========================================================================================
public function getbrand_name() 
{
		return $this -> brand_name;
}
public function setbrand_name($brand_name) 
{ 
$this -> brand_name = $brand_name;
}
//========================================================================================
public function getproduction() 
{
		return $this -> production;
}
public function setproduction($production) 
{ 
$this -> production = $production;
}
//========================================================================================
public function getdate_of_sample_collection() 
{
		return $this -> date_of_sample_collection;
}
public function setdate_of_sample_collection($date_of_sample_collection) 
{ 
$this -> date_of_sample_collection= $date_of_sample_collection;
}
//========================================================================================
public function getsample_collection_location() 
{
		return $this -> sample_collection_location;
}
public function setsample_collection_location($sample_collection_location) 
{ 
$this -> sample_collection_location = $sample_collection_location;
}
//========================================================================================
public function getstore_type() 
{
		return $this -> store_type;
}
public function setstore_type($store_type) 
{ 
$this -> store_type = $store_type;
}
//========================================================================================
public function getdate_received_lab() 
{
		return $this -> date_received_lab;
}
public function setdate_received_lab($date_received_lab) 
{ 
$this -> date_received_lab = $date_received_lab;
}
//========================================================================================
public function getexpiry_date() 
{
		return $this -> expiry_date;
}
public function setexpiry_date($expiry_date) 
{ 
$this -> expiry_date = $expiry_date;
}
//========================================================================================
public function getlabelled_as_fortified() 
{
		return $this -> labelled_as_fortified;
}
public function setlabelled_as_fortified($labelled_as_fortified) 
{ 
$this -> labelled_as_fortified = $labelled_as_fortified;
}
//========================================================================================
public function getsample_amount_taken() 
{
		return $this -> sample_amount_taken;
}
public function setsample_amount_taken($sample_amount_taken) 
{ 
$this -> sample_amount_taken = $sample_amount_taken;
}
//========================================================================================
public function getdate_of_analysis() 
{
		return $this -> date_of_analysis;
}
public function setdate_of_analysis($date_of_analysis) 
{ 
$this -> date_of_analysis = $date_of_analysis;
}
//========================================================================================
public function getresult_a() 
{
		return $this -> result_a;
}
public function setresult_a($result_a) 
{ 
$this -> result_a = $result_a;
}
//========================================================================================
public function getresult_b() 
{
		return $this -> result_b;
}
public function setresult_b($result_b) 
{ 
$this -> result_b = $result_b;
}
//========================================================================================
public function getresult_c() 
{
		return $this -> result_c;
}
public function setresult_c($result_c) 
{ 
$this -> result_c = $result_c;
}
//========================================================================================
public function getadded_by() 
{
		return $this -> added_by;
}
public function setadded_by($added_by) 
{ 
$this -> added_by = $added_by;
}

//========================================================================================
public function getdate_added() 
{
		return $this -> date_added;
}
public function setdate_added($date_added) 
{ 
$this -> date_added = $date_added;
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
public function getdate_edited() 
{
		return $this -> date_edited;
}
public function setdate_edited($date_edited) 
{ 
$this -> date_edited = $date_edited;
}

}
?>