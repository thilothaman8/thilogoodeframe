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
            <li class="breadcrumb-item active" aria-current="page">Report</li>
			<li class="breadcrumb-item active" aria-current="page">Supplier Report</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Home -Supplier Report</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Supplier Report</h5>
		</div><br>
		<section class="hk-sec-wrapper">
		<div class="row">
            <div class="col-sm">
                <div class="row">
                    <div class="col-md-3">
                        <select name="supplier" class="form-control" id="supplier">
			            <option value="" selected="selected">Please Select supplier</option><option value="5">Abdul Malik AL Mubarak</option><option value="6">Noor AL Manarah</option><option value="7">Qaser Al Mashaher</option><option value="8">Quick</option><option value="9">TAM EXPRESS</option><option value="10">Turki Corporation </option><option value="11">Speedzi</option><option value="12">SHARQ AL TAWAN</option><option value="13">Extra</option><option value="14">Rakeez int</option><option value="15">Anmar Arabin</option><option value="16">B1</option><option value="17">CODRUK_Express</option><option value="18">Star Targets Maintenance And Finishing Est.</option><option value="19">Fastcoo test Ashar</option></select>
                    </div>
					<div class="col-md-3">
					    <select name="search_month" id="search_month" class="form-control  input-lg">
							<option value="">Select Month</option>
							<option value="1">January</option>
							<option value="2">February</option>
							<option value="3">March</option>
							<option value="4">April</option>
							<option value="5">May</option>
							<option value="6">June</option>
							<option value="7">July</option>
							<option value="8">August</option>
							<option value="9">September</option>
							<option value="10">October</option>
							<option value="11">November</option>
							<option value="12">December</option>
							</select>
					</div>
					<div class="col-md-3">
					    <input type="number" min="2017" max="2019" name="search_year" id="search_year" placeholder="2019" class="form-control" value="2019">
					</div>
					<div class="col-md-3">
					    <button id="btnSubmit" type"submit"="" style="display: none" role="button" class="btn btn-primary form-control">Generate Report</button>
                        <a id="btnSubmitDS" role="button" class="btn btn-primary form-control">Generate Report</a>
					</div>
				</div>
            </div>
        </div>
    </section>		
    </section>		
   <?php include APPPATH.'views/includes/footer.php';?>