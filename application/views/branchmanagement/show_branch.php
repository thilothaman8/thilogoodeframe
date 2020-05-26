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
                    <li class="breadcrumb-item active" aria-current="page">Branch Management</li>
                    <li class="breadcrumb-item active" aria-current="page"> Show Branch</li>
                </ol>
            </nav>
  <div class="container">
                <!-- Title -->
            <div class="breadcrumb-line">
                <div class="hk-pg-header">
                <h4><i data-feather="arrow-left-circle"></i></i> 
                <span class="text-semibold"></span>Show Branch</h4>
                </div>
              </div>
            

           
        
           
     <section class="hk-sec-wrapper">
    <div class="row">
    
    
    <div class="col-md-12">
       <div class="panel-heading">Show Branch</div>
       <table id="testTable" class="table table-striped table-bordered table-hover">
                 
   
                </table>
               
                <table id="testTable" class="table table-striped table-bordered table-hover">
                 
                <thead>
                  
                
                <tr>
                <th>Sr.No.</th>
                <th>Branch Name</th>
                <th>City</th>
                <th>Contact Person</th>
                <th>Address</th>
                <th>Contact No.</th>
              
                <th>Action</th>
                </tr>
                </thead> 
                 
                <tbody>
                                <tr><td colspan="15" class="alert center">Record Not Found</td>
                    
                </tr></tbody>  
                      
      </table>
    
</div>
                        
</div>
</section>

                                            
                                          
 

   
   
           
  
                                         
                                      
                                          




  



    
<?php include APPPATH.'views/includes/footer.php';?>  
      
