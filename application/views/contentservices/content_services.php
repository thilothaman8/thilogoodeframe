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
            <li class="breadcrumb-item active" aria-current="page">Report</li>
			<li class="breadcrumb-item active" aria-current="page">Show Services</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Datatables - Show Services</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Show Services</h5>
		</div><br>
		<table class="table datatable-show-all table-bordered table-hover datatable-highlight">
                        
            <thead>
            <tr>
            <th class="head1" colspan="8">
            <form name="addservices" method="post" action="#">
            <div class="form-group">
            <input type="hidden" value="" name="edit_id">
            <label>Add Services</label>
            <input type="text" name="services" class="form-control" value="">
            </div>
            <input type="submit" value="Add Services" name="btn_services" class="btn btn-primary" onclick="return Valid_addservices(document.addservices);">
            </form>
            </th>
            </tr>
            
            <tr>
            <th class="head0">Sr.No</th>
            <th class="head1">Services Name</th>
            <th class="head0">Action</th>
            </tr>
            
            </thead>
                        
            <tbody>
            <tr>
            <td>1</td>
            <td><a href="">Special Delivery</a></td>
            <td>
			    <div class="btn-group">
                <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>&nbsp;Active</a>
				<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o"></i>&nbsp;Edit</a>
				<a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>
                </div>
                </div>
            </td>
            </tr>
            <tr>
            <td>2</td>
            <td><a href="">International &amp; Clearance </a></td>
            <td>
			     <div class="btn-group">
                <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>&nbsp;Active</a>
				<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o"></i>&nbsp;Edit</a>
				<a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>
                </div>
                </div>
            </td>
            </tr>
            <tr>
            <td>3</td>
            <td><a href="">Cash on Delivery</a></td>
            <td>
			     <div class="btn-group">
                <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>&nbsp;Active</a>
				<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o"></i>&nbsp;Edit</a>
				<a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>
                </div>
                </div>
            </td>
            </tr>
            <tr>
            <td>4</td>
            <td><a href="">Fulfillment</a></td>
            <td>
			     <div class="btn-group">
                <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>&nbsp;Active</a>
				<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o"></i>&nbsp;Edit</a>
				<a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>
                </div>
                </div>
            </td>
            </tr>
            <tr>
            <td>5</td>
            <td><a href="">Drop and Ship</a></td>
            <td>
			     <div class="btn-group">
                <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>&nbsp;Active</a>
				<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o"></i>&nbsp;Edit</a>
				<a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>
                </div>
                </div>
            </td>
            </tr>
            <tr>
            <td>6</td>
            <td><a href="">Same Day Delivery</a></td>
            <td>
			     <div class="btn-group">
                <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>&nbsp;Active</a>
				<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o"></i>&nbsp;Edit</a>
				<a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>
                </div>
                </div>
            </td>
            </tr>
                        			
            <tr>
            <td colspan="8" align="center">
            
            <form name="frm_pagi" action="" method="post">
            <input type="hidden" name="pageval" id="pagevalid" value="0">
            
            </form>
            
            </td>
            </tr>
            
            </tbody>
            
                    </table>
    </section>		
<?php include APPPATH.'views/includes/footer.php';?>