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
                    <li class="breadcrumb-item active" aria-current="page">Pickup Management</li>
					<li class="breadcrumb-item active" aria-current="page">Pickup List</li>
                </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Pickup List</h4>
		</div>
	</div>
    <section class="hk-sec-wrapper">
	<h5>All Pickup List</h5><br>
	<table class="table datatable-show-all table-bordered table-hover datatable-highlight">
    <thead>
            <tr>
            <th class="head1" colspan="3">
            
            <input type="text" name="barcode_id" id="barcode_id"  placeholder="Enter Barcode" class="form-control"/>	
            </form>
            
            
            <th class="head1" colspan="3">
            <input type="text" class="form-control" name="search_val" placeholder="Enter Pickup Unique ID" onfocus="" value=""/>
            </th>
            <th colspan="2"><br>
            <button type="submit" name="submit" class="btn btn-primary form-control">Search</button>
            <label><div id='search_val' style="display:inline;"></div></label>
            </th>
            </tr>
        
            
            <tr>
            <th>#</th>
            <th>Unique id</th>
            <th>Date</th>
            <th>City</th>
            <th>Route Code</th>
            <th>Driver</th>
            <th>Status</th>
            <th>Action</th>
         </tr>
            
    </thead>
	
    <tbody>
        <tr>
            <td>1</td>
            <td>2365<br/>
            <td></td>
            <td>bang</td>
            <td></td>
            <td></td>
            <td></td>
			<td><div class="btn-group">
                <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#"><i class="fa fa-print fa-fw"></i>Print</a>
				<a class="dropdown-item" href="#"><i class="fa fa-exclamation fa-fw"></i>View</a>
				<a class="dropdown-item" href="#"><i class="fa fa-repeat fa-fw"></i>Satus Update</a>
                </div>
             </div></td>
        </tr>
     </tbody>
            
		</table>
    </section>	
				<?php include APPPATH.'views/includes/footer.php';?>