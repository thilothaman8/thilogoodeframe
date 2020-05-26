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
                    <li class="breadcrumb-item active" aria-current="page"> Frequently Asked Question</li>
                    <li class="breadcrumb-item active" aria-current="page"> Frequently Asked Question</li>
                </ol>
            </nav>
  <div class="container">
                <!-- Title -->
            <div class="breadcrumb-line">
                <div class="hk-pg-header">
                <h4><i data-feather="arrow-left-circle"></i></i> 
                <span class="text-semibold"></span> Frequently Asked Question</h4>
                </div>
            </div>
        
           
     <section class="hk-sec-wrapper">
    <div class="row">
    
    
    <div class="col-md-12">
       <div class="panel-heading"><i class="fa fa-user fa-2x default_color" style="margin-bottom: 10PX;"></i>Frequently Asked Question</div>
     <table class="table datatable-show-all table-bordered table-hover datatable-highlight">
                        
<thead>
    <tr>
        <th class="head0">Sr.No.</th>
        <th class="head1">Question</th>
        <th class="head1">Answer</th>
        <th class="head0">Action</th>
    </tr>
</thead>
                        
<tbody>
        <tr>
        <td>1</td>
        <td>What is COD?</td>
        <td>Cash-on-Delivery (COD) is a service provided by Tamco where seller can get Tamco to deliver their products to buyers and then collect the payment from the customers on their behalf.</td>
    <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
      </tr>
          <tr>
        <td>2</td>
        <td>How many times I can schedule my shipment?</td>
        <td>You can schedule your shipment one time only in a day (24 hours) , for the update within 24 hours please call customer service.</td>
    <td>
      <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                 <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                            </div>
                                        </div></td>
      </tr>
          <tr>
        <td>3</td>
        <td>Can you schedule your shipment?</td>
        <td>Yes, you can schedule your shipment once the shipment arrived the destination Hub</td>
    <td>
       <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                 <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                             
                                            </div>
                                        </div></td>
      </tr>
          <tr>
        <td>4</td>
        <td>What is Shipment?</td>
        <td>Cargo transported under the terms of a single bill of lading or air waybill, irrespective of the quantity or number of containers, packages, or pieces. ... Use shipment in a Sentence</td>
    <td>
       <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                           
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                              
                                            </div>
                                        </div></td>
      </tr>
                  
      <tr>
      <td colspan="8" align="center">
      <form name="frm_pagi" action="" method="post">
      <input type="hidden" name="pageval" id="pagevalid" value="">
      
        </form>
  </td>
    </tr>
  
</tbody>
</table>
        </div>
   
   
           
  
                                         
                                      
                                          
</div>
</section>


  


    
<?php include APPPATH.'views/includes/footer.php';?>  
      
