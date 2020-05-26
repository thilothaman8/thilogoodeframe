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
            <li class="breadcrumb-item active" aria-current="page">Manifest Management</li>
			<li class="breadcrumb-item active" aria-current="page">Show Manifest</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Show Manifest</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<div class="panel-heading">
            <h5 class="panel-title">Show Manifest</h5>
    </div><br>
	 <table class="table table-hover table-bordered mb-0">
	    <thead>
            <tr> 
            <form name="search_form" method="post" action=""></form>
            <th class="head1" colspan="7">
            <input type="text" name="search_val" value="" placeholder="Enter a Unique id" class="form-control" onfocus="this.value=''">
            </th>
            <th><select name="line_hule" class="form-control" id="line_hule">
			<option value="">Please Select Status</option><option value="2">SMSA NEW</option><option value="3">WARED</option><option value="4">Aramex</option><option value="5">test</option><option value="7">Speedzi</option></select></th>
            <th class="head1" colspan="1">
            <input type="submit" name="Submit" class="btn btn-primary" value="Search" onclick="return Valid_search(document.search_form);"> 
            </th>
            </tr>
            <tr>
            <th>Sr.No.</th>
            <th>Uniqueid</th>
            <th>Line Haul</th>
            <th>Source</th>
            <th>Destination</th>
            <th>Date</th>
            <th>Bar Code Number</th>
            <th>Status</th>
            <th>Actions</th>
            </tr>
        </thead>
		<tbody>
		<tr>
        <td class="first style3">1</td>
        <td>PCIA7I</td>
        <td>Speedzi </td>
        <td>Riyadh</td>
        <td>Abha</td>
        <td>2019-09-08 17:15:20</td>
        <td><img src="data:image/jpeg;base64,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"><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIA7I</span></td>
        <td>            
       	   <a href="#" class="btn btn-primary btn-xs" onclick="openpopupshow(183699);" style="height:40px;padding-bottom: 19px;padding-top: 0px;"> Receive manifest</a>
           <a href="#" class="btn btn_primary label bg-success btn-xs">(0)
           </a>
           <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#update_location_183699">
           (1)
           </a>
        </td>
		<td>
		    <div class="btn-group dropdown">
					    <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu w-210p">
                        <a class="dropdown-item" href="#">Active</a>
						<a class="dropdown-item" href="#">Delete</a>
						<a class="dropdown-item" href="#">Print</a>
						<a class="dropdown-item" href="#">View</a>
						<a class="dropdown-item" href="#">Export to Excel</a>
						<a class="dropdown-item" href="#">Return View Image</a>
						<a class="dropdown-item" href="#">Not Found Orders</a>
						<a class="dropdown-item" href="#">Add Line Haul Detail</a>
                        </div>
            </div> 
        </td>
        </tr>
		
		
		<tr style="background-color:#F03; color:white;">
        <td class="first style3">2</td>
        <td>KWCIAA</td>
        <td>N/A </td>
        <td></td>
        <td></td>
        <td>2019-09-04 07:40:20</td>
        <td><img src="data:image/jpeg;base64,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"><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KWCIAA</span></td>
        <td>            
        <a href="#" class="btn btn-primary btn-xs" onclick="openpopupshow1(183696);" style="height:40px;padding-bottom: 19px;padding-top: 0px;">Receive manifest</a>
        <a href="#" class="btn btn_primary label bg-success btn-xs">(0)
        </a>
        <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#update_location_183696">
        (3)
        </a>
        </td>
		<td>
		    <div class="btn-group dropdown">
					    <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu w-210p">
                        <a class="dropdown-item" href="#">Active</a>
						<a class="dropdown-item" href="#">Delete</a>
						<a class="dropdown-item" href="#">Print</a>
						<a class="dropdown-item" href="#">View</a>
						<a class="dropdown-item" href="#">Export to Excel</a>
						<a class="dropdown-item" href="#">Return View Image</a>
						<a class="dropdown-item" href="#">Not Found Orders</a>
						<a class="dropdown-item" href="#">Add Line Haul Detail</a>
                        </div>
            </div> 
		</td>
        </tr>
       
	   <tr>
        <td class="first style3">3</td>
        <td>QFXVDU</td>
        <td>WARED </td>
        <td>Riyadh</td>
        <td>Dammam</td>
        <td>2019-09-02 08:56:12</td>
        <td><img src="data:image/jpeg;base64,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"><br>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QFXVDU</span></td>
        <td><span class="col_bg_delever">Received at Location(1) </span></td>
        <td>
		    <div class="btn-group dropdown">
					    <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu w-210p">
                        <a class="dropdown-item" href="#">Active</a>
						<a class="dropdown-item" href="#">Delete</a>
						<a class="dropdown-item" href="#">Print</a>
						<a class="dropdown-item" href="#">View</a>
						<a class="dropdown-item" href="#">Export to Excel</a>
						<a class="dropdown-item" href="#">Return View Image</a>
						<a class="dropdown-item" href="#">Not Found Orders</a>
						<a class="dropdown-item" href="#">Add Line Haul Detail</a>
                        </div>
            </div> 
		</td>      
        </tr>
		<tr>
        <td colspan="8" align="center">
        <form name="frm_pagi" action="" method="post">
        <input type="hidden" name="pageval" id="pagevalid" value="0">
        <div class="input-group pagination">
		<div class="input-group-btn"> 
        <input type="submit" class="btn btn-default" value="‹ Prev">
        <input type="submit" class="btn btn-primary " value="1 " onclick="return callpage(1);">
        <input type="submit" class="btn btn-default center" value="2" onclick="return callpage(2);">
        <input type="submit" class="btn btn-default center" value="3" onclick="return callpage(3);">
        <input type="submit" class="btn btn-default center" value="4" onclick="return callpage(4);">
        <input type="submit" class="btn btn-default center" value="5" onclick="return callpage(5);">
        ...
        <input type="submit" class="btn btn-default center" value="106" onclick="return callpage(106);">
        <input type="submit" class="btn btn-default center" value="Next ›" onclick="return callpage(2);">
        </div>
        </div>
        </form>
        </td>
        </tr>
		</tbody>
	 </table>
    </section>	
   <?php include APPPATH.'views/includes/footer.php';?>