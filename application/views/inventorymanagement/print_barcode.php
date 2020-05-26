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
                    <li class="breadcrumb-item active" aria-current="page">Inventory Management</li>
					<li class="breadcrumb-item active" aria-current="page">Print Shelve Location Bar Code</li>
                </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Print Shelve Location Bar Code</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<h5>Print Shelve</h5><br>
	<section class="hk-sec-wrapper">
	<table class="table datatable-show-all table-bordered table-hover datatable-highlight panel panel-flat" style="height:200px !important;">
        
        <thead>
        <tr style="height:125px;">
        <td colspan="8">
            <div class="row">
		    <div class="col-md-4" style="margin-top:20px;">
		         <label>Select warehouse name</label>
				 <select class="form-control custom-select mt-8">
				        <option selected>--Select--</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md-2">
                <input type="submit" name="bt_search" value="View" class="btn btn-primary" onClick="" style="margin-top:50px;">
            </div>
            </div>								
        </td>
        </tr>
        					
        
        </thead>
		
        </table>
				
        <div class="col-md-10" style="overflow-x: auto">
            <table class="table table-striped table-bordered table-hover stdtable stdtablecb overviewtable2"  cellpadding="0" cellspacing="0" border="0" >
               
            <thead>
				  
			<tr><th colspan="18">
            <input class="btn-primary" type="submit" value="Print" formtarget="_blank" name ="bulk_print" style="float:right;"  >
            </th></tr>
                    <tr>
					<th style="width: 115px;">
					
					<input type="checkbox" onclick="toggle(this)" name="select_all[]" value=""/>
                    <br/>
                    Select All
					</th>
                      
                    <th  style="width: 115px;">Warehouse Shelve City</th>
                      
                      
                    <th  style="width: 115px;">Shelve Location</th>
                       
                       
                        
                    </tr>
                </thead>
                
                <tbody> 
				    <th>1</th>
					<th>Riyadh</th>
					<th></th>
	            </tbody>
				</table>
	</section>
	
	
   			
   <?php include APPPATH.'views/includes/footer.php';?>