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
            <li class="breadcrumb-item active" aria-current="page">Product Type</li>
			<li class="breadcrumb-item active" aria-current="page">Edit Product</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Edit Product Type</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<h5 class="hk-sec-title">Edit Product Type</h5><br>
	<div class="form-group">
                <label>Product Type Name</label>
                <span id="alert_package_title_info" class="alert"></span>
                <input type="text" class="form-control" name="package_title" id="package_title" value="">
                </div>
				<div class="contenttitle2">
                <h5>Weight Range Setup</h5>
                </div>
				<div><div class="form-group">
                <label>&nbsp;</label>
                <table class="table table-striped table-bordered table-hover">
                             
                <thead>
                    <tr> 
                    	<th width="10%">Sr.No</th>
                        <th>Start Range In Kg</th>
                        <th>  End Range In Kg</th>
                        <!--  <th style="border:solid 1px #000;" >End Range</th>-->
					</tr>
                </thead>
                
                <tbody>
                                <tr>
                    <td> <strong>#1</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_1" id="start_range_1" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_1" id="end_range_1" value="15"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#2</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_2" id="start_range_2" value="15.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_2" id="end_range_2" value="25"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#3</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_3" id="start_range_3" value="25.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_3" id="end_range_3" value="FLAT"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#4</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_4" id="start_range_4" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_4" id="end_range_4" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#5</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_5" id="start_range_5" value="10.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_5" id="end_range_5" value="20"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#6</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_6" id="start_range_6" value="20"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_6" id="end_range_6" value="FLAT"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#7</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_7" id="start_range_7" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_7" id="end_range_7" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#8</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_8" id="start_range_8" value="10.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_8" id="end_range_8" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#9</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_9" id="start_range_9" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_9" id="end_range_9" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#10</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_10" id="start_range_10" value="10.01"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_10" id="end_range_10" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#11</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_11" id="start_range_11" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_11" id="end_range_11" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#12</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_12" id="start_range_12" value="10.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_12" id="end_range_12" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#13</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_13" id="start_range_13" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_13" id="end_range_13" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#14</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_14" id="start_range_14" value="10"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_14" id="end_range_14" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#15</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_15" id="start_range_15" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_15" id="end_range_15" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#16</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_16" id="start_range_16" value="10.01"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_16" id="end_range_16" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#17</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_17" id="start_range_17" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_17" id="end_range_17" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#18</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_18" id="start_range_18" value="10.01"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_18" id="end_range_18" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#19</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_19" id="start_range_19" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_19" id="end_range_19" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#20</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_20" id="start_range_20" value="10.01"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_20" id="end_range_20" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#21</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_21" id="start_range_21" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_21" id="end_range_21" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#22</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_22" id="start_range_22" value="10.01"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_22" id="end_range_22" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#23</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_23" id="start_range_23" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_23" id="end_range_23" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#24</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_24" id="start_range_24" value="10.01"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_24" id="end_range_24" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#25</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_25" id="start_range_25" value="0"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_25" id="end_range_25" value="50"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#26</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_26" id="start_range_26" value="50"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_26" id="end_range_26" value="100"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#27</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_27" id="start_range_27" value="100"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_27" id="end_range_27" value="FLAT"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#28</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_28" id="start_range_28" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_28" id="end_range_28" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#29</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_29" id="start_range_29" value="10.01"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_29" id="end_range_29" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#30</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_30" id="start_range_30" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_30" id="end_range_30" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#31</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_31" id="start_range_31" value="10.01"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_31" id="end_range_31" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#32</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_32" id="start_range_32" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_32" id="end_range_32" value="15"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#33</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_33" id="start_range_33" value="15.01"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_33" id="end_range_33" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#34</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_34" id="start_range_34" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_34" id="end_range_34" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#35</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_35" id="start_range_35" value="10.01"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_35" id="end_range_35" value="FLAT"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#36</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_36" id="start_range_36" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_36" id="end_range_36" value="5"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#37</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_37" id="start_range_37" value="5"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_37" id="end_range_37" value="FLAT"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#38</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_38" id="start_range_38" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_38" id="end_range_38" value="15"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#39</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_39" id="start_range_39" value="15.01"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_39" id="end_range_39" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#40</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_40" id="start_range_40" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_40" id="end_range_40" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#41</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_41" id="start_range_41" value="10.01"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_41" id="end_range_41" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#42</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_42" id="start_range_42" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_42" id="end_range_42" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#43</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_43" id="start_range_43" value="10.01"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_43" id="end_range_43" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#44</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_44" id="start_range_44" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_44" id="end_range_44" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#45</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_45" id="start_range_45" value="10.01"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_45" id="end_range_45" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#46</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_46" id="start_range_46" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_46" id="end_range_46" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#47</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_47" id="start_range_47" value="10.01"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_47" id="end_range_47" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#48</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_48" id="start_range_48" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_48" id="end_range_48" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#49</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_49" id="start_range_49" value="10.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_49" id="end_range_49" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#50</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_50" id="start_range_50" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_50" id="end_range_50" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#51</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_51" id="start_range_51" value="10.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_51" id="end_range_51" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#52</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_52" id="start_range_52" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_52" id="end_range_52" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#53</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_53" id="start_range_53" value="10.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_53" id="end_range_53" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#54</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_54" id="start_range_54" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_54" id="end_range_54" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#55</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_55" id="start_range_55" value="10.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_55" id="end_range_55" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#56</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_56" id="start_range_56" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_56" id="end_range_56" value="10.00"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#57</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_57" id="start_range_57" value="10.01"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_57" id="end_range_57" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#58</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_58" id="start_range_58" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_58" id="end_range_58" value="10.00"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#59</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_59" id="start_range_59" value="10.01"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_59" id="end_range_59" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#60</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_60" id="start_range_60" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_60" id="end_range_60" value="10.00"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#61</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_61" id="start_range_61" value="10.01"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_61" id="end_range_61" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#62</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_62" id="start_range_62" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_62" id="end_range_62" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#63</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_63" id="start_range_63" value="10.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_63" id="end_range_63" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#64</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_64" id="start_range_64" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_64" id="end_range_64" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#65</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_65" id="start_range_65" value="10"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_65" id="end_range_65" value="20"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#66</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_66" id="start_range_66" value="FLAT"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_66" id="end_range_66" value=""></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#67</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_67" id="start_range_67" value="0.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_67" id="end_range_67" value="10"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#68</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_68" id="start_range_68" value="10"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_68" id="end_range_68" value="FLAT"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#69</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_69" id="start_range_69" value="0"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_69" id="end_range_69" value="5"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#70</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_70" id="start_range_70" value="5"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_70" id="end_range_70" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#71</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_71" id="start_range_71" value="0"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_71" id="end_range_71" value="4"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#72</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_72" id="start_range_72" value="4.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_72" id="end_range_72" value="8"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#73</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_73" id="start_range_73" value="8.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_73" id="end_range_73" value="20"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#74</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_74" id="start_range_74" value="0"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_74" id="end_range_74" value="5"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#75</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_75" id="start_range_75" value="5"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_75" id="end_range_75" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#76</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_76" id="start_range_76" value="0"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_76" id="end_range_76" value="5"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#77</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_77" id="start_range_77" value="5"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_77" id="end_range_77" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#78</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_78" id="start_range_78" value="0"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_78" id="end_range_78" value="5"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#79</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_79" id="start_range_79" value="5.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_79" id="end_range_79" value="FLAT"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#80</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_80" id="start_range_80" value="0"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_80" id="end_range_80" value="5"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#81</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_81" id="start_range_81" value="5"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_81" id="end_range_81" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#82</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_82" id="start_range_82" value="0"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_82" id="end_range_82" value="5"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#83</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_83" id="start_range_83" value="5"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_83" id="end_range_83" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#84</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_84" id="start_range_84" value="0"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_84" id="end_range_84" value="5"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#85</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_85" id="start_range_85" value="5"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_85" id="end_range_85" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#86</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_86" id="start_range_86" value="0"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_86" id="end_range_86" value="5"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#87</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_87" id="start_range_87" value="5.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_87" id="end_range_87" value="15"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                <tr>
                    <td> <strong>#88</strong></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="start_range_88" id="start_range_88" value="15.1"></td>
                    <td><input type="text" class="form-control input-lg  input-lg" name="end_range_88" id="end_range_88" value="Flat"></td>
                    <!--<td><input type="text" class="text" name="range_price_1" value="" id="range_price_1"/></td>-->
                </tr> 
                                </tbody>
                                    
               </table>
                </div></div>
				<div class="contenttitle2">
                <h5>Weight Info</h5>
                </div>
				<div class="form-group">
                <label>Maximum Weight (kg)</label>
                <input type="text" name="weight" class="form-control" placeholder="Maximum Weight In kg" id="alert_end_range_info" value="">
                </div>
				<div class="contenttitle2">    
                <h5>Diamention Setup&nbsp;&nbsp;</h5>
                </div>
				<div class="form-group">
                <label>Do You want to Set Diamention</label>
                Yes <input type="radio" name="dia_check" value="Y" id="dia_check" checked="checked" onclick="show_dia();">
                No <input type="radio" name="dia_check" value="N" id="dia_check" onclick="show_dia();">
                </div>
				<div class="form-group">
                <label>Maximum Heigh}</label>
                <span id="alert_end_range_info" class="alert"></span>
                <input type="text" name="height" class="form-control" placeholder="Maximum Height in Cm" value="">
                </div>
				<div class="form-group">
                <label>Maximum Width</label>
                <span id="alert_end_range_info" class="alert"></span>
                <input type="text" name="width" class="form-control" placeholder="Maximum Width in Cm" value="">
                </div>
				<div class="form-group">
                <label>Maximum Length</label>
                <span id="alert_end_range_info" class="alert"></span>
                <input type="text" name="girth" class="form-control" placeholder="Maximum Length in Cm" value="">
                </div>
				<div class="contenttitle2">
                <h5>Service Type Info</h5>
                </div><br>
				<div class="form-group">
                <label>Select Type</label>
                <span id="alert_end_range_info" class="alert"></span>
                <input type="checkbox" name="DO" value="DO" checked="checked" onclick="showCollectionsAreMadeInputBoxForDeliveryService(this.value);">&nbsp;Local Drop Off
                
                &nbsp;<input type="checkbox" name="CS" id="collection_service" value="CS" onclick="select_pickupcharge();">&nbsp;Collection Service
                
                 
                 
                </div>
				<div class="form-group">
                <label>Pickup Charge</label>
                <span id="alert_end_range_info" class="alert"></span>
                <input type="text" name="pickupcharge" class="form-control" value="">
                </div>
				<div class="form-group">
                <label>Time</label><br>
                <strong>From</strong> 
                <input type="time" class="form-control" name="from_time" value=" 09:01 ">
                	
                <strong>To</strong>
                <input type="time" class="form-control" name="to_time" value="">		
                </div>
				<div class="contenttitle2">
                <h5>Info</h5>
                </div>
				<div class="form-group">
                <label></label>
                <span id="alert_end_range_info" class="alert"></span>
                <input type="radio" name="printer_required" value="Y" checked="checked">&nbsp;&nbsp;Yes&nbsp;
                   &nbsp; <input type="radio" name="printer_required" value="N">&nbsp;&nbsp;No
                </div>
				<div class="contenttitle2">
                <h5>More Info</h5>
                </div>
				<div class="form-group">
                <label>Compensation</label>
                <span id="alert_end_range_info" class="alert"></span>
                <textarea name="compensation_details" class="form-control"> </textarea>
                </div>
				<div class="form-group">
                <label>Description</label>
                <span id="alert_end_range_info" class="alert"></span>
                <textarea id="editor1" name="description" class="form-control"></textarea>
                <script> CKEDITOR.replace( 'editor1' );</script>
                </div>
				<p align="center">
                <input name="id" type="hidden" value="">
                                <input name="submit" type="submit" class="btn btn-primary" value="Submit" onclick="return validproducttype(document.add_product_type);">
                </p>
    </section> 	
<?php include APPPATH.'views/includes/footer.php';?>  
      
