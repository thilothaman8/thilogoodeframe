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
                    <li class="breadcrumb-item active" aria-current="page">General Setting</li>
					<li class="breadcrumb-item active" aria-current="page">Show About Us</li>
                </ol>
    </nav>
	<div class = "container">
	<div class="hk-pg-header">
		<h4><i data-feather="arrow-left-circle"></i></i> 
        <span class="text-semibold">Datatables</span> - Upload App</h4>
	</div>
	
	<section class="hk-sec-wrapper">
	<h5 class="hk-sec-title">Show About Us</h5><br>
	<form name="" method="post" action="#">
	<table id="datable_1" class="table table-hover w-100 display pb-30">
	    <thead>
		    <tr>
			    <th>Sr.No</th>
                <th>Add About Us</th>
                <th>Action</th>
			</tr>
		</thead>
		<tbody>
		    <tr>
			    <td>1</td>
                <td>Add About Us</td>
				<td>
				<div class="btn-group">
                    <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
					<a class="dropdown-item" href="#">Edit</a> 
                    <a class="dropdown-item" href="#">Delete</a>
                    </div>
				</div>	
				</td>
			</tr>
		</tbody>
	</table>
	</form>
	</section>
				<?php include APPPATH.'views/includes/footer.php';?>