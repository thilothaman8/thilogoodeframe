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
            <li class="breadcrumb-item active" aria-current="page">Customer Management</li>
			<li class="breadcrumb-item active" aria-current="page">Payment Information</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Payment Information</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Payment Information</h5>
		</div><br>
		<table class="table table-striped table-bordered table-hover">
      
        <thead>
            <tr>
            <th class="head1" colspan="5">
            <form name="search_monthyear" method="post" action="">
            <div class="row">
            <div class="col-sm">
            <div class="row">
            <div class="col-md-4">
            
            <select name="search_month" class="form-control  input-lg">
            <option>Select Year</option>
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
            </select>
            </div>
             
            <div class="col-md-4">
            <input type="text" name="search_year" placeholder="2019" class="form-control" value="2019">
            </div>
            
            <div class="col-md-4">
            <input type="submit" name="Submit" class="btn btn-primary" value="Search">
            </div>
            
            <label><div id="search_val" style="display:inline;"></div></label>
            </form>
            </th>
            
            <th class="head1" colspan="10">
            <form name="search_form" method="post" action="">
            <div class="row">
            <div class="col-sm">
            <div class="row">
            <div class="col-md-6">
            <input type="text" name="search_val" placeholder="Enter Invoice No" class="form-control" value="">
            </div>
            
            <div class="col-md-4">
            <input type="submit" name="Submit" class="btn btn-primary" value="Search" onclick="return Valid_search(document.search_form);">
            </div>
            
            <label><div id="search_val" style="display:inline;"></div></label>
			</div>
			</div>
            </form>
            </th>
            </tr>
        </div>
		</div>
		</div>
            <tr>
            <th class="head0">Sr.No.</th>
            <th class="head1">Month-Year</th>
            <th class="head0">Total Shipment</th>
            <th class="head1">Total Amount()</th>
            <th class="head0">Total COD Amount()</th>
            <th class="head1">Due Amount()</th>
            <th class="head1">Invoice Number</th>
            <th class="head0">Invoice Status</th>
            </tr>
        </thead>
        
        <tbody>
        
            <tr>
            <td>1</td>
            <td><a href=""> September-2019</a></td>
            <td>0</td>
            <td>0</td> 
            <td></td>
            <td> 0</td> 
            <td>10000209</td>
            <td style="background-color:#F00; color:#FFF;">
            UN PAID</td>
            </tr>
        
            
            <tr>
            <td colspan="10" align="center">
            <form name="frm_pagi" action="" method="post">
                        <input type="hidden" name="pageval" id="pagevalid" value="0">
                        
            </form></td>
            </tr>
                </tbody>
    	</table>
    </section>		
<?php include APPPATH.'views/includes/footer.php';?>