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
					<li class="breadcrumb-item active" aria-current="page">Show Testimonial</li>
                </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
		<h4><i data-feather="arrow-left-circle"></i></i> 
        <span class="text-semibold">Home</span> - Add Feedback</h4>
	    </div>
	</div>
	<section class="hk-sec-wrapper">
	<h5 class="hk-sec-title">Add Feedback</h5><br>
	<section class="hk-sec-wrapper">
	<form name="uplaod_file" method="post" action="" enctype="multipart/form-data">
	        <div class="col-sm-8">
                <div class="form-group">
                    <label for="inputText">Name</label>
                    <input type="text" id="inputText" class="form-control" aria-describedby="textHelpBlock">
                 </div>   
            </div>
			<div class="col-sm-8">
                <div class="form-group">
                    <label for="inputText">Email</label>
                    <input type="email" id="inputText" class="form-control" aria-describedby="textHelpBlock">
                </div>   
            </div>
			<div class="col-sm-8">
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" value="" /></textarea>
                </div> 
            </div>
			<div class="col-sm-8">
			<div class="form-group">
			    <label>Image</label>
                <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Upload App</span>
                    </div>
                    <div class="form-control text-truncate" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                    <span class="input-group-append">
					<span class=" btn btn-primary btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
                    <input type="file" name="...">
                    </span>
                    <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                    </span>
                </div>
             </div>
			</div>
			<button type="submit" class="btn btn-primary">Add</button>
			<button type="button" class="btn btn-danger">Cancel</button>
	</form>
	</section>
	</section>
				<?php include APPPATH.'views/includes/footer.php';?>