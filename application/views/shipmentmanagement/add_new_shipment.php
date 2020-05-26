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
            <li class="breadcrumb-item active" aria-current="page">Shipment Management</li>
			<li class="breadcrumb-item active" aria-current="page">Add Shipment</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Add Shipment</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<h5 class="hk-sec-title">Add Shipment</h5><br>
	<div class="row">

<div class="col-md-6">
<section class="hk-sec-wrapper">
	<div class="panel panel-default">
        <div class="panel-heading">Date And Time</div><br>
        <div class="panel-body">  
        
             
            
            <div class="col-lg-4">
            <div class="">
            <label>Reference#</label>
            <input type="text" name="booking_id" id="booking_id" class="form-control" value="">
            </div>
            </div><br>
        
            <div class="col-lg-6">
            <div class="">
            <label> Date</label>
            <input type="date" name="pick_date" id="datepicker" class="form-control" value="2019-11-12">
            </div>
            </div><br>
            
            <div class="col-lg-4 col-sm-4">
            <div class="form-group">
            <label> Time</label>
            <input type="time" name="pickup_time" id="pickup_time" class="form-control" value="07:51">
            </div>
            </div>
            
        </div>
	</div>
	</section>
</div>


<div class="col-md-6">
<section class="hk-sec-wrapper">
<div class="panel panel-default">
<div class="panel-heading">Shipment Type</div><br>
<div class="panel-body">

    <div class="col-lg-4 col-sm-4">
        <div class="form-group">
        <label><h5>Product/Type:</h5></label>
        <br>
        <input type="radio" name="nrd" value="KVAIMI">
        Parcel
        </div>
    </div>

    <div class="col-lg-4 col-sm-4">
        <div class="">
        <label><h5> Payment Mode</h5></label>
        <select name="Bookingmode" id="Bookingmode" onchange="select_bookingmode_cod(this.value);" class="form-control ">
       <!-- <option value="CASH" >Paid</option>-->
        <option value="CC">Credit Card</option>
        <option value="COD">COD</option>
        </select>
        </div>
    </div><br>
    
    <span style="display:none;" id="cod_show_id">
        <div class="col-lg-4 col-sm-4">
            <div class="form-group">
            <label><h5> COD To Pay Amount </h5></label>
            <input type="text" name="total_cod_amt" id="total_cod_amt" class="form-control" value="">
            </div>
        </div>
    </span>
    
</div>
</div>
</section>
</div>
</div><br>
<section class="hk-sec-wrapper">
<div class="panel panel-default">

    <div class="panel-heading">Location Info&nbsp;&nbsp;
    <input type="text" name="shippers_ac_no" id="shippers_ac_no_val" onblur="address_book_fill_sender(this.value);" value="" placeholder="Account No." class="form-control" style="width:49%;">
    </div><br>

<div class="panel-body">
<div class="row">

    <div class="col-lg-6 col-sm-6">
	<section class="hk-sec-wrapper">
    <div class="panel panel-default">
    
    <div class="panel-heading">Sender Info </div>
    <div class="panel-body">
    
    <div class="form-group">Name<span class="alert">*</span>
    
    <input type="text" name="sender_name" id="sender_name_val" value="" class="form-control">
    
    <span style="display:none;"> 
    State
    <input type="text" name="sender_state" id="sender_state" class="form-control" value="" readonly="readonly">
    </span>
    
    <div>Country:&nbsp;<span id="sender_country_drop"><select name="sel_country" class="form-control input-lg" id="sel_country" onchange="createCityDropdownByIdAddShip_for_sender(this.value);">
					<option value="" selected="selected">Please Select</option><option value="1">Saudi Arabia</option></select></span>
    <span id="alert_country"></span>
    </div>
    
    
    <div>City:&nbsp;<span id="sender_city_show"><select class="form-control input-lg" name="city_origin" id="city_origin">
					<option value="">Please Select</option><option value="3">Dammam</option><option value="4">Hayel</option><option value="5">Al Hassa </option><option value="6">Madina</option><option value="7">Jeddah</option><option value="8">Makkah</option><option value="9">Taif</option><option value="10">Arar</option><option value="11">Al Khobar</option><option value="12">Bureida</option><option value="13">Hafer Albaten</option><option value="14">Jubail</option><option value="15">Khafji</option><option value="16">Khamis mushit</option><option value="17">Oneza</option><option value="18">Rass</option><option value="19">Skaka</option><option value="20">Tabuk</option><option value="21">Al Qatif</option><option value="22">Jizan</option><option value="23">Abha</option><option value="24">Yanbu</option><option value="25">Badayeh</option><option value="26">Methneb</option><option value="27">Bukeiriah</option><option value="28">Towal</option><option value="29">Samtta</option><option value="30">Ahd Masarha </option><option value="31">Abo Aresh </option><option value="32">Bqiq</option><option value="33">Sebya</option><option value="34">Besh</option><option value="35">Jizan economic city </option><option value="36">Muhayl Aseer</option><option value="37">Muzahmiah</option><option value="38">Quweya </option><option value="39">Durma</option><option value="40">Laith</option><option value="41">Qunfotha</option><option value="42">Bahra</option><option value="43">Thol</option><option value="44">Baha</option><option value="45">Majmah</option><option value="46">Najran</option><option value="47">Besha</option><option value="48">Beljarshi</option><option value="49">Namas</option><option value="50">Dawadmi</option><option value="51">Shaqra</option><option value="52">Zulfi</option><option value="53">Dawmeh Jandal</option><option value="54">Qurayat </option><option value="55">Turiaf</option><option value="56">Abo Ajram</option><option value="57">Deba</option><option value="58">Taym</option><option value="59">Fulfillment warehouse</option><option value="60">Rafaha</option><option value="61">Sharora</option><option value="62">Wadi Al-Dawaser</option><option value="63">Al aflaj</option><option value="64">Dubai</option><option value="29663">Riyadh</option><option value="29664">Al Kharj</option><option value="29665">Dhahran</option><option value="29666">Seihat</option><option value="29667">Fanateer</option><option value="29668">Oyaynah</option><option value="29669">Daelim</option><option value="29670">Diriyah</option><option value="29671">Shraiee</option><option value="29672">Al Hofuf</option><option value="29673">Al Jubail</option><option value="29674">Ras Tanura</option><option value="29675">Taroot</option><option value="29676">Ras Al Kheir</option><option value="29677">Qariya Al Olaya</option><option value="29678">Qaysoomah</option><option value="29679">Al Majmaah</option><option value="29680">Al Qassim</option><option value="29681">Buraydah</option><option value="29682">Hafar Al Batin</option><option value="29683">Shaqraa</option><option value="29684">Dereiyeh</option><option value="29686">Mecca</option><option value="29687">Abqaiq</option><option value="29688">Ad Diriyah</option><option value="29689">Afif</option><option value="29690">AhadRafidah</option><option value="29691">Ain Dar</option><option value="29692">Al Bahah</option><option value="29693">Al Dalemya</option><option value="29694">Al Jowf</option><option value="29695">Alghat</option><option value="29696">AlRass</option><option value="29697">Artawiah</option><option value="29698">Aseer</option><option value="29699">Ayn Fuhayd</option><option value="29700">Buqayq</option><option value="29701">Dumah Al Jandal</option><option value="29702">Hail</option><option value="29703">Harad</option><option value="29704">Hareeq</option><option value="29705">Haweyah</option><option value="29706">Hawtat Bani Tamim</option><option value="29707">Horaimla</option><option value="29708">Hotat Sudair</option><option value="29709">Jalajel</option><option value="29710">Othmanyah</option><option value="29711">Qarah</option><option value="29712">Qasab</option><option value="29713">Quweieh</option><option value="29714">Remah</option><option value="29715">Riyadh Al Khabra</option><option value="29716">Rowdat Sodair</option><option value="29717">Rwaydah</option><option value="29718">Safanyah</option><option value="29719">Safwa</option><option value="29720">Sajir</option><option value="29721">Shefa</option><option value="29722">Sulaiyl</option><option value="29723">Tanuma</option><option value="29724">Tarut</option><option value="29725">Thadek</option><option value="29726">Thumair</option><option value="29727">Toraif</option><option value="29728">Udhaliyah</option><option value="29729">Um Aljamajim</option><option value="29730">Uqlat Al Suqur</option><option value="29731">Uyun</option><option value="29732">Wadi El Dwaser</option><option value="29733">Mubaraz</option><option value="29734">Nabiya</option><option value="29735">Batha</option><option value="29736">Awamiah</option><option value="29737">Salwa</option><option value="29738">Anak</option><option value="29740">Badaya</option><option value="29741">Beijing</option><option value="29742">Bishah</option><option value="29743">Guangzhou</option><option value="29744">Hofuf</option><option value="29745">Hong Kong</option><option value="29746">Istanbul</option><option value="29747">Midinhab</option><option value="29748">Mrat</option><option value="29749">Muhayil</option><option value="29750">Mulaija</option><option value="29751">Salbookh</option><option value="29752">Sarar</option><option value="29753">Shanghai</option><option value="29754">Abu Dhabi</option><option value="29755">Nairiyah</option><option value="29756">Rijal Almaa</option><option value="29757">Dhurma</option><option value="29758">Mahd Ad Dhahab</option><option value="29759">Rayn</option><option value="29760">Rabigh</option><option value="29761">Ranyah</option><option value="29762">Al Jumum</option><option value="29766">Al Jafr</option><option value="29767">Al Ruqi</option><option value="29768">At Tuwal</option><option value="29769">Al Dayer</option><option value="29770">Atawlah</option><option value="29771">Bad</option><option value="29772">Badar Hunain</option><option value="29773">Badr</option><option value="29774">Bahrain Causeway</option><option value="29775">Bani Malek</option><option value="29776">Bariq</option><option value="29777">Bellasmar</option><option value="29778">Bijadiyah</option><option value="29779">Dammam Airport</option><option value="29780">Darb</option><option value="29781">Dhahran Al Janoub</option><option value="29782">Dhamad</option><option value="29783">Dilam</option><option value="29784">Dukhnah</option><option value="29785">Farasan</option><option value="29786">Haditha</option><option value="29787">Halit Ammar</option><option value="29788">Hanakiyah</option><option value="29789">Haql</option><option value="29790">Hawtat Sudayr</option><option value="29791">Jadidah Arar</option><option value="29792">Jash</option><option value="29793">Kamil</option><option value="29794">Khabra</option><option value="29795">Khamasin</option><option value="29796">Khayber</option><option value="29797">Khulais</option><option value="29798">Khurmah</option><option value="29799">King Khalid City</option><option value="29800">Majardah</option><option value="29801">Mandaq</option><option value="29802">Masturah</option><option value="29803">Mudhaylif</option><option value="29804">Mukhwah</option><option value="29805">Muneefa</option><option value="29806">Muwayh</option><option value="29807">Nabaniya</option><option value="29808">Nabhaniah</option><option value="29809">Nakeea</option><option value="29810">Nifi</option><option value="29811">Qilwah</option><option value="29812">Rafayaa Al Gimsh</option><option value="29813">Riyadh Airport</option><option value="29814">Rumah</option><option value="29815">Saira</option><option value="29816">Samtah</option><option value="29817">Sapt Al Alaya</option><option value="29818">Sarat Abida</option><option value="29819">Sayirah</option><option value="29820">Sayl Al Kabir</option><option value="29821">Shaibah</option><option value="29822">Shedgum</option><option value="29823">Shuqayq</option><option value="29824">Tabarjal</option><option value="29825">Tanajib</option><option value="29826">Tarib</option><option value="29827">Tathlith</option><option value="29828">Turbah</option><option value="29829">Ula</option><option value="29830">Uthmaniyah</option><option value="29831">Uyun Al Jiwa</option><option value="29832">Wadi Bin Hashbal</option><option value="29833">Wajh</option><option value="29834">Duba</option><option value="29835">Al Dayer</option><option value="29836">Samtah</option><option value="29837">Ula</option><option value="29838">Qunfotha</option><option value="29839">Qunfudhah</option><option value="29840">Mudhaylif</option><option value="29841">Majardah</option><option value="29842">bellasmar</option><option value="29843">Mukhwah</option><option value="29844">Al Birk</option></select></span>
    </div>
    
    City Code
    <input type="text" name="sender_zip" id="sender_zip_val" class="form-control" onblur="stateandcitysender_admin(this.value,'');" value="">
    
    Address
    <textarea type="text" name="sender_address" id="sender_address_val" class="form-control" value=""></textarea>
    
    
    Mobile
    <input type="text" name="sender_phone" id="sender_phone_val" class="form-control" value="">
    
    
    <span style="display:none;"> Fax
    <input type="text" name="sender_fax" id="sender_fax_val" class="form-control" value=""></span>
    
    Email
    <input type="text" name="sender_email" id="sender_email_val" class="form-control" value="">
    
    </div>
    </div>
    </div>
	</section>
    </div><br>

    <div class="col-lg-6 col-sm-6">
	<section class="hk-sec-wrapper">
    <div class="panel panel-default">
    <div class="panel-heading">Receiver Info</div>
    <div class="panel-body">
    
    <div class="form-group"> 
    <span style="display:none;"> Company name
    <input type="text" value="" name="company_name"></span>
    
    Name<span class="alert">*</span>
    <input type="text" value="" class="form-control typeahead" id="lock_hint1" onblur="address_book_fill(this.value);">
    
    <span style="display:none;"> 
    State
    <input type="text" name="rec_state" id="rec_state" class="form-control" value=""></span>
    
    
    <div>Country:&nbsp; <span id="new_rec_city"><select name="sel_country_reciver" class="form-control input-lg" id="sel_country_reciver" onchange="createCityDropdownByIdAddShip(this.value);">
					<option value="">Please Select</option><option value="1">Saudi Arabia</option></select></span>
    </div>
    
    <div>City:&nbsp; <span id="city_dropdown_show"><select class="form-control input-lg" name="city_dest" id="city_dest">
					<option value="">Please Select</option><option value="3">Dammam</option><option value="4">Hayel</option><option value="5">Al Hassa </option><option value="6">Madina</option><option value="7">Jeddah</option><option value="8">Makkah</option><option value="9">Taif</option><option value="10">Arar</option><option value="11">Al Khobar</option><option value="12">Bureida</option><option value="13">Hafer Albaten</option><option value="14">Jubail</option><option value="15">Khafji</option><option value="16">Khamis mushit</option><option value="17">Oneza</option><option value="18">Rass</option><option value="19">Skaka</option><option value="20">Tabuk</option><option value="21">Al Qatif</option><option value="22">Jizan</option><option value="23">Abha</option><option value="24">Yanbu</option><option value="25">Badayeh</option><option value="26">Methneb</option><option value="27">Bukeiriah</option><option value="28">Towal</option><option value="29">Samtta</option><option value="30">Ahd Masarha </option><option value="31">Abo Aresh </option><option value="32">Bqiq</option><option value="33">Sebya</option><option value="34">Besh</option><option value="35">Jizan economic city </option><option value="36">Muhayl Aseer</option><option value="37">Muzahmiah</option><option value="38">Quweya </option><option value="39">Durma</option><option value="40">Laith</option><option value="41">Qunfotha</option><option value="42">Bahra</option><option value="43">Thol</option><option value="44">Baha</option><option value="45">Majmah</option><option value="46">Najran</option><option value="47">Besha</option><option value="48">Beljarshi</option><option value="49">Namas</option><option value="50">Dawadmi</option><option value="51">Shaqra</option><option value="52">Zulfi</option><option value="53">Dawmeh Jandal</option><option value="54">Qurayat </option><option value="55">Turiaf</option><option value="56">Abo Ajram</option><option value="57">Deba</option><option value="58">Taym</option><option value="59">Fulfillment warehouse</option><option value="60">Rafaha</option><option value="61">Sharora</option><option value="62">Wadi Al-Dawaser</option><option value="63">Al aflaj</option><option value="64">Dubai</option><option value="29663">Riyadh</option><option value="29664">Al Kharj</option><option value="29665">Dhahran</option><option value="29666">Seihat</option><option value="29667">Fanateer</option><option value="29668">Oyaynah</option><option value="29669">Daelim</option><option value="29670">Diriyah</option><option value="29671">Shraiee</option><option value="29672">Al Hofuf</option><option value="29673">Al Jubail</option><option value="29674">Ras Tanura</option><option value="29675">Taroot</option><option value="29676">Ras Al Kheir</option><option value="29677">Qariya Al Olaya</option><option value="29678">Qaysoomah</option><option value="29679">Al Majmaah</option><option value="29680">Al Qassim</option><option value="29681">Buraydah</option><option value="29682">Hafar Al Batin</option><option value="29683">Shaqraa</option><option value="29684">Dereiyeh</option><option value="29686">Mecca</option><option value="29687">Abqaiq</option><option value="29688">Ad Diriyah</option><option value="29689">Afif</option><option value="29690">AhadRafidah</option><option value="29691">Ain Dar</option><option value="29692">Al Bahah</option><option value="29693">Al Dalemya</option><option value="29694">Al Jowf</option><option value="29695">Alghat</option><option value="29696">AlRass</option><option value="29697">Artawiah</option><option value="29698">Aseer</option><option value="29699">Ayn Fuhayd</option><option value="29700">Buqayq</option><option value="29701">Dumah Al Jandal</option><option value="29702">Hail</option><option value="29703">Harad</option><option value="29704">Hareeq</option><option value="29705">Haweyah</option><option value="29706">Hawtat Bani Tamim</option><option value="29707">Horaimla</option><option value="29708">Hotat Sudair</option><option value="29709">Jalajel</option><option value="29710">Othmanyah</option><option value="29711">Qarah</option><option value="29712">Qasab</option><option value="29713">Quweieh</option><option value="29714">Remah</option><option value="29715">Riyadh Al Khabra</option><option value="29716">Rowdat Sodair</option><option value="29717">Rwaydah</option><option value="29718">Safanyah</option><option value="29719">Safwa</option><option value="29720">Sajir</option><option value="29721">Shefa</option><option value="29722">Sulaiyl</option><option value="29723">Tanuma</option><option value="29724">Tarut</option><option value="29725">Thadek</option><option value="29726">Thumair</option><option value="29727">Toraif</option><option value="29728">Udhaliyah</option><option value="29729">Um Aljamajim</option><option value="29730">Uqlat Al Suqur</option><option value="29731">Uyun</option><option value="29732">Wadi El Dwaser</option><option value="29733">Mubaraz</option><option value="29734">Nabiya</option><option value="29735">Batha</option><option value="29736">Awamiah</option><option value="29737">Salwa</option><option value="29738">Anak</option><option value="29740">Badaya</option><option value="29741">Beijing</option><option value="29742">Bishah</option><option value="29743">Guangzhou</option><option value="29744">Hofuf</option><option value="29745">Hong Kong</option><option value="29746">Istanbul</option><option value="29747">Midinhab</option><option value="29748">Mrat</option><option value="29749">Muhayil</option><option value="29750">Mulaija</option><option value="29751">Salbookh</option><option value="29752">Sarar</option><option value="29753">Shanghai</option><option value="29754">Abu Dhabi</option><option value="29755">Nairiyah</option><option value="29756">Rijal Almaa</option><option value="29757">Dhurma</option><option value="29758">Mahd Ad Dhahab</option><option value="29759">Rayn</option><option value="29760">Rabigh</option><option value="29761">Ranyah</option><option value="29762">Al Jumum</option><option value="29766">Al Jafr</option><option value="29767">Al Ruqi</option><option value="29768">At Tuwal</option><option value="29769">Al Dayer</option><option value="29770">Atawlah</option><option value="29771">Bad</option><option value="29772">Badar Hunain</option><option value="29773">Badr</option><option value="29774">Bahrain Causeway</option><option value="29775">Bani Malek</option><option value="29776">Bariq</option><option value="29777">Bellasmar</option><option value="29778">Bijadiyah</option><option value="29779">Dammam Airport</option><option value="29780">Darb</option><option value="29781">Dhahran Al Janoub</option><option value="29782">Dhamad</option><option value="29783">Dilam</option><option value="29784">Dukhnah</option><option value="29785">Farasan</option><option value="29786">Haditha</option><option value="29787">Halit Ammar</option><option value="29788">Hanakiyah</option><option value="29789">Haql</option><option value="29790">Hawtat Sudayr</option><option value="29791">Jadidah Arar</option><option value="29792">Jash</option><option value="29793">Kamil</option><option value="29794">Khabra</option><option value="29795">Khamasin</option><option value="29796">Khayber</option><option value="29797">Khulais</option><option value="29798">Khurmah</option><option value="29799">King Khalid City</option><option value="29800">Majardah</option><option value="29801">Mandaq</option><option value="29802">Masturah</option><option value="29803">Mudhaylif</option><option value="29804">Mukhwah</option><option value="29805">Muneefa</option><option value="29806">Muwayh</option><option value="29807">Nabaniya</option><option value="29808">Nabhaniah</option><option value="29809">Nakeea</option><option value="29810">Nifi</option><option value="29811">Qilwah</option><option value="29812">Rafayaa Al Gimsh</option><option value="29813">Riyadh Airport</option><option value="29814">Rumah</option><option value="29815">Saira</option><option value="29816">Samtah</option><option value="29817">Sapt Al Alaya</option><option value="29818">Sarat Abida</option><option value="29819">Sayirah</option><option value="29820">Sayl Al Kabir</option><option value="29821">Shaibah</option><option value="29822">Shedgum</option><option value="29823">Shuqayq</option><option value="29824">Tabarjal</option><option value="29825">Tanajib</option><option value="29826">Tarib</option><option value="29827">Tathlith</option><option value="29828">Turbah</option><option value="29829">Ula</option><option value="29830">Uthmaniyah</option><option value="29831">Uyun Al Jiwa</option><option value="29832">Wadi Bin Hashbal</option><option value="29833">Wajh</option><option value="29834">Duba</option><option value="29835">Al Dayer</option><option value="29836">Samtah</option><option value="29837">Ula</option><option value="29838">Qunfotha</option><option value="29839">Qunfudhah</option><option value="29840">Mudhaylif</option><option value="29841">Majardah</option><option value="29842">bellasmar</option><option value="29843">Mukhwah</option><option value="29844">Al Birk</option></select></span>
    </div>
    
    City Code
    <input type="text" value="" id="reciever_zip" name="reciever_zip" class="form-control">
    
    Address
    <textarea type="text" name="reciever_address" id="reciever_address" class="form-control"></textarea>
    
    Mobile
    <input type="tel" value="" class="form-control" name="reciever_phone" id="reciever_phone">
    
    <span style="display:none;"> Fax
    <input type="text" value="" name="reciever_fax" class="form-control">
    <span id="reciever_fax" class="alert"></span></span>
    
    Email
    <input type="text" value="" name="reciever_email" id="reciever_email" class="form-control">
    
    </div>
    
    </div>
    </div>
	</section>
    </div>
    
</div>
</div>
</div>
 </section>  
<section class="hk-sec-wrapper">
<div class="panel panel-default">
<div class="panel-heading">Service &amp; Payment Info</div><br>
    <div class="row">
        <div class="col-sm">
            <div class="row">
                <div class="col-md-2">
				<div class="">Status
                <select name="status" id="status" class="form-control">
                <option value="12">Booked</option>
                <option value="4">Pickup Collected</option>
                </select>
                </div>
				</div>
				<div class="col-md-2">
				<div class="">No.of parcel
				  <input type="text" class="form-control">
				</div>
				
				<div class="col-md-2">
				
				
				</div>
				</div>
			</div>
		</div>	
    </div>	<br>		
<div class="panel-body">
<div class="row">
<div class="col-lg-6 col-sm-6">
<section class="hk-sec-wrapper">
<div class="panel panel-default">
<div class="panel-heading">Services</div><br>
<div class="panel-body">

	<input type="hidden" value="" id="service_id" name="service_id">

    <div class="row">
        
    <div class="col-md-6">
        <div class="">
        <label> Service(Mode)<span class="alert">*</span></label>
        <span id="service"> 
                <select name="sel_service_id" onchange="getPriceDetailsUsingServiceId(document.add_ship);" class="form-control input-lg" id="service">
					<option value="" selected="selected">Please Select Service</option><option value="3">Express Service</option><option value="4">Advance Service</option></select>
        </span>
        </div>
        </div>
    
    <div class="col-md-4">
        <div class="">
        <label>Shipment Value</label>
        <input type="text" name="declared_charge" class="form-control" id="declared_charge" value="" onkeyup="fill_cod_amount(this.value);" onblur="fill_cod_amount(this.value);">
        </div>
        </div>
    </div>

    <div class="form-group">
    <label>Description</label>
    <textarea cols="80" rows="5" name="status_describtion" class="form-control" id="location"></textarea>
    </div>

    <div class="form-group">
    <label>SKU </label>
    <input type="text" name="sku" class="form-control" id="sku" value="">
    </div>

</div>
</div>
</section>
</div>

<div class="col-lg-6 col-sm-6">
<section class="hk-sec-wrapper">
<div class="panel panel-default">
<div class="panel-heading">Payment Detail</div><br>
<div class="panel-body">

     
	
    <span style="display:none">
    <label><strong>Chargable Weight(Kg)</strong></label>
    <input type="text" class="form-control" name="total_weight" id="total_weight_id" value="">
    </span>

   
	<div class="form-group">
    <label><strong>Total Weight(Kg)</strong></label>
    <input type="text" class="form-control" name="weight_total" id="total_weight" value="">
    </div>

    <div class="form-group">
    <label><strong>Delivery Charge (SAR)</strong></label>
    <input type="text" value="" name="service_charge" class="form-control" onchange="isNum(this,'service_charge')" id="service_charge_val" onkeyup="show_total_charge(document.add_ship);" onblur="show_total_charge(document.add_ship)">
    </div>

    <div class="form-group">
    <label><strong>COD Charge (SAR)<span class="alert"></span></strong></label>
    <input type="text" name="cod_chagre" id="cod_charge" class="form-control" value="">
    </div>
   <div class="form-group">
    <label><strong>Additional Charge</strong></label>
    <input type="text" class="form-control" name="other_charges" onkeyup="show_total_charge(document.add_ship);" id="other_charges" value="">
    </div>
 <input type="hidden" name="pod_charge" class="form-control" id="pod_charge" value="">
    <div class="form-group">
    <label><strong>Total Charge (SAR)<span class="alert">*</span></strong></label>
    <input type="text" name="total_charge" class="form-control" id="show_total_amount_id" value="">
    </div>
    
</div>
</div>

</section>
</div>
</div>
</div>
</div>


    <hr>
        <button type="submit" class="btn btn-primary" name="submit_and_save" id="submit" value="submit" onclick=" return Valid_ship_admin(document.add_ship);">Add Shipment &amp; Save</button>
    &nbsp;      
        
    <button type="submit" class="btn btn-primary" name="submit" id="submit1" value="submit" onclick=" return Valid_ship_admin(document.add_ship);">Add Shipment</button>
    &nbsp;
    
    <button type="reset" id="cancel" class="btn btn-danger" value="submit" style=" margin-right:-10%;">Cancel</button>
    
    

</div>
</section>
	</section>
   <?php include APPPATH.'views/includes/footer.php';?>