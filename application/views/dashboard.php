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
            
			<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Home - Dashboard</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<h5 class="hk-sec-title">Dashboard</h5><br>
	<div class="hk-row">
							<div class="col-md-3">
								<div class="card card-sm text-white bg-primary">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between">
											<div>
												<span class="d-block font-12 font-weight-500 text-uppercase mb-5">Todays Order</span>
												<span class="d-block display-6 font-weight-400">0</span>
											</div>
											 <div class="heading-elements">
                <ul class="icons-list">
                  <li><i class="fa fa-shopping-cart fa-2x"></i></li>
                </ul>
              </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-sm text-white bg-secondary">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between">
											<div>
												<span class="d-block font-12 font-weight-500  text-uppercase mb-5">New Customers Today</span>
												<span class="d-block display-6 font-weight-400">0</span>
											</div>
											 <div class="heading-elements">
                <ul class="icons-list">
                  <li><i class="fa fa-users fa-2x"></i> </li>
                </ul>
              </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-sm text-white bg-info">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between">
											<div>
												<span class="d-block font-12 font-weight-500 text-uppercase mb-5">Payments Today</span>
												<span class="d-block display-6 font-weight-400 ">0</span>
											</div>
											<div class="heading-elements">
                <ul class="icons-list">
                  <li><i class="fa fa-credit-card fa-2x"></i></li>
                </ul>
              </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-sm text-white bg-success">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between">
											<div>
												<span class="d-block font-12 font-weight-500  text-uppercase mb-5">New Inquries Today</span>
												<span class="d-block display-6 font-weight-400 ">1</span>
											</div>
											<div class="heading-elements">
                <ul class="icons-list">
                  <li><i class="fa fa-question-circle fa-2x"></i> </li>
                </ul>
              </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-sm text-white bg-danger">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between">
											<div>
												<span class="d-block font-12 font-weight-500  text-uppercase mb-5">Not Delivered</span>
												<span class="d-block display-6 font-weight-400 ">15</span>
											</div>
											 <div class="heading-elements">
                <ul class="icons-list">
                  <li><i class="fa fa-cab fa-2x"></i> </li>
                </ul>
              </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-sm text-white bg-warning">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between">
											<div>
												<span class="d-block font-12 font-weight-500  text-uppercase mb-5">Pickup Collected</span>
												<span class="d-block display-6 font-weight-400 ">15</span>
											</div>
											<div>
												<div class="heading-elements">
                <ul class="icons-list">
                  <li><i class="fa fa-briefcase fa-2x"></i> </li>
                </ul>
              </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-sm text-white bg-secondary">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between">
											<div>
												<span class="d-block font-12 font-weight-500  text-uppercase mb-5">Out of Delivery</span>
												<span class="d-block display-6 font-weight-400 ">19</span>
											</div>
											<div class="heading-elements">
                <ul class="icons-list">
                  <li><i class="fa glyphicon-envelope fa-2x"></i> </li>
                </ul>
              </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-sm text-white bg-info">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between">
											<div>
												<span class="d-block font-12 font-weight-500  text-uppercase mb-5">Return</span>
												<span class="d-block display-6 font-weight-400 ">0</span>
											</div>
											<div class="heading-elements">
                <ul class="icons-list">
                  <li><i class="fa fa-undo fa-2x"></i> </li>
                </ul>
              </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-sm text-white bg-success">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between">
											<div>
												<span class="d-block font-12 font-weight-500 text-uppercase mb-5">Shelve</span>
												<span class="d-block display-6 font-weight-400 ">7</span>
											</div>
											<div class="heading-elements">
                <ul class="icons-list">
                  <li><i class="fa fa-archive fa-2x"></i> </li>
                </ul>
              </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-sm text-white bg-danger">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between">
											<div>
												<span class="d-block font-12 font-weight-500  text-uppercase mb-5">Shipment Forward/Arrival</span>
												<span class="d-block display-6 font-weight-400 ">21</span>
											</div>
											<div class="heading-elements">
                <ul class="icons-list">
                  <li><i class="fa icon-location-pin fa-2x"></i> </li>
                </ul>
              </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-sm text-white bg-warning">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between">
											<div>
												<span class="d-block font-12 font-weight-500  text-uppercase mb-5">Hold for Pickup</span>
												<span class="d-block display-6 font-weight-400 ">14</span>
											</div>
											<div class="heading-elements">
                <ul class="icons-list">
                  <li><i class="fa icon-call-in fa-2x"></i> </li>
                </ul>
              </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-sm text-white bg-primary">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between">
											<div>
												<span class="d-block font-12 font-weight-500  text-uppercase mb-5">Deliverd</span>
												<span class="d-block display-6 font-weight-400 ">10</span>
											</div>
											<div class="heading-elements">
                <ul class="icons-list">
                  <li><i class="fa fa-book fa-2x"></i> </li>
                </ul>
              </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-sm text-white bg-secondary">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between">
											<div>
												<span class="d-block font-12 font-weight-500  text-uppercase mb-5">Recieved in Bound</span>
												<span class="d-block display-6 font-weight-400 ">75</span>
											</div>
											<div class="heading-elements">
                <ul class="icons-list">
                  <li><i class="fa icon-user-follow fa-2x"></i> </li>
                </ul>
              </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-sm text-white bg-info">
									<div class="card-body">
										<div class="d-flex align-items-center justify-content-between">
											<div>
												<span class="d-block font-12 font-weight-500  text-uppercase mb-5">Ready for Delivery</span>
												<span class="d-block display-6 font-weight-400 ">15</span>
											</div>
											<div class="heading-elements">
                <ul class="icons-list">
                  <li><i class="fa fa-automobile fa-2x"></i> </li>
                </ul>
              </div>
										</div>
									</div>
								</div>
							</div>
						</div><br>
						
						<div class="panel panel-flat">
      <div class="panel-heading">
        <h5 class="panel-title">Daily Out For Delivery  Details </h5>
       
        
      </div>
      <div class="panel-body">
         <div class="table-responsive">
      <table id="testTable" class="table table-striped table-bordered table-hover">
                 
                <thead>
                <tr>
                <th colspan="15">
                <input class="btn btn-info" type="button" onclick="create_zip();" value="Export to Zip">
                </th>
                </tr>      
           
                <tr>
                <th>Sr.No.</th>
                <th>Courier</th>
                <th>Code</th>
                <th>Supplier</th>
                <th>Hub</th>
                <th>OFD</th>
               <th>Running</th>
                <th>Delivered</th>
                 
                <th>Not Delivered</th>
              
                <th>Delivery Performance </th>
                <th>Action</th>
                </tr>
                </thead> 
                 
                <tbody>
                
                                <tr><td colspan="15" class="alert center">Record Not Found</td>
                   
                </tr></tbody>  
                      
      </table>
        </div>
      </div>
    </div>
    </section>	
 <?php include APPPATH.'views/includes/footer.php';?>