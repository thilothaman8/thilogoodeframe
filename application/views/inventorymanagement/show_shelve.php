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
					<li class="breadcrumb-item active" aria-current="page">Show Shelve</li>
                </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Show Shelve</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<h5>Show Shelve</h5><br>
	<section class="hk-sec-wrapper">
	<div class="panel-body">
        
        <div class = "row">
		<div class = "col-md-3">
        <label><strong>Import File</strong></label><br>
        <span class="field">
        <input type="file" name="uploadedfile" value="" size='20' class="btn btn-info">
        <span id="weight" class="alert"></span></span></br>
        <button type="submit" class="btn btn-primary" name="submit" value="submit" onClick="">Add Shelve</button>                                           
        </div>
         <div class = "col-md-6">
		 </div>
        <div class="heading-elements"><br>
        <a href="" class="" > <i class="fa fa-file-excel-o fa-2x"></i> <br />Import CSV Shelve</a>
        </div>  
        
        </div>
		</div><br>
        <table class="table datatable-show-all table-bordered table-hover datatable-highlight">
        
            <thead>
            <tr><th colspan="9">
            <input class="btn-primary" type="button" value="Export to Zip" style="float:right;" onclick="create_zip();" >
            </th></tr>
            <tr>
            <th class="head1">#</th>
            <th class="head0">City</th>
            <th class="head1">Shelv Location</th>
            <th class="head0">Shelve No.</th>
            <th class="head1">Action</th>
            </tr>
            </thead>
            
            <tbody>
			<td>1</td>
			<td>bang</td>
			<td></td>
			<td>6789</td>
			<td>
			<div class="btn-group">
                    <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o"></i>&nbsp;Edit</a>
					<a class="dropdown-item" href="#"><i class="fa fa-trash-o fa-fw"></i>&nbsp;Delete</a>
                    </div>
                </div>
			</td>
			</tbody>
			</table>
	</section>
	</section>
   <?php include APPPATH.'views/includes/footer.php';?>