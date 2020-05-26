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
                    <li class="breadcrumb-item active" aria-current="page">Invoice Management</li>
                    <li class="breadcrumb-item active" aria-current="page">Create Bulk Invoice</li>
                </ol>
            </nav>
  <div class="container">
                <!-- Title -->
            <div class="breadcrumb-line">
                <div class="hk-pg-header">
                <h4><i data-feather="arrow-left-circle"></i></i> 
                <span class="text-semibold"></span>Create Bulk Invoice</h4>
                </div>
            </div>
            <h5 class="hk-sec-title">Create Bulk Invoice</h5><br>
    <section class="hk-sec-wrapper">
    <div class="row">
    
    
    <div class="col-md-12">
        <span class="btn btn-primary" style="float: right; margin-bottom: 05px;">Show Bluk Invoice Page</span>  
        </div>
    <div class="col-md-12">
            <div class="form-group">
            <textarea rows="8" id="show_awb_no" name="awb_no" required="" class="form-control"></textarea>
                
            </div>
            </div>
            <div class="col-md-2 col-sm-12 col-12 mb-20">
            <label>Row Count</label>&nbsp;
         
            <span class="badge-success badge badge-pill"> 1</span>&nbsp;&nbsp;&nbsp;
        </div>
          
   <div class="col-md-5 col-sm-12 col-12 mb-20">

    <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-6 col-form-label">Client</label>
                                            <div class="col-sm-10" style="margin-top:09px;">
                                               <select class="form-control custom-select">
                                                <option selected>Select Customer </option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            </div>
                                        </div>
                                            
                                        </div>
                                     
                                         <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-6 col-form-label">Invoice Type</label>
                                            <div class="col-sm-10" style="margin-bottom: 16px;">
                                               <select class="form-control custom-select">
                                                <option selected>Select Invoice Type</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                  
                                            </select>
                                            </div>
                                        </div>
                                       <a id="btnSubmitDS" role="button" class="btn btn-primary form-control">Generate Invoice</a>
                                      
                                          
</div>
</section>

  
</div>


    
<?php include APPPATH.'views/includes/footer.php';?>  
      
