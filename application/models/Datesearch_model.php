<?php
class Datesearch_model extends CI_Model
{
 function fetch_data($first_date,$second_date)
 {
  $this->db->select("*");
  $this->db->from("tbl_order");
  if($first_date != '' || $second_date != '' )
  {
   $this->db->where('order_date >=', $first_date);
	$this->db->where('order_date <=', $second_date);
  }
   $this->db->order_by('order_date','AESC');
  return $this->db->get();
 }



}