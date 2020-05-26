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
            <li class="breadcrumb-item active" aria-current="page">News</li>
			<li class="breadcrumb-item active" aria-current="page">Add News</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Add News</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Add News</h5>
		</div><br>	
		<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
                
                    <form class="stdform" method="post" enctype="multipart/form-data" action="" name="add_news">
                    <div class="form-group">
                        <label>Heading</label>
                       <input type="text" name="heading" class="form-control" value="">
                    </div>
					<div class="form-group">
                        <label>
						Heading Arabic</label>
                       <input type="text" name="heading_ar" class="form-control" value="">
                    </div>
              
                    <div class="form-group">
                        <label>Content</label>
						<textarea class="form-control mt-15" rows="6" placeholder="Textarea"></textarea>
                    </div>
					
					 <div class="form-group">
                        <label>Content Arabic</label>
						<textarea class="form-control mt-15" rows="6" placeholder="Textarea"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="pro_image" class="form-control"><br>
                        <input type="hidden" name="pro_image_old" value="">
                        <img src="" width="150" height="100">
                        </div>
                  
                   <input name="id" type="hidden" value="">
                   <input name="submit" type="submit" class="btn btn-primary" value="Submit" onclick="return Valid_news(document.add_news);">
                
                    </form>
                        
       			 </div>
        	</div>
        </div>
	</div>
		</section>
<?php include APPPATH.'views/includes/footer.php';?>