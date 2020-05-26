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
                    <li class="breadcrumb-item active" aria-current="page">Pickup Management</li>
					<li class="breadcrumb-item active" aria-current="page">Bulk Pickup Update</li>
                </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Bulk Pickup Update</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<h5>Bulk Update</h5><br>
	<div class="row">
        <div class="col-sm">
            <div class="row">
                    <div class="col-md-12">
					<textarea class="form-control mt-8" rows="6" placeholder="AWB No.Here"></textarea>
					</div>
					<div class="col-md-4"><br><br>
                        <label>Status</label>
                        <select class="form-control custom-select  mt-8">
                            <option selected>Pickup Collected</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
					<div class="col-md-4"><br><br>
					<label>Image</label>
					<div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Choose Image</span>
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
					<div class="col-md-4"><br><br>
					<label>Comment</label>
					<textarea class="form-control mt-8" rows="3" placeholder=""></textarea>
					</div>
					<div class="col-md-3">
						<button type="submit" name="submit" class="btn btn-primary form-control">Submit</button>
					</div>
			</div>
        </div>			
    </section>	
    <?php include APPPATH.'views/includes/footer.php';?>