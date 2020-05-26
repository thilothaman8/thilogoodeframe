
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
                    <li class="breadcrumb-item active" aria-current="page">Payment Detail</li>
                    <li class="breadcrumb-item active" aria-current="page"> Tracking Parcel Lia</li>
                </ol>
            </nav>
  <div class="container">
                <!-- Title -->
            <div class="breadcrumb-line">
                <div class="hk-pg-header">
                <h4><i data-feather="arrow-left-circle"></i></i> 
                <span class="text-semibold"></span>Payment Detail</h4>
                </div>
            </div>
        
           
   <section class="hk-sec-wrapper">
    <div class="row">
    
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
    <th class="head1" colspan="4"> <form name="search_monthyear" method="post" action="">
    <div class="col-md-4">
    
    <select name="search_month" class="form-control">
    <option>Select Month</option>
    <option value="January">January</option>
    <option value="February">February</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option>
    </select><br>
    </div>
    <div class="col-md-4"><input type="text" name="search_year" placeholder="2019" class="form-control" value="2019"></div><br>
    <input type="submit" name="Submit" class="btn btn-primary" value="Search" style="margin-left: 60px;">
    <label>
    <div id="search_val" style="display:inline;"></div>
    </label>
    </form>
    </th>
    <th class="head1" colspan="7"> <form name="search_form" method="post" action="">
    
    <div class="col-md-8">   <input type="text" name="search_val" placeholder="Invoice No/Person Name " class="form-control" style="margin-bottom: 80px;">
    </div> 
    <div class="col-md-3">  <input type="submit" name="Submit" class="btn btn-primary" value="Search" style="margin-left: 80px;" onclick="return Valid_search(document.search_form);">
    </div>
    </form>
    </th>
    </tr>
    </thead>
     
    <thead>
    <tr>
        </tr><tr> 
        <th class="head1">Paid Amount()</th>
        <th class="head0">Payment Date</th>
        <th class="head1">Invoice Month</th>
        <th class="head1">Invoice No</th>
        <th class="head0">Person Name</th>
        <th class="head1">Payment Mode</th>
        <th class="head1">Type</th>
        </tr>
    </thead>
    
    <tbody>
    
          <tr><td colspan="9" class="center alert">Record Not Found</td>
        </tr></tbody>
    </table>
 </div>
</div>
</section>

   
   
           
  
                                         
                                      
                                          
</div>
</section>


  


    
<?php include APPPATH.'views/includes/footer.php';?>  
      


    
 
      
