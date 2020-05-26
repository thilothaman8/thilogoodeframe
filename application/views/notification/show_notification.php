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
            <li class="breadcrumb-item active" aria-current="page">Notification</li>
			<li class="breadcrumb-item active" aria-current="page">Show Notification</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span> Show Notification</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title"> Show Notification</h5>
		</div><br>
		<table class="table datatable-show-all table-bordered table-hover datatable-highlight">
                        
            <thead>
                <tr>
                    <th class="head0">Sr.No</th>
                    <th class="head1">Title</th>                            	
                    <th class="head1">Notification Description</th>
                    <th class="head1">Expiry Date</th>
                    <th class="head0">Action</th>
                </tr>
            </thead>
                        
            <tbody>
         	            	<tr>
                	<td colspan="8">Record Not Found</td>
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