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
            <li class="breadcrumb-item active" aria-current="page">Outsource Management</li>
			<li class="breadcrumb-item active" aria-current="page"> Show Supplier</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span> Show Supplier</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title"> Show Supplier</h5>
		</div><br>
		<div class="table-responsive">
            <table class="table table-hover mb-0">
			<thead>
                <tr>
                
        		<th colspan="5">
            <input type="text" class="form-control" name="search_val" value="" placeholder="enter name  or enter mobile number" onfocus="this.value=''"></th>
            
            	<th colspan="1">
            <input type="submit" name="Submit" class="btn btn-primary" value="Search" onclick="return Valid_search(document.search_form);"></th>
        
    				    
                </tr>                
                <tr>                    
                    <th>Sr.</th>                   
                    <th>Name</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Rate/shipmnet</th>		
                    <th>Action</th>
                </tr>
            </thead>
			<tbody>
			    <tr>
					<td>2<br></td>
					<td><a href=""> Star Targets Maintenance And Finishing Est.</a></td> 
					<td>0590465638</td>
					<td>Jeddah</td> 
					<td>12.00</td>
					<td>
						<div class="btn-group">
						<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
						<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="sr-only">Toggle Dropdown</span>
						</button>
						<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
						<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o fa-fw"></i>&nbsp;Edit</a>
						<a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>
						
						</div>
						</div>
					</td>
                </tr>
				 <tr>
					<td>3<br></td>
					<td><a href="">CODRUK_Express</a></td> 
					<td>0555694009</td>
					<td>Dammam</td> 
					<td>12.00</td>
					<td>
						<div class="btn-group">
						<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
						<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="sr-only">Toggle Dropdown</span>
						</button>
						<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
						<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o fa-fw"></i>&nbsp;Edit</a>
						<a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>
						
						</div>
						</div>
					</td>
                </tr>
				 <tr>
					<td>4<br></td>
					<td><a href="">B1</a></td> 
					<td>0538686028</td>
					<td>Riyadh</td> 
					<td>12.00</td>
					<td>
						<div class="btn-group">
						<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
						<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="sr-only">Toggle Dropdown</span>
						</button>
						<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
						<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o fa-fw"></i>&nbsp;Edit</a>
						<a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>
						
						</div>
						</div>
					</td>
                </tr>
				 <tr>
					<td>5<br></td>
					<td><a href="">Anmar Arabin</a></td> 
					<td>0598979742</td>
					<td>Riyadh</td> 
					<td>12.00</td>
					<td>
						<div class="btn-group">
						<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
						<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="sr-only">Toggle Dropdown</span>
						</button>
						<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
						<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o fa-fw"></i>&nbsp;Edit</a>
						<a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>
						
						</div>
						</div>
					</td>
                </tr>
				 <tr>
					<td>6<br></td>
					<td><a href="">Rakeez int</a></td> 
					<td>0539102034</td>
					<td>Jeddah</td> 
					<td>12.00</td>
					<td>
						<div class="btn-group">
						<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
						<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="sr-only">Toggle Dropdown</span>
						</button>
						<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
						<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o fa-fw"></i>&nbsp;Edit</a>
						<a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>
						
						</div>
						</div>
					</td>
                </tr>
				 <tr>
					<td>7<br></td>
					<td><a href=""> Extra</a></td> 
					<td>0562879517</td>
					<td>Riyadh</td> 
					<td>12.00</td>
					<td>
						<div class="btn-group">
						<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
						<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="sr-only">Toggle Dropdown</span>
						</button>
						<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
						<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o fa-fw"></i>&nbsp;Edit</a>
						<a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>
						
						</div>
						</div>
					</td>
                </tr>
			</tbody>
			</table>
		</div>	
		</section>	
<?php include APPPATH.'views/includes/footer.php';?>