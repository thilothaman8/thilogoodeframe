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
                    <li class="breadcrumb-item active" aria-current="page">Staff Management</li>
                    <li class="breadcrumb-item active" aria-current="page">Show Staff</li>
                </ol>
            </nav>
  <div class="container">
                <!-- Title -->
            <div class="breadcrumb-line">
                <div class="hk-pg-header">
                <h4><i data-feather="arrow-left-circle"></i></i> 
                <span class="text-semibold"></span>Show Staff</h4>
                </div>
            </div>
        
           
     <section class="hk-sec-wrapper">
    <div class="row">
    
    
    <div class="col-md-12">

       <div class="panel-heading">Show Staff</div>
       <tr> 
            <form name="" method="post" action=""></form>
            <th class="head1" colspan="4">
            <input type="text" name="search_val" value="" placeholder="Searching By Name,Mobile No,Email" class="form-control" onfocus="this.value=''">
            </th><br>
            
            <th class="head1" colspan="1">
            <input type="submit" name="Search" class="btn btn-primary" value="Search" onclick="return Valid_search(document.search_form);"> 
            </th><br><br>
            
            </tr>
     <table class="table datatable-show-all table-bordered table-hover datatable-highlight">

                        
<thead>
    <tr>
        <th class="head0">Sr.No.</th>
        <th class="head1">Name</th>
        <th class="head1">Hub/City</th>
        <th class="head0">Phone</th>
        <th class="head0">Email</th>
          <th class="head1">Designation</th>
       <th class="head0">Action</th>
      
    </tr>
</thead>
                        
<tbody>
        <tr>
			<td>1</td>
			<td>ameen</td>
			<td>Riyadh</td>
			<td>0556898898</td>
			<td>amin@ibrahimalqurashi.com</td>
			<td>Customer Services Manager</td>
			<td>
			    <div class="btn-group dropdown">
					    <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu w-210p">
                        <a class="dropdown-item" href="#"><i class="fa fa-times fa-fw"></i>&nbsp;Active</a>
						<a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>&nbsp;Call Record Activate</a>
						<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o fa-fw"></i>&nbsp;Edit</a>
						<a class="dropdown-item" href="#"><i class="fa fa-trash-o fa-fw"></i>&nbsp;Delete</a>
						
                        </div>
                    </div>
			</td>
        </tr>
		<tr>
			<td>2</td>
			<td>Shehzad</td>
			<td>Dammam</td>
			<td>0557805428</td>
			<td>Shehzad.ahmad@ibrahimalqurashi.com</td>
			<td>Customer Permission Manager</td>
			<td>
			    <div class="btn-group dropdown">
					    <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu w-210p">
                        <a class="dropdown-item" href="#"><i class="fa fa-times fa-fw"></i>&nbsp;Active</a>
						<a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>&nbsp;Call Record Activate</a>
						<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o fa-fw"></i>&nbsp;Edit</a>
						<a class="dropdown-item" href="#"><i class="fa fa-trash-o fa-fw"></i>&nbsp;Delete</a>
						
                        </div>
                    </div>
			</td>
        </tr>
		<tr>
			<td>3</td>
			<td>Tahir.Muneer</td>
			<td>Dammam</td>
			<td>0580616474</td>
			<td>Tahir@alqurashics.com</td>
			<td>N/A</td>
			<td>
			    <div class="btn-group dropdown">
					    <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu w-210p">
                        <a class="dropdown-item" href="#"><i class="fa fa-times fa-fw"></i>&nbsp;Active</a>
						<a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>&nbsp;Call Record Activate</a>
						<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o fa-fw"></i>&nbsp;Edit</a>
						<a class="dropdown-item" href="#"><i class="fa fa-trash-o fa-fw"></i>&nbsp;Delete</a>
						
                        </div>
                    </div>
			</td>
         
        </tr>
		<tr>
			<td>4</td>
			<td>FASTCOO</td>
			<td>Riyadh</td>
			<td>0000000000</td>
			<td>Ahmad.Razzaq@alqurashics.com</td>
			<td>Information Tech.</td>
			<td>
			    <div class="btn-group dropdown">
					    <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu w-210p">
                        <a class="dropdown-item" href="#"><i class="fa fa-times fa-fw"></i>&nbsp;Active</a>
						<a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>&nbsp;Call Record Activate</a>
						<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o fa-fw"></i>&nbsp;Edit</a>
						<a class="dropdown-item" href="#"><i class="fa fa-trash-o fa-fw"></i>&nbsp;Delete</a>
						
                        </div>
                    </div>
			</td>
      
        </tr>
			<tr>
			<td>5</td>
			<td>Danish Khan</td>
			<td>Jeddah</td>
			<td>0551774721</td>
			<td>danish.khan@alqurashics.com</td>
			<td>Finance</td>
			<td>
			    <div class="btn-group dropdown">
					    <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu w-210p">
                        <a class="dropdown-item" href="#"><i class="fa fa-times fa-fw"></i>&nbsp;Active</a>
						<a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>&nbsp;Call Record Activate</a>
						<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o fa-fw"></i>&nbsp;Edit</a>
						<a class="dropdown-item" href="#"><i class="fa fa-trash-o fa-fw"></i>&nbsp;Delete</a>
						
                        </div>
                    </div>
			</td>        
        </tr>
	    <tr>
			<td>6</td>
			<td>Amer Hussain</td>
			<td>Jeddah</td>
			<td>0507564418</td>
			<td>amer.hussain@alqurashics.com</td>
			<td>Customer Permission Manager</td>
			<td>
			    <div class="btn-group dropdown">
					    <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu w-210p">
                        <a class="dropdown-item" href="#"><i class="fa fa-times fa-fw"></i>&nbsp;Active</a>
						<a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>&nbsp;Call Record Activate</a>
						<a class="dropdown-item" href="#"><i class="fa fa-pencil-square-o fa-fw"></i>&nbsp;Edit</a>
						<a class="dropdown-item" href="#"><i class="fa fa-trash-o fa-fw"></i>&nbsp;Delete</a>
						
                        </div>
                    </div>
			</td>       
        </tr>
	</tbody>
</table>
        </div>
 </div>
</section>


  



    
<?php include APPPATH.'views/includes/footer.php';?>  
      
