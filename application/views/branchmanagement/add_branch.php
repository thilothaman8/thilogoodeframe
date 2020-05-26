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
                    <li class="breadcrumb-item active" aria-current="page">Add Branch</li>
                </ol>
            </nav>
   <div class="container">
                <!-- Title -->
                            <div class="breadcrumb-line">
                <div class="hk-pg-header">
                <h4><i data-feather="arrow-left-circle"></i></i> 
                <span class="text-semibold"></span>Add Branch</h4>
                </div>
            </div>
        
           
     <section class="hk-sec-wrapper">
    <div class="row">
    
    
    <div class="col-md-12">
       <div class="panel-heading">Add Branch</div>
    </div>
    <label>Country</label>
  <select name="sel_country" class="form-control " id="sel_country" onchange="createCityDropdownByIdAddRout(this.value);">
          <option value="">Please Select</option><option value="1">Saudi Arabia</option></select><br><br><label>Branch City</label>
          <select name="sel_country" class="form-control " id="sel_country" onchange="createCityDropdownByIdAddRout(this.value);">
          <option value="">Please Select</option><option value="1">Saudi Arabia</option></select>
          <br><br><label>Branch Name</label>
          <input type="text" class="form-control" name="route" id="route" value="" onblur="checkExists()"><br><br>
          <label>Branch Person</label>
          <input type="text" class="form-control" name="route" id="route" value="" onblur="checkExists()"><br><br>
          <label>Branch Address</label>
         <textarea rows="8" id="show_awb_no" name="awb_no" required="" class="form-control"></textarea><br><br>
            <label>Contact No</label>
          <input type="text" class="form-control" name="route" id="route" value="" onblur="checkExists()"><br><br>
     
         
          <input name="submit" class="btn btn-primary" type="submit" value="Submit" onclick="return Valid_root(document.add_root);">




   
   
           
  
                                         
                                      
                                          
</div>
</section>


  
    
        <?php include APPPATH.'views/includes/footer.php';?>