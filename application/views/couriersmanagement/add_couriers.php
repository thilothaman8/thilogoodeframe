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
            <li class="breadcrumb-item active" aria-current="page">Couriers Management</li>
			<li class="breadcrumb-item active" aria-current="page">Add Couriers</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Add Couriers</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Add Couriers</h5>
		</div><br>
	<section class="hk-sec-wrapper">
	<div class="panel-body">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
    					<div class="col-lg-12">
    
						<form class="stdform" name="add_user" method="post" action="" enctype="multipart/form-data">
           					<div class="form-group"> 
              				<label>Name</label>
              				<input type="text" name="name" id="name" class="form-control" value=""> 
                            </div> 
                             
                           
                  			                                
                            <div class="form-group"> 
                            <label>Country</label>
                            <select name="sel_country" id="sel_country" class="form-control" onchange="createCityDropdownById_messanger(this.value);">
			                <option value="">Please Select</option><option value="1">Saudi Arabia</option></select>
                            </div>
                            
            				                            
                            <div class="form-group"> 
                            <label>City</label>
                            <span id="city_dropdown_show">
                            <select name="city" id="city" class="form-control">
                            <option value="" selected="selected">Please Select</option>
                            </select> 
                            </span>
                            </div> 
                                 
            				<div class="form-group"> 
                            <label>code</label>
                            <span id="rout_dropdown_show">  <input type="text" name="code" class="form-control" id="code" value=""></span>
                            </div>  
                            
                            <div class="form-group"> 
                            <label>Mobile</label>
                            <input type="tel" maxlength="10" minlength="10" name="phone" id="phone" class="form-control" value=""> 
                            </div>
                                 
                            <div class="form-group"> 
                            <label>Email</label>
                            <input type="text" class="form-control" id="email" name="email" value=""> 
                            </div>    
              
                            <div class="form-group"> 
                            <label>Iqama/ID #</label>
                            <input type="text" class="form-control" id="iqama" name="iqama" value=""> 
                            </div>    
              
                            <div class="form-group">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload Iqama/ID#</span>
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
							
							 <div class="form-group">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload license</span>
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
										
                            <div class="form-group"> 
                            <label>Type of vehicle </label>
                            <input type="text" class="form-control" id="typVehicle" name="typVehicle" value=""> 
                            </div>   
              
                            <div class="form-group"> 
                            <label>Color </label>
                            <input type="color" class="form-control" id="color" name="color" value=""> 
                            </div>  
               
                            <div class="form-group"> 
                            <label>Supplier </label>
                            <select name="supplier" class="form-control" id="supplier">
					        <option value="" selected="selected">Please Select supplier</option><option value="5">Abdul Malik AL Mubarak</option><option value="6">Noor AL Manarah</option><option value="7">Qaser Al Mashaher</option><option value="8">Quick</option><option value="9">TAM EXPRESS</option><option value="10">Turki Corporation </option><option value="11">Speedzi</option><option value="12">SHARQ AL TAWAN</option><option value="13">Extra</option><option value="14">Rakeez int</option><option value="15">Anmar Arabin</option><option value="16">B1</option><option value="17">CODRUK_Express</option><option value="18">Star Targets Maintenance And Finishing Est.</option><option value="19">Fastcoo test Ashar</option></select>
                           
                            </div> 
                
                            <div class="form-group"> 
                            <label>Join date</label>
                            <input type="date" class="form-control" id="joinDate" name="joinDate" value="">
                            </div>    
              
                            <div class="form-group"> 
                          	<label>Password</label>
                          	<input type="password" class="form-control" id="password" name="password" value=""> 
                           	</div> 
                                
                            <div class="form-group"> 
                          	<label>Vehicle Number</label>
                          	<input type="text" id="vehicle_no" class="form-control input-lg  input-lg" name="vehicle_no" value=""> 
                           	</div>  
                               
                            <div class="form-group"> 
                            <label>Image</label><br>
                            <input type="file" name="sign_image" value="" class="btn btn-primary btn-file"><br><br>
                            <img src="<?php echo base_url()."assets/"; ?>dist/img/4image.png" width="50px;" height="50pxpx;"><br>
                            <input type="hidden" name="old_sign" value=""> 
                            </div>      
           
           
              				<input name="id" id="id" type="hidden" value="">
              				<button type="submit" class="btn btn-success" name="Submit" value="Submit" onclick="return Valid_messanger(document.add_user);">Add Messanger </button>
						</form>
   						</div>
					</div>
				</div>
			</div>
		</div>
	</div>   
</div>
</section>
</section>		
<?php include APPPATH.'views/includes/footer.php';?>