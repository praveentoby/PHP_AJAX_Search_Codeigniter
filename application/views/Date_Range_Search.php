<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Ajax PHP MySQL Date Range Search using jQuery DatePicker</title>  
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>  
           <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
           

      </head>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">  
                <h2 align="center">Ajax PHP MySQL Date Range Search Using JQuery DatePicker</h2>  
                <h3 align="center">Order Data</h3><br />  
                <div class="col-md-3">  
                     <input type="date" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                </div>  
                <div class="col-md-3">  
                     <input type="date" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
                </div>  
                <div class="col-md-5">  
                     <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info"  onclick="" />  
                </div>  
                <div style="clear:both"></div>                 
                <br />  
                <div id="order_table">  
                 
                </div>  
           </div>  
      </body>  
 </html>  
 <script >
$(document).ready(function(){


 load_data();

 function load_data(is_date_search, start_date='', end_date='')
 {
 
  $.ajax({
   url:"<?php echo base_url(); ?>Datesearch/date_range",
   method:"POST",
   data:{is_date_search:is_date_search, start_date:start_date, end_date:end_date},
   success:function(data){
   // alert('succes');
    $('#order_table').html(data);
   }
  })

 }
 $('#to_date').keyup(function(){
  var start_date = $('#from_date').val();
  var end_date = $('#to_date').val();
  if(start_date != '' && end_date !='')
  {
   load_data('yes', start_date, end_date);
  }
  else
  {
   //alert("Both Date is Required");
  }
 }); 

});
 </script>
