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
                    <li class="breadcrumb-item active" aria-current="page">Product</li>
                     <li class="breadcrumb-item active" aria-current="page">Type</li>
                    <li class="breadcrumb-item active" aria-current="page">Show Product</li>
                </ol>
            </nav>
  <div class="container">
                <!-- Title -->
            <div class="breadcrumb-line">
                <div class="hk-pg-header">
                <h4><i data-feather="arrow-left-circle"></i></i> 
                <span class="text-semibold"></span>Datatables - Show Product</h4>
                </div>
            </div>
        
           
     <section class="hk-sec-wrapper">
    <div class="row">
    
    
    <div class="col-md-12">
       <div class="panel-heading">Show Product</div>
     <table class="table datatable-show-all table-bordered table-hover datatable-highlight">
                        
<thead>
    <tr>
        <th class="head0">Sr.No.</th>
        <th class="head1">Product/TypeName</th>
        
        <th class="head1">Actions</th>
      
    </tr>
</thead>
                        
<tbody>
        <tr>
        <td>1</td>
        <td>Parcel</td>
        <td>
            <div class="btn-group dropdown">
					    <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu w-210p">
                        <a class="dropdown-item" href="#"><i class="fa fa-check fa-fw"></i>Active</a>
						<a class="dropdown-item" href="<?php echo base_url('edit_product_type'); ?>" > <i class="fa fa-pencil-square-o"></i>&nbsp;Edit</a>
						<a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>
                        </div>
                    </div>
        </td>
      </tr>

     
  
</tbody>
</table>
        </div>
   
   
           
  
                                         
                                      
                                          
</div>
</section>


  
</div>
</div>

    
<?php include APPPATH.'views/includes/footer.php';?>  
      
