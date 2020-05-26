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
            <li class="breadcrumb-item active" aria-current="page"> Invoice Management</li>
			<li class="breadcrumb-item active" aria-current="page">New Invoice Management</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>New Invoice Management</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">New Invoice Management</h5>
		</div><br>
		<table class="table datatable-show-all table-bordered table-hover datatable-highlight"> 
       <form name="search_form" method="post" action="https://tamco.fast-option.com/system145.php?c=payment&amp;f=newinvoicemanagement"></form>
	   <thead>
		<tr>
			<th colspan="4"><input type="text" class="form-control" name="search_val" value="" placeholder="Enter a Unique id or enter name or enter email or enter mobile number" onfocus="this.value=''"></th>
			<th colspan="1">
				<span class="input-group-btn">
				<input type="submit" name="Submit" class="btn btn-primary" value="Search" onclick="return Valid_search(document.search_form);">
			</span> 
		</th>
			<th></th>
		    
		</tr>                 
        <form action="" method="post"></form>
		</thead><thead>
            <tr>
				<th>S.no</th>
				<th>UID Account Number</th>
				<th>Company name</th>
				<th>Email</th>
				<th>Monthly/Weekly Invoice</th>
			</tr>
        </thead>
        <tbody>
        							<tr>
					<td>1</td>
					<td>7591624</td>
					<td>gsrhospital</td>
					<td>deepakkumar201185@gamail.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
					
				</tr>
							<tr>
					<td>2</td>
					<td>6258347</td>
					<td>Fastcoo</td>
					<td>nadeem@fastcoo.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
					
				</tr>
							<tr>
					<td>3</td>
					<td>8752364</td>
					<td>fastcoo</td>
					<td>jagdish@gmail.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>4</td>
					<td>1238695</td>
					<td>Fastcoo</td>
					<td>demo@fastcoo.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>5</td>
					<td>5681742</td>
					<td>Boutiquey</td>
					<td>ibrahim@boutiquey.net</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>6</td>
					<td>2534986</td>
					<td>boutiqaat</td>
					<td>boutiqaat@test.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>7</td>
					<td>8523946</td>
					<td>Test TAM Express</td>
					<td>ovais@tamex.co</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>8</td>
					<td>5126384</td>
					<td>Al Sultana Rayda </td>
					<td>slt.mf056@gmail.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>9</td>
					<td>7145236</td>
					<td>MATJER ROSH</td>
					<td>wmzaa@hotmail.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>10</td>
					<td>1872364</td>
					<td>SIAFA INTERNATIONAL MFG.CO</td>
					<td>slaman@siafadates.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>11</td>
					<td>1389572</td>
					<td>My Land General Trading LLC</td>
					<td>adam@mylandtrading.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>12</td>
					<td>2453897</td>
					<td>Saqoor Al Royah</td>
					<td>Hussaini@saqoor.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>13</td>
					<td>2718354</td>
					<td>Kabayan Shopper</td>
					<td>kabayaanksa@gmail.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>14</td>
					<td>6394217</td>
					<td>Ladoun.com</td>
					<td>info@Alandalus.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>15</td>
					<td>6258471</td>
					<td>lamsatj</td>
					<td>info@lamsatj.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>16</td>
					<td>4652179</td>
					<td>Sky Express</td>
					<td>rehan@skyexpress.ae</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>17</td>
					<td>1265849</td>
					<td>شركة بي ون BEONE COMPANY</td>
					<td>naeem-king@kingsouq.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>18</td>
					<td>9234715</td>
					<td>Rabel Xpress</td>
					<td>Waleed@rabelxpress.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>19</td>
					<td>2384597</td>
					<td>Online Shopping KSA INT</td>
					<td>Lidia.strelchyk@gmail.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>20</td>
					<td>3675914</td>
					<td>Ajoul Company</td>
					<td>n.jazzar@ajoul.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>21</td>
					<td>2456938</td>
					<td>Zajil Express Company</td>
					<td>info@zajilit.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>22</td>
					<td>6783491</td>
					<td>King Souq FXF</td>
					<td>chusman01@gmail.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>23</td>
					<td>4931568</td>
					<td>Arabian Oud</td>
					<td>aelsaid@arabianoud.com.sa</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>24</td>
					<td>5796138</td>
					<td>Feesheh</td>
					<td>maha@feesheh.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
				</tr>
							<tr>
					<td>25</td>
					<td>4235196</td>
					<td>E-GATE ONLINE SHOPPING</td>
					<td>egatedubai@gmail.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
					
				</tr>
							<tr>
					<td>26</td>
					<td>2463798</td>
					<td>Shopify</td>
					<td>x@fastcoo.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
					
				</tr>
							<tr>
					<td>27</td>
					<td>2496715</td>
					<td>arasouq</td>
					<td>arasouq@gmail.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
					
				</tr>
							<tr>
					<td>28</td>
					<td>5367914</td>
					<td>Ashyae</td>
					<td>Ship.ashyae@gmail.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
					
				</tr>
							<tr>
					<td>29</td>
					<td>2395641</td>
					<td>King Souq</td>
					<td>chusman01@gmail.com</td>
					<td>  <a href="" class="btn btn-success btn-xs" title="Monthly Invoice" "="" data-toggle="tooltip" data-original-title="Monthly Invoice">Monthly </a> &nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger btn-xs" title="Weekly invoice" "="" data-toggle="tooltip" data-original-title="Weekly Invoice">Weekly</a></td>
					
				</tr>
						
				<tr>
		<td colspan="8" align="center">
		
						<input type="hidden" name="pageval" id="pagevalid" value="0">
						
		
		</td>
	
		</tr>
        </tbody>
	</table>
    </section>		
<?php include APPPATH.'views/includes/footer.php';?>