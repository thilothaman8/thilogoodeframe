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
            <li class="breadcrumb-item active" aria-current="page">COD management</li>
			<li class="breadcrumb-item active" aria-current="page">Pending COD Shipment</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Pending COD Shipment</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Pending COD Shipment</h5>
		</div><br>
		<div class="panel-heading">
            
            Confirmed:&nbsp; <a class="btn btn-primary" style="background-color:green;"></a>
            Confirm:&nbsp;<a class="btn btn-danger"> </a>
            Not Available:&nbsp;<a class="btn btn-primary" style="background-color:red;"> </a>
        </div><br>
		<div class ="table-responsive">
		<table class="table datatable-show-all table-bordered table-hover datatable-highlight">
        <thead>
		<form method="post" target="" action=""></form>
        <tr>
			<th class="head1" colspan="2">
			<input type="date" name="search_date" placeholder="Date" class="form-control" onfocus="this.value=''" value="" required="required">
			</th>
			 <th class="head1" colspan="2">
			<input type="date" name="search_date1" placeholder="Date" class="form-control" onfocus="this.value=''" value="" required="required">
			</th>
			<th class="head1" colspan="6">
			<button type="submit" class="btn btn-primary" name="excel">Export To Excel  </button> </th>
        </tr>
		
		<tr> 
			<form name="search_form" method="post" target="_blank" action=""></form>
			   <th class="head1" colspan="1">
			<select name="hub" id="hub" class="form-control">
			<option value="">Hub</option> 
			 <option value="Riyadh">Riyadh</option>
			<option value="Jeddah">Jeddah</option>
			 <option value="Dammam">Dammam</option>
			</select>
			</th>        
			<th class="head1" colspan="2">
			<input type="text" name="search_val" placeholder="DRS Unique id" class="form-control" onfocus="this.value=''" value="">
			</th>
			<th class="head1" colspan="2">  
			<select name="desctination_sel" class="form-control" id="desctination_sel">
			<option value="" selected="selected">Select Destination</option><option value="3">Dammam</option><option value="4">Hayel</option><option value="5">Al Hassa </option><option value="6">Madina</option><option value="7">Jeddah</option><option value="8">Makkah</option><option value="9">Taif</option><option value="10">Arar</option><option value="11">Al Khobar</option><option value="12">Bureida</option><option value="13">Hafer Albaten</option><option value="14">Jubail</option><option value="15">Khafji</option><option value="16">Khamis mushit</option><option value="17">Oneza</option><option value="18">Rass</option><option value="19">Skaka</option><option value="20">Tabuk</option><option value="21">Al Qatif</option><option value="22">Jizan</option><option value="23">Abha</option><option value="24">Yanbu</option><option value="25">Badayeh</option><option value="26">Methneb</option><option value="27">Bukeiriah</option><option value="28">Towal</option><option value="29">Samtta</option><option value="30">Ahd Masarha </option><option value="31">Abo Aresh </option><option value="32">Bqiq</option><option value="33">Sebya</option><option value="34">Besh</option><option value="35">Jizan economic city </option><option value="36">Muhayl Aseer</option><option value="37">Muzahmiah</option><option value="38">Quweya </option><option value="39">Durma</option><option value="40">Laith</option><option value="41">Qunfotha</option><option value="42">Bahra</option><option value="43">Thol</option><option value="44">Baha</option><option value="45">Majmah</option><option value="46">Najran</option><option value="47">Besha</option><option value="48">Beljarshi</option><option value="49">Namas</option><option value="50">Dawadmi</option><option value="51">Shaqra</option><option value="52">Zulfi</option><option value="53">Dawmeh Jandal</option><option value="54">Qurayat </option><option value="55">Turiaf</option><option value="56">Abo Ajram</option><option value="57">Deba</option><option value="58">Taym</option><option value="59">Fulfillment warehouse</option><option value="60">Rafaha</option><option value="61">Sharora</option><option value="62">Wadi Al-Dawaser</option><option value="63">Al aflaj</option><option value="64">Dubai</option><option value="29663">Riyadh</option><option value="29664">Al Kharj</option><option value="29665">Dhahran</option><option value="29666">Seihat</option><option value="29667">Fanateer</option><option value="29668">Oyaynah</option><option value="29669">Daelim</option><option value="29670">Diriyah</option><option value="29671">Shraiee</option><option value="29672">Al Hofuf</option><option value="29673">Al Jubail</option><option value="29674">Ras Tanura</option><option value="29675">Taroot</option><option value="29676">Ras Al Kheir</option><option value="29677">Qariya Al Olaya</option><option value="29678">Qaysoomah</option><option value="29679">Al Majmaah</option><option value="29680">Al Qassim</option><option value="29681">Buraydah</option><option value="29682">Hafar Al Batin</option><option value="29683">Shaqraa</option><option value="29684">Dereiyeh</option><option value="29686">Mecca</option><option value="29687">Abqaiq</option><option value="29688">Ad Diriyah</option><option value="29689">Afif</option><option value="29690">AhadRafidah</option><option value="29691">Ain Dar</option><option value="29692">Al Bahah</option><option value="29693">Al Dalemya</option><option value="29694">Al Jowf</option><option value="29695">Alghat</option><option value="29696">AlRass</option><option value="29697">Artawiah</option><option value="29698">Aseer</option><option value="29699">Ayn Fuhayd</option><option value="29700">Buqayq</option><option value="29701">Dumah Al Jandal</option><option value="29702">Hail</option><option value="29703">Harad</option><option value="29704">Hareeq</option><option value="29705">Haweyah</option><option value="29706">Hawtat Bani Tamim</option><option value="29707">Horaimla</option><option value="29708">Hotat Sudair</option><option value="29709">Jalajel</option><option value="29710">Othmanyah</option><option value="29711">Qarah</option><option value="29712">Qasab</option><option value="29713">Quweieh</option><option value="29714">Remah</option><option value="29715">Riyadh Al Khabra</option><option value="29716">Rowdat Sodair</option><option value="29717">Rwaydah</option><option value="29718">Safanyah</option><option value="29719">Safwa</option><option value="29720">Sajir</option><option value="29721">Shefa</option><option value="29722">Sulaiyl</option><option value="29723">Tanuma</option><option value="29724">Tarut</option><option value="29725">Thadek</option><option value="29726">Thumair</option><option value="29727">Toraif</option><option value="29728">Udhaliyah</option><option value="29729">Um Aljamajim</option><option value="29730">Uqlat Al Suqur</option><option value="29731">Uyun</option><option value="29732">Wadi El Dwaser</option><option value="29733">Mubaraz</option><option value="29734">Nabiya</option><option value="29735">Batha</option><option value="29736">Awamiah</option><option value="29737">Salwa</option><option value="29738">Anak</option><option value="29740">Badaya</option><option value="29741">Beijing</option><option value="29742">Bishah</option><option value="29743">Guangzhou</option><option value="29744">Hofuf</option><option value="29745">Hong Kong</option><option value="29746">Istanbul</option><option value="29747">Midinhab</option><option value="29748">Mrat</option><option value="29749">Muhayil</option><option value="29750">Mulaija</option><option value="29751">Salbookh</option><option value="29752">Sarar</option><option value="29753">Shanghai</option><option value="29754">Abu Dhabi</option><option value="29755">Nairiyah</option><option value="29756">Rijal Almaa</option><option value="29757">Dhurma</option><option value="29758">Mahd Ad Dhahab</option><option value="29759">Rayn</option><option value="29760">Rabigh</option><option value="29761">Ranyah</option><option value="29762">Al Jumum</option><option value="29766">Al Jafr</option><option value="29767">Al Ruqi</option><option value="29768">At Tuwal</option><option value="29769">Al Dayer</option><option value="29770">Atawlah</option><option value="29771">Bad</option><option value="29772">Badar Hunain</option><option value="29773">Badr</option><option value="29774">Bahrain Causeway</option><option value="29775">Bani Malek</option><option value="29776">Bariq</option><option value="29777">Bellasmar</option><option value="29778">Bijadiyah</option><option value="29779">Dammam Airport</option><option value="29780">Darb</option><option value="29781">Dhahran Al Janoub</option><option value="29782">Dhamad</option><option value="29783">Dilam</option><option value="29784">Dukhnah</option><option value="29785">Farasan</option><option value="29786">Haditha</option><option value="29787">Halit Ammar</option><option value="29788">Hanakiyah</option><option value="29789">Haql</option><option value="29790">Hawtat Sudayr</option><option value="29791">Jadidah Arar</option><option value="29792">Jash</option><option value="29793">Kamil</option><option value="29794">Khabra</option><option value="29795">Khamasin</option><option value="29796">Khayber</option><option value="29797">Khulais</option><option value="29798">Khurmah</option><option value="29799">King Khalid City</option><option value="29800">Majardah</option><option value="29801">Mandaq</option><option value="29802">Masturah</option><option value="29803">Mudhaylif</option><option value="29804">Mukhwah</option><option value="29805">Muneefa</option><option value="29806">Muwayh</option><option value="29807">Nabaniya</option><option value="29808">Nabhaniah</option><option value="29809">Nakeea</option><option value="29810">Nifi</option><option value="29811">Qilwah</option><option value="29812">Rafayaa Al Gimsh</option><option value="29813">Riyadh Airport</option><option value="29814">Rumah</option><option value="29815">Saira</option><option value="29816">Samtah</option><option value="29817">Sapt Al Alaya</option><option value="29818">Sarat Abida</option><option value="29819">Sayirah</option><option value="29820">Sayl Al Kabir</option><option value="29821">Shaibah</option><option value="29822">Shedgum</option><option value="29823">Shuqayq</option><option value="29824">Tabarjal</option><option value="29825">Tanajib</option><option value="29826">Tarib</option><option value="29827">Tathlith</option><option value="29828">Turbah</option><option value="29829">Ula</option><option value="29830">Uthmaniyah</option><option value="29831">Uyun Al Jiwa</option><option value="29832">Wadi Bin Hashbal</option><option value="29833">Wajh</option><option value="29834">Duba</option><option value="29835">Al Dayer</option><option value="29836">Samtah</option><option value="29837">Ula</option><option value="29838">Qunfotha</option><option value="29839">Qunfudhah</option><option value="29840">Mudhaylif</option><option value="29841">Majardah</option><option value="29842">bellasmar</option><option value="29843">Mukhwah</option><option value="29844">Al Birk</option></select></th>

			<th class="head1" colspan="1">
			<input type="date" name="search_date" placeholder="Date" class="form-control" onfocus="this.value=''" value="">
			</th>
			
			
			<th class="head1" colspan="1">
			<input type="date" name="search_date1" placeholder="Date" class="form-control" onfocus="this.value=''" value="">
			</th>
			
			<th>
			<input type="submit" name="Submit" class="btn btn-primary" value="Search">        </th>
		   <th>
			<button type="submit" class="btn btn-primary" name="print">Print  <i class="icon-arrow-right14 position-right"></i></button> </th>
        </tr> 
       </thead>
	   </table>
	   
	   
	   <table class="table datatable-show-all table-bordered table-hover datatable-highlight">
		   <thead>
                <tr>
					<th>#</th>
					<th>Uniqueid</th><th> 
                    <a href="">
					Date
					<img src="" style="float:right;">
					</a>
					</th>
					<th>COD Collected By</th>
					<th>Driver</th>
					<th>Supplier</th>
					<th>Driver Code</th>
					<th>POD</th>
					<th>NP</th>
					<th>RTW</th>
					<th>Total Ship</th>
					<th>COD Amt</th> 
                    <th>Action</th>
				</tr>
            </thead>
			<tbody>
			    <tr>
					<td>1</td>
					<td><img src="data:image/jpeg;base64,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"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QMKG1X</td>
					<td>17- 08 -2019</td>
					<td>admin</td>
					<td>FAHAD MUBARAK</td>
					<td></td>
					<td>RUH-233</td>
					<td><a class="btn btn-success btn-xs" style="font-size:15px;" href="" target="_blank">
					3</a></td>
                    <td><a class="btn btn-warning btn-xs" style="font-size:15px;" href="" target="_blank">
					0</a></td>
                    <td><a class="btn btn-danger btn-xs" style="font-size:15px;" href="" target="_blank">
					7</a></td>
					<td><a class="btn btn-primary btn-xs" style="font-size:15px;" href="" target="_blank">10
				    </a></td>
                    <td><span class="btn btn-primary btn-xs" style="font-size:15px;">1115.00
					</span></td>
                    <td class="text-center">
					 <a class="btn btn-danger btn-xs" style="background-color:red;">Not Available</a>
                    </td>
				</tr>
				<tr>
					<td>2</td>
					<td><img src="data:image/jpeg;base64,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"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  HAIL2I</td>
					<td>17- 08 -2019</td>
					<td>Ravan</td>
					<td>FAHAD MUBARAK</td>
					<td></td>
					<td>RUH-233</td>
					<td><a class="btn btn-success btn-xs" style="font-size:15px;" href="" target="_blank">
					3</a></td>
                    <td><a class="btn btn-warning btn-xs" style="font-size:15px;" href="" target="_blank">
					0</a></td>
                    <td><a class="btn btn-danger btn-xs" style="font-size:15px;" href="" target="_blank">
					7</a></td>
					<td><a class="btn btn-primary btn-xs" style="font-size:15px;" href="" target="_blank">10
				    </a></td>
                    <td><span class="btn btn-primary btn-xs" style="font-size:15px;">1115.00
					</span></td>
                    <td class="text-center">
					 <a class="btn btn-danger btn-xs" style="background-color:red;">Not Available</a>
                    </td>
				</tr>
				<tr>
					<td>3</td>
					<td><img src="data:image/jpeg;base64,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"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HX52QF</td>
					<td>17- 08 -2019</td>
					<td>Ram</td>
					<td>FAHAD MUBARAK</td>
					<td></td>
					<td>RUH-233</td>
					<td><a class="btn btn-success btn-xs" style="font-size:15px;" href="" target="_blank">
					3</a></td>
                    <td><a class="btn btn-warning btn-xs" style="font-size:15px;" href="" target="_blank">
					0</a></td>
                    <td><a class="btn btn-danger btn-xs" style="font-size:15px;" href="" target="_blank">
					7</a></td>
					<td><a class="btn btn-primary btn-xs" style="font-size:15px;" href="" target="_blank">10
				    </a></td>
                    <td><span class="btn btn-primary btn-xs" style="font-size:15px;">1115.00
					</span></td>
                    <td class="text-center">
					 <a class="btn btn-danger btn-xs" style="background-color:red;">Not Available</a>
                    </td>
				</tr>
				<tr>
					<td>4</td>
					<td><img src="data:image/jpeg;base64,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"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CNSQZQ</td>
					<td>17- 08 -2019</td>
					<td>admin</td>
					<td>Jagdish</td>
					<td></td>
					<td>RUH-233</td>
					<td><a class="btn btn-success btn-xs" style="font-size:15px;" href="" target="_blank">
					3</a></td>
                    <td><a class="btn btn-warning btn-xs" style="font-size:15px;" href="" target="_blank">
					0</a></td>
                    <td><a class="btn btn-danger btn-xs" style="font-size:15px;" href="" target="_blank">
					7</a></td>
					<td><a class="btn btn-primary btn-xs" style="font-size:15px;" href="" target="_blank">10
				    </a></td>
                    <td><span class="btn btn-primary btn-xs" style="font-size:15px;">1115.00
					</span></td>
                    <td class="text-center">
					 <a class="btn btn-danger btn-xs" style="background-color:red;">Not Available</a>
                    </td>
				</tr>
				<tr>
					<td>5</td>
					<td><img src="data:image/jpeg;base64,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"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  F6IQZD</td>
					<td>17- 08 -2019</td>
					<td>Karthik</td>
					<td>FAHAD MUBARAK</td>
					<td></td>
					<td>RUH-233</td>
					<td><a class="btn btn-success btn-xs" style="font-size:15px;" href="" target="_blank">
					3</a></td>
                    <td><a class="btn btn-warning btn-xs" style="font-size:15px;" href="" target="_blank">
					0</a></td>
                    <td><a class="btn btn-danger btn-xs" style="font-size:15px;" href="" target="_blank">
					7</a></td>
					<td><a class="btn btn-primary btn-xs" style="font-size:15px;" href="" target="_blank">10
				    </a></td>
                    <td><span class="btn btn-primary btn-xs" style="font-size:15px;">1115.00
					</span></td>
                    <td class="text-center">
					 <a class="btn btn-danger btn-xs" style="background-color:red;">Not Available</a>
                    </td>
				</tr>
				<tr>
					<td>6</td>
					<td><img src="data:image/jpeg;base64,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"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7QACG8</td>
					<td>17- 08 -2019</td>
					<td>Thilothaman</td>
					<td>FAHAD MUBARAK</td>
					<td></td>
					<td>RUH-233</td>
					<td><a class="btn btn-success btn-xs" style="font-size:15px;" href="" target="_blank">
					3</a></td>
                    <td><a class="btn btn-warning btn-xs" style="font-size:15px;" href="" target="_blank">
					0</a></td>
                    <td><a class="btn btn-danger btn-xs" style="font-size:15px;" href="" target="_blank">
					7</a></td>
					<td><a class="btn btn-primary btn-xs" style="font-size:15px;" href="" target="_blank">10
				    </a></td>
                    <td><span class="btn btn-primary btn-xs" style="font-size:15px;">1115.00
					</span></td>
                    <td class="text-center">
					 <a class="btn btn-danger btn-xs" style="background-color:red;">Not Available</a>
                    </td>
				</tr>
				<tr>
					<td>7</td>
					<td><img src="data:image/jpeg;base64,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"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DAQAPL</td>
					<td>17- 08 -2019</td>
					<td>Deepak</td>
					<td>FAHAD MUBARAK</td>
					<td></td>
					<td>RUH-233</td>
					<td><a class="btn btn-success btn-xs" style="font-size:15px;" href="" target="_blank">
					3</a></td>
                    <td><a class="btn btn-warning btn-xs" style="font-size:15px;" href="" target="_blank">
					0</a></td>
                    <td><a class="btn btn-danger btn-xs" style="font-size:15px;" href="" target="_blank">
					7</a></td>
					<td><a class="btn btn-primary btn-xs" style="font-size:15px;" href="" target="_blank">10
				    </a></td>
                    <td><span class="btn btn-primary btn-xs" style="font-size:15px;">1115.00
					</span></td>
                    <td class="text-center">
					 <a class="btn btn-danger btn-xs" style="background-color:red;">Not Available</a>
                    </td>
				</tr>
				<tr>
					<td>8</td>
					<td><img src="data:image/jpeg;base64,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"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QMKG1X</td>
					<td>17- 08 -2019</td>
					<td>admin</td>
					<td>FAHAD MUBARAK</td>
					<td></td>
					<td>RUH-233</td>
					<td><a class="btn btn-success btn-xs" style="font-size:15px;" href="" target="_blank">
					3</a></td>
                    <td><a class="btn btn-warning btn-xs" style="font-size:15px;" href="" target="_blank">
					0</a></td>
                    <td><a class="btn btn-danger btn-xs" style="font-size:15px;" href="" target="_blank">
					7</a></td>
					<td><a class="btn btn-primary btn-xs" style="font-size:15px;" href="" target="_blank">10
				    </a></td>
                    <td><span class="btn btn-primary btn-xs" style="font-size:15px;">1115.00
					</span></td>
                    <td class="text-center">
					 <a class="btn btn-danger btn-xs" style="background-color:red;">Not Available</a>
                    </td>
				</tr>
				<tr>
					<td colspan="12" align="center" style="text-align:center;">
					<form name="frm_pagi" action="" method="post">
					<input type="hidden" name="pageval" id="pagevalid" value="">
                    <input type="hidden" name="search_val" placeholder="DRS Unique id./Route code//Driver Name" class="form-control" onfocus="this.value=''" value="">
                    <input type="hidden" name="desctination_sel" placeholder="Date" class="form-control" onfocus="this.value=''" value="">
					<input type="hidden" name="search_date1" placeholder="Date" class="form-control" onfocus="this.value=''" value="">
                    <input type="hidden" name="search_date" placeholder="Date" class="form-control" onfocus="this.value=''" value="">
					<div class="input-group pagination"><div class="input-group-btn"> 
		            <input type="submit" class="btn btn-default" value="‹ Prev">
		            <input type="submit" class="btn btn-primary " value="1 " onclick="return callpage(1);">
		            <input type="submit" class="btn btn-default center" value="2" onclick="return callpage(2);">
		            <input type="submit" class="btn btn-default center" value="3" onclick="return callpage(3);">
		            <input type="submit" class="btn btn-default center" value="4" onclick="return callpage(4);">
		            <input type="submit" class="btn btn-default center" value="5" onclick="return callpage(5);">
		            ...
		            <input type="submit" class="btn btn-default center" value="109" onclick="return callpage(109);">
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