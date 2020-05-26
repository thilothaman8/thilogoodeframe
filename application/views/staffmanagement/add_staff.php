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
                    <li class="breadcrumb-item active" aria-current="page">Staff Management</li>
                    <li class="breadcrumb-item active" aria-current="page">Add Staff</li>
                </ol>
            </nav>
   <div class="container">
                <!-- Title -->
                            <div class="breadcrumb-line">
                <div class="hk-pg-header">
                <h4><i data-feather="arrow-left-circle"></i></i> 
                <span class="text-semibold"></span>Add Staff</h4>
                </div>
            </div>
        
           
     <section class="hk-sec-wrapper">
    <div class="row">
    
    
    <div class="col-md-12">
       <div class="panel-heading">Add Staff</div>
    </div>
   
          <label>Name</label>
          <input type="text" class="form-control" name="route" id="route" value="" onblur="checkExists()"><br><br>
           <label>Address</label>
          <input type="text" class="form-control" name="route" id="route" value="" onblur="checkExists()"><br><br>
           <label>Phone</label>
          <input type="text" class="form-control" name="route" id="route" value="" onblur="checkExists()"><br><br>
          <label>Password</label>
          <input type="Password" class="form-control" name="keyword" id="routecode" value="Password"><br><br>
           <label>Select Country</label>
          <select name="sel_country" class="form-control " id="sel_country" onchange="createCityDropdownByIdAddRout(this.value);">
          <option value="">Please Select</option><option value="1">Saudi Arabia</option></select><br><br>
         <select name="sel_country" class="form-control " id="sel_country" onchange="createCityDropdownByIdAddRout(this.value);">
          <option value="">Please Select</option><option value="1">Please Select</option></select><br><br>
            <select name="sel_country" class="form-control " id="sel_country" onchange="createCityDropdownByIdAddRout(this.value);">
          <option value="">Please Select</option>
          <option value="CSA">CSA(Customer Services Assistant)</option>
                <option value="CSM">CSM(Customer Services Manager)</option>
                <option value="OPA">OPA(Customer Permission Manager)</option>
                <option value="RTO">RTO(Return To Officer)</option>
                <option value="FIN">FIN(Finance)</option>
                <option value="IT">IT(IT Team)</option> 
          </select><br><br>
           <label>Password</label>
           <input type="password" class="form-control" name="password" id="password" value="password">
           <input name="id" id="id" type="hidden" value=""><br><br>

          <input name="submit" class="btn btn-primary" type="submit" value="Submit" onclick="return Valid_root(document.add_root);">




   
   
           
  
                                         
                                      
                                          
</div>
</section>


  
    
        <?php include APPPATH.'views/includes/footer.php';?>