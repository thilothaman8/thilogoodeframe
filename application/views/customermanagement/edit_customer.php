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
            <li class="breadcrumb-item active" aria-current="page">Customer Management</li>
			<li class="breadcrumb-item active" aria-current="page">Show Customer</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Show Customer</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Show Customer</h5>
		</div><br>
		<section class="hk-sec-wrapper">
		<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">

        			<form class="stdform" method="post" action="" name="add_customer" enctype="multipart/form-data">
                    
                    <div class="form-group">
                    <p style="display:none;">
                    <label>Account no.</label>
                    <input type="text" name="uniqueid" readonly="1" class="form-control" value="7591624">
                    </p></div>
                        
                    <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="deepak">
                                        </div>
                    
                    <div class="form-group">
                    <p style=" display:none;">
                    <label>User Name</label> <span id="alert_user_name"></span>
                    <input type="text" class="form-control" name="user_name" value="" readonly="readonly">
                    </p></div>
                       
                    <div class="form-group">
                        <label>Company</label>
                       <input type="text" class="form-control" id="company" name="company" value="gsrhospital">
                                           </div>
                        
					                     
                    <div class="form-group" style="display:none">
                    <label>Zip Code</label>
                    <input type="text" class="form-control" id="sender_zip" name="pincode" value="" onblur="stateandcityadmin_user(this.value)">
                    <input type="hidden" name="city_id" class="form-control" id="city_send_id">
                    </div>  
                     
                    <div class="form-group">
                    <label>City</label><span id="city"></span>
                    <select class="form-control" type="text" name="city" id="city">  <option value="">Select city</option><option value="29741">Beijing</option><option value="29743">Guangzhou</option><option value="29753">Shanghai</option><option value="29745">Hong Kong</option><option value="3">Dammam</option><option value="4">Hayel</option><option value="5">Al Hassa </option><option value="6">Madina</option><option value="7">Jeddah</option><option value="8">Makkah</option><option value="9">Taif</option><option value="10">Arar</option><option value="11">Al Khobar</option><option value="12">Bureida</option><option value="13">Hafer Albaten</option><option value="14">Jubail</option><option value="15">Khafji</option><option value="16">Khamis mushit</option><option value="17">Oneza</option><option value="18">Rass</option><option value="19">Skaka</option><option value="20">Tabuk</option><option value="21">Al Qatif</option><option value="22">Jizan</option><option value="23">Abha</option><option value="24">Yanbu</option><option value="25">Badayeh</option><option value="26">Methneb</option><option value="27">Bukeiriah</option><option value="28">Towal</option><option value="29">Samtta</option><option value="30">Ahd Masarha </option><option value="31">Abo Aresh </option><option value="32">Bqiq</option><option value="33">Sebya</option><option value="34">Besh</option><option value="35">Jizan economic city </option><option value="36">Muhayl Aseer</option><option value="37">Muzahmiah</option><option value="38">Quweya </option><option value="39">Durma</option><option value="40">Laith</option><option value="41">Qunfotha</option><option value="42">Bahra</option><option value="43">Thol</option><option value="44">Baha</option><option value="45">Majmah</option><option value="46">Najran</option><option value="47">Besha</option><option value="48">Beljarshi</option><option value="49">Namas</option><option value="50">Dawadmi</option><option value="51">Shaqra</option><option value="52">Zulfi</option><option value="53">Dawmeh Jandal</option><option value="54">Qurayat </option><option value="55">Turiaf</option><option value="56">Abo Ajram</option><option value="57">Deba</option><option value="58">Taym</option><option value="59">Fulfillment warehouse</option><option value="60">Rafaha</option><option value="61">Sharora</option><option value="62">Wadi Al-Dawaser</option><option value="63">Al aflaj</option><option value="64">Dubai</option><option value="29663" selected="selected">Riyadh</option><option value="29664">Al Kharj</option><option value="29665">Dhahran</option><option value="29666">Seihat</option><option value="29667">Fanateer</option><option value="29668">Oyaynah</option><option value="29669">Daelim</option><option value="29670">Diriyah</option><option value="29671">Shraiee</option><option value="29672">Al Hofuf</option><option value="29673">Al Jubail</option><option value="29674">Ras Tanura</option><option value="29675">Taroot</option><option value="29676">Ras Al Kheir</option><option value="29677">Qariya Al Olaya</option><option value="29678">Qaysoomah</option><option value="29679">Al Majmaah</option><option value="29680">Al Qassim</option><option value="29681">Buraydah</option><option value="29682">Hafar Al Batin</option><option value="29683">Shaqraa</option><option value="29684">Dereiyeh</option><option value="29686">Mecca</option><option value="29687">Abqaiq</option><option value="29688">Ad Diriyah</option><option value="29689">Afif</option><option value="29690">AhadRafidah</option><option value="29691">Ain Dar</option><option value="29692">Al Bahah</option><option value="29693">Al Dalemya</option><option value="29694">Al Jowf</option><option value="29695">Alghat</option><option value="29696">AlRass</option><option value="29697">Artawiah</option><option value="29698">Aseer</option><option value="29699">Ayn Fuhayd</option><option value="29700">Buqayq</option><option value="29701">Dumah Al Jandal</option><option value="29702">Hail</option><option value="29703">Harad</option><option value="29704">Hareeq</option><option value="29705">Haweyah</option><option value="29706">Hawtat Bani Tamim</option><option value="29707">Horaimla</option><option value="29708">Hotat Sudair</option><option value="29709">Jalajel</option><option value="29710">Othmanyah</option><option value="29711">Qarah</option><option value="29712">Qasab</option><option value="29713">Quweieh</option><option value="29714">Remah</option><option value="29715">Riyadh Al Khabra</option><option value="29716">Rowdat Sodair</option><option value="29717">Rwaydah</option><option value="29718">Safanyah</option><option value="29719">Safwa</option><option value="29720">Sajir</option><option value="29721">Shefa</option><option value="29722">Sulaiyl</option><option value="29723">Tanuma</option><option value="29724">Tarut</option><option value="29725">Thadek</option><option value="29726">Thumair</option><option value="29727">Toraif</option><option value="29728">Udhaliyah</option><option value="29729">Um Aljamajim</option><option value="29730">Uqlat Al Suqur</option><option value="29731">Uyun</option><option value="29732">Wadi El Dwaser</option><option value="29733">Mubaraz</option><option value="29734">Nabiya</option><option value="29735">Batha</option><option value="29736">Awamiah</option><option value="29737">Salwa</option><option value="29738">Anak</option><option value="29740">Badaya</option><option value="29742">Bishah</option><option value="29744">Hofuf</option><option value="29747">Midinhab</option><option value="29748">Mrat</option><option value="29749">Muhayil</option><option value="29750">Mulaija</option><option value="29751">Salbookh</option><option value="29752">Sarar</option><option value="29755">Nairiyah</option><option value="29756">Rijal Almaa</option><option value="29757">Dhurma</option><option value="29758">Mahd Ad Dhahab</option><option value="29759">Rayn</option><option value="29760">Rabigh</option><option value="29761">Ranyah</option><option value="29762">Al Jumum</option><option value="29834">Duba</option><option value="29835">Al Dayer</option><option value="29836">Samtah</option><option value="29837">Ula</option><option value="29838">Qunfotha</option><option value="29839">Qunfudhah</option><option value="29840">Mudhaylif</option><option value="29841">Majardah</option><option value="29842">bellasmar</option><option value="29843">Mukhwah</option><option value="29844">Al Birk</option><option value="29766">Al Jafr</option><option value="29767">Al Ruqi</option><option value="29768">At Tuwal</option><option value="29769">Al Dayer</option><option value="29770">Atawlah</option><option value="29771">Bad</option><option value="29772">Badar Hunain</option><option value="29773">Badr</option><option value="29774">Bahrain Causeway</option><option value="29775">Bani Malek</option><option value="29776">Bariq</option><option value="29777">Bellasmar</option><option value="29778">Bijadiyah</option><option value="29779">Dammam Airport</option><option value="29780">Darb</option><option value="29781">Dhahran Al Janoub</option><option value="29782">Dhamad</option><option value="29783">Dilam</option><option value="29784">Dukhnah</option><option value="29785">Farasan</option><option value="29786">Haditha</option><option value="29787">Halit Ammar</option><option value="29788">Hanakiyah</option><option value="29789">Haql</option><option value="29790">Hawtat Sudayr</option><option value="29791">Jadidah Arar</option><option value="29792">Jash</option><option value="29793">Kamil</option><option value="29794">Khabra</option><option value="29795">Khamasin</option><option value="29796">Khayber</option><option value="29797">Khulais</option><option value="29798">Khurmah</option><option value="29799">King Khalid City</option><option value="29800">Majardah</option><option value="29801">Mandaq</option><option value="29802">Masturah</option><option value="29803">Mudhaylif</option><option value="29804">Mukhwah</option><option value="29805">Muneefa</option><option value="29806">Muwayh</option><option value="29807">Nabaniya</option><option value="29808">Nabhaniah</option><option value="29809">Nakeea</option><option value="29810">Nifi</option><option value="29811">Qilwah</option><option value="29812">Rafayaa Al Gimsh</option><option value="29813">Riyadh Airport</option><option value="29814">Rumah</option><option value="29815">Saira</option><option value="29816">Samtah</option><option value="29817">Sapt Al Alaya</option><option value="29818">Sarat Abida</option><option value="29819">Sayirah</option><option value="29820">Sayl Al Kabir</option><option value="29821">Shaibah</option><option value="29822">Shedgum</option><option value="29823">Shuqayq</option><option value="29824">Tabarjal</option><option value="29825">Tanajib</option><option value="29826">Tarib</option><option value="29827">Tathlith</option><option value="29828">Turbah</option><option value="29829">Ula</option><option value="29830">Uthmaniyah</option><option value="29831">Uyun Al Jiwa</option><option value="29832">Wadi Bin Hashbal</option><option value="29833">Wajh</option><option value="29746">Istanbul</option><option value="29754">Abu Dhabi</option></select>
                                        </div>
                                                 
                    <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="riyath ">
                                        </div>
                        
                    <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" id="phone" value="7014117671">
                                        </div>
                    
                     <div class="form-group">
                    <label>On Hold Period</label>
                    <input type="text" name="onhold_period" class="form-control" id="onhold_period" value="1">
                                        </div>
                    <div class="form-group">
                    <label>Phone 2</label>
                    <input type="text" name="fax" class="form-control" id="fax" value="">
                                        </div>
                   
                    
                        
                    <div class="form-group"> 
                    <label> Store Link:<span class="bold_alert">*</span></label>
                    <input class="form-control" type="text" name="store_link" id="store_link" value="" placeholder=" Store Link">
                                        </div>
                      
 
                    <div class="form-group">
                    <label>Bank Name</label>
                    <input type="text" class="form-control" name="bank_name" id="bank_name" value="">
                                        </div>   
                        
                    <div class="form-group">
                    <label>Bank Account Number</label>
                    <input type="text" class="form-control" name="account_number" id="account_number" value="0">
                                        </div> 
                        
                    <div class="form-group">
                    <label>Account Manager</label>
                    <input type="text" class="form-control" name="account_manager" id="account_manager" value="">
                                        </div> 
                    
                    <div class="form-group">
                    <label>Manager Email</label>
                    <input type="text" class="form-control" name="managerEmail" id="account_manager" value="admin">
                                        </div> 
						
                    <div class="form-group">
                    <label>Manager Number</label>
                    <input type="text" class="form-control" name="managerMobileNo" id="account_manager" value="">
                                        </div> 
                        
                    <div class="form-group">
                    <label>Iban Number</label>
                    <input type="text" class="form-control" name="iban_number" id="iban_number" value="">
                                        </div>
                        
                     
                    <div class="form-group">
                    <label>Bank Fee:</label>
                    <input type="num" class="form-control" name="bankfee" id="bankfee" value="">
                                        </div>
                        
                    <label> Upload CR (pdf) </label>
                    <div class="row">
                                <div class="col-sm">
                                    <form>
                                        <div class="form-group">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="form-control text-truncate" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                <span class="input-group-append">
														<span class=" btn btn-primary btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
                                                <input type="file" name="...">
                                                </span>
                                                <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    <label> Upload ID (pdf) </label>
                    <div class="row">
                                <div class="col-sm">
                                    <form>
                                        <div class="form-group">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="form-control text-truncate" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                <span class="input-group-append">
														<span class=" btn btn-primary btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
                                                <input type="file" name="...">
                                                </span>
                                                <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    <label> Upload Contract (pdf) </label>
                     <div class="row">
                                <div class="col-sm">
                                    <form>
                                        <div class="form-group">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="form-control text-truncate" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                                <span class="input-group-append">
														<span class=" btn btn-primary btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
                                                <input type="file" name="...">
                                                </span>
                                                <a href="#" class="btn btn-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                    
                    <label> Contract Date </label>
                    <input class="form-control" type="date" name="entrydate" id="entrydate" value="0000-00-00">  
                      <br>
                    <div class="form-group">
						<label> Vat No</label>
						<input class="form-control" type="text" name="vat_no" id="vat_no" value="sghasedh">  
                     </div>
                        
                    <div class="form-group">
                    <strong>C2C Client</strong>&nbsp;&nbsp;<input type="radio" name="VIP_user" value="N">&nbsp;&nbsp;&nbsp;
                    <strong>B2C Client</strong>&nbsp;&nbsp;<input type="radio" name="VIP_user" checked="checked" value="Y">
                                        </div>
                     
                    <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="deepakkumar201185@gamail.com">
                                        </div>    
                     
                    <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="alert_password" value="">                      </div>
                      
                    <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" name="conf_password" id="alert_conf_password" value="">
                                        </div>
                     
					<input name="id" type="hidden" value="65">
                    <button type="submit" class="btn btn-primary" name="submit" value="submit"> Update  </button>
                      
                    </form>
 			
      			</div>
            </div>
		</div>
	</div>
    </section>		
<?php include APPPATH.'views/includes/footer.php';?>