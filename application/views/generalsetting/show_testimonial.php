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
            <span class="text-semibold"></span>Show Testimonial</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<h5 class="hk-sec-title">Tsetimonial</h5><br>
	<section class="hk-sec-wrapper">
	<form name="uplaod_file" method="post" action="" enctype="multipart/form-data">
	<a href = "<?php echo site_url('add_feedback'); ?>"<button type="button" class="btn btn-primary" style="float:right;">Testimonial</button></a>
	    <table id="datable_1" class="table table-hover w-100 display pb-30">
	        <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Join Date</th>
					<th>Actions</th>
                </tr>
            </thead>
			<tbody>
			    <tr>
                    <td>1</td>
                    <td>Deepak Kumar</td>
                    <td>deepak@fastcoo.com</td>
                    <td></td>
                    <td>11/08/2019</td>
                    <td></td>
                </tr>
			</tbody>
	    </table>
		</form>
	</section>
	</section>
				<?php include APPPATH.'views/includes/footer.php';?>