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
			<li class="breadcrumb-item active" aria-current="page">Add Notification</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Add Notification</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Add Notification</h5>
		</div><br>
		<div class="panel-body">
	<div class="row">
		<div class="col-lg-12">
        	<div class="panel panel-default">
                <div class="panel-body">
                
					<form class="stdform" name="add_notification" method="post" action="" enctype="multipart/form-data">
                     
                    <div class="form-group">
                    <label>Title</label><span id="heading_id" class="alert"></span>
                    <input type="text" name="title" class="form-control" value="">
                    </div>
                  
                    <div class="form-group">
                    <label>Notification Description</label>
                    <span id="content_id" class="alert"></span>
					<textarea class="form-control mt-15" rows="6" placeholder="Textarea"></textarea>
                    </div>
                     
                    <div class="form-group">
                    <label>Expiry Date</label><span id="expiry_date" class="alert"></span>
                    <input type="date" name="expiry_date" class="form-control" value=""> 
                    </div> 
                    
                    <input name="id" type="hidden" value="">
                    <input name="submit" type="submit" class="btn btn-primary" value="Submit">
                    
                    	
					</form>
                    
        		</div>
			</div>
		</div>
	</div>
</div>
</section>		
<?php include APPPATH.'views/includes/footer.php';?>