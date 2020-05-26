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
                    <li class="breadcrumb-item active" aria-current="page">User Management</li>
                    <li class="breadcrumb-item active" aria-current="page"> Show User</li>
                </ol>
            </nav>
  <div class="container">
                <!-- Title -->
            <div class="breadcrumb-line">
                <div class="hk-pg-header">
                <h4><i data-feather="arrow-left-circle"></i></i> 
                <span class="text-semibold"></span>Show User</h4>
                </div>
              </div>
            

           
        
           
     <section class="hk-sec-wrapper">
    <div class="row">
    
    
    <div class="col-md-12">
       <div class="panel-heading">Page length options</div>
       <table id="testTable" class="table table-striped table-bordered table-hover">
                 
   
                </table>
               
                 
<!-- Page header -->
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-arrow-left52 position-left"></i> 
           
        </div>
    </div>

    
</div>

<!-- /page header -->
<div class="content">
  <div class="panel panel-flat">
   
  <table class="table datatable-show-all table-bordered table-hover datatable-highlight">
   
    <thead>
    <tr>
    <th class="head1" colspan="7">
      
    <form name="search_form" method="post" action="">
    <div class="row">
    <div class="col-sm"> 
    <div class="row"> 
    <div class="col-md-9">
    <input type="text" name="search_val" value="" class="form-control" placeholder="Search By User Name" onfocus="this.value=''">
    </div><br>
    
    <div class="col-md-3">                  
    <input type="submit" name="Submit" class="btn btn-primary" value="Search" onclick="return Valid_search(document.search_form);">
    </div>
    <label style="color:#F00;"><div id="search_val" style="display:inline;"></div></label>
    </form>
    </th>
    </div>
    </div>
   </div>
    <th colspan="1">
    <a href="" class="btn btn-success"><i class="fa fa-building"></i>Add  User</a>
    </th>
    </tr>
    
    <tr>
    <th>#</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Usertype</th>
    <th>User Name</th>
    <th>Branch Location</th>
    <th>Action</th>
    </tr>
    </thead>
    
    <tbody>
		<tr>
			<td>1</td>
			<td>Speedzi</td>
			<td></td>
			<td></td>
			<td><span class="label label-primary">Agent</span></td>
			<td></td>
			<td></td>
            <td>
			    <div class="btn-group dropdown">
					    <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu w-210p">
                        <a class="dropdown-item" href="#"><i class="fa fa-check  fa-fw"></i>Active</a>
						<a class="dropdown-item" href="<?php echo base_url('edit_agent'); ?>"><i class="fa fa-pencil-square-o fa-fw"></i>Edit</a>
						<a class="dropdown-item" href="#"><i class="fa fa-trash-o fa-fw"></i>Delete</a>
                        </div>
                    </div>
			</td>
        </tr>
        <tr>
			<td>2</td>
			<td>BEONE</td>
			<td></td>
			<td></td>
			<td><span class="label label-primary">Agent</span></td>
			<td></td>
			<td></td>
            <td>
			     <div class="btn-group dropdown">
					    <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu w-210p">
                        <a class="dropdown-item" href="#"><i class="fa fa-check  fa-fw"></i>Active</a>
						<a class="dropdown-item" href="<?php echo base_url('edit_agent'); ?>"><i class="fa fa-pencil-square-o fa-fw"></i>Edit</a>
						<a class="dropdown-item" href="#"><i class="fa fa-trash-o fa-fw"></i>Delete</a>
                        </div>
                    </div>
			</td>
        </tr>
		<tr>
		    <td>3</td>
			<td>SMSA</td>
			<td></td>
			<td></td>
			<td><span class="label label-primary">Agent</span></td>
			<td></td>
			<td></td>
            <td>
			     <div class="btn-group dropdown">
					    <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu w-210p">
                        <a class="dropdown-item" href="#"><i class="fa fa-check  fa-fw"></i>Active</a>
						<a class="dropdown-item" href="<?php echo base_url('edit_agent'); ?>"><i class="fa fa-pencil-square-o fa-fw"></i>Edit</a>
						<a class="dropdown-item" href="#"><i class="fa fa-trash-o fa-fw"></i>Delete</a>
                        </div>
                    </div>
			</td>
        </tr>
        
    
    
          
    </tbody>
  
    </table>
  </div>
</div>
</div>
    
</div>
                        
</div>
</section>

                                            
                                          
 

   
   
           
  
                                         
                                      
                                          




  



    
<?php include APPPATH.'views/includes/footer.php';?>  
      
