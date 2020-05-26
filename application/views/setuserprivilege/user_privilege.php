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
                    <li class="breadcrumb-item active" aria-current="page">Set User Privilege</li>
                    
            </nav>
  <div class="container">
                <!-- Title -->
            <div class="breadcrumb-line">
                <div class="hk-pg-header">
                <h4><i data-feather="arrow-left-circle"></i></i> 
                <span class="text-semibold"></span>Set User Privilege</h4>
                </div>
            </div>
        
           
     <section class="hk-sec-wrapper">
      <div class="col-sm">
                                    <div class="row">
      <select class="form-control custom-select mt-15">
                                                <option selected="">Select Staff</option>
                                                <option value="1">Deepak</option>
                                                <option value="2">Jagdish</option>
                                                <option value="3">Karthik</option>
                                                <option value="3">Thilothaman</option>
                                                <option value="3">Sachin Mishra</option>
                                                <option value="3">Suguna</option>
                                            </select>
       <div class="col-md-3">
      <span class="input-group-btn">
        <button class="btn btn-primary" type="button" style="margin-top: 10px;"></i> Get List</button>
      </span>
    </div>
  </div></div>
    <div class="row">
    
    
    <div class="col-md-12">
       <div class="panel-heading" style="margin-top: 10px;"><i class=""></i></div>&nbsp;
     <table class="table datatable-show-all table-bordered table-hover datatable-highlight" style="align-items: center;">
                        
<thead>
    <tr>
        <th class="head0">Sr.No.</th>
        <th class="head1">Privilege Name</th>
         
    </tr>
</thead>
                        
<tbody>
        <tr>
        <td>1</td>
        <td>General Setting</td>
        
        
    
      </tr>
          <tr>
        <td>2</td>
         <td>Shipment Management</td>
        
    
      </tr>
          <tr>
       <td>3</td>
       <td> Pickup Management</td>
        
    
      </tr>
          <tr>
        <td>4</td>
     <td>Manifest Management</td>
   
      </tr>
      <tr>
        <td>5</td>
     <td>Routs Management</td>
    
      </tr>
      <tr>
        <td>6</td>
      <td>Users Management</td>
      </tr>
      <tr>
        <td>7</td>
      <td>  Customer Management</td>
    
      </tr>
      <tr>
        <td>8</td>
     <td> MESSENGER (Delivery Boy)</td>
    
      </tr>
      <tr>
        <td>9</td>
     <td>Deepak</td>
      </tr>
      <tr>
        <td>10</td>
      <td>  Branch Management</td>
   
                                       
      </tr>
      <tr>
        <td>11</td>
      <td>  Location Management</td>
    
      </tr>
      <tr>
        <td>12</td>
      <td>Reports</td>
    
      </tr>
      <tr>
        <td>13</td>
      <td>Payment Detail</td>
    
      </tr>
       <tr>
        <td>14</td>
      <td>Invoice Management</td>
    
      </tr>
       <tr>
        <td>15</td>
      <td>Product/Type</td>
    
      </tr>
       <tr>
        <td>16</td>
      <td>Content Services</td>
    
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


  
</div>
</div>

    
<?php include APPPATH.'views/includes/footer.php';?>  
      
