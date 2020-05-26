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
			<li class="breadcrumb-item active" aria-current="page">Generate Invoice</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Generate Invoice</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Generate Invoice</h5>
		</div><br>
		<div class="panel panel-flat">
        <div class="panel-heading"> <h5 class="panel-title">Create Bulk Invoice</h5></div>
        <div class="panel-body">
			<div class="col-md-12" id="message"></div>
                <div class="col-md-12" id="">
               </div>
           <form action="" method="post">
          
            <input type="submit" name="Bulk_cod_Invoice" class="btn btn-primary" style="float:right" value="Show Bulk Invoice Page">
                 
                    </form>
                    <br><br>
            <form action="" method="post" name="traking">
            <div class="col-md-12">
            <div class="form-group">
            <textarea rows="8" id="show_awb_no" name="awb_no" required="" class="form-control"></textarea>
				
            </div>
            </div>
             <div class="row">
                <div class="col-sm">
                    <div class="row">
                        <div class="col-md-4">
           <label>Row Count</label>
			<span class="badge-success badge badge-pill" id="count_val">1</span>	
				</div>
            
            <div class="col-md-3">
           
            <label>Supplier</label>
           <select name="supplier" class="form-control" id="supplier">
					<option value="" selected="selected">Please Select supplier</option><option value="5">Abdul Malik AL Mubarak</option><option value="6">Noor AL Manarah</option><option value="7">Qaser Al Mashaher</option><option value="8">Quick</option><option value="9">TAM EXPRESS</option><option value="10">Turki Corporation </option><option value="11">Speedzi</option><option value="12">SHARQ AL TAWAN</option><option value="13">Extra</option><option value="14">Rakeez int</option><option value="15">Anmar Arabin</option><option value="16">B1</option><option value="17">CODRUK_Express</option><option value="18">Star Targets Maintenance And Finishing Est.</option><option value="19">Fastcoo test Ashar</option></select><br>
            </div>
           
				
            <div class="col-md-3">	
            <label>&nbsp;</label>		
         
              <a href="#myModal" id="btnSubmit" type"submit"="" style="display: none" onclick="$(this).closest('form').submit()" s="" role="button" class="btn btn-primary form-control" data-toggle="modal">Generate Invoice</a>			
           
				  <a id="btnSubmitDS" role="button" class="btn btn-primary form-control">Generate Invoice</a>			
            </div>	 </form>
			</div>	
        </div>   
        </div>    
    	</div>
    </section>		
<?php include APPPATH.'views/includes/footer.php';?>