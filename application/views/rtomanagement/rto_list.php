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
            <li class="breadcrumb-item active" aria-current="page">DRS Management</li>
			<li class="breadcrumb-item active" aria-current="page"> Show RTO List</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span> Show RTO List</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title"> Show RTO List</h5>
		</div><br>
		 <table class="table table-hover table-bordered mb-0">
				<thead>
					<tr> 
						<form name="" method="post" action=""></form>
						<th class="head1" colspan="2">
						<input type="text" name="search_val" placeholder="DRS Unique id./Route code/City/Driver Name/AWB No." class="form-control" onfocus="this.value=''" value="">
						</th>
						<th class="head1" colspan="2">
						   <select name="desctination_sel" class="form-control" id="desctination_sel">
                           <option value="" selected="selected">Select Destination</option><option value="3">Dammam</option><option value="4">Hayel</option><option value="5">Al Hassa </option><option value="6">Madina</option><option value="7">Jeddah</option><option value="8">Makkah</option><option value="9">Taif</option><option value="10">Arar</option><option value="11">Al Khobar</option><option value="12">Bureida</option><option value="13">Hafer Albaten</option><option value="14">Jubail</option><option value="15">Khafji</option><option value="16">Khamis mushit</option><option value="17">Oneza</option><option value="18">Rass</option><option value="19">Skaka</option><option value="20">Tabuk</option><option value="21">Al Qatif</option><option value="22">Jizan</option><option value="23">Abha</option><option value="24">Yanbu</option><option value="25">Badayeh</option><option value="26">Methneb</option><option value="27">Bukeiriah</option><option value="28">Towal</option><option value="29">Samtta</option><option value="30">Ahd Masarha </option><option value="31">Abo Aresh </option><option value="32">Bqiq</option><option value="33">Sebya</option><option value="34">Besh</option><option value="35">Jizan economic city </option><option value="36">Muhayl Aseer</option><option value="37">Muzahmiah</option><option value="38">Quweya </option><option value="39">Durma</option><option value="40">Laith</option><option value="41">Qunfotha</option><option value="42">Bahra</option><option value="43">Thol</option><option value="44">Baha</option><option value="45">Majmah</option><option value="46">Najran</option><option value="47">Besha</option><option value="48">Beljarshi</option><option value="49">Namas</option><option value="50">Dawadmi</option><option value="51">Shaqra</option><option value="52">Zulfi</option><option value="53">Dawmeh Jandal</option><option value="54">Qurayat </option><option value="55">Turiaf</option><option value="56">Abo Ajram</option><option value="57">Deba</option><option value="58">Taym</option><option value="59">Fulfillment warehouse</option><option value="60">Rafaha</option><option value="61">Sharora</option><option value="62">Wadi Al-Dawaser</option><option value="63">Al aflaj</option><option value="64">Dubai</option><option value="29663">Riyadh</option><option value="29664">Al Kharj</option><option value="29665">Dhahran</option><option value="29666">Seihat</option><option value="29667">Fanateer</option><option value="29668">Oyaynah</option><option value="29669">Daelim</option><option value="29670">Diriyah</option><option value="29671">Shraiee</option><option value="29672">Al Hofuf</option><option value="29673">Al Jubail</option><option value="29674">Ras Tanura</option><option value="29675">Taroot</option><option value="29676">Ras Al Kheir</option><option value="29677">Qariya Al Olaya</option><option value="29678">Qaysoomah</option><option value="29679">Al Majmaah</option><option value="29680">Al Qassim</option><option value="29681">Buraydah</option><option value="29682">Hafar Al Batin</option><option value="29683">Shaqraa</option><option value="29684">Dereiyeh</option><option value="29686">Mecca</option><option value="29687">Abqaiq</option><option value="29688">Ad Diriyah</option><option value="29689">Afif</option><option value="29690">AhadRafidah</option><option value="29691">Ain Dar</option><option value="29692">Al Bahah</option><option value="29693">Al Dalemya</option><option value="29694">Al Jowf</option><option value="29695">Alghat</option><option value="29696">AlRass</option><option value="29697">Artawiah</option><option value="29698">Aseer</option><option value="29699">Ayn Fuhayd</option><option value="29700">Buqayq</option><option value="29701">Dumah Al Jandal</option><option value="29702">Hail</option><option value="29703">Harad</option><option value="29704">Hareeq</option><option value="29705">Haweyah</option><option value="29706">Hawtat Bani Tamim</option><option value="29707">Horaimla</option><option value="29708">Hotat Sudair</option><option value="29709">Jalajel</option><option value="29710">Othmanyah</option><option value="29711">Qarah</option><option value="29712">Qasab</option><option value="29713">Quweieh</option><option value="29714">Remah</option><option value="29715">Riyadh Al Khabra</option><option value="29716">Rowdat Sodair</option><option value="29717">Rwaydah</option><option value="29718">Safanyah</option><option value="29719">Safwa</option><option value="29720">Sajir</option><option value="29721">Shefa</option><option value="29722">Sulaiyl</option><option value="29723">Tanuma</option><option value="29724">Tarut</option><option value="29725">Thadek</option><option value="29726">Thumair</option><option value="29727">Toraif</option><option value="29728">Udhaliyah</option><option value="29729">Um Aljamajim</option><option value="29730">Uqlat Al Suqur</option><option value="29731">Uyun</option><option value="29732">Wadi El Dwaser</option><option value="29733">Mubaraz</option><option value="29734">Nabiya</option><option value="29735">Batha</option><option value="29736">Awamiah</option><option value="29737">Salwa</option><option value="29738">Anak</option><option value="29740">Badaya</option><option value="29741">Beijing</option><option value="29742">Bishah</option><option value="29743">Guangzhou</option><option value="29744">Hofuf</option><option value="29745">Hong Kong</option><option value="29746">Istanbul</option><option value="29747">Midinhab</option><option value="29748">Mrat</option><option value="29749">Muhayil</option><option value="29750">Mulaija</option><option value="29751">Salbookh</option><option value="29752">Sarar</option><option value="29753">Shanghai</option><option value="29754">Abu Dhabi</option><option value="29755">Nairiyah</option><option value="29756">Rijal Almaa</option><option value="29757">Dhurma</option><option value="29758">Mahd Ad Dhahab</option><option value="29759">Rayn</option><option value="29760">Rabigh</option><option value="29761">Ranyah</option><option value="29762">Al Jumum</option><option value="29766">Al Jafr</option><option value="29767">Al Ruqi</option><option value="29768">At Tuwal</option><option value="29769">Al Dayer</option><option value="29770">Atawlah</option><option value="29771">Bad</option><option value="29772">Badar Hunain</option><option value="29773">Badr</option><option value="29774">Bahrain Causeway</option><option value="29775">Bani Malek</option><option value="29776">Bariq</option><option value="29777">Bellasmar</option><option value="29778">Bijadiyah</option><option value="29779">Dammam Airport</option><option value="29780">Darb</option><option value="29781">Dhahran Al Janoub</option><option value="29782">Dhamad</option><option value="29783">Dilam</option><option value="29784">Dukhnah</option><option value="29785">Farasan</option><option value="29786">Haditha</option><option value="29787">Halit Ammar</option><option value="29788">Hanakiyah</option><option value="29789">Haql</option><option value="29790">Hawtat Sudayr</option><option value="29791">Jadidah Arar</option><option value="29792">Jash</option><option value="29793">Kamil</option><option value="29794">Khabra</option><option value="29795">Khamasin</option><option value="29796">Khayber</option><option value="29797">Khulais</option><option value="29798">Khurmah</option><option value="29799">King Khalid City</option><option value="29800">Majardah</option><option value="29801">Mandaq</option><option value="29802">Masturah</option><option value="29803">Mudhaylif</option><option value="29804">Mukhwah</option><option value="29805">Muneefa</option><option value="29806">Muwayh</option><option value="29807">Nabaniya</option><option value="29808">Nabhaniah</option><option value="29809">Nakeea</option><option value="29810">Nifi</option><option value="29811">Qilwah</option><option value="29812">Rafayaa Al Gimsh</option><option value="29813">Riyadh Airport</option><option value="29814">Rumah</option><option value="29815">Saira</option><option value="29816">Samtah</option><option value="29817">Sapt Al Alaya</option><option value="29818">Sarat Abida</option><option value="29819">Sayirah</option><option value="29820">Sayl Al Kabir</option><option value="29821">Shaibah</option><option value="29822">Shedgum</option><option value="29823">Shuqayq</option><option value="29824">Tabarjal</option><option value="29825">Tanajib</option><option value="29826">Tarib</option><option value="29827">Tathlith</option><option value="29828">Turbah</option><option value="29829">Ula</option><option value="29830">Uthmaniyah</option><option value="29831">Uyun Al Jiwa</option><option value="29832">Wadi Bin Hashbal</option><option value="29833">Wajh</option><option value="29834">Duba</option><option value="29835">Al Dayer</option><option value="29836">Samtah</option><option value="29837">Ula</option><option value="29838">Qunfotha</option><option value="29839">Qunfudhah</option><option value="29840">Mudhaylif</option><option value="29841">Majardah</option><option value="29842">bellasmar</option><option value="29843">Mukhwah</option><option value="29844">Al Birk</option></select>
						</th>
						<th class="head1" colspan="2">
						<input type="date" name="search_date" placeholder="Date" class="form-control" onfocus="this.value=''" value="">
						</th>
						
						<th class="head1" colspan="2">
						<input type="date" name="search_date1" placeholder="Date" class="form-control" onfocus="this.value=''" value="">
						</th>
						
						<th colspan="1">
						<input type="submit" name="Submit" class="btn btn-primary" value="Search">        </th>
						
					</tr>
					
					<tr>
						<th>#</th>
						<th>Uniqueid</th><th> 
						<a href="">
						Date
						<img src="" style="float:right;">
						</a>
						</th>
						<th>City</th>
						<th>Route code</th>
						<th>Driver</th>
						 <th>Supplier</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				    <tr>
						<td>1</td>
						<td><img src="data:image/jpeg;base64,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"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XDYIJ9</td>
						<td>05- 09 -2019</td>
						<td></td>
						<td>RUH-110</td>
						<td>Fastcoo</td>
						<td></td>
						<td><span class="btn btn-outline-success btn-rounded btn-xs">RTO DONE(7/7)</span></td>
						<td> 
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								</button>
								<div class="dropdown-menu w-210p">
									<a class="dropdown-item" href="#"><i class="fa fa-print fa-fw"></i>&nbsp;Print</a>
									<a class="dropdown-item" href="#"><i class="fa fa-exclamation fa-fw"></i>&nbsp;View</a>
									<a class="dropdown-item" href="#"><i class="fa fa-truck fa-fw" style="color:green;"></i>&nbsp;Delivered</a>
									<a class="dropdown-item" href="#"><i class="fa fa-truck fa-fw" style="color:red;"></i>&nbsp;Not Delivered</a>
									<a class="dropdown-item" href="#"><i class="fa fa-repeat fa-fw"></i>&nbsp;Status Update</a>
									
								</div>
							</div>
						</td>
                    </tr> 
					<tr>
						<td>2</td>
						<td><img src="data:image/jpeg;base64,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"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPX16A</td>
						<td>01- 09 -2019</td>
						<td>Riyadh</td>
						<td>RUH-108</td>
						<td>Mirza</td>
						<td></td>
						<td><span class="btn btn-outline-success btn-rounded btn-xs">RTO DONE(14/14)/span></td>
                        <td>
						    <div class="btn-group dropdown">
								<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								</button>
								<div class="dropdown-menu w-210p">
									<a class="dropdown-item" href="#"><i class="fa fa-print fa-fw"></i>&nbsp;Print</a>
									<a class="dropdown-item" href="#"><i class="fa fa-exclamation fa-fw"></i>&nbsp;View</a>
									<a class="dropdown-item" href="#"><i class="fa fa-truck fa-fw" style="color:green;"></i>&nbsp;Delivered</a>
									<a class="dropdown-item" href="#"><i class="fa fa-truck fa-fw" style="color:red;"></i>&nbsp;Not Delivered</a>
									<a class="dropdown-item" href="#"><i class="fa fa-repeat fa-fw"></i>&nbsp;Status Update</a>
									
								</div>
							</div>
						</td>
                </tr>
				<tr>
					<td>3</td>
					<td><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD//gA+Q1JFQVRPUjogZ2QtanBlZyB2MS4wICh1c2luZyBJSkcgSlBFRyB2NjIpLCBkZWZhdWx0IHF1YWxpdHkK/9sAQwAIBgYHBgUIBwcHCQkICgwUDQwLCwwZEhMPFB0aHx4dGhwcICQuJyAiLCMcHCg3KSwwMTQ0NB8nOT04MjwuMzQy/9sAQwEJCQkMCwwYDQ0YMiEcITIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIy/8AAEQgAUACNAwEiAAIRAQMRAf/EAB8AAAEFAQEBAQEBAAAAAAAAAAABAgMEBQYHCAkKC//EALUQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+v/EAB8BAAMBAQEBAQEBAQEAAAAAAAABAgMEBQYHCAkKC//EALURAAIBAgQEAwQHBQQEAAECdwABAgMRBAUhMQYSQVEHYXETIjKBCBRCkaGxwQkjM1LwFWJy0QoWJDThJfEXGBkaJicoKSo1Njc4OTpDREVGR0hJSlNUVVZXWFlaY2RlZmdoaWpzdHV2d3h5eoKDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uLj5OXm5+jp6vLz9PX29/j5+v/aAAwDAQACEQMRAD8A9/rx+z/5L1rP/YVsP/TXd17BXj9n/wAl61n/ALCth/6a7ugA1j/knnwl/wCwro//AKKNc/4k/wCaF/8Abt/7a10Gsf8AJPPhL/2FdH/9FGuf8Sf80L/7dv8A21oA4DUf+Zj/AOxU0r/3H16/8SP+Sh6H/wBhXQv/AEbf15BqP/Mx/wDYqaV/7j69f+JH/JQ9D/7Cuhf+jb+gDgPiZ/yUP4k/9gq0/wDRtjXr+nf8y5/2Neq/+5CvIPiZ/wAlD+JP/YKtP/RtjXr+nf8AMuf9jXqv/uQoA8/8W/8AIz/Dr/sa9T/9OS1gXn/JQ9G/7KBf/wDo20rf8W/8jP8ADr/sa9T/APTktYF5/wAlD0b/ALKBf/8Ao20oA3/iP/yO95/3Gf8A0y21YHiH/kOeE/8Asn8n/pFdVv8AxH/5He8/7jP/AKZbasDxD/yHPCf/AGT+T/0iuqAO/vv+Q58a/wDsFW//AKRSV5Bq3/JIdM/7dP8A0o1WvX77/kOfGv8A7BVv/wCkUleQat/ySHTP+3T/ANKNVoA+v6KKKACiiigArx+z/wCS9az/ANhWw/8ATXd17BXj9n/yXrWf+wrYf+mu7oANY/5J58Jf+wro/wD6KNc/4k/5oX/27f8AtrXQax/yTz4S/wDYV0f/ANFGuf8AEn/NC/8At2/9taAOA1H/AJmP/sVNK/8AcfXr/wASP+Sh6H/2FdC/9G39eQaj/wAzH/2Kmlf+4+vX/iR/yUPQ/wDsK6F/6Nv6AOA+Jn/JQ/iT/wBgq0/9G2Nev6d/zLn/AGNeq/8AuQryD4mf8lD+JP8A2CrT/wBG2Nev6d/zLn/Y16r/AO5CgDz/AMW/8jP8Ov8Asa9T/wDTktYF5/yUPRv+ygX/AP6NtK3/ABb/AMjP8Ov+xr1P/wBOS1gXn/JQ9G/7KBf/APo20oA3/iP/AMjvef8AcZ/9MttWB4h/5DnhP/sn8n/pFdVv/Ef/AJHe8/7jP/pltqwPEP8AyHPCf/ZP5P8A0iuqAO/vv+Q58a/+wVb/APpFJXkGrf8AJIdM/wC3T/0o1WvX77/kOfGv/sFW/wD6RSV5Bq3/ACSHTP8At0/9KNVoA+v6KKKACiiigArx+z/5L1rP/YVsP/TXd17BXj9n/wAl61n/ALCth/6a7ugA1j/knnwl/wCwro//AKKNc/4k/wCaF/8Abt/7a10Gsf8AJPPhL/2FdH/9FGuf8Sf80L/7dv8A21oA4DUf+Zj/AOxU0r/3H16/8SP+Sh6H/wBhXQv/AEbf15BqP/Mx/wDYqaV/7j69f+JH/JQ9D/7Cuhf+jb+gDgPiZ/yUP4k/9gq0/wDRtjXr+nf8y5/2Neq/+5CvIPiZ/wAlD+JP/YKtP/RtjXr+nf8AMuf9jXqv/uQoA8/8W/8AIz/Dr/sa9T/9OS1gXn/JQ9G/7KBf/wDo20rf8W/8jP8ADr/sa9T/APTktYF5/wAlD0b/ALKBf/8Ao20oA3/iP/yO95/3Gf8A0y21YHiH/kOeE/8Asn8n/pFdVv8AxH/5He8/7jP/AKZbasDxD/yHPCf/AGT+T/0iuqAO/vv+Q58a/wDsFW//AKRSV5Bq3/JIdM/7dP8A0o1WvX77/kOfGv8A7BVv/wCkUleQat/ySHTP+3T/ANKNVoA+v6KKKACiiigArx+z/wCS9az/ANhWw/8ATXd17BXj9n/yXrWf+wrYf+mu7oANY/5J58Jf+wro/wD6KNc/4k/5oX/27f8AtrXQax/yTz4S/wDYV0f/ANFGuf8AEn/NC/8At2/9taAOA1H/AJmP/sVNK/8AcfXr/wASP+Sh6H/2FdC/9G39eQaj/wAzH/2Kmlf+4+vX/iR/yUPQ/wDsK6F/6Nv6AOA+Jn/JQ/iT/wBgq0/9G2Nev6d/zLn/AGNeq/8AuQryD4mf8lD+JP8A2CrT/wBG2Nev6d/zLn/Y16r/AO5CgDz/AMW/8jP8Ov8Asa9T/wDTktYF5/yUPRv+ygX/AP6NtK3/ABb/AMjP8Ov+xr1P/wBOS1gXn/JQ9G/7KBf/APo20oA3/iP/AMjvef8AcZ/9MttWB4h/5DnhP/sn8n/pFdVv/Ef/AJHe8/7jP/pltqwPEP8AyHPCf/ZP5P8A0iuqAO/vv+Q58a/+wVb/APpFJXkGrf8AJIdM/wC3T/0o1WvX77/kOfGv/sFW/wD6RSV5Bq3/ACSHTP8At0/9KNVoA+v6KKKACiiigArx+z/5L1rP/YVsP/TXd17BXj9n/wAl61n/ALCth/6a7ugA1j/knnwl/wCwro//AKKNc/4k/wCaF/8Abt/7a10Gsf8AJPPhL/2FdH/9FGuf8Sf80L/7dv8A21oA4DUf+Zj/AOxU0r/3H16/8SP+Sh6H/wBhXQv/AEbf15BqP/Mx/wDYqaV/7j69f+JH/JQ9D/7Cuhf+jb+gDgPiZ/yUP4k/9gq0/wDRtjXr+nf8y5/2Neq/+5CvIPiZ/wAlD+JP/YKtP/RtjXr+nf8AMuf9jXqv/uQoA8/8W/8AIz/Dr/sa9T/9OS1gXn/JQ9G/7KBf/wDo20rf8W/8jP8ADr/sa9T/APTktYF5/wAlD0b/ALKBf/8Ao20oA3/iP/yO95/3Gf8A0y21YHiH/kOeE/8Asn8n/pFdVv8AxH/5He8/7jP/AKZbasDxD/yHPCf/AGT+T/0iuqAO/vv+Q58a/wDsFW//AKRSV5Bq3/JIdM/7dP8A0o1WvX77/kOfGv8A7BVv/wCkUleQat/ySHTP+3T/ANKNVoA+v6KKKACiiigD/9k="><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QMKG1X</td>
					<td>17- 08 -2019</td>
					<td>Riyadh</td>
					<td>RUH-233</td>
					<td>FAHAD MUBARAK</td>
					<td></td>
					<td><span class="btn btn-outline-success btn-rounded btn-xs">RTO DONE(9/9)</span></td>
					<td>
					    <div class="btn-group dropdown">
								<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								</button>
								<div class="dropdown-menu w-210p">
									<a class="dropdown-item" href="#"><i class="fa fa-print fa-fw"></i>&nbsp;Print</a>
									<a class="dropdown-item" href="#"><i class="fa fa-exclamation fa-fw"></i>&nbsp;View</a>
									<a class="dropdown-item" href="#"><i class="fa fa-truck fa-fw" style="color:green;"></i>&nbsp;Delivered</a>
									<a class="dropdown-item" href="#"><i class="fa fa-truck fa-fw" style="color:red;"></i>&nbsp;Not Delivered</a>
									<a class="dropdown-item" href="#"><i class="fa fa-repeat fa-fw"></i>&nbsp;Status Update</a>
									
								</div>
							</div>
					</td>
                </tr>
				<tr>
					<td>4</td>
					<td><img src="data:image/jpeg;base64,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"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KU2CD9</td>
					<td>17- 08 -2019</td>
					<td>Riyadh</td>
					<td>RUH-224</td>
					<td>Ibrahim Ismail</td>
					<td></td>
					<td><span class="btn btn-outline-success btn-rounded btn-xs">RTO DONE(11/11)</span></td>
					<td>
					   <div class="btn-group dropdown">
								<button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								</button>
								<div class="dropdown-menu w-210p">
									<a class="dropdown-item" href="#"><i class="fa fa-print fa-fw"></i>&nbsp;Print</a>
									<a class="dropdown-item" href="#"><i class="fa fa-exclamation fa-fw"></i>&nbsp;View</a>
									<a class="dropdown-item" href="#"><i class="fa fa-truck fa-fw" style="color:green;"></i>&nbsp;Delivered</a>
									<a class="dropdown-item" href="#"><i class="fa fa-truck fa-fw" style="color:red;"></i>&nbsp;Not Delivered</a>
									<a class="dropdown-item" href="#"><i class="fa fa-repeat fa-fw"></i>&nbsp;Status Update</a>
									
								</div>
							</div>
					</td>
                </tr>
				<tr>
					<td colspan="8" align="center" style="text-align:center;">
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
							<input type="submit" class="btn btn-default center" value="111" onclick="return callpage(111);">
							<input type="submit" class="btn btn-default center" value="Next ›" onclick="return callpage(2);">
							</div></div>
						</form>
					</td>
                </tr>
				</tbody>
		 </table>
    </section>				
<?php include APPPATH.'views/includes/footer.php';?>