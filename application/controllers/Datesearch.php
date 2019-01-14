<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datesearch extends CI_Controller {

 function Date_Range_Search()
 {
  $this->load->view('Date_Range_Search');
 }
 function date_range(){

  $output = '';
  $query = '';
  $first_date = '';
  $second_date = '';
  $this->load->model('Datesearch_model');
  $isSearch = $this->input->post('is_date_search');
  //echo $isSearch;
  if($isSearch === 'yes')
  {
  	$first_date = $this->input->post('start_date');
  	$second_date = $this->input->post('end_date');
  	//echo $second_date;
  }
  $data = $this->Datesearch_model->fetch_data($first_date,$second_date);
  $output .= '
  <div class="table-responsive">
     <table class="table table-bordered table-striped">
      <tr>
     
   <th width="30%">Customer Name</th>  
   <th width="43%">Item</th>  
   <th width="10%">Value</th>  
   <th width="12%">Order Date</th>  
      </tr>
  ';
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {
    $output .= '
      <tr>

       <td>'.$row->order_customer_name.'</td>
       <td>'.$row->order_item.'</td>
       <td>'.$row->order_value.'</td>
       <td>'.$row->order_date.'</td>
      
      </tr>
    ';
   }
  }
  else
  {
   $output .= '<tr>
       <td colspan="4">No Data Found</td>
      </tr>';
  }
  $output .= '</table>';
  echo $output;
 }

 

}

