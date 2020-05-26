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
			<li class="breadcrumb-item active" aria-current="page"> Show Rating</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span> Show Rating</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title"> Show Rating</h5>
		</div><br>
		<table class="table datatable-show-all table-bordered table-hover datatable-highlight">
           <form method="post" action=""></form>
        
            <thead>
                <tr>
				<th colspan="2">
                 Drivers
         <select name="driver_id" class="form-control input">
					<option value="" selected="selected">Please Select Service</option><option value="1">Ameen-Test</option><option value="4">Basim Sameer</option><option value="5">Rashid Nazir</option><option value="6">Marwan</option><option value="7">Abdul Rehman Ahmed</option><option value="8">Abdullah Yaqoub</option><option value="9">Abdul Majeed Saleh</option><option value="10">Nasser Ali</option><option value="11">Naser Az Alden</option><option value="12">Ali Aedh Abdullah</option><option value="13">Abdulaziz</option><option value="14">Ali Raza</option><option value="15">Fadhal Ahmed</option><option value="33">Mirza</option><option value="50">Waheed Naseer</option><option value="59">Self_Pickup_Riyadh</option><option value="60">Muhannad Ismail </option><option value="61">Ali El Tayeb El Hajj</option><option value="63">Moataz Adam Ali</option><option value="68">Muhannad Ibrahim Ali</option><option value="70">Waleed Awad Farah</option><option value="79">Ibrahim Ahmed</option><option value="103">Mohammed AlSar Ahmed Ibrahim</option><option value="106">SALMAN MOHAMMED OMAR</option><option value="107">MOHAMMED RASHEED SALMEEN</option><option value="108">YAHYA QAYID SALEH</option><option value="109">TURKI ABDULLAH OMAR BIN SUMAYDI</option><option value="110">Self_Pickup_Jeddah</option><option value="111">AHEM SALEH GALLAH AWLAQI</option><option value="112">AHMAD MOHAMAD WADID ALKAZZAZ</option><option value="113">HANI MUHI EDDIN DAHA</option><option value="114">HOSSAM ADELSALAM ALI</option><option value="115">KHALID ABBAS HASSAN</option><option value="116">ELKHAWAD SAEED AHMED</option><option value="117">HANI LUTFI ABDU</option><option value="118">MUSTAFA KAMAL</option><option value="119">Naysara Abdu Hasan</option><option value="120">EHAB SABRY HAFEZ</option><option value="121">OSAMASAEEDAHMED</option><option value="122">MOSAAB AHMED ABDALLA AHMED</option><option value="123">MOHAMMED ABDELFTAH</option><option value="125">AMJAD ESMAI ABDALLA</option><option value="126">RAED YASIR ELNEEL</option><option value="127">AMMAR MOHAMEEED NAJI</option><option value="128">MOHAMED SALAHELDIN HUSSIN</option><option value="129">YASEIR GASMELSEID ABDALLA</option><option value="130">MOTWAKIL MOHAMED OBIED</option><option value="131">MOSTAFARASHED ABDELGELIL</option><option value="132">ADEL MOHAMMED SALEH AHMED</option><option value="133">MOHAMED ABDALLA MOHAMED</option><option value="134">HASHIM IBRAHIM ELAMIN</option><option value="135">MOHAMED TAHA MAHGUB</option><option value="136">MOHAMED KHALIFA MOHAMED</option><option value="137">Bassam Omar</option><option value="138">Fastcoo</option><option value="139">MAZIN HASSAN AWAD</option><option value="140">MUBARAK ELHADI MOHAMMED</option><option value="141">ABDULMAJID ALI MOHAMMED</option><option value="142">RAKAN SABRI SAED</option><option value="143">HAIDER RAZA FAZAL</option><option value="144">AMRO MOHAMED ABOUHUSSEIN</option><option value="145">HASSAN ALI</option><option value="146">AWADH SALEH AHMED</option><option value="149">Tahir Muneer</option><option value="150">Ibrahim Muhammad</option><option value="154">AHTSHAM CHAUDHRY</option><option value="155">WAHEED AWAN</option><option value="156">NAVEED AHMAD</option><option value="157">MALIK SHAHBAZ</option><option value="158">FAIZ UR REHMAN</option><option value="159">ADIL HUSSAIN</option><option value="160">SHEMEER MIDHILAJ</option><option value="161">ROHAIL ANWAR</option><option value="163">MD ROUNKUL</option><option value="164">YASER MOHAMMAD</option><option value="166">NEMER MARWAN</option><option value="167">BANDAR ABBAKAR</option><option value="168">HUSSEIN ABDULLAH</option><option value="170">MOHAMED HANI</option><option value="171">YASER MOHAMMAD</option><option value="172">MOHAMED AHMED</option><option value="173">NEMER MARWAN</option><option value="174">BANDAR ABBAKAR</option><option value="175">HUSSEIN ABDULLAH</option><option value="176">OMER ALSAWY</option><option value="177">MOHAMED HANI</option><option value="178">NIZAR ALI</option><option value="179">YAHYA QAYID SALEH</option><option value="180">Ahmed Saleh</option><option value="181">Kahled Al-Kahlaife</option><option value="182">AWADH SALEH AHMED</option><option value="183">MOHAMMED IBRAHIM </option><option value="184">WAHEED AWAN</option><option value="185">NAVEED AHMAD</option><option value="186">MALIK SHAHBAZ</option><option value="187">FAIZ UR REHMAN</option><option value="188">Khaled Mohammed AlAmmri</option><option value="189">SHEMEER MIDHILAJ</option><option value="190">Khaled Mohammed AlAmmri</option><option value="191">AMANAT ALI</option><option value="192">ATTAS ABOBAKR ALATTAS</option><option value="193">BASIT KHAN</option><option value="194">NIZAR ALI</option><option value="195">Kahled Al-Kahlaife</option><option value="196">ABDOULHADI ALI</option><option value="197">Abdul Salam</option><option value="198">Ali Mustafa</option><option value="230">Amer Hussain</option><option value="231">ZIYAD HAMOUD</option><option value="232">MOHSIN NASEER</option><option value="233">QAZI NAEEM</option><option value="235">SALMAN RASHEED</option><option value="237">ALI MUBYIN</option><option value="238">MOHAMMED MANSOOR</option><option value="239">Muhammad Nabeel</option><option value="240">Umer Farooq</option><option value="241">NASAR MOHAMMAD</option><option value="242">MUDASAR FAROOQ</option><option value="247">Hatem Al faleet</option><option value="248">AHMED MOUSA</option><option value="249">Ibrahim Ismail</option><option value="250">Mohammad hafiz tahir</option><option value="251">Mohammad kashif</option><option value="252">Mohammad Imran</option><option value="253">Muhammad Nabeel</option><option value="254">Amro Ali</option><option value="255">Faisal Muhammed</option><option value="256">THASLEEM AHMED</option><option value="257">Fayez Sultan</option><option value="258">Shanu Pandarakan</option><option value="259">Shamsaan Abdul Rehman</option><option value="260">Omar Khalid</option><option value="261">Tariq Rab Nawaz</option><option value="262">Hani Abdul Latif Ali</option><option value="263">Khaled Amer Ahmed</option><option value="264">Ayman Ahmed</option><option value="265">Muhammad Farhan</option><option value="266">Mohammed Hamed</option><option value="267">Hesahm Mohmoued</option><option value="268">Salah Ahmed</option><option value="269">Zameem Al Attass</option><option value="270">Ibrahim Muhammad</option><option value="271">Faisal Nawaz</option><option value="272">Amir Ahmed</option><option value="273">Adnan Noorulhaq</option><option value="274">Mazen Ghalib</option><option value="275">Mahfooz Rishad</option><option value="276">Ahmed Ali Muhabbat</option><option value="277">Faisal Mustafa</option><option value="278">MAK-200</option><option value="279">MAK-201</option><option value="280">MAK-202</option><option value="281">MAK-203</option><option value="282">MAK-204</option><option value="468">Ahmed Idriss</option><option value="469">MAK-205</option><option value="470">MAK-206</option><option value="471">KRJ1</option><option value="472">KRJ2</option><option value="473">KRJ3</option><option value="474">Salah Osman</option><option value="475">MUHAMMAD ISHAQ</option><option value="476">MUHAMMAD KABIR</option><option value="477">MAHMOUD ALI</option><option value="478">ANEES IBRAHIM</option><option value="479">SHERIF ABDELNABY</option><option value="480">KHALID ALAMEN</option><option value="481">HOSAM ELDIN</option><option value="482">MAZEN MOHSEN</option><option value="483">MOHAMED BADER</option><option value="484">Imad AbulRahman Abdu</option><option value="485">SAEED ABDULLAH AHMED</option><option value="486">Muhannad Ali</option><option value="487">ABDULHAMAAD Salah Alotab</option><option value="488">JAMAAN SALEH</option><option value="489">ALI AIDAROS ABOBAKER</option><option value="490">ABDULHAFITH MOHAMMED</option><option value="491">ABDULLAH SALEEM-ABUZUHAYR</option><option value="492">MOHAMMED ALI</option><option value="493">SALEH MAHMOUD</option><option value="494">MOHAMED ALI</option><option value="495">MUAD MOHAMMAD</option><option value="496">MOHAMMED HASSAN </option><option value="497">ABDEL RAHMAN ASEEL</option><option value="498">SAMI MUBARAK</option><option value="499">FADI KHALID</option><option value="500">MOHAMMED MUSAED</option><option value="501">SALEH ALHADDAR</option><option value="502">OMER HAMID</option><option value="503">Abdalla Ali Mohammed</option><option value="504">Rizq Ali Awadh Abdullah</option><option value="505">AHMED MOHAMMED AWADH</option><option value="506">MAHMOUD GAMAL</option><option value="507">MOSAAB AHMED</option><option value="508">EKHAWAD SAEEDAHMED</option><option value="509">MOHAMED MAHDOH</option><option value="510">AHMED MOSTAFA</option><option value="511">Mazen-Othman</option><option value="512">Essam Alaaudeen</option><option value="513">Zulfiqar Ali Fazal Muhammad</option><option value="514">Ahmed Fath Elbab Mohamed Ali</option><option value="515">Aftab Rajput</option><option value="516">Hasan Duale Hilowie</option><option value="517">Abdulkadir Hussein Hassan</option><option value="518">Ashmeel Ali khan</option><option value="519">Yaseen Mohammed iqbal</option><option value="520">Shibu Shaji Baby</option><option value="521">Abdul Wahab</option><option value="522">Abbas Ali</option><option value="523">Mohamd Aden</option><option value="524">Ahmeddeq Hassan</option><option value="525">Saleh Bamusallam</option><option value="526">Abdulmajed muslam</option><option value="527">Munzir awad</option><option value="528">Amen alawadi</option><option value="529">WALED MOHAMED</option><option value="530">BACHA HUSSAIN</option><option value="531">YASAR MOHAMMAD</option><option value="533">QASIM FAYYAZ</option><option value="534">FAHAD MUBARAK</option><option value="535">MUNEEB ANJUM</option><option value="536">Mohammed Yaslam</option><option value="537">MOHSIN  ALI</option><option value="538">Self_Pickup_Dammam</option><option value="539">Moazam Khalid</option><option value="540">Suheb Ibrahim Saheb</option><option value="541">Asaf Fawaz</option><option value="542">Abdulatef alawlaqi</option><option value="543">Suleman Afzal</option><option value="544">BAJRANGI KUMAR</option><option value="545">TEK PRASAD	</option><option value="546">AHMAD AL FARHAN</option><option value="547">MOHMMAD ABDULBAGE</option><option value="548">MOHMMAD HASSAN</option><option value="549">MURTADA MOHMMAD</option><option value="550">SABER AL JOMALE</option><option value="551">MOHMMAD AL ZAIN</option><option value="552">Abbas Ali Muhammad</option><option value="553">Nabil Mohammed</option><option value="554">Umair Akram</option><option value="555">Khaled Mohammed AlAmmri</option><option value="556">Haneef Mohammed Anu</option><option value="557">Ahmed Hussain Alfarhan</option><option value="558">Hasan Saad AlDeen</option><option value="559">YOUSEF ZIYAD</option><option value="560">Mohmed Mahjob Ali</option><option value="561">RIYADH Abdullah ALjesh</option><option value="562">Abdulrahman Alhamed</option><option value="563">Hussain Mubarak</option><option value="564">TYSYR FAYZ ABYSY</option><option value="565">MOHAMED DIAB TAHA</option><option value="566">MOHAMED GHALIB MOHMED </option><option value="567">AHMED HUSSAIN ALBAYYARI</option><option value="568">Mohamed Noureldin Abdellatif </option><option value="569">MARWAN IBRAHIM ALI</option><option value="570">Bbar Khan</option><option value="571">Ibrar Muhammad</option><option value="572">Ahmed Javed</option><option value="573">Amir Jahangir</option><option value="574">Mohammed Zubayr</option><option value="575">Abdullah Ali</option><option value="576">Ali Ebrahim</option><option value="577">Bilal Ajmal</option><option value="578">Hassam Shahid</option><option value="579">Adnan Faiaz</option><option value="580">Ahsan Riaz</option><option value="582">AHMED ELSAYED MOHAMED</option><option value="583">Syed Shoukat</option><option value="584">Mussadiq Hussain</option><option value="585">Shaikh Aijaz</option><option value="588">sahal ahmed</option><option value="590">Ahmad Al Syed</option><option value="591">osama jameel</option><option value="592">AbdulMaged Abdullah</option><option value="594">Rashad Mahmood</option><option value="595">Zahid Reza</option><option value="596">Saad Abdullah</option><option value="601">Irshad Thekkhe</option><option value="603">AbdulFattah Saif</option><option value="604">AbdulFattah Saif</option><option value="605">DILIP DERRICK</option><option value="606">Mohammad Nouh</option><option value="607">Ezzaddin Saleh</option><option value="608">mehmood erfan</option><option value="609">Asghar ali</option><option value="610">Bu Bakr Ahmed Nasser</option><option value="611">Mohamed Abid</option><option value="612">Mohsen Bahashwan</option><option value="613">Hassan yagoob</option><option value="615">Mohammad Rashid</option><option value="616">Husam Azhari</option><option value="617">sarfaraslamm</option><option value="618">Noufal babu</option><option value="619">NIYAS VADAKKAKATH</option><option value="620">MUHAMMAD TANVEER</option><option value="621">Abdulmajid haider</option><option value="622">OMAR ABDULLAH</option><option value="623">Mohamed Ibrahim</option><option value="624">Hazem Elsayed</option><option value="625">Nijas Ashraf</option><option value="626">Shabeer Palakanday</option><option value="627">Haroon Rasheed</option><option value="628">Mahmood Shamshad</option><option value="629">salah ahmed</option><option value="630">Tirad Ali</option><option value="631">Asad Elgamer </option><option value="633">Faisal Nawaz</option><option value="634">IMTAZ AHMED</option><option value="635">Muhammad Haneefa</option><option value="636">Nazar Gamal Ishag Musa</option><option value="637">Naeem Ahmad</option><option value="638">Islam Awadh Ellgaily</option><option value="639">Ghulam Murtaza</option><option value="640">Ilyas Shaikh</option><option value="641">MOH LUTFI MANZAILJI</option><option value="642">MOHAMMED ABDULQADER</option><option value="643">AHMED BAKRI</option><option value="644">HAITHAM MOHAMMED</option><option value="645">MOHAMED ELSAYED</option><option value="646">ALAA ALDEEN</option><option value="647">AYMAN MOHAMAD</option><option value="648">YOUSIF MAJDY</option><option value="649">Mahmoud Reda</option><option value="656">Mohammad Sadham</option><option value="663">Anoob Manuppa</option><option value="664">Hussain ilyas</option><option value="665">Amro Fawzi</option><option value="667">Orwah Abdulrahim</option><option value="668">Aftrb Rajput</option><option value="669">Mossab Mirgni Osman</option><option value="670">AbuBaker Mouhmed Eltayeb</option><option value="671">Mamdouh Khalid</option><option value="672">Eyed Salih Abdalla</option><option value="673">Zai ur Rehman</option><option value="674">Saif ullah</option><option value="675">Tasawar Abbas</option><option value="676">Ali Akbar</option><option value="677">Mohammad Adnan</option><option value="678">Mohsin Abbas</option><option value="679">Bilal Arshad</option><option value="680">Waqas Ahmed</option><option value="681">Mohammad Asim</option><option value="682">Muhammad Umair</option><option value="683">Muhammad Muneeb</option><option value="684">Mohammad Ali</option><option value="685">Rahan Wllah</option><option value="686">Esam Mumtaz</option><option value="687">Muhammad Ans Idrees</option><option value="688">Nasir Javed</option><option value="714">Abdulwuhab Mohammed</option><option value="715">IBRAHIM AHMAD</option><option value="716">Imtiaz Ahmed</option><option value="717">Shehzad Ahmed</option><option value="718">Rao Mubashar Hussain</option><option value="719">Mawia Mohammed</option><option value="720">Muhammad Imran</option><option value="721">Raja Mansoor</option><option value="722">SAOOD RASHID</option><option value="723">ASIM ISLAM</option><option value="724">IMTIAZ AHMED</option><option value="725">MOHAMMED ASIF</option><option value="728">JAVED ASHRAF</option><option value="729">MOHAMMAD GULAM RASUL</option><option value="730">Fuad Saad Aldeen</option><option value="731">Ali Mahgoub</option><option value="732">Faisal Elias Sabzal Jamal</option><option value="733">Shoaib Zulfiqar Ahmed Lal Khan</option><option value="734">Aiman Abdullah</option><option value="735">Mohammed Ahmed Mahyub</option><option value="736">Mohammed Ali Esmail</option><option value="737">Majed Ahmed</option><option value="738">Ahmed Ahmed Abdalla</option><option value="739">Muhammad Irfan</option><option value="740">Ali Ali Hamedalla</option><option value="746">Shahid abbas muhammad nawaz</option><option value="747">Faisal javed</option><option value="748">Faizan muhammad anwar</option><option value="749">Majed Mohammed Shoei</option><option value="750">Izzatullah Rahmatullah</option><option value="751">Izzatullah Rahmatullah</option><option value="752">Izzatullah Rahmatullah</option><option value="753">ARSALAN ARIF</option><option value="754">SYED NASIR</option><option value="755">SHAHROZ AFZAL</option><option value="756">Azam Baig Mirza</option><option value="757">Mohammaed Ali</option><option value="758">SAMER SALAH</option><option value="759">NAWAF ABDUL MUIN</option><option value="764">ABUL KALAM</option><option value="765">Muhammad Tahir</option><option value="766">Abdul Rahman Khalid</option><option value="767">Adnan Muhamed Idris</option><option value="768">Yousif Nagamaldin</option><option value="769">Fathi Mahmoud</option><option value="770">SAJAD AKRAM JAVED</option><option value="771">ABDUL AZIZ</option><option value="772">Zabihullah rahmatullah</option><option value="773">ABD ALBARE MOHAMMAD</option><option value="774">HAITHM ABDULKREM</option><option value="775">Amir Mohammad</option><option value="776">Muhammad Yousef</option><option value="777">Naeem Ahmed</option><option value="778">Mohammad Abid</option><option value="779">Radwan Ahmed</option><option value="780">Abdulraouf islamuldeen</option><option value="781">Abdul Rahman</option><option value="782">Mohammed Muneer AbdulQader</option><option value="783">Naif Mohammed</option><option value="784">Alwaeed Mohammed Othaman</option><option value="785">Faisal Abdulrehman</option><option value="786">Muhammad Marghoob</option><option value="787">Abdul Salam</option><option value="788">MAJED BASULAYMAN</option><option value="789">ABDUL MASTAN</option><option value="790">AHMAD HAMZA</option><option value="791">Ahmad Hamza Fadelalmola</option><option value="792">Abdullah Muhammad</option><option value="793">Faris Asaad</option><option value="794">Ahmed Muhyialdeen</option><option value="795">Rayan Ibrahim</option><option value="796">ABDIRAHMAN ALI</option><option value="798">test</option><option value="799">Harun Burhani</option><option value="801">Muhammad Imran </option><option value="802">Wael hammad</option><option value="803">Raed Bawazir</option><option value="804">Muhammad Zahoor</option><option value="805">AMMAD ALI</option><option value="806">MIZANUR RAHMAN</option><option value="807">SALAH AHMED</option><option value="809">Sajid hussain</option><option value="811">Muhammad sufyan</option><option value="812">NourUllah Khan</option><option value="813">Rasheed ahmad</option><option value="814">Admin-Dukar</option><option value="815">Abdul Rahman Mohammed</option><option value="816">Malik Umar Taj</option><option value="817">Mirza Aurangzeb</option><option value="818">SAEED ABDU MGMAL AATEFF</option><option value="819">KHALID MOHAMED SULUB</option><option value="820">Mirza Jahangir Mirza Alam</option><option value="821">Ali Ahmed Bakurshum</option><option value="822">Mohammad Esha</option><option value="823">Aqib Pasha Abdul Qader</option><option value="824">Syed Abrar Ahmed</option><option value="825">Mohammad Didarul Alam</option><option value="826">Mujahid Ali</option><option value="827">Adnan Haider</option><option value="828">Rehman Khaliq</option><option value="829">Salahuddin</option><option value="830">Omair akbar</option><option value="831">Mustafa yousaf</option><option value="832">SULIMAN FIDA</option><option value="833">Qasim abid hussain</option><option value="834">Fahad elias</option><option value="835">Abdul aziz</option><option value="839">Umeed Nawab Ziarat Gul</option><option value="840">Ali Raza Sajjad Ashgar </option><option value="841">Muhammad Noman YAseen Muhammad</option><option value="842">Zahid nazim</option><option value="843">Abdullah sulaiman</option><option value="844">Omar mohammad</option><option value="846">SHUJAAT ALI BARKAT ALI </option><option value="847">Muhammad kashif</option><option value="848">Moazam Khalid</option><option value="849">Mohsin Ali</option><option value="850">Muhammad Waqas</option><option value="851">Abdullah Mohammad Alem</option><option value="852">MUHAMMAD NAEEM MUHAMMAD RAFIQUE </option><option value="853">Omar Hafeez Mohammad Hafeez </option><option value="854">Zubair Muhmmad Ashfaq </option><option value="855">Shams Zafar Iqbal </option><option value="857">Awais Tariq Tariq Mahmood </option><option value="858">Zabihullah mohammad</option><option value="859">Muhammad Abdullah</option><option value="860">Saliam sayeed</option><option value="861">Mohamed Sam Al Fasi S. Abdul Cader</option><option value="862">Aftab Rajput saber Mahmood Rajput</option><option value="863">HANISH ULLI-VEETTIL</option><option value="864">SHAMNATH SHIHABUDEEN</option><option value="865">Abdul Shakoor Shaukat-Ali</option><option value="866">Yasir Shoaib Syed Muhammad Shoaib</option><option value="867">Ashmeel Ali Khan</option><option value="868">Muhammad F Khan</option><option value="869">Rami Ahmed</option><option value="870">Khalil Raheem Ali</option><option value="871">Yousef Alami Yousef</option><option value="872">Khalid Abdullah</option><option value="874">Irfan khan sher afzal </option><option value="876">Faisal Alamgir Muhammad Almagir </option><option value="877">Benjamin Benjamin Makur </option></select></th>
        		<th colspan="2">
				Awb No.
            <input type="text" class="form-control" name="search_val" value="" placeholder="Search awb" onfocus="this.value=''"></th>
             <th colspan="1">
			 Rating
        <select name="rating" class="form-control input">
					<option value="" selected="selected">Please Select rating</option>';
	
			
				
				<option value="1">One Star</option>
				<option value="2">Two Star</option>
				<option value="3">Three Star</option>
				<option value="4">Four Star</option>
				<option value="5">Five Star</option>

		
		</select></th>
            	<th colspan="2"><br>
            <input type="submit" name="Submit" class="btn btn-primary" value="Search" onclick="return Valid_search(document.search_form);"></th>
        
    				
              
                </tr>                      
        </thead><thead>
            <tr>
                <th class="head0">Sr.No.</th>
                <th class="head1">Customer/Order</th>
                <th class="head0">Driver Name</th>
                
                <th class="head0">Score</th> 
                <th class="head1">Created Date</th> 
				<th class="head1">Comment</th>
            </tr>
        </thead>
                        
        <tbody>
                            <tr> 
                <td>1</td>
                
                
                <td> <br>#</td> 
                 
				<td></td>
				<td></td>
				


				<td>Aug  4, 2019</td>
				<td></td>
			</tr>
                    <tr> 
                <td>2</td>
                
                
                <td> <br>#</td> 
                 
				<td></td>
				<td></td>
				


				<td>Jul 31, 2019</td>
				<td></td>
			</tr>
                    <tr> 
                <td>3</td>
                
                
                <td> <br>#</td> 
                 
				<td></td>
				<td></td>
				


				<td>Jul 28, 2019</td>
				<td></td>
			</tr>
                    <tr> 
                <td>4</td>
                
                
                <td> <br>#</td> 
                 
				<td></td>
				<td></td>
				


				<td>Jul 25, 2019</td>
				<td></td>
			</tr>
                    <tr> 
                <td>5</td>
                
                
                <td> <br>#</td> 
                 
				<td></td>
				<td></td>
				


				<td>Jul 22, 2019</td>
				<td></td>
			</tr>
                    <tr> 
                <td>6</td>
                
                
                <td> <br>#TAM5377786965</td> 
                 
				<td></td>
				<td><i class="fa fa-star" aria-hidden="true"> <i class="fa fa-star" aria-hidden="true"> <i class="fa fa-star" aria-hidden="true"> <i class="fa fa-star" aria-hidden="true"> <i class="fa fa-star" aria-hidden="true"> </i></i></i></i></i></td>
				


				<td>May  7, 2019</td>
				<td></td>
			</tr>
                    <tr> 
                <td>7</td>
                
                
                <td> <br>#TAM5377786965</td> 
                 
				<td></td>
				<td><i class="fa fa-star" aria-hidden="true"> <i class="fa fa-star" aria-hidden="true"> <i class="fa fa-star" aria-hidden="true"> <i class="fa fa-star" aria-hidden="true"> <i class="fa fa-star" aria-hidden="true"> </i></i></i></i></i></td>
				


				<td>May  4, 2019</td>
				<td>yes it is testing</td>
			</tr>
                    <tr> 
                <td>8</td>
                
                
                <td> <br>#TAM3826547696</td> 
                 
				<td></td>
				<td><i class="fa fa-star" aria-hidden="true"> <i class="fa fa-star" aria-hidden="true"> <i class="fa fa-star" aria-hidden="true"> <i class="fa fa-star" aria-hidden="true"> <i class="fa fa-star" aria-hidden="true"> </i></i></i></i></i></td>
				


				<td>May  4, 2019</td>
				<td>nice delivery</td>
			</tr>
                    <tr> 
                <td>9</td>
                
                
                <td> <br>#TAM5242206010</td> 
                 
				<td></td>
				<td><i class="fa fa-star" aria-hidden="true"> </i></td>
				


				<td>May  3, 2019</td>
				<td></td>
			</tr>
                    <tr>
                <td colspan="9" align="center">
                <form name="frm_pagi" action="" method="post">
                                <input type="hidden" name="pageval" id="pagevalid" value="0">
                                
                </form>
                </td>
            </tr>
        			
        </tbody>
	</table>
</section>		
<?php include APPPATH.'views/includes/footer.php';?>