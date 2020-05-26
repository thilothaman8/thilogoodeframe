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
                    <li class="breadcrumb-item active" aria-current="page">Audit</li>
					<li class="breadcrumb-item active" aria-current="page">View Reason</li>
                </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>View Reason</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<h5>View Reason</h5><br>
	<section class="hk-sec-wrapper">
	<table id="datable_1" class="table table-hover w-100 display pb-30">
										
                                            <thead>
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Type</th>
                                                    <th>Comment</th>
                                                    <th>Audit Status</th>
                                                    
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Operation Audit</td>
													<td>Other Reasons</td>
                                                    <td></td>
                                                    
                                                    <td>
													<div class="btn-group">
                                                       <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                                       <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                       <span class="sr-only">Toggle Dropdown</span>
                                                       </button>
                                                       <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
													   <a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o"></i>  Edit</a>
                                                       <a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i>  Delete</a>
                                                       
                                                
                                                       </div>
                                                    </div>
													</td>
                                                </tr>
                                                
                                            </tbody>
                                            
                                        </table>
	</section>
	
	</section>
   		
   <?php include APPPATH.'views/includes/footer.php';?>