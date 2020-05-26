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
                    <li class="breadcrumb-item active" aria-current="page">Product Category List</li>
                    <li class="breadcrumb-item active" aria-current="page"> Show Product Category List</li>
                </ol>
            </nav>
  <div class="container">
                <!-- Title -->
            <div class="breadcrumb-line">
                <div class="hk-pg-header">
                <h4><i data-feather="arrow-left-circle"></i></i> 
                <span class="text-semibold"></span>Show Product Category List</h4>
                </div>
              </div>
            

           
        
           
     <section class="hk-sec-wrapper">
    <div class="row">
    
    
    <div class="col-md-12">
       <div class="panel-heading">Show Product Category List</div>
       <table id="testTable" class="table table-striped table-bordered table-hover">
        <form role="form" id="form" name="edit_categories" method="post" enctype="multipart/form-data">
     
                <div class="form-group col-lg-8" id="alert_name">
                <label>Name</label>
                <input type="text" name="name" value="" class="form-control" placeholder="Enter Your Product Category">
                <input type="hidden" value="" name="cat_id">
                </div>
                
        <div class="form-group col-lg-4" id="" style="margin-top:25px;">
        <button type="submit" name="submit" onclick="return Valid_edit_categories_admin(document.edit_categories);" class="btn btn-primary">Add New</button>
            <button type="reset" class="btn btn-primary">Reset </button>
                </div>
            
          </form>
                 
   
                </table>
               
                <table id="testTable" class="table table-striped table-bordered table-hover">
                 
                <thead>
                  
                
                <tr>
                <th>Sr.No.</th>
                <th>Category</th>
               
              
                <th>Action</th>
                </tr>
                </thead> 
                 
                <tbody>
                  
                <tr>
                <td colspan="7">
                <div class="alert alert-danger">
                Record Not Found
                </div>
                </td>
                </tr>
                          
                </tbody>
                      
      </table>
    
</div>
                        
</div>
</section>

                                            
                                          
 

   
   
           
  
                                         
                                      
                                          




  



    
<?php include APPPATH.'views/includes/footer.php';?>  
      
