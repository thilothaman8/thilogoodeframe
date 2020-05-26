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
            <li class="breadcrumb-item active" aria-current="page">Banner Management</li>
			<li class="breadcrumb-item active" aria-current="page">Add Banner</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Add Banner</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title"> Add Banner</h5>
		</div><br>
		<div class="row">
     	<div class="col-lg-12">
        <form class="stdform" method="post" action="" name="edit_rate" enctype="multipart/form-data">
        
                    	<div class="form-group">
                        	<label>Title</label> <span id="title" class="alert"></span>
                            <input type="text" class="form-control input-lg  input-lg" name="title" value="Unique in the cargo trucking industry.">
                           
                        </div>
                        <div class="form-group">
                        	<label>URL</label><span id="upto250" class="alert"></span>
                            <input type="text" name="url" class="form-control input-lg  input-lg" value="">
                          
                        
                        </div>
                        <div class="form-group">
                        	<label>Image</label><span id="upto500" class="alert"></span>
                            <input type="file" name="pro_image" class="form-control input-lg  input-lg">
              				<input type="hidden" name="pro_image_old" value="1526799832.jpeg">
                          
                           
                        </div>
                         <div class="form-group">
                        	<label>Description</label> <span id="flatrate" class="alert"></span>
                           <textarea name="description" class="form-control input-lg  input-lg" cols="50" rows="10"> Your goods are in good hands.</textarea>
                          
                        </div>
                        
                      
                		<input name="edit_id" type="hidden" value="2">
                  	<button type="submit" class="btn btn-primary" name="submit" value="Submit" onclick="return Valid_rates(document.edit_rate);">Update</button>      
                           
                       
                    </form>
 		 </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
		</section>
		<?php include APPPATH.'views/includes/footer.php';?>