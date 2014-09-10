<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


 $config['email_server'] = "mail@fortification.co.ke";


 // $config['email_server'] = "mail@dev.swahilicoast.co.ke";


  $config['email_nicename'] = "Food fortification program";


  $config['update_e_msg'] = "Sorry, the system cannot complete your request. A record for similar month and year already exists in the database. You can edit the record instead if u have required privilleges.";
  
  $config['delete_er_msg'] = "Sorry, the system cannot complete your request. Product Brand not deleted.";
  $config['delete_success_msg'] = "Product brand successfully deleted.";
  $config['delete_success_msg_map'] = "Vehicle-Company mapping successfully deleted.";
  $config['delete_err_msg_map'] = "Sorry, the system cannot complete your request. There must be atleast 1 (one) vehicle to company mapping in the system.";
  $config['del_err_msg_map'] = "Sorry, the system cannot complete your request. Database access error.";
  
  $config['delete_success_msg_veh'] = "Vehicle successfully deleted.";
  $config['delete_err_msg_veh'] = "Sorry, the system cannot complete your request. The vehicle already has companies mapped to it.";