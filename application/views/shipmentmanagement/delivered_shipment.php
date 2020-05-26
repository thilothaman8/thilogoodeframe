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
			<li class="breadcrumb-item active" aria-current="page">Show Shipment</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Show Shipment</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<h5 class="hk-sec-title">Delivered Shipment</h5><br>
	
	
		<input class="btn-primary" type="submit" value="Export to Excel ZIP" name="exportData">
	<div class="table-responsive">
		<table class="table datatable-show-all table-bordered table-hover datatable-highlight">        
        <thead>         
			<tr style="text-align:center; ">
			<form name="" method="post" action="" enctype="multipart/form-data"></form>
			
			
				
				<td colspan="2">
					<span><select name="search_type" id="search_type" class="form-control input-lg " onchange="Get_status_drop(this.value);">
					<option value="AWB">AWB </option>
					<option value="SN">Sender name</option>
					<option value="RE">Receiver name </option>
					<option value="SE">Shipper mobile</option>
					<option value="RP">Receiver mobile</option>
					<option value="S">Status </option>
					<option value="SC">Schedule </option>
					<option value="D">Destination </option>
					<option value="YES">On hold</option>
					<option value="O">Origin</option>
					<option value="OD">Order date</option>										
					<option value="BN">Reference Number </option>
					<option value="Email">Email</option>
					</select></span><br>
					<select name="user_name" class="form-control" id="user_name">
					<option value="" selected="selected" required="required">Select Customer</option><option value="1">fastcoo&nbsp;(8437651)</option><option value="2">Ibrahim Al-Qurashi Perfume&nbsp;(1593268)</option><option value="7">Renjie Store&nbsp;(4251379)</option><option value="8">Kaaf Meem&nbsp;(3571849)</option><option value="9">Mirsal Exp&nbsp;(2817954)</option><option value="10">Maia Mart&nbsp;(8631749)</option><option value="11">Xzong&nbsp;(7596483)</option><option value="12">Dokkan Afkar&nbsp;(3179652)</option><option value="15">Khaliji Shop&nbsp;(2317584)</option><option value="16">SHENZHEN YOKESI SCP CO.,LIMITED&nbsp;(1894352)</option><option value="17">QPS Store&nbsp;(3927148)</option><option value="18">IOUD&nbsp;(1635497)</option><option value="19">Online Store&nbsp;(7654819)</option><option value="20">Modern Souq&nbsp;(4983751)</option><option value="22">Online Shopping KSA&nbsp;(4621897)</option><option value="24">Extra Stores&nbsp;(9715284)</option><option value="25">bljumla.com&nbsp;(9487325)</option><option value="26">Gizmooz&nbsp;(7415986)</option><option value="27">The beauty Brands&nbsp;(9536471)</option><option value="28">UCT Online Store&nbsp;(2359184)</option><option value="29">Grand Store&nbsp;(7489265)</option><option value="30">GlupShop&nbsp;(8236415)</option><option value="31">King Souq&nbsp;(2395641)</option><option value="32">Ashyae&nbsp;(5367914)</option><option value="33">arasouq&nbsp;(2496715)</option><option value="34">Shopify&nbsp;(2463798)</option><option value="35">E-GATE ONLINE SHOPPING&nbsp;(4235196)</option><option value="36">Feesheh&nbsp;(5796138)</option><option value="37">Arabian Oud&nbsp;(4931568)</option><option value="38">King Souq FXF&nbsp;(6783491)</option><option value="39">Zajil Express Company&nbsp;(2456938)</option><option value="40">Ajoul Company&nbsp;(3675914)</option><option value="41">Online Shopping KSA INT&nbsp;(2384597)</option><option value="42">Rabel Xpress&nbsp;(9234715)</option><option value="43">شركة بي ون BEONE COMPANY&nbsp;(1265849)</option><option value="45">Sky Express&nbsp;(4652179)</option><option value="48">lamsatj&nbsp;(6258471)</option><option value="50">Ladoun.com&nbsp;(6394217)</option><option value="52">Kabayan Shopper&nbsp;(2718354)</option><option value="53">Saqoor Al Royah&nbsp;(2453897)</option><option value="54">My Land General Trading LLC&nbsp;(1389572)</option><option value="56">SIAFA INTERNATIONAL MFG.CO&nbsp;(1872364)</option><option value="57">MATJER ROSH&nbsp;(7145236)</option><option value="58">Al Sultana Rayda &nbsp;(5126384)</option><option value="59">Test TAM Express&nbsp;(8523946)</option><option value="60">boutiqaat&nbsp;(2534986)</option><option value="61">Boutiquey&nbsp;(5681742)</option><option value="62">Fastcoo&nbsp;(1238695)</option><option value="63">fastcoo&nbsp;(8752364)</option><option value="64">Fastcoo&nbsp;(6258347)</option><option value="65">gsrhospital&nbsp;(7591624)</option></select>
				</td> 
				<td colspan="2">
					<select name="origin_sel" class="form-control" id="origin_sel">
				    <option value="">Select Origin</option><option value="3">Dammam</option><option value="4">Hayel</option><option value="5">Al Hassa </option><option value="6">Madina</option><option value="7">Jeddah</option><option value="8">Makkah</option><option value="9">Taif</option><option value="10">Arar</option><option value="11">Al Khobar</option><option value="12">Bureida</option><option value="13">Hafer Albaten</option><option value="14">Jubail</option><option value="15">Khafji</option><option value="16">Khamis mushit</option><option value="17">Oneza</option><option value="18">Rass</option><option value="19">Skaka</option><option value="20">Tabuk</option><option value="21">Al Qatif</option><option value="22">Jizan</option><option value="23">Abha</option><option value="24">Yanbu</option><option value="25">Badayeh</option><option value="26">Methneb</option><option value="27">Bukeiriah</option><option value="28">Towal</option><option value="29">Samtta</option><option value="30">Ahd Masarha </option><option value="31">Abo Aresh </option><option value="32">Bqiq</option><option value="33">Sebya</option><option value="34">Besh</option><option value="35">Jizan economic city </option><option value="36">Muhayl Aseer</option><option value="37">Muzahmiah</option><option value="38">Quweya </option><option value="39">Durma</option><option value="40">Laith</option><option value="41">Qunfotha</option><option value="42">Bahra</option><option value="43">Thol</option><option value="44">Baha</option><option value="45">Majmah</option><option value="46">Najran</option><option value="47">Besha</option><option value="48">Beljarshi</option><option value="49">Namas</option><option value="50">Dawadmi</option><option value="51">Shaqra</option><option value="52">Zulfi</option><option value="53">Dawmeh Jandal</option><option value="54">Qurayat </option><option value="55">Turiaf</option><option value="56">Abo Ajram</option><option value="57">Deba</option><option value="58">Taym</option><option value="59">Fulfillment warehouse</option><option value="60">Rafaha</option><option value="61">Sharora</option><option value="62">Wadi Al-Dawaser</option><option value="63">Al aflaj</option><option value="64">Dubai</option><option value="29663">Riyadh</option><option value="29664">Al Kharj</option><option value="29665">Dhahran</option><option value="29666">Seihat</option><option value="29667">Fanateer</option><option value="29668">Oyaynah</option><option value="29669">Daelim</option><option value="29670">Diriyah</option><option value="29671">Shraiee</option><option value="29672">Al Hofuf</option><option value="29673">Al Jubail</option><option value="29674">Ras Tanura</option><option value="29675">Taroot</option><option value="29676">Ras Al Kheir</option><option value="29677">Qariya Al Olaya</option><option value="29678">Qaysoomah</option><option value="29679">Al Majmaah</option><option value="29680">Al Qassim</option><option value="29681">Buraydah</option><option value="29682">Hafar Al Batin</option><option value="29683">Shaqraa</option><option value="29684">Dereiyeh</option><option value="29686">Mecca</option><option value="29687">Abqaiq</option><option value="29688">Ad Diriyah</option><option value="29689">Afif</option><option value="29690">AhadRafidah</option><option value="29691">Ain Dar</option><option value="29692">Al Bahah</option><option value="29693">Al Dalemya</option><option value="29694">Al Jowf</option><option value="29695">Alghat</option><option value="29696">AlRass</option><option value="29697">Artawiah</option><option value="29698">Aseer</option><option value="29699">Ayn Fuhayd</option><option value="29700">Buqayq</option><option value="29701">Dumah Al Jandal</option><option value="29702">Hail</option><option value="29703">Harad</option><option value="29704">Hareeq</option><option value="29705">Haweyah</option><option value="29706">Hawtat Bani Tamim</option><option value="29707">Horaimla</option><option value="29708">Hotat Sudair</option><option value="29709">Jalajel</option><option value="29710">Othmanyah</option><option value="29711">Qarah</option><option value="29712">Qasab</option><option value="29713">Quweieh</option><option value="29714">Remah</option><option value="29715">Riyadh Al Khabra</option><option value="29716">Rowdat Sodair</option><option value="29717">Rwaydah</option><option value="29718">Safanyah</option><option value="29719">Safwa</option><option value="29720">Sajir</option><option value="29721">Shefa</option><option value="29722">Sulaiyl</option><option value="29723">Tanuma</option><option value="29724">Tarut</option><option value="29725">Thadek</option><option value="29726">Thumair</option><option value="29727">Toraif</option><option value="29728">Udhaliyah</option><option value="29729">Um Aljamajim</option><option value="29730">Uqlat Al Suqur</option><option value="29731">Uyun</option><option value="29732">Wadi El Dwaser</option><option value="29733">Mubaraz</option><option value="29734">Nabiya</option><option value="29735">Batha</option><option value="29736">Awamiah</option><option value="29737">Salwa</option><option value="29738">Anak</option><option value="29740">Badaya</option><option value="29741">Beijing</option><option value="29742">Bishah</option><option value="29743">Guangzhou</option><option value="29744">Hofuf</option><option value="29745">Hong Kong</option><option value="29746">Istanbul</option><option value="29747">Midinhab</option><option value="29748">Mrat</option><option value="29749">Muhayil</option><option value="29750">Mulaija</option><option value="29751">Salbookh</option><option value="29752">Sarar</option><option value="29753">Shanghai</option><option value="29754">Abu Dhabi</option><option value="29755">Nairiyah</option><option value="29756">Rijal Almaa</option><option value="29757">Dhurma</option><option value="29758">Mahd Ad Dhahab</option><option value="29759">Rayn</option><option value="29760">Rabigh</option><option value="29761">Ranyah</option><option value="29762">Al Jumum</option><option value="29766">Al Jafr</option><option value="29767">Al Ruqi</option><option value="29768">At Tuwal</option><option value="29769">Al Dayer</option><option value="29770">Atawlah</option><option value="29771">Bad</option><option value="29772">Badar Hunain</option><option value="29773">Badr</option><option value="29774">Bahrain Causeway</option><option value="29775">Bani Malek</option><option value="29776">Bariq</option><option value="29777">Bellasmar</option><option value="29778">Bijadiyah</option><option value="29779">Dammam Airport</option><option value="29780">Darb</option><option value="29781">Dhahran Al Janoub</option><option value="29782">Dhamad</option><option value="29783">Dilam</option><option value="29784">Dukhnah</option><option value="29785">Farasan</option><option value="29786">Haditha</option><option value="29787">Halit Ammar</option><option value="29788">Hanakiyah</option><option value="29789">Haql</option><option value="29790">Hawtat Sudayr</option><option value="29791">Jadidah Arar</option><option value="29792">Jash</option><option value="29793">Kamil</option><option value="29794">Khabra</option><option value="29795">Khamasin</option><option value="29796">Khayber</option><option value="29797">Khulais</option><option value="29798">Khurmah</option><option value="29799">King Khalid City</option><option value="29800">Majardah</option><option value="29801">Mandaq</option><option value="29802">Masturah</option><option value="29803">Mudhaylif</option><option value="29804">Mukhwah</option><option value="29805">Muneefa</option><option value="29806">Muwayh</option><option value="29807">Nabaniya</option><option value="29808">Nabhaniah</option><option value="29809">Nakeea</option><option value="29810">Nifi</option><option value="29811">Qilwah</option><option value="29812">Rafayaa Al Gimsh</option><option value="29813">Riyadh Airport</option><option value="29814">Rumah</option><option value="29815">Saira</option><option value="29816">Samtah</option><option value="29817">Sapt Al Alaya</option><option value="29818">Sarat Abida</option><option value="29819">Sayirah</option><option value="29820">Sayl Al Kabir</option><option value="29821">Shaibah</option><option value="29822">Shedgum</option><option value="29823">Shuqayq</option><option value="29824">Tabarjal</option><option value="29825">Tanajib</option><option value="29826">Tarib</option><option value="29827">Tathlith</option><option value="29828">Turbah</option><option value="29829">Ula</option><option value="29830">Uthmaniyah</option><option value="29831">Uyun Al Jiwa</option><option value="29832">Wadi Bin Hashbal</option><option value="29833">Wajh</option><option value="29834">Duba</option><option value="29835">Al Dayer</option><option value="29836">Samtah</option><option value="29837">Ula</option><option value="29838">Qunfotha</option><option value="29839">Qunfudhah</option><option value="29840">Mudhaylif</option><option value="29841">Majardah</option><option value="29842">bellasmar</option><option value="29843">Mukhwah</option><option value="29844">Al Birk</option></select>
					<br>
					<select name="desctination_sel" class="form-control" id="desctination_sel">
					<option value="" selected="selected">Select Destination</option><option value="3">Dammam</option><option value="4">Hayel</option><option value="5">Al Hassa </option><option value="6">Madina</option><option value="7">Jeddah</option><option value="8">Makkah</option><option value="9">Taif</option><option value="10">Arar</option><option value="11">Al Khobar</option><option value="12">Bureida</option><option value="13">Hafer Albaten</option><option value="14">Jubail</option><option value="15">Khafji</option><option value="16">Khamis mushit</option><option value="17">Oneza</option><option value="18">Rass</option><option value="19">Skaka</option><option value="20">Tabuk</option><option value="21">Al Qatif</option><option value="22">Jizan</option><option value="23">Abha</option><option value="24">Yanbu</option><option value="25">Badayeh</option><option value="26">Methneb</option><option value="27">Bukeiriah</option><option value="28">Towal</option><option value="29">Samtta</option><option value="30">Ahd Masarha </option><option value="31">Abo Aresh </option><option value="32">Bqiq</option><option value="33">Sebya</option><option value="34">Besh</option><option value="35">Jizan economic city </option><option value="36">Muhayl Aseer</option><option value="37">Muzahmiah</option><option value="38">Quweya </option><option value="39">Durma</option><option value="40">Laith</option><option value="41">Qunfotha</option><option value="42">Bahra</option><option value="43">Thol</option><option value="44">Baha</option><option value="45">Majmah</option><option value="46">Najran</option><option value="47">Besha</option><option value="48">Beljarshi</option><option value="49">Namas</option><option value="50">Dawadmi</option><option value="51">Shaqra</option><option value="52">Zulfi</option><option value="53">Dawmeh Jandal</option><option value="54">Qurayat </option><option value="55">Turiaf</option><option value="56">Abo Ajram</option><option value="57">Deba</option><option value="58">Taym</option><option value="59">Fulfillment warehouse</option><option value="60">Rafaha</option><option value="61">Sharora</option><option value="62">Wadi Al-Dawaser</option><option value="63">Al aflaj</option><option value="64">Dubai</option><option value="29663">Riyadh</option><option value="29664">Al Kharj</option><option value="29665">Dhahran</option><option value="29666">Seihat</option><option value="29667">Fanateer</option><option value="29668">Oyaynah</option><option value="29669">Daelim</option><option value="29670">Diriyah</option><option value="29671">Shraiee</option><option value="29672">Al Hofuf</option><option value="29673">Al Jubail</option><option value="29674">Ras Tanura</option><option value="29675">Taroot</option><option value="29676">Ras Al Kheir</option><option value="29677">Qariya Al Olaya</option><option value="29678">Qaysoomah</option><option value="29679">Al Majmaah</option><option value="29680">Al Qassim</option><option value="29681">Buraydah</option><option value="29682">Hafar Al Batin</option><option value="29683">Shaqraa</option><option value="29684">Dereiyeh</option><option value="29686">Mecca</option><option value="29687">Abqaiq</option><option value="29688">Ad Diriyah</option><option value="29689">Afif</option><option value="29690">AhadRafidah</option><option value="29691">Ain Dar</option><option value="29692">Al Bahah</option><option value="29693">Al Dalemya</option><option value="29694">Al Jowf</option><option value="29695">Alghat</option><option value="29696">AlRass</option><option value="29697">Artawiah</option><option value="29698">Aseer</option><option value="29699">Ayn Fuhayd</option><option value="29700">Buqayq</option><option value="29701">Dumah Al Jandal</option><option value="29702">Hail</option><option value="29703">Harad</option><option value="29704">Hareeq</option><option value="29705">Haweyah</option><option value="29706">Hawtat Bani Tamim</option><option value="29707">Horaimla</option><option value="29708">Hotat Sudair</option><option value="29709">Jalajel</option><option value="29710">Othmanyah</option><option value="29711">Qarah</option><option value="29712">Qasab</option><option value="29713">Quweieh</option><option value="29714">Remah</option><option value="29715">Riyadh Al Khabra</option><option value="29716">Rowdat Sodair</option><option value="29717">Rwaydah</option><option value="29718">Safanyah</option><option value="29719">Safwa</option><option value="29720">Sajir</option><option value="29721">Shefa</option><option value="29722">Sulaiyl</option><option value="29723">Tanuma</option><option value="29724">Tarut</option><option value="29725">Thadek</option><option value="29726">Thumair</option><option value="29727">Toraif</option><option value="29728">Udhaliyah</option><option value="29729">Um Aljamajim</option><option value="29730">Uqlat Al Suqur</option><option value="29731">Uyun</option><option value="29732">Wadi El Dwaser</option><option value="29733">Mubaraz</option><option value="29734">Nabiya</option><option value="29735">Batha</option><option value="29736">Awamiah</option><option value="29737">Salwa</option><option value="29738">Anak</option><option value="29740">Badaya</option><option value="29741">Beijing</option><option value="29742">Bishah</option><option value="29743">Guangzhou</option><option value="29744">Hofuf</option><option value="29745">Hong Kong</option><option value="29746">Istanbul</option><option value="29747">Midinhab</option><option value="29748">Mrat</option><option value="29749">Muhayil</option><option value="29750">Mulaija</option><option value="29751">Salbookh</option><option value="29752">Sarar</option><option value="29753">Shanghai</option><option value="29754">Abu Dhabi</option><option value="29755">Nairiyah</option><option value="29756">Rijal Almaa</option><option value="29757">Dhurma</option><option value="29758">Mahd Ad Dhahab</option><option value="29759">Rayn</option><option value="29760">Rabigh</option><option value="29761">Ranyah</option><option value="29762">Al Jumum</option><option value="29766">Al Jafr</option><option value="29767">Al Ruqi</option><option value="29768">At Tuwal</option><option value="29769">Al Dayer</option><option value="29770">Atawlah</option><option value="29771">Bad</option><option value="29772">Badar Hunain</option><option value="29773">Badr</option><option value="29774">Bahrain Causeway</option><option value="29775">Bani Malek</option><option value="29776">Bariq</option><option value="29777">Bellasmar</option><option value="29778">Bijadiyah</option><option value="29779">Dammam Airport</option><option value="29780">Darb</option><option value="29781">Dhahran Al Janoub</option><option value="29782">Dhamad</option><option value="29783">Dilam</option><option value="29784">Dukhnah</option><option value="29785">Farasan</option><option value="29786">Haditha</option><option value="29787">Halit Ammar</option><option value="29788">Hanakiyah</option><option value="29789">Haql</option><option value="29790">Hawtat Sudayr</option><option value="29791">Jadidah Arar</option><option value="29792">Jash</option><option value="29793">Kamil</option><option value="29794">Khabra</option><option value="29795">Khamasin</option><option value="29796">Khayber</option><option value="29797">Khulais</option><option value="29798">Khurmah</option><option value="29799">King Khalid City</option><option value="29800">Majardah</option><option value="29801">Mandaq</option><option value="29802">Masturah</option><option value="29803">Mudhaylif</option><option value="29804">Mukhwah</option><option value="29805">Muneefa</option><option value="29806">Muwayh</option><option value="29807">Nabaniya</option><option value="29808">Nabhaniah</option><option value="29809">Nakeea</option><option value="29810">Nifi</option><option value="29811">Qilwah</option><option value="29812">Rafayaa Al Gimsh</option><option value="29813">Riyadh Airport</option><option value="29814">Rumah</option><option value="29815">Saira</option><option value="29816">Samtah</option><option value="29817">Sapt Al Alaya</option><option value="29818">Sarat Abida</option><option value="29819">Sayirah</option><option value="29820">Sayl Al Kabir</option><option value="29821">Shaibah</option><option value="29822">Shedgum</option><option value="29823">Shuqayq</option><option value="29824">Tabarjal</option><option value="29825">Tanajib</option><option value="29826">Tarib</option><option value="29827">Tathlith</option><option value="29828">Turbah</option><option value="29829">Ula</option><option value="29830">Uthmaniyah</option><option value="29831">Uyun Al Jiwa</option><option value="29832">Wadi Bin Hashbal</option><option value="29833">Wajh</option><option value="29834">Duba</option><option value="29835">Al Dayer</option><option value="29836">Samtah</option><option value="29837">Ula</option><option value="29838">Qunfotha</option><option value="29839">Qunfudhah</option><option value="29840">Mudhaylif</option><option value="29841">Majardah</option><option value="29842">bellasmar</option><option value="29843">Mukhwah</option><option value="29844">Al Birk</option></select>
				</td>  
				<td colspan="3" style="display:none;">
					<span style="display:none;" id="search_val"> 
					<input type="text" name="search_val" id="search_val_data" placeholder="Enter AWB no." class="form-control" onfocus="this.value=''" value=""></span>
					<span id="search_val_drop" style="display:none;"> <select name="main_status" id="main_status_data" class="form-control  input-lg" onchange="status_subcat_bulk(this.value);">
					<option value="" selected="selected">Please Select Status</option><option value="1">Not Delivered</option><option value="3">On Process</option><option value="4">Pick Up Collected</option><option value="5">Out for delivery</option><option value="7">Shelve</option><option value="8">IN Transit</option><option value="10">Hold for pickup</option><option value="11">Delivered</option><option value="13">Received Inbound</option><option value="14">Ready For Delivery </option><option value="15">General Update</option><option value="20">Booked-reverse pick</option><option value="21"> Cancelled as per Client request.</option><option value="24">Return from Delivery station</option><option value="25">Under Investigation</option></select></span>
					<span id="schedule" style="display:none;"> 
						<select name="schedule" id="schedule_value" class="form-control input-lg">
						<option value="">Please Select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
						</select>
					</span>
					<span id="onhold" style="display:none;"> 
						<select name="onhold" id="onhold_value" class="form-control input-lg">
						<option value="">Please Select</option>
						<option value="YES">Yes</option>
						<option value="NO">No</option>
						</select>
					</span>
				</td> 
				<td colspan="1" style="text-align:center;"><br>
					<input type="submit" name="Submit" value="Search" class="btn btn-primary btn-rounded" style="">
					<label><div id="search_val" style="display:inline;"></div></label>
				</td>
				
				<form method="post" action=""></form> 
				<input type="hidden" name="pageval" id="pagevalid2" value="0">
				<td colspan="1" style="text-align:center; ">
					<input type="submit" name="delete_cust" class="btn btn-danger btn-rounded" value="Delete" onclick="return confirm('Do You  want to delete ?');"></td>
				<td colspan="1" style="text-align:center;"><input type="submit" name="bulk_print" class="btn btn-warning btn-rounded" value="Bulk Printing"></td>        
				<td colspan="4">     
					<div class="row">        
						<div class="col-md-5">
							<input type="date" name="bt_date1" class="form-control" id="search_date" value=""><br>
							<input type="date" name="bt_date2" class="form-control" id="search_date" value="">
						</div>        
						<div class="col-md-4" style="margin-top: 25px;">
							<input type="submit" name="bt_search" value="Search Date" class="btn btn-info btn-rounded">
						</div> 
					</div>								
				</td>
			</tr>
			
			
        <tr>
        <th> 
        <input type="checkbox" onclick="toggle(this)" name="selectAll[]" value="">
        <br>
        Select All</th>
        <th>Booking Date</th>                                    
        <th>Deliverd Date </th>
        <th>Driver</th>
        <th>Driver Supplier</th>
        <th>Booking Id</th>
        <th> 
         
        <a href=""> Awb No. <img src=""></a></th>
        <th>Destination</th>
        <th> 
         
         <a href=""> Sender <img src="" style="float:right;"> </a></th>
        <th>Reciever</th>
        <th>Status</th>
        <th>COD Amount</th>
        <th>pay Status</th>
        <th>POD</th>
        <th>Actions</th>
        </tr>
        
		</thead>
        
        <tbody>
        <tr>
        <td>1<br>
        <input type="checkbox" name="update_all[]" id="update_all" value="217942"></td>
        <td> Thu, 15- Aug -2019</td>
        
        <td> 
        Sat, 17- Aug -2019
        </td>
        
        <td>Ali Raza</td>
        <td></td>
        <td>A-14082019-00013385</td>
        <td><a href="" target="_blank">TAM3613512206</a><br></td>
        <td> Makkah</td>
        <td>Kaaf Meem</td>
        <td>هبه مطيوري</td>
        <td style="background-color:#0F9; ">POD</td>
         <td>0.00</td>
                
        <td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">Pending</span></td>
        <td>No</td>
        <td>
					<div class="btn-group dropdown">
					<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          </button>
                                        <div class="dropdown-menu w-210p">
                                            
                                            <a class="dropdown-item" href="#">Edit</a>
						<a class="dropdown-item" href="#">Delete</a>
						<a class="dropdown-item" href="#">LabelA4</a>
						<a class="dropdown-item" href="#">Label4*6</a>
						<a class="dropdown-item" href="#">Update</a>
						<a class="dropdown-item" href="#">SMS</a>
						<a class="dropdown-item" href="#">Attach File</a>
						<a class="dropdown-item" href="#">On Hold</a>
						<a class="dropdown-item" href="#">Transfer Shipment</a>
                                        </div>
                                    </div>
					</td>
        </tr>
		
		
        <tr>
        <td>2<br>
        <input type="checkbox" name="update_all[]" id="update_all" value="217901"></td>
        <td>Thu, 15- Aug -2019</td>
        
        <td> 
        Sat, 17- Aug -2019
        </td>
        
        <td>Abdulwuhab Mohammed</td>
        <td></td>
        <td>66465</td>
        <td><a href="" target="_blank">TAM8044495246</a><br></td>
        <td> Mecca</td>
        <td>Online Shopping KSA</td>
        <td>M Shaheen</td>
        <td style="background-color:#F00; ">POD</td>
        <td>169.00</td>
                
        <td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">Pending</span></td>
        <td>No</td>
        <td>
					<div class="btn-group dropdown">
					<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          </button>
                                        <div class="dropdown-menu w-210p">
                                            
                                            <a class="dropdown-item" href="#">Edit</a>
						<a class="dropdown-item" href="#">Delete</a>
						<a class="dropdown-item" href="#">LabelA4</a>
						<a class="dropdown-item" href="#">Label4*6</a>
						<a class="dropdown-item" href="#">Update</a>
						<a class="dropdown-item" href="#">SMS</a>
						<a class="dropdown-item" href="#">Attach File</a>
						<a class="dropdown-item" href="#">On Hold</a>
						<a class="dropdown-item" href="#">Transfer Shipment</a>
                                        </div>
                                    </div>
					</td>
        </tr>
		
		
        <tr>
        <td>3<br>
        <input type="checkbox" name="update_all[]" id="update_all" value="217870"></td>
        <td>Thu, 15- Aug -2019</td>
        <td> 
        Sat, 17- Aug -2019
        </td>
        <td>Abdulwuhab Mohammed</td>
        <td></td>
        <td>A-14082019-00013372</td>
        <td><a href="" target="_blank">TAM9990658565</a><br></td>
        <td> Makkah</td>
        <td>Kaaf Meem</td>
        <td>مروج المغربي</td>
        <td style="background-color:#0F9; ">POD</td>
        <td>0.00</td>
        <td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">Pending</span></td>
        <td>No </td>
        <td>
					<div class="btn-group dropdown">
					<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          </button>
                                        <div class="dropdown-menu w-210p">
                                            
                                            <a class="dropdown-item" href="#">Edit</a>
						<a class="dropdown-item" href="#">Delete</a>
						<a class="dropdown-item" href="#">LabelA4</a>
						<a class="dropdown-item" href="#">Label4*6</a>
						<a class="dropdown-item" href="#">Update</a>
						<a class="dropdown-item" href="#">SMS</a>
						<a class="dropdown-item" href="#">Attach File</a>
						<a class="dropdown-item" href="#">On Hold</a>
						<a class="dropdown-item" href="#">Transfer Shipment</a>
                                        </div>
                                    </div>
					</td>
        </tr>
		
		
        <tr>
        <td>4  <br>
        <input type="checkbox" name="update_all[]" id="update_all" value="217854"></td>
        <td>Thu, 15- Aug -2019</td>
        <td> 
        Sat, 17- Aug -2019
        </td>
        <td>Muhammad kashif</td>
        <td></td>
        <td>TO286</td>
        <td><a href="" target="_blank">TAM5308396772</a><br></td>
        <td> Jeddah</td>
        <td>Kabayan Shopper</td>
        <td>Kusnadi wijhaya</td>
        <td style="background-color:#F00; ">POD</td>
        <td>470.00</td>
        <td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">Pending</span></td>
        <td>  No </td>
        <td>
					<div class="btn-group dropdown">
					<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          </button>
                                        <div class="dropdown-menu w-210p">
                                            
                                            <a class="dropdown-item" href="#">Edit</a>
						<a class="dropdown-item" href="#">Delete</a>
						<a class="dropdown-item" href="#">LabelA4</a>
						<a class="dropdown-item" href="#">Label4*6</a>
						<a class="dropdown-item" href="#">Update</a>
						<a class="dropdown-item" href="#">SMS</a>
						<a class="dropdown-item" href="#">Attach File</a>
						<a class="dropdown-item" href="#">On Hold</a>
						<a class="dropdown-item" href="#">Transfer Shipment</a>
                                        </div>
                                    </div>
					</td>
        </tr>
		
		
		
        <tr>
        <td>5  <br>
        <input type="checkbox" name="update_all[]" id="update_all" value="217829"></td>
        <td>Thu, 15- Aug -2019</td>
        <td> 
        Sat, 17- Aug -2019
        </td>
        <td>Harun Burhani</td>
        <td></td>
        <td>500428323</td>
        <td><a href="" target="_blank">TAM2323591815</a><br></td>
        <td> Jeddah</td>
        <td>Ibrahim Al-Qurashi Perfume</td>
        <td>Mariam Afandi</td>
        <td style="background-color:#0F9; ">POD</td>
        <td>0.00</td>
        <td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">Pending</span></td>
        <td>  No </td>
        <td>
					<div class="btn-group dropdown">
					<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          </button>
                                        <div class="dropdown-menu w-210p">
                                            
                                            <a class="dropdown-item" href="#">Edit</a>
						<a class="dropdown-item" href="#">Delete</a>
						<a class="dropdown-item" href="#">LabelA4</a>
						<a class="dropdown-item" href="#">Label4*6</a>
						<a class="dropdown-item" href="#">Update</a>
						<a class="dropdown-item" href="#">SMS</a>
						<a class="dropdown-item" href="#">Attach File</a>
						<a class="dropdown-item" href="#">On Hold</a>
						<a class="dropdown-item" href="#">Transfer Shipment</a>
                                        </div>
                                    </div>
					</td>
        </tr>
		
		
        <tr>
        <td>6  <br>
        <input type="checkbox" name="update_all[]" id="update_all" value="217827"></td>
        <td>Thu, 15- Aug -2019</td>
        <td> 
        Sat, 17- Aug -2019
        </td>
        <td>Faisal Nawaz</td>
        <td></td>
        <td>500428542</td>
        <td><a href="" target="_blank">TAM6261407197</a><br></td>
        <td> Makkah</td>
        <td>Ibrahim Al-Qurashi Perfume</td>
        <td>Manal junainah</td>
        <td style="background-color:#0F9; ">POD</td>
        <td>0.00</td>
        <td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">Pending</span></td>
        <td>  No </td>
        <td>
					<div class="btn-group dropdown">
					<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          </button>
                                        <div class="dropdown-menu w-210p">
                                            
                                            <a class="dropdown-item" href="#">Edit</a>
						<a class="dropdown-item" href="#">Delete</a>
						<a class="dropdown-item" href="#">LabelA4</a>
						<a class="dropdown-item" href="#">Label4*6</a>
						<a class="dropdown-item" href="#">Update</a>
						<a class="dropdown-item" href="#">SMS</a>
						<a class="dropdown-item" href="#">Attach File</a>
						<a class="dropdown-item" href="#">On Hold</a>
						<a class="dropdown-item" href="#">Transfer Shipment</a>
                                        </div>
                                    </div>
					</td>
        </tr>
		
		
        <tr>
        <td>7  <br>
        <input type="checkbox" name="update_all[]" id="update_all" value="217826"></td>
        <td>Thu, 15- Aug -2019</td>
        <td> 
        Sat, 17- Aug -2019
        </td>
        <td>Ali Raza</td>
        <td></td>
        <td>500428548</td>
        <td><a href="" target="_blank">TAM6645188983</a><br></td>
        <td> Makkah</td>
        <td>Ibrahim Al-Qurashi Perfume</td>
        <td>Nehal  Mattar</td>
        <td style="background-color:#0F9; ">POD</td>
        <td>0.00</td>
        <td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">Pending</span></td>
        <td>  No </td>
        <td>
					<div class="btn-group dropdown">
					<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          </button>
                                        <div class="dropdown-menu w-210p">
                                            
                                            <a class="dropdown-item" href="#">Edit</a>
						<a class="dropdown-item" href="#">Delete</a>
						<a class="dropdown-item" href="#">LabelA4</a>
						<a class="dropdown-item" href="#">Label4*6</a>
						<a class="dropdown-item" href="#">Update</a>
						<a class="dropdown-item" href="#">SMS</a>
						<a class="dropdown-item" href="#">Attach File</a>
						<a class="dropdown-item" href="#">On Hold</a>
						<a class="dropdown-item" href="#">Transfer Shipment</a>
                                        </div>
                                    </div>
					</td>
        </tr>
        <tr>
		
		
        <td>8  <br>
        <input type="checkbox" name="update_all[]" id="update_all" value="217819"></td>
        <td>Thu, 15- Aug -2019</td>
        <td> 
        Sat, 17- Aug -2019
        </td>
        <td>Harun Burhani</td>
        <td></td>
        <td>500428736</td>
        <td><a href="" target="_blank">TAM1558445149</a><br></td>
        <td> Jeddah</td>
        <td>Ibrahim Al-Qurashi Perfume</td>
        <td>Loulwa Omar</td>
        <td style="background-color:#0F9; ">POD</td>
        <td>0.00</td>
        <td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">Pending</span></td>
        <td>  No </td>
        <td>
					<div class="btn-group dropdown">
					<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          </button>
                                        <div class="dropdown-menu w-210p">
                                            
                                            <a class="dropdown-item" href="#">Edit</a>
						<a class="dropdown-item" href="#">Delete</a>
						<a class="dropdown-item" href="#">LabelA4</a>
						<a class="dropdown-item" href="#">Label4*6</a>
						<a class="dropdown-item" href="#">Update</a>
						<a class="dropdown-item" href="#">SMS</a>
						<a class="dropdown-item" href="#">Attach File</a>
						<a class="dropdown-item" href="#">On Hold</a>
						<a class="dropdown-item" href="#">Transfer Shipment</a>
                                        </div>
                                    </div>
					</td>
        </tr>
		
		
        <tr>
        <td>9  <br>
        <input type="checkbox" name="update_all[]" id="update_all" value="217813"></td>
        <td> Thu, 15- Aug -2019</td>
        <td> 
        Sat, 17- Aug -2019
        </td>
        <td>Amro Ali</td>
        <td></td>
        <td>500429138</td>
        <td><a href="" target="_blank">TAM7100420110</a><br></td>
        <td> Jeddah</td>
        <td>Ibrahim Al-Qurashi Perfume</td>
        <td>Heba Jaha</td>
        <td style="background-color:#0F9; ">POD</td>
        <td>0.00</td>
        <td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">Pending</span></td>
        <td>  No </td>
        <td>
					<div class="btn-group dropdown">
					<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          </button>
                                        <div class="dropdown-menu w-210p">
                                            
                                            <a class="dropdown-item" href="#">Edit</a>
						<a class="dropdown-item" href="#">Delete</a>
						<a class="dropdown-item" href="#">LabelA4</a>
						<a class="dropdown-item" href="#">Label4*6</a>
						<a class="dropdown-item" href="#">Update</a>
						<a class="dropdown-item" href="#">SMS</a>
						<a class="dropdown-item" href="#">Attach File</a>
						<a class="dropdown-item" href="#">On Hold</a>
						<a class="dropdown-item" href="#">Transfer Shipment</a>
                                        </div>
                                    </div>
					</td>
        </tr>
		
		
        <tr>
        <td>10  <br>
        <input type="checkbox" name="update_all[]" id="update_all" value="217796"></td>
        <td>Thu, 15- Aug -2019</td>
        <td> 
        Sat, 17- Aug -2019
        </td>
        <td>Abdulwuhab Mohammed</td>
        <td></td>
        <td>500429055</td>
        <td><a href="" target="_blank">TAM5611611888</a><br></td>
        <td> Makkah</td>
        <td>Ibrahim Al-Qurashi Perfume</td>
        <td>خالد الهلالي</td>
        <td style="background-color:#F00; ">POD</td>
        <td>215.00</td>
        <td><span class="btn btn-danger btn-wth-icon icon-wthot-bg btn-sm btn-rounded btn-xs">Pending</span></td>
        <td>  No </td>
        <td>
					<div class="btn-group dropdown">
					<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          </button>
                                        <div class="dropdown-menu w-210p">
                                            
                                            <a class="dropdown-item" href="#">Edit</a>
						<a class="dropdown-item" href="#">Delete</a>
						<a class="dropdown-item" href="#">LabelA4</a>
						<a class="dropdown-item" href="#">Label4*6</a>
						<a class="dropdown-item" href="#">Update</a>
						<a class="dropdown-item" href="#">SMS</a>
						<a class="dropdown-item" href="#">Attach File</a>
						<a class="dropdown-item" href="#">On Hold</a>
						<a class="dropdown-item" href="#">Transfer Shipment</a>
                                        </div>
                                    </div>
					</td>
        </tr>
		
		
        <tr>
		<td colspan="18" align="center">
        <form name="frm_pagi" action="" method="post">
            <input type="hidden" name="all" value="1">
            <input type="hidden" name="pageval" id="pagevalid" value="0">
        <div class="input-group pagination">
	    <div class="input-group-btn"> 
            <input type="submit" class="btn btn-default" value="‹ Prev">
            <input type="submit" class="btn btn-primary " value="1 " onclick="return callpage(1);">
            <input type="submit" class="btn btn-default center" value="2" onclick="return callpage(2);">
            <input type="submit" class="btn btn-default center" value="3" onclick="return callpage(3);">
            <input type="submit" class="btn btn-default center" value="4" onclick="return callpage(4);">
            <input type="submit" class="btn btn-default center" value="5" onclick="return callpage(5);">

            <input type="submit" class="btn btn-default center" value="1196" onclick="return callpage(1196);">
            <input type="submit" class="btn btn-default center" value="Next ›" onclick="return callpage(2);">
        </div>
	    </div>
        </form>
        </td>
        </tr></tbody>  
        
		</table>
    </div>
	</section>
	<?php include APPPATH.'views/includes/footer.php';?>