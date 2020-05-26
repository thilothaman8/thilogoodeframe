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
            <li class="breadcrumb-item active" aria-current="page">Tickets</li>
			<li class="breadcrumb-item active" aria-current="page"> Show Ticket</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span> Show Ticket</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title"> Show Ticket</h5>
		</div><br>
		<div class="table-responsive">
            <table class="table table-hover mb-0">
			<thead>
                <tr>
                
        		<th colspan="4">
            <input type="text" class="form-control" name="search_val" value="" placeholder="search awb/ticket" onfocus="this.value=''"></th>
            
            	<th colspan="1">
            <input type="submit" name="Submit" class="btn btn-primary" value="Search" onclick="return Valid_search(document.search_form);"></th>
        
    				
                <th colspan="4"></th>    
                </tr>                 
        </thead>
		<thead>
            <tr>
                <th class="head0">Sr.No.</th>
                <th class="head1">Date</th>
                <th class="head0">AWB No./Ref. No.</th>
                <th class="head1">Name</th>
                <th class="head0">Phone</th>
                <th class="head1">Email</th>
                <th class="head0">Subject</th>
                 <th class="head0">Ticket No.</th>
                <th class="head1">Status</th>
                <th class="head0">Action</th>
            </tr>
        </thead>
		    <tbody>
			    <tr> 
                <td>1</td>
                <td>Nov  5, 2019</td>
                <td> <a href="javascript:void(0);" data-toggle="modal" data-target="#modal_theme_primary1">TAM7618957057</a> 
                </td>
                <td>Renjie</td>
                <td>8527672070</td>
                <td>x@fastcoo.com</td>
                <td> Billing payment</td>
                <td> 152687</td>
                <td>Open</td>
                 <td>
			     <div class="btn-group">
                <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#"><i class="fa fa-share "></i>&nbsp;Send Email</a>
				<a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>
				<a class="dropdown-item" href="#"><i class="fa fa-reply"></i>&nbsp;Reply</a>
                </div>
                </div>
            </td>
            </tr>
			 <tr> 
                <td>2</td>
                <td>Sep 2, 2019</td>
                <td> <a href="javascript:void(0);" data-toggle="modal" data-target="#modal_theme_primary1">TAM8946216970</a> 
                </td>
                <td>jagdish</td>
                <td>9876543210</td>
                <td>jagdish@gmail.com</td>
                <td>Pickup/delivery/personal issue</td>
                <td>917563</td>
                <td>Open</td>
                 <td>
			     <div class="btn-group">
                <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#"><i class="fa fa-share "></i>&nbsp;Send Email</a>
				<a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>
				<a class="dropdown-item" href="#"><i class="fa fa-reply"></i>&nbsp;Reply</a>
                </div>
                </div>
            </td>
            </tr>
                 <tr> 
                <td>3</td>
                <td>Aug 17, 2019</td>
                <td> <a href="javascript:void(0);" data-toggle="modal" data-target="#modal_theme_primary1">TAM8744340550</a> 
                </td>
                <td>Dubov Trade FZE</td>
                <td>0523971980</td>
                <td>korzinkinazx@gmail.com</td>
                <td>Pickup/delivery/personal issue</td>
                <td>914327</td>
                <td>Open</td>
                 <td>
			     <div class="btn-group">
                <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#"><i class="fa fa-share "></i>&nbsp;Send Email</a>
				<a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>
				<a class="dropdown-item" href="#"><i class="fa fa-reply"></i>&nbsp;Reply</a>
                </div>
                </div>
            </td>
            </tr>
			 <tr> 
                <td>4</td>
                <td>Aug 17, 2019</td>
                <td> <a href="javascript:void(0);" data-toggle="modal" data-target="#modal_theme_primary1">TAM2417685627</a> 
                </td>
                <td>مؤسسه محمد معزي الرحيلي للتسويق اللكتروني</td>
                <td>0580736502</td>
                <td>a.katayfji@gmail.com</td>
                <td>Pickup/delivery/personal issue</td>
                <td>732961	</td>
                <td>Resolved</td>
                 <td>
			     <div class="btn-group">
                <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#"><i class="fa fa-share "></i>&nbsp;Send Email</a>
				<a class="dropdown-item" href="#"><i class="fa fa-trash-o"></i>&nbsp;Delete</a>
				<a class="dropdown-item" href="#"><i class="fa fa-reply"></i>&nbsp;Reply</a>
                </div>
                </div>
            </td>
            </tr>
			<tr>
                <td colspan="9" align="center">
                <form name="frm_pagi" action="" method="post">
                <input type="hidden" name="pageval" id="pagevalid" value="0">
                <div class="input-group pagination"><div class="input-group-btn"> 
                <input type="submit" class="btn btn-default" value="‹ Prev">
                <input type="submit" class="btn btn-primary " value="1 " onclick="return callpage(1);">
                <input type="submit" class="btn btn-default center" value="2" onclick="return callpage(2);">
                <input type="submit" class="btn btn-default center" value="3" onclick="return callpage(3);">
                <input type="submit" class="btn btn-default center" value="4" onclick="return callpage(4);">
                <input type="submit" class="btn btn-default center" value="5" onclick="return callpage(5);">
                ...
                <input type="submit" class="btn btn-default center" value="25" onclick="return callpage(25);">
                <input type="submit" class="btn btn-default center" value="Next ›" onclick="return callpage(2);">
                </div></div>
                </form>
                </td>
            </tr>
			</tbody>
		</table>
		</div>	
</section>		
<?php include APPPATH.'views/includes/footer.php';?>