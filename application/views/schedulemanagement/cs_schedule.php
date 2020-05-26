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
            <li class="breadcrumb-item active" aria-current="page">Schedule Management</li>
			<li class="breadcrumb-item active" aria-current="page">CS Schedule</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>CS Schedule</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">CS Schedule</h5>
		</div><br>
		<section class="hk-sec-wrapper">
		<form action="" method="post" name="schedule">
          <div class="col-md-4">
          <div class="form-group">
            <label>Call Status</label>
            <select name="sch_type" id="sch_type" class="form-control" onchange="changeView(this.value)" required="">
              <option value="">Select Status</option>
              <option value="YES">Schedule</option>
              <option value="NO">Not Schedule</option>
            </select>
          </div>
          </div>
         </form>
		 </section>
		 <section class="hk-sec-wrapper">
		 <div class="panel panel-flat">
    <div class="panel-heading">
      <h5 class="panel-title">Update Wrong Area </h5>
    </div>
    <div class="panel-body">
      <div id="contentwrapper" class="contentwrapper">
        <div class="alert alert-info">
          <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4" align="center"> <a href="" class=""> <i class="fa fa-file-excel-o fa-2x"></i> <br>
              Update Wrong Area</a> </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover">
                <tbody><tr>
                  <td>(1) AWB No(Existing)</td>
                  <td>(2) Area</td>
                  <td>(2) Channel</td>
                </tr>
              </tbody></table>
              <span class="alert" style="color:#F00;"> </span>
              <form class="stdform" method="post" enctype="multipart/form-data" name="add_ship" action="">
                <label><strong>Import File</strong></label><br>
                <span class="field">
                <input type="file" name="uploadedfile" value="" size="20" class="btn btn" required="">
                <span id="weight" class="alert"></span></span><br><br>
                <button type="submit" class="btn btn-primary" name="submit" value="submit">UpLoad</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
</section>		
<?php include APPPATH.'views/includes/footer.php';?>