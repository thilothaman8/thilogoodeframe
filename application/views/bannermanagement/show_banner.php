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
            <li class="breadcrumb-item active" aria-current="page">Banner Management</li>
			<li class="breadcrumb-item active" aria-current="page"> Show Banner</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Show Banner</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title"> Show Banner</h5>
		</div><br>
		<table class="table table-striped table-bordered table-hover">
                        <colgroup>
                            <col class="con0">
                            <col class="con1">
                            <col class="con0">
                            <col class="con1">
                            <col class="con0">
                        </colgroup>
                        
                        <thead>
                        	
                            <tr>
                            	<th class="head0" width="10%">Sr.No.</th>
                                <th class="head1" width="30%">Title</th>
                                <th class="head0" width="30%">URL</th>
                                <th class="head1" width="15%">Image</th>
                                <th class="head0" width="10%">Action</th>
                            	
                            </tr>
                        </thead>
                        
                        <tbody>
                      			<tr>
                            
                            	<td>1</td>
								<td>Whatever the type of your cargo,</td>
								<td></td>
								<td><img src="" width="100" height="50" title="."></td>
                                <td class="last" colspan="4">
						        <a href="<?php echo base_url('add_banner'); ?>" class="fa fa-pencil-square-o" title="Edit"></a>
								</td>
                                </tr>
								
						        <tr>
                                <td>2</td>
								<td>Unique in the cargo trucking industry.</td>
								<td></td>
								<td><img src="" width="100" height="50" title="."></td>
                                <td class="last" colspan="4">
						        <a href="<?php echo base_url('add_banner'); ?>" class="fa fa-pencil-square-o" title="Edit"></a>
								</td>
                                </tr>
													
                    
                                <tr>
                    	        <td colspan="8" align="center">
                      
                                <form name="frm_pagi" action="" method="post">
                                <input type="hidden" name="pageval" id="pagevalid" value="0">
                      	
                                </form>
                        
                                </td>
                                </tr>	
                   
                        </tbody>
                    </table>
		</section>
		<?php include APPPATH.'views/includes/footer.php';?>