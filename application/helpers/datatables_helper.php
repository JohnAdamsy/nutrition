<?php 
/*
 * function that generate the action buttons edit, delete
 * This is just showing the idea you can use it in different view or whatever fits your needs
 */
function get_buttons_non_admin($id) 
{
    $ci= & get_instance();
	
    $html='<span class="actions">';
	$html .='&nbsp;&nbsp;<a href="'.  base_url().'openCompany/'.$id.'"><img src="'.  base_url().'images/dt1.png"  width=18px" height="18px"/></a>'; 
    $html.='</span>';    
    return $html;
}
function get_buttons($id) 
{
    $ci= & get_instance();
	
    $html='<span class="actions">';
	$html .='&nbsp;&nbsp;<a href="'.  base_url().'openCompany/'.$id.'"><img src="'.  base_url().'images/dt1.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;'; 
    $html .='<a href="#" onclick="edit('.$id.')"><img src="'.  base_url().'images/dt2.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;'; 
	 $html .='<a href="#" onclick="editPerson('.$id.')"><img src="'.  base_url().'images/dt5.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;'; 
    $html .='<a href=" javascript:doClick(\'6:'.$id.'\')"><img src="'.  base_url().'images/dt3.png" width=18px" height="18px"/></a>';
    $html.='</span>';    
    return $html;
}
function get_buttons_users($id) 
{
    $ci= & get_instance();
	
    $html='<span class="actions">';
	$html .='&nbsp;&nbsp;<a href="'.  base_url().'openCompany/'.$id.'"><img src="'.  base_url().'images/dt1.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;'; 
    $html .='<a href="#" onclick="edit('.$id.')"><img src="'.  base_url().'images/dt2.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;';
	  $html .='<a href="#" onclick="changePass('.$id.')"><img src="'.  base_url().'images/dt4.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;'; 
    $html .='<a href=" javascript:doClick(\'6:'.$id.'\')"><img src="'.  base_url().'images/dt3.png" width=18px" height="18px"/></a>';
    $html.='</span>';    
    return $html;
}
function get_buttons_editOil($id) 
{
    $ci= & get_instance();    
	 $html .='&nbsp;&nbsp;<a href="'.  base_url().'viewproductionOil/'.$id.'"><img src="'.  base_url().'images/dt1.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;';	 
    $html .='&nbsp;&nbsp;<a href="'.  base_url().'editproductionOil/'.$id.'"><img src="'.  base_url().'images/dt2.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;';	   
    return $html;
}
function get_buttons_editOil1($id) 
{
    $ci= & get_instance();    
	 $html .='&nbsp;&nbsp;<a href="'.  base_url().'viewproductionOil/'.$id.'"><img src="'.  base_url().'images/dt1.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;';	 
    $html .='&nbsp;&nbsp;<a href="'.  base_url().'editproductionOil/'.$id.'"><img src="'.  base_url().'images/dt2.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;';	   
    return $html;
}
function get_buttons_editWheat($id) 
{
    $ci= & get_instance();    
	 $html .='&nbsp;&nbsp;<a href="'.  base_url().'viewproductionWheat/'.$id.'"><img src="'.  base_url().'images/dt1.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;';	 
    $html .='&nbsp;&nbsp;<a href="'.  base_url().'editproductionWheat/'.$id.'"><img src="'.  base_url().'images/dt2.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;';	   
    return $html;
}

function get_buttons_editWheat1($id) 
{
    $ci= & get_instance();    
	 $html .='&nbsp;&nbsp;<a href="'.  base_url().'viewproductionWheat/'.$id.'"><img src="'.  base_url().'images/dt1.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;';	 
    $html .='&nbsp;&nbsp;<a href="'.  base_url().'editproductionWheat/'.$id.'"><img src="'.  base_url().'images/dt2.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;';	   
    return $html;
}
function get_buttons_editMaize($id) 
{
    $ci= & get_instance();    
	 $html .='&nbsp;&nbsp;<a href="'.  base_url().'viewproductionMaize/'.$id.'"><img src="'.  base_url().'images/dt1.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;';	 
    $html .='&nbsp;&nbsp;<a href="'.  base_url().'editproductionMaize/'.$id.'"><img src="'.  base_url().'images/dt2.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;';	   
    return $html;
}

function get_buttons_editMaize1($id) 
{
    $ci= & get_instance();    
	 $html .='&nbsp;&nbsp;<a href="'.  base_url().'viewproductionMaize/'.$id.'"><img src="'.  base_url().'images/dt1.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;';	 
    $html .='&nbsp;&nbsp;<a href="'.  base_url().'editproductionMaize/'.$id.'"><img src="'.  base_url().'images/dt2.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;';	   
    return $html;
}
function get_buttons_editMarketdata_gain($id) 
{
    $ci= & get_instance();    
	 $html .='&nbsp;&nbsp;<a href="'.  base_url().'openMarketData/gain/'.$id.'"><img src="'.  base_url().'images/dt1.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;';	 
  //  $html .='&nbsp;&nbsp;<a href="'.  base_url().'openMarketData/'.$id.'"><img src="'.  base_url().'images/dt2.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;';	   
    return $html;
}
function get_buttons_editMarketdata_nl($id) 
{
    $ci= & get_instance();    
	 $html .='&nbsp;&nbsp;<a href="'.  base_url().'openMarketData/nphls/'.$id.'"><img src="'.  base_url().'images/dt1.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;';	 
  //  $html .='&nbsp;&nbsp;<a href="'.  base_url().'openMarketData/'.$id.'"><img src="'.  base_url().'images/dt2.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;';	   
    return $html;
}
function get_buttons_editMarketdata_co($id) 
{
    $ci= & get_instance();    
	 $html .='&nbsp;&nbsp;<a href="'.  base_url().'openMarketData/co/'.$id.'"><img src="'.  base_url().'images/dt1.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;';	 
  //  $html .='&nbsp;&nbsp;<a href="'.  base_url().'openMarketData/'.$id.'"><img src="'.  base_url().'images/dt2.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;';	   
    return $html;
}
function listMonths()
{
	$theMonths = array("January", "February", "March", "April", "May",
  "June", "July", "August", "September", "October", "November", "December");
  return $theMonths;
}
function get_month($mnth)
{
	$ctr=0;
	$list=listMonths();
	foreach($list as $item):
	$ctr++;
	$index=($item===$mnth)? $ctr:0;	
	endforeach;
	return $index;
}
function get_number($val)
{	
    $float = (float)trim($num);
	return $float;
}
function format_values($num)
 {
 		//$val = number_format($num, 4, '.', ',');
		$val = number_format($num, 0, '.', ',');
		return $val;
 }
function gencode($size=5)
{
 $pos = "0123456789"; 
 $pass="";	
 $i=0;
 while ($i < $size) 
      {     
        $char = substr($pos, mt_rand(0, strlen($pos)-1), 1);
        if (!strstr($pass, $char)) 
        { 
          $pass.= $char;
	      $i++;
        }
      }
	  return $pass;
}
function genBigcode($size)
{
 $pos = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
 $pass="";	
 $i=0;
 while ($i < $size) 
      {     
        $char = substr($pos, mt_rand(0, strlen($pos)-1), 1);
        if (!strstr($pass, $char)) 
        { 
          $pass.= $char;
          $i++;
        }
      }
	  return $pass;
}
function get_brandbuttons($id) 
{
    $ci= & get_instance();
	
    $html='<span class="actions">';
    $html .='<a href="#" onclick="edit('.$id.')"><img src="'.  base_url().'images/dt2.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;'; 
    $html .='<a href=" javascript:deleteItem('.$id.')"><img src="'.  base_url().'images/dt3.png" width=18px" height="18px"/></a>';
    $html.='</span>';    
    return $html;
}
function get_vehiclebuttons($id) 
{
    $ci= & get_instance();
	
    $html='<span class="actions">';
    $html .='<a href="#" onclick="edit('.$id.')"><img src="'.  base_url().'images/dt2.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;'; 
    $html .='<a href=" javascript:deleteItem('.$id.')"><img src="'.  base_url().'images/dt3.png" width=18px" height="18px"/></a>';
    $html.='</span>';    
    return $html;
}
function get_mapbuttons($id) 
{
    $ci= & get_instance();
	
    $html='<span class="actions">';
    $html .='<a href="#" onclick="editMap('.$id.')"><img src="'.  base_url().'images/dt2.png"  width=18px" height="18px"/></a>&nbsp;&nbsp;'; 
    $html .='<a href=" javascript:deleteMapping('.$id.')"><img src="'.  base_url().'images/dt3.png" width=18px" height="18px"/></a>';
    $html.='</span>';    
    return $html;
}
function convertArray($array)
{
	$string="N/A";
	if(array($array))
	{
	$string=implode(",", $array);
	}
	return $string;
}
function menuname($str1,$str2,$str3="")
{
    $string=$str1;
    if($str2!=="MOPHS")
    {
    $string=$str3." ".$str2;
    }
    if($str2===$str1)
    {
    $string=$str3;
    }
    return $string;
}
function format_disp_date($mydate,$format="Y-m-d")
 {	
	if (DateTime::createFromFormat('Y-m-d', $mydate) === FALSE || $mydate==="0000-00-00") 
	{
	  return '--';
	}	
	$nd = date_create($mydate);
	return date_format($nd, $format);
 }

/*
 function get_buttons2($id)
{
    $ci= & get_instance();
    $html='<span class="actions">';
    $html .='<a href=" javascript:doClick(\'8:'.$id.'\')"><img src="'.  base_url().'images/dt1.png"  width=18px" height="18px"/></a>';
    $html .='<a href=" javascript:doClick(\'9:'.$id.'\')"><img src="'.  base_url().'images/dt3.png" width=18px" height="18px"/></a>';
    $html.='</span>';
    
    return $html;
}
 function get_buttons3($id)
{
    $ci= & get_instance();
    $html='<span class="actions">';
    $html .='<a href=" javascript:doClick(\'12:'.$id.'\')"><img src="'.  base_url().'images/dt1.png"  width=18px" height="18px"/></a>';
    $html .='<a href=" javascript:doClick(\'13:'.$id.'\')"><img src="'.  base_url().'images/dt3.png" width=18px" height="18px"/></a>';
    $html.='</span>';
    
    return $html;
}

 function format_date($date)
 {
        $nd = date_create($date);
        $date= date_format($nd, 'D jS F Y');		
		return $date;
 }  
  function format_date1($date)
 {
        $nd = date_create($date);
        $date= date_format($nd, 'Y-m-d');		
		return $date;
 } 
 function format_date11($date) 
 {        
 $nd = date_create($date);        
 $date= date_format($nd, 'Y-m-d H:i:s');				
 return $date; 
 }
 function average($array) 
 { 
 return array_sum($array) / count($array);
 } 
 function price($val)
 {//setlocale(LC_MONETARY, 'en_US');
 //$val= money_format('%i', $val);
 $cur=config_item('currency'); 
 $n_val = number_format($val, 2, '.', ',');
 $val="<span class=\"dollar\">$cur</span><span style=\"left:15%; position:absolute; font-size:17px;font-weight:bold;\">$n_val</span>";
 return $val;
 }
 function cleanArray($itms)
 {	
 $pr_array=array();	
 foreach($itms as $itm_row)	
 {	 
 $itm_row=trim($itm_row);	 
 if($itm_row!="")	 
 {		
 $pr_array[]=ucfirst($itm_row);	 
 }	
 }	
 return $pr_array;
 }
 function price_book($val)
 {
 //setlocale(LC_MONETARY, 'en_US');
 //$val= money_format('%i', $val);
 $cur=config_item('currency'); 
 $n_val = number_format($val, 2, '.', ',');
 $val=$cur."  ".$n_val;
 return $val;
 }
 function price1($val)
 {//setlocale(LC_MONETARY, 'en_US');
 //$val= money_format('%i', $val);
 $cur=config_item('currency'); 
 $n_val = number_format($val, 2, '.', ',');
 $val="<span class=\"dollar\">$cur</span><span style=\"left:15%;\">$n_val</span>";
 return $val;
 }
 function price2($val)
 {
 $str="";
 $cur=config_item('currency'); 
 if($val>0)
 {
 $n_val = number_format($val, 2, '.', ',');
 $str="<span class=\"dollar price\" style=' font-size:16px; font-weight:bold'>$cur</span><span style=\"left:15%;font-size:19px\">$n_val</span>";
 }
 return $str;
 }
 function price_2($val)
 {
 $str="";$cur=config_item('currency'); 
 if($val>0)
 {
 $n_val = number_format($val, 2, '.', ',');
 $str="<span class=\"dollar price\" style=' font-size:18px; font-weight:bold'>$cur</span><span style=\"left:15%;font-size:21px\">$n_val</span>";
 }
 return $str;
 }
 function offer_p($val)
 {
 $str="";
 if($val>0)
 {
 $n_val = number_format($val, 2, '.', ',');
 $str=$n_val;
 }
 return $str;
 }
function reduction($dt)
 {
        $date= "-".$dt." % of room price";	
		return $date;
 } 
 function nights($dt)
 {
	$dt=intval($dt);
        if($dt==0)
		{
		$date= "NA";	
		}
		 if($dt>1)
		{
		$date= $dt." Nights";	
		}
		 if($dt==1)
		{
		$date= $dt." Night";	
		}
		
		return $date;
 } 
function available($dt) {	$dt=intval($dt);        if($dt==0)		{		$date= "NA";			}		 if($dt>1)		{		$date= $dt." Rooms Available";			}		 if($dt==1)		{		$date= $dt." Room Available";			}				return $date; }function capacity($dt,$chl) {	$str="Capacity: Undefined";	$dt=intval($dt);	$chl=intval($chl);	        if($dt==0)		{		$date= "";			}		 if($dt>1)		{		$date= $dt." Adults ";			}		 if($dt==1)		{		$date= $dt." Adult ";			}		 if($chl==0)		{		$chil= "";			}		 if($chl>1)		{		$chil= $chl." Children ";			}		 if($chl==1)		{		$chil= $chl." Child ";			}		$con=strlen($date.$chil);		if($con>0)		{		$str=$date.$chil;		}		return $str; }
function get_buttons($id)
{
    $ci= & get_instance();
    $html='<span class="actions">';
    $html .='<a href="'.  base_url().'viewRoom/'.$id.'"><img src="'.  base_url().'images/dt1.png"  width=18px" height="18px"/></a>';
    $html .='<a href="'.  base_url().'editRoom/'.$id.'"><img src="'.  base_url().'images/dt2.png" width=18px" height="18px"/></a>';
    $html .='<a href="'.  base_url().'deleteRoom/'.$id.'"><img src="'.  base_url().'images/dt3.png" width=18px" height="18px"/></a>';
    $html.='</span>';
    
    return $html;
}
function visibility($dt)
 {
	$dt=intval($dt);
        if($dt==0)
		{
		$date= "Invisible";	
		}
		 if($dt==1)
		{
		$date= "Visibile";	
		}
		return $date;
 } */