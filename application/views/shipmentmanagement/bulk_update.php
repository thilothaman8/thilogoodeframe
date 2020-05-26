<!DOCTYPE html>

<html lang="en">



<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Fastcoo</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <?php include APPPATH.'views/includes/styles.php';?>
</head>

<body>
   <?php include APPPATH.'views/includes/header.php';?>
   <nav class="hk-breadcrumb" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light bg-transparent">
            <li class="breadcrumb-item"><a href="#"><i class="glyphicon glyphicon-home"></i>   Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Shipment Management</li>
			<li class="breadcrumb-item active" aria-current="page">Bulk Update</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>  Home - Bulk Update</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<div class="panel panel-flat">
      <div class="panel-heading">
        <h5 class="panel-title">Bulk Update</h5>
      </div><br>
      <div class="panel-body">
        <div class="col-md-12" id="message">                     
        </div>
       <form action="" method="post" name="traking">
          <div class="col-md-12">
            <div class="form-group">
              <textarea rows="8" id="show_awb_no" name="awb_no" required="" class="form-control"></textarea>
            </div>
          </div>
	<div class="row">
        <div class="col-sm">
            <div class="row"> 
          <div class="col-md-4">
            <div class="form-group">
              <label>Select Status</label>
              <select name="main_status" id="main_status_data" class="form-control  input-lg" onchange="status_subcat_bulk(this.value);">
			  <option value="" selected="selected">Please Select Status</option><option value="1">Not Delivered</option><option value="3">On Process</option><option value="4">Pick Up Collected</option><option value="5">Out for delivery</option><option value="7">Shelve</option><option value="8">IN Transit</option><option value="10">Hold for pickup</option><option value="11">Delivered</option><option value="13">Received Inbound</option><option value="14">Ready For Delivery </option><option value="15">General Update</option><option value="20">Booked-reverse pick</option><option value="21"> Cancelled as per Client request.</option><option value="24">Return from Delivery station</option><option value="25">Under Investigation</option></select> </div>
            </div>
          
           
          
          <div class="col-md-4" 
            <div class="form-group">
              <label>Comment</label>
              <textarea rows="3" name="comment" class="form-control"></textarea>
            </div>
          
         
         
          <div class="col-md-2">
            <label>&nbsp;</label>
            <button type="submit" class="btn btn-primary form-control">Submit</button>
          </div>
	        </div>
        </div>
    </div>		
        </form>
      </div>
    </div>
	</section>
   <?php include APPPATH.'views/includes/footer.php';?>