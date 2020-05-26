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
            <li class="breadcrumb-item active" aria-current="page">Report</li>
			<li class="breadcrumb-item active" aria-current="page"> Sales By Client</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span> Sales By Client</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title"> Sales By Client</h5>
		</div><br>
		<div class="panel-body">
    <section class="hk-sec-wrapper">
    <p style="padding-left:20px;">
    <strong>Here you can export 'Sales by client' data in excle CSV Formte.</strong>
    </p><br>   
    <form class="stdform" method="post" action="" name="add_ship" enctype="multipart/form-data">
    <div id="wiz1step3_2" class="formwiz">  
    <div class="form-group">
    <label>Select Customer</label>
    
    <select name="coustomer_id" class="form-control input-lg  input-lg" onchange="show_rate_list(this.value);">
		<option value="0">Please select</option>
		<option value="1"> fastcoo&nbsp;(8437651)</option>
		<option value="2"> Ibrahim Al-Qurashi Perfume&nbsp;(1593268)</option>
		<option value="7"> Renjie Store&nbsp;(4251379)</option>
		<option value="8"> Kaaf Meem&nbsp;(3571849)</option>
		<option value="9"> Mirsal Exp&nbsp;(2817954)</option>
		<option value="10"> Maia Mart&nbsp;(8631749)</option>
		<option value="11"> Xzong&nbsp;(7596483)</option>
		<option value="12"> Dokkan Afkar&nbsp;(3179652)</option>
		<option value="15"> Khaliji Shop&nbsp;(2317584)</option>
		<option value="16"> SHENZHEN YOKESI SCP CO.,LIMITED&nbsp;(1894352)</option>
		<option value="17"> QPS Store&nbsp;(3927148)</option>
		<option value="30"> GlupShop&nbsp;(8236415)</option>
		<option value="31"> King Souq&nbsp;(2395641)</option>
		<option value="32"> Ashyae&nbsp;(5367914)</option>
		<option value="33"> arasouq&nbsp;(2496715)</option>
		<option value="34"> Shopify&nbsp;(2463798)</option>
		<option value="35"> E-GATE ONLINE SHOPPING&nbsp;(4235196)</option>
		<option value="36"> Feesheh&nbsp;(5796138)</option>
		<option value="37"> Arabian Oud&nbsp;(4931568)</option>
		<option value="38"> King Souq FXF&nbsp;(6783491)</option>
		<option value="39"> Zajil Express Company&nbsp;(2456938)</option>
		<option value="40"> Ajoul Company&nbsp;(3675914)</option>
		<option value="41"> Online Shopping KSA INT&nbsp;(2384597)</option>
    </select>
    </div>
    <button type="submit" class="btn btn-primary" name="clientSubmit" value="Submit">Download Excel</button>
    </div>
    </form>
                </div>
	</section>			
    </section>		
<?php include APPPATH.'views/includes/footer.php';?>