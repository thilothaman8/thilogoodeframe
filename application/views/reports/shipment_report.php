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
			<li class="breadcrumb-item active" aria-current="page">Show Report</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Show Report</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Show Report</h5>
		</div><br>
    </section>
	<section class="hk-sec-wrapper">
	<div class = "table-responsive">
    <table class="table datatable-show-all table-bordered table-hover datatable-highlight panel panel-flat ">
      
        <tbody>
		<tr>

         <td>
      
            Customer
			
			<select class="form-control custom-select  mt-15">
         <option value="1">fastcoo(8437651)</option><option value="2">Ibrahim Al-Qurashi Perfume(1593268)</option><option value="7">Renjie Store(4251379)</option><option value="8">Kaaf Meem(3571849)</option><option value="9">Mirsal Exp(2817954)</option><option value="10">Maia Mart(8631749)</option><option value="11">Xzong(7596483)</option><option value="12">Dokkan Afkar(3179652)</option><option value="15">Khaliji Shop(2317584)</option><option value="16">SHENZHEN YOKESI SCP CO.,LIMITED(1894352)</option><option value="17">QPS Store(3927148)</option><option value="18">IOUD(1635497)</option><option value="19">Online Store(7654819)</option><option value="20">Modern Souq(4983751)</option><option value="22">Online Shopping KSA(4621897)</option><option value="24">Extra Stores(9715284)</option><option value="25">bljumla.com(9487325)</option><option value="26">Gizmooz(7415986)</option><option value="27">The beauty Brands(9536471)</option><option value="28">UCT Online Store(2359184)</option><option value="29">Grand Store(7489265)</option><option value="30">GlupShop(8236415)</option><option value="31">King Souq(2395641)</option><option value="32">Ashyae(5367914)</option><option value="33">arasouq(2496715)</option><option value="34">Shopify(2463798)</option><option value="35">E-GATE ONLINE SHOPPING(4235196)</option><option value="36">Feesheh(5796138)</option><option value="37">Arabian Oud(4931568)</option><option value="38">King Souq FXF(6783491)</option><option value="39">Zajil Express Company(2456938)</option><option value="40">Ajoul Company(3675914)</option><option value="41">Online Shopping KSA INT(2384597)</option><option value="42">Rabel Xpress(9234715)</option><option value="43">شركة بي ون BEONE COMPANY(1265849)</option><option value="45">Sky Express(4652179)</option><option value="48">lamsatj(6258471)</option><option value="50">Ladoun.com(6394217)</option><option value="52">Kabayan Shopper(2718354)</option><option value="53">Saqoor Al Royah(2453897)</option><option value="54">My Land General Trading LLC(1389572)</option><option value="56">SIAFA INTERNATIONAL MFG.CO(1872364)</option><option value="57">MATJER ROSH(7145236)</option><option value="58">Al Sultana Rayda (5126384)</option><option value="59">Test TAM Express(8523946)</option><option value="60">boutiqaat(2534986)</option><option value="61">Boutiquey(5681742)</option><option value="62">Fastcoo(1238695)</option><option value="63">fastcoo(8752364)</option><option value="64">Fastcoo(6258347)</option><option value="65">gsrhospital(7591624)</option></select>
            
			   Select On Hold
			         <select class="form-control custom-select  mt-15">
                        <option value="">Please Select</option>
                        <option value="YES">Yes</option>
                        <option value="NO">No</option>
                        <br>
						</select>

                 </td>
       
         <td>
      
            
               Status
			   <select class="form-control custom-select  mt-15">
         <option value="1">Not Delivered</option><option value="3">On Process</option><option value="4">Pick Up Collected</option><option value="5">Out for delivery</option><option value="6">Return</option><option value="7">Shelve</option><option value="8">IN Transit</option><option value="9">Damage Shipment Arrival</option><option value="10">Hold for pickup</option><option value="11">Delivered</option><option value="12">Booked-Pickup Scheduled</option>
		 </select>
		 Current Status
	        <select class="form-control custom-select  mt-15">
            <option value="GEN">General Status</option> <option value="LAST">Last Status</option> </select>
                 </td>
        <td>
      
            
               Open
			    <select class="form-control custom-select  mt-15">
           <option value="O">OPEN</option>
        <option value="C">CLOSE</option>
         <option value="OFD">Raw Report</option>
		 </select>
      Destination Hub
	         <select class="form-control custom-select  mt-15">
             <option value="">Destnation Hub</option> 
           <option value="Riyadh">Riyadh</option>
        <option value="Jeddah">Jeddah</option>
         <option value="Dammam">Dammam</option>
		 </select>
			<br>
			Forward Through
			 <select class="form-control custom-select  mt-15">
             <option value="">Forward Through</option> 
           <option value="SMSA">SMSA</option>
		    </select>
    
        
                 </td>       
                 </tr>
                 <tr>
                   
          
                 <td>
                 Origin
				    <select class="form-control custom-select  mt-15">
					<option value="3">Dammam</option><option value="4">Hayel</option><option value="5">Al Hassa </option><option value="6">Madina</option><option value="7">Jeddah</option><option value="8">Makkah</option><option value="9">Taif</option><option value="10">Arar</option><option value="11">Al Khobar</option><option value="12">Bureida</option><option value="13">Hafer Albaten</option><option value="14">Jubail</option><option value="15">Khafji</option><option value="16">Khamis mushit</option><option value="17">Oneza</option><option value="18">Rass</option><option value="19">Skaka</option><option value="20">Tabuk</option><option value="21">Al Qatif</option><option value="22">Jizan</option><option value="23">Abha</option><option value="24">Yanbu</option><option value="25">Badayeh</option><option value="26">Methneb</option><option value="27">Bukeiriah</option><option value="28">Towal</option><option value="29">Samtta</option><option value="30">Ahd Masarha </option><option value="31">Abo Aresh </option><option value="32">Bqiq</option><option value="33">Sebya</option><option value="34">Besh</option><option value="35">Jizan economic city </option><option value="36">Muhayl Aseer</option><option value="37">Muzahmiah</option><option value="38">Quweya </option><option value="39">Durma</option><option value="40">Laith</option><option value="41">Qunfotha</option><option value="42">Bahra</option><option value="43">Thol</option><option value="44">Baha</option><option value="45">Majmah</option><option value="46">Najran</option><option value="47">Besha</option><option value="48">Beljarshi</option><option value="49">Namas</option><option value="50">Dawadmi</option><option value="51">Shaqra</option><option value="52">Zulfi</option><option value="53">Dawmeh Jandal</option><option value="54">Qurayat </option><option value="55">Turiaf</option><option value="56">Abo Ajram</option><option value="57">Deba</option><option value="58">Taym</option><option value="59">Fulfillment warehouse</option><option value="60">Rafaha</option><option value="61">Sharora</option><option value="62">Wadi Al-Dawaser</option><option value="63">Al aflaj</option><option value="64">Dubai</option><option value="29663">Riyadh</option><option value="29664">Al Kharj</option><option value="29665">Dhahran</option><option value="29666">Seihat</option><option value="29667">Fanateer</option><option value="29668">Oyaynah</option><option value="29669">Daelim</option><option value="29670">Diriyah</option><option value="29671">Shraiee</option><option value="29672">Al Hofuf</option><option value="29673">Al Jubail</option><option value="29674">Ras Tanura</option><option value="29675">Taroot</option><option value="29676">Ras Al Kheir</option><option value="29677">Qariya Al Olaya</option><option value="29678">Qaysoomah</option><option value="29679">Al Majmaah</option><option value="29680">Al Qassim</option><option value="29681">Buraydah</option><option value="29682">Hafar Al Batin</option><option value="29683">Shaqraa</option><option value="29684">Dereiyeh</option><option value="29686">Mecca</option><option value="29687">Abqaiq</option><option value="29688">Ad Diriyah</option><option value="29689">Afif</option><option value="29690">AhadRafidah</option><option value="29691">Ain Dar</option><option value="29692">Al Bahah</option><option value="29693">Al Dalemya</option><option value="29694">Al Jowf</option><option value="29695">Alghat</option><option value="29696">AlRass</option><option value="29697">Artawiah</option><option value="29698">Aseer</option><option value="29699">Ayn Fuhayd</option><option value="29700">Buqayq</option><option value="29701">Dumah Al Jandal</option><option value="29702">Hail</option><option value="29703">Harad</option><option value="29704">Hareeq</option><option value="29705">Haweyah</option><option value="29706">Hawtat Bani Tamim</option><option value="29707">Horaimla</option><option value="29708">Hotat Sudair</option><option value="29709">Jalajel</option><option value="29710">Othmanyah</option><option value="29711">Qarah</option><option value="29712">Qasab</option><option value="29713">Quweieh</option><option value="29714">Remah</option><option value="29715">Riyadh Al Khabra</option><option value="29716">Rowdat Sodair</option><option value="29717">Rwaydah</option><option value="29718">Safanyah</option><option value="29719">Safwa</option><option value="29720">Sajir</option><option value="29721">Shefa</option><option value="29722">Sulaiyl</option><option value="29723">Tanuma</option><option value="29724">Tarut</option><option value="29725">Thadek</option><option value="29726">Thumair</option><option value="29727">Toraif</option><option value="29728">Udhaliyah</option><option value="29729">Um Aljamajim</option><option value="29730">Uqlat Al Suqur</option><option value="29731">Uyun</option><option value="29732">Wadi El Dwaser</option><option value="29733">Mubaraz</option><option value="29734">Nabiya</option><option value="29735">Batha</option><option value="29736">Awamiah</option><option value="29737">Salwa</option><option value="29738">Anak</option><option value="29740">Badaya</option><option value="29741">Beijing</option><option value="29742">Bishah</option><option value="29743">Guangzhou</option><option value="29744">Hofuf</option><option value="29745">Hong Kong</option><option value="29746">Istanbul</option><option value="29747">Midinhab</option><option value="29748">Mrat</option><option value="29749">Muhayil</option><option value="29750">Mulaija</option><option value="29751">Salbookh</option><option value="29752">Sarar</option><option value="29753">Shanghai</option><option value="29754">Abu Dhabi</option><option value="29755">Nairiyah</option><option value="29756">Rijal Almaa</option><option value="29757">Dhurma</option><option value="29758">Mahd Ad Dhahab</option><option value="29759">Rayn</option><option value="29760">Rabigh</option><option value="29761">Ranyah</option><option value="29762">Al Jumum</option><option value="29766">Al Jafr</option><option value="29767">Al Ruqi</option><option value="29768">At Tuwal</option><option value="29769">Al Dayer</option><option value="29770">Atawlah</option><option value="29771">Bad</option><option value="29772">Badar Hunain</option><option value="29773">Badr</option><option value="29774">Bahrain Causeway</option><option value="29775">Bani Malek</option><option value="29776">Bariq</option><option value="29777">Bellasmar</option><option value="29778">Bijadiyah</option><option value="29779">Dammam Airport</option><option value="29780">Darb</option><option value="29781">Dhahran Al Janoub</option><option value="29782">Dhamad</option><option value="29783">Dilam</option><option value="29784">Dukhnah</option><option value="29785">Farasan</option><option value="29786">Haditha</option><option value="29787">Halit Ammar</option><option value="29788">Hanakiyah</option><option value="29789">Haql</option><option value="29790">Hawtat Sudayr</option><option value="29791">Jadidah Arar</option><option value="29792">Jash</option><option value="29793">Kamil</option><option value="29794">Khabra</option><option value="29795">Khamasin</option><option value="29796">Khayber</option><option value="29797">Khulais</option><option value="29798">Khurmah</option><option value="29799">King Khalid City</option><option value="29800">Majardah</option><option value="29801">Mandaq</option><option value="29802">Masturah</option><option value="29803">Mudhaylif</option><option value="29804">Mukhwah</option><option value="29805">Muneefa</option><option value="29806">Muwayh</option><option value="29807">Nabaniya</option><option value="29808">Nabhaniah</option><option value="29809">Nakeea</option><option value="29810">Nifi</option><option value="29811">Qilwah</option><option value="29812">Rafayaa Al Gimsh</option><option value="29813">Riyadh Airport</option><option value="29814">Rumah</option><option value="29815">Saira</option><option value="29816">Samtah</option><option value="29817">Sapt Al Alaya</option><option value="29818">Sarat Abida</option><option value="29819">Sayirah</option><option value="29820">Sayl Al Kabir</option><option value="29821">Shaibah</option><option value="29822">Shedgum</option><option value="29823">Shuqayq</option><option value="29824">Tabarjal</option><option value="29825">Tanajib</option><option value="29826">Tarib</option><option value="29827">Tathlith</option><option value="29828">Turbah</option><option value="29829">Ula</option><option value="29830">Uthmaniyah</option><option value="29831">Uyun Al Jiwa</option><option value="29832">Wadi Bin Hashbal</option><option value="29833">Wajh</option><option value="29834">Duba</option><option value="29835">Al Dayer</option><option value="29836">Samtah</option><option value="29837">Ula</option><option value="29838">Qunfotha</option><option value="29839">Qunfudhah</option><option value="29840">Mudhaylif</option><option value="29841">Majardah</option><option value="29842">bellasmar</option><option value="29843">Mukhwah</option><option value="29844">Al Birk</option></select>
                    
		   <br>
           Destination  
           <br>
		            <select class="form-control custom-select  mt-15">
					<option value="3">Dammam</option><option value="4">Hayel</option><option value="5">Al Hassa </option><option value="6">Madina</option><option value="7">Jeddah</option><option value="8">Makkah</option><option value="9">Taif</option><option value="10">Arar</option><option value="11">Al Khobar</option><option value="12">Bureida</option><option value="13">Hafer Albaten</option><option value="14">Jubail</option><option value="15">Khafji</option><option value="16">Khamis mushit</option><option value="17">Oneza</option><option value="18">Rass</option><option value="19">Skaka</option><option value="20">Tabuk</option><option value="21">Al Qatif</option><option value="22">Jizan</option><option value="23">Abha</option><option value="24">Yanbu</option><option value="25">Badayeh</option><option value="26">Methneb</option><option value="27">Bukeiriah</option><option value="28">Towal</option><option value="29">Samtta</option><option value="30">Ahd Masarha </option><option value="31">Abo Aresh </option><option value="32">Bqiq</option><option value="33">Sebya</option><option value="34">Besh</option><option value="35">Jizan economic city </option><option value="36">Muhayl Aseer</option><option value="37">Muzahmiah</option><option value="38">Quweya </option><option value="39">Durma</option><option value="40">Laith</option><option value="41">Qunfotha</option><option value="42">Bahra</option><option value="43">Thol</option><option value="44">Baha</option><option value="45">Majmah</option><option value="46">Najran</option><option value="47">Besha</option><option value="48">Beljarshi</option><option value="49">Namas</option><option value="50">Dawadmi</option><option value="51">Shaqra</option><option value="52">Zulfi</option><option value="53">Dawmeh Jandal</option><option value="54">Qurayat </option><option value="55">Turiaf</option><option value="56">Abo Ajram</option><option value="57">Deba</option><option value="58">Taym</option><option value="59">Fulfillment warehouse</option><option value="60">Rafaha</option><option value="61">Sharora</option><option value="62">Wadi Al-Dawaser</option><option value="63">Al aflaj</option><option value="64">Dubai</option><option value="29663">Riyadh</option><option value="29664">Al Kharj</option><option value="29665">Dhahran</option><option value="29666">Seihat</option><option value="29667">Fanateer</option><option value="29668">Oyaynah</option><option value="29669">Daelim</option><option value="29670">Diriyah</option><option value="29671">Shraiee</option><option value="29672">Al Hofuf</option><option value="29673">Al Jubail</option><option value="29674">Ras Tanura</option><option value="29675">Taroot</option><option value="29676">Ras Al Kheir</option><option value="29677">Qariya Al Olaya</option><option value="29678">Qaysoomah</option><option value="29679">Al Majmaah</option><option value="29680">Al Qassim</option><option value="29681">Buraydah</option><option value="29682">Hafar Al Batin</option><option value="29683">Shaqraa</option><option value="29684">Dereiyeh</option><option value="29686">Mecca</option><option value="29687">Abqaiq</option><option value="29688">Ad Diriyah</option><option value="29689">Afif</option><option value="29690">AhadRafidah</option><option value="29691">Ain Dar</option><option value="29692">Al Bahah</option><option value="29693">Al Dalemya</option><option value="29694">Al Jowf</option><option value="29695">Alghat</option><option value="29696">AlRass</option><option value="29697">Artawiah</option><option value="29698">Aseer</option><option value="29699">Ayn Fuhayd</option><option value="29700">Buqayq</option><option value="29701">Dumah Al Jandal</option><option value="29702">Hail</option><option value="29703">Harad</option><option value="29704">Hareeq</option><option value="29705">Haweyah</option><option value="29706">Hawtat Bani Tamim</option><option value="29707">Horaimla</option><option value="29708">Hotat Sudair</option><option value="29709">Jalajel</option><option value="29710">Othmanyah</option><option value="29711">Qarah</option><option value="29712">Qasab</option><option value="29713">Quweieh</option><option value="29714">Remah</option><option value="29715">Riyadh Al Khabra</option><option value="29716">Rowdat Sodair</option><option value="29717">Rwaydah</option><option value="29718">Safanyah</option><option value="29719">Safwa</option><option value="29720">Sajir</option><option value="29721">Shefa</option><option value="29722">Sulaiyl</option><option value="29723">Tanuma</option><option value="29724">Tarut</option><option value="29725">Thadek</option><option value="29726">Thumair</option><option value="29727">Toraif</option><option value="29728">Udhaliyah</option><option value="29729">Um Aljamajim</option><option value="29730">Uqlat Al Suqur</option><option value="29731">Uyun</option><option value="29732">Wadi El Dwaser</option><option value="29733">Mubaraz</option><option value="29734">Nabiya</option><option value="29735">Batha</option><option value="29736">Awamiah</option><option value="29737">Salwa</option><option value="29738">Anak</option><option value="29740">Badaya</option><option value="29741">Beijing</option><option value="29742">Bishah</option><option value="29743">Guangzhou</option><option value="29744">Hofuf</option><option value="29745">Hong Kong</option><option value="29746">Istanbul</option><option value="29747">Midinhab</option><option value="29748">Mrat</option><option value="29749">Muhayil</option><option value="29750">Mulaija</option><option value="29751">Salbookh</option><option value="29752">Sarar</option><option value="29753">Shanghai</option><option value="29754">Abu Dhabi</option><option value="29755">Nairiyah</option><option value="29756">Rijal Almaa</option><option value="29757">Dhurma</option><option value="29758">Mahd Ad Dhahab</option><option value="29759">Rayn</option><option value="29760">Rabigh</option><option value="29761">Ranyah</option><option value="29762">Al Jumum</option><option value="29766">Al Jafr</option><option value="29767">Al Ruqi</option><option value="29768">At Tuwal</option><option value="29769">Al Dayer</option><option value="29770">Atawlah</option><option value="29771">Bad</option><option value="29772">Badar Hunain</option><option value="29773">Badr</option><option value="29774">Bahrain Causeway</option><option value="29775">Bani Malek</option><option value="29776">Bariq</option><option value="29777">Bellasmar</option><option value="29778">Bijadiyah</option><option value="29779">Dammam Airport</option><option value="29780">Darb</option><option value="29781">Dhahran Al Janoub</option><option value="29782">Dhamad</option><option value="29783">Dilam</option><option value="29784">Dukhnah</option><option value="29785">Farasan</option><option value="29786">Haditha</option><option value="29787">Halit Ammar</option><option value="29788">Hanakiyah</option><option value="29789">Haql</option><option value="29790">Hawtat Sudayr</option><option value="29791">Jadidah Arar</option><option value="29792">Jash</option><option value="29793">Kamil</option><option value="29794">Khabra</option><option value="29795">Khamasin</option><option value="29796">Khayber</option><option value="29797">Khulais</option><option value="29798">Khurmah</option><option value="29799">King Khalid City</option><option value="29800">Majardah</option><option value="29801">Mandaq</option><option value="29802">Masturah</option><option value="29803">Mudhaylif</option><option value="29804">Mukhwah</option><option value="29805">Muneefa</option><option value="29806">Muwayh</option><option value="29807">Nabaniya</option><option value="29808">Nabhaniah</option><option value="29809">Nakeea</option><option value="29810">Nifi</option><option value="29811">Qilwah</option><option value="29812">Rafayaa Al Gimsh</option><option value="29813">Riyadh Airport</option><option value="29814">Rumah</option><option value="29815">Saira</option><option value="29816">Samtah</option><option value="29817">Sapt Al Alaya</option><option value="29818">Sarat Abida</option><option value="29819">Sayirah</option><option value="29820">Sayl Al Kabir</option><option value="29821">Shaibah</option><option value="29822">Shedgum</option><option value="29823">Shuqayq</option><option value="29824">Tabarjal</option><option value="29825">Tanajib</option><option value="29826">Tarib</option><option value="29827">Tathlith</option><option value="29828">Turbah</option><option value="29829">Ula</option><option value="29830">Uthmaniyah</option><option value="29831">Uyun Al Jiwa</option><option value="29832">Wadi Bin Hashbal</option><option value="29833">Wajh</option><option value="29834">Duba</option><option value="29835">Al Dayer</option><option value="29836">Samtah</option><option value="29837">Ula</option><option value="29838">Qunfotha</option><option value="29839">Qunfudhah</option><option value="29840">Mudhaylif</option><option value="29841">Majardah</option><option value="29842">bellasmar</option><option value="29843">Mukhwah</option><option value="29844">Al Birk</option></select> 
                    
		<br> <br>
         Schedule Status
         <select class="form-control custom-select  mt-15">
                        <option value="">Please Select</option>
                        <option value="Y">Yes</option>
                        <option value="N">No</option>
                        <br> <br>
						</select>
           Mode
          <select class="form-control custom-select  mt-15">
                        <option value="">Please Select</option>
                        <option value="">CC</option>
                        <option value="">COD</option>
                        </select>
                        <br>              
           </td>
        
            
             
              
       
      
             
        <td>
        From Date:
        <input type="date" name="bt_date1" onchange="cal()" class="form-control " id="search_date" value="" required=""><br>
        To Date:
        <input type="date" name="bt_date2" onchange="cal()" class="form-control " id="search_date1" value="" required="">
       </td>
       <td>
        <button type="button" class="btn btn-info btn-lg btn btn-primary" id="gen_report">Generate Report</button>
         
        
        </td>
        
       
     </tr>
                      
     </tbody>
	</table>
</div>	
</section>
<?php include APPPATH.'views/includes/footer.php';?>