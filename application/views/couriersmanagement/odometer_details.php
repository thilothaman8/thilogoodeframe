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
            <li class="breadcrumb-item active" aria-current="page">Couriers Management</li>
			<li class="breadcrumb-item active" aria-current="page"> Odo Meter Detail</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span> Odo Meter Detail</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title"> Odo Meter Detail</h5>
		</div><br>
		 <div class="row">
            <div class="col-sm">
                <div class="row">
				<div class="col-md-3">
				<label>Courier Name </label>
                <div class="awesomplete"><input type="text" name="messanger_id" id="show_messanger_dropdown" value="" autofocus="" data-list="RUH-109/Ameen-Test/1,JED-1/Basim Sameer/4,JED-2/Rashid Nazir/5,JED-3/Marwan/6,JED-4/Abdul Rehman Ahmed/7,JED-5/Abdullah Yaqoub/8,JED-6/Abdul Majeed Saleh/9,JED-7/Nasser Ali/10,JED-8/Naser Az Alden/11,JED-9/Ali Aedh Abdullah/12,JED-10/Abdulaziz/13,JED-11/Ali Raza/14,JED-12/Fadhal Ahmed/15,RUH-108/Mirza/33,JED-13/Waheed Naseer/50,RUH-100/Self_Pickup_Riyadh/59,RUH-38/Muhannad Ismail /60,RUH-39/Ali El Tayeb El Hajj/61,RUH-41/Moataz Adam Ali/63,RUH-46/Muhannad Ibrahim Ali/68,RUH-48/Waleed Awad Farah/70,JED-14/Ibrahim Ahmed/79,RUH-79/Mohammed AlSar Ahmed Ibrahim/103,RUH-82/SALMAN MOHAMMED OMAR/106,RUH-83/MOHAMMED RASHEED SALMEEN/107,RUH-84/YAHYA QAYID SALEH/108,RUH-85/TURKI ABDULLAH OMAR BIN SUMAYDI/109,JED-16/Self_Pickup_Jeddah/110,RUH-86/AHEM SALEH GALLAH AWLAQI/111,RUH-87/AHMAD MOHAMAD WADID ALKAZZAZ/112,RUH-88/HANI MUHI EDDIN DAHA/113,RUH-89/HOSSAM ADELSALAM ALI/114,RUH-90/KHALID ABBAS HASSAN/115,RUH-91/ELKHAWAD SAEED AHMED/116,RUH-92/HANI LUTFI ABDU/117,RUH-93/MUSTAFA KAMAL/118,RUH-94/Naysara Abdu Hasan/119,RUH-95/EHAB SABRY HAFEZ/120,RUH-96/OSAMASAEEDAHMED/121,RUH-97/MOSAAB AHMED ABDALLA AHMED/122,RUH-98/MOHAMMED ABDELFTAH/123,RUH-101/AMJAD ESMAI ABDALLA/125,RUH-102/RAED YASIR ELNEEL/126,RUH-103/AMMAR MOHAMEEED NAJI/127,RUH-104/MOHAMED SALAHELDIN HUSSIN/128,RUH-99/YASEIR GASMELSEID ABDALLA/129,RUH-105/MOTWAKIL MOHAMED OBIED/130,RUH-106/MOSTAFARASHED ABDELGELIL/131,RUH-107/ADEL MOHAMMED SALEH AHMED/132,RUH-108/MOHAMED ABDALLA MOHAMED/133,RUH-A-1/HASHIM IBRAHIM ELAMIN/134,RUH-A-2/MOHAMED TAHA MAHGUB/135,RUH-A-3/MOHAMED KHALIFA MOHAMED/136,JED-17/Bassam Omar/137,RUH-110/Fastcoo/138,RUH-A-4/MAZIN HASSAN AWAD/139,RUH-A-5/MUBARAK ELHADI MOHAMMED/140,RUH-A-6/ABDULMAJID ALI MOHAMMED/141,RUH-A-7/RAKAN SABRI SAED/142,RUH-A-8/HAIDER RAZA FAZAL/143,RUH-A-9/AMRO MOHAMED ABOUHUSSEIN/144,RUH-A-11/HASSAN ALI/145,RUH-A-10/AWADH SALEH AHMED/146,DMM-2/Tahir Muneer/149,JED-22/Ibrahim Muhammad/150,2407509690/AHTSHAM CHAUDHRY/154,2290030861/WAHEED AWAN/155,2248706174/NAVEED AHMAD/156,2286429465/MALIK SHAHBAZ/157,2391181480/FAIZ UR REHMAN/158,2395521350/ADIL HUSSAIN/159,2168473193/SHEMEER MIDHILAJ/160,2085242739/ROHAIL ANWAR/161,2237604364/MD ROUNKUL/163,2058531589/YASER MOHAMMAD/164,2110474463/NEMER MARWAN/166,2137995110/BANDAR ABBAKAR/167,2320172725/HUSSEIN ABDULLAH/168,2264488335/MOHAMED HANI/170,RUH-14/YASER MOHAMMAD/171,RUH-20/MOHAMED AHMED/172,RUH-6/NEMER MARWAN/173,RUH-4/BANDAR ABBAKAR/174,RUH-3/HUSSEIN ABDULLAH/175,RUH-19/OMER ALSAWY/176,RUH-13/MOHAMED HANI/177,RUH-12/NIZAR ALI/178,RUH-2/YAHYA QAYID SALEH/179,RUH-5/Ahmed Saleh/180,RUH-9/Kahled Al-Kahlaife/181,RUH-24/AWADH SALEH AHMED/182,RUH-18/MOHAMMED IBRAHIM /183,RUH-15/WAHEED AWAN/184,RUH-11/NAVEED AHMAD/185,RUH-10/MALIK SHAHBAZ/186,RUH-16/FAIZ UR REHMAN/187,RUH-17/Khaled Mohammed AlAmmri/188,RUH-23/SHEMEER MIDHILAJ/189,RUH-22/Khaled Mohammed AlAmmri/190,RUH-7/AMANAT ALI/191,RUH-21/ATTAS ABOBAKR ALATTAS/192,RUH-8/BASIT KHAN/193,RUH-29/NIZAR ALI/194,RUH-17/Kahled Al-Kahlaife/195,RUH-A-62/ABDOULHADI ALI/196,JED-28/Abdul Salam/197,RUH-210/Ali Mustafa/198,JED-21/Amer Hussain/230,RUH-217/ZIYAD HAMOUD/231,RUH-212/MOHSIN NASEER/232,RUH-214/QAZI NAEEM/233,RUH-215/SALMAN RASHEED/235,RUH-218/ALI MUBYIN/237,RUH-108/MOHAMMED MANSOOR/238,DMM-3/Muhammad Nabeel/239,DMM-4/Umer Farooq/240,RUH-220/NASAR MOHAMMAD/241,RUH-221/MUDASAR FAROOQ/242,RUH-222/Hatem Al faleet/247,RUH-223/AHMED MOUSA/248,RUH-224/Ibrahim Ismail/249,JED-200/Mohammad hafiz tahir/250,JED-201/Mohammad kashif/251,JED-202/Mohammad Imran/252,JED-203/Muhammad Nabeel/253,JED-204/Amro Ali/254,JED-205/Faisal Muhammed/255,JED-206/THASLEEM AHMED/256,JED-207/Fayez Sultan/257,JED-208/Shanu Pandarakan/258,JED-209/Shamsaan Abdul Rehman/259,JED-210/Omar Khalid/260,JED-211/Tariq Rab Nawaz/261,JED-212/Hani Abdul Latif Ali/262,JED-213/Khaled Amer Ahmed/263,JED-214/Ayman Ahmed/264,JED-215/Muhammad Farhan/265,JED-216/Mohammed Hamed/266,JED-217/Hesahm Mohmoued/267,JED-218/Salah Ahmed/268,JED-219/Zameem Al Attass/269,JED-220/Ibrahim Muhammad/270,JED-221/Faisal Nawaz/271,JED-222/Amir Ahmed/272,JED-223/Adnan Noorulhaq/273,JED-224/Mazen Ghalib/274,JED-225/Mahfooz Rishad/275,JED-226/Ahmed Ali Muhabbat/276,JED-227/Faisal Mustafa/277,MAK-200/MAK-200/278,MAK-201/MAK-201/279,MAK-202/MAK-202/280,MAK-203/MAK-203/281,MAK-204/MAK-204/282,RUH-225/Ahmed Idriss/468,MAK-205/MAK-205/469,MAK-206/MAK-206/470,KRJ1/KRJ1/471,KRJ2/KRJ2/472,KRJ3/KRJ3/473,RUH-226/Salah Osman/474,RUH-227/MUHAMMAD ISHAQ/475,RUH-228/MUHAMMAD KABIR/476,RUH-300/MAHMOUD ALI/477,RUH-301/ANEES IBRAHIM/478,RUH-302/SHERIF ABDELNABY/479,RUH-303/KHALID ALAMEN/480,RUH-304/HOSAM ELDIN/481,RUH-305/MAZEN MOHSEN/482,RUH-306/MOHAMED BADER/483,RUH-307/Imad AbulRahman Abdu/484,RUH-308/SAEED ABDULLAH AHMED/485,RUH-309/Muhannad Ali/486,RUH-310/ABDULHAMAAD Salah Alotab/487,RUH-311/JAMAAN SALEH/488,RUH-312/ALI AIDAROS ABOBAKER/489,RUH-313/ABDULHAFITH MOHAMMED/490,RUH-314/ABDULLAH SALEEM-ABUZUHAYR/491,RUH-315/MOHAMMED ALI/492,RUH-316/SALEH MAHMOUD/493,RUH-317/MOHAMED ALI/494,RUH-318/MUAD MOHAMMAD/495,RUH-319/MOHAMMED HASSAN /496,RUH-320/ABDEL RAHMAN ASEEL/497,RUH-321/SAMI MUBARAK/498,RUH-322/FADI KHALID/499,RUH-323/MOHAMMED MUSAED/500,RUH-324/SALEH ALHADDAR/501,RUH-325/OMER HAMID/502,RUH-326/Abdalla Ali Mohammed/503,RUH-327/Rizq Ali Awadh Abdullah/504,RUH-328/AHMED MOHAMMED AWADH/505,RUH-329/MAHMOUD GAMAL/506,RUH-330/MOSAAB AHMED/507,RUH-331/EKHAWAD SAEEDAHMED/508,RUH-332/MOHAMED MAHDOH/509,RUH-333/AHMED MOSTAFA/510,RUH-334/Mazen-Othman/511,RUH-335/Essam Alaaudeen/512,DMM-200/Zulfiqar Ali Fazal Muhammad/513,DMM-201/Ahmed Fath Elbab Mohamed Ali/514,DMM-202/Aftab Rajput/515,DMM-203/Hasan Duale Hilowie/516,DMM-204/Abdulkadir Hussein Hassan/517,DMM-205/Ashmeel Ali khan/518,DMM-206/Yaseen Mohammed iqbal/519,DMM-207/Shibu Shaji Baby/520,DMM-208/Abdul Wahab/521,DMM-209/Abbas Ali/522,DMM-210/Mohamd Aden/523,DMM-211/Ahmeddeq Hassan/524,DMM-212/Saleh Bamusallam/525,DMM-213/Abdulmajed muslam/526,DMM-214/Munzir awad/527,DMM-215/Amen alawadi/528,Ruh-229/WALED MOHAMED/529,RUH-230/BACHA HUSSAIN/530,Ruh-231/YASAR MOHAMMAD/531,RUH-232/QASIM FAYYAZ/533,RUH-233/FAHAD MUBARAK/534,RUH-234/MUNEEB ANJUM/535,DMM-216/Mohammed Yaslam/536,DMM-217/MOHSIN  ALI/537,DMM-250/Self_Pickup_Dammam/538,DMM-219/Moazam Khalid/539,DMM-220/Suheb Ibrahim Saheb/540,DMM-221/Asaf Fawaz/541,DMM-222/Abdulatef alawlaqi/542,DMM-223/Suleman Afzal/543,RUH-370/BAJRANGI KUMAR/544,RUH-371/TEK PRASAD	/545,RUH-372/AHMAD AL FARHAN/546,RUH-373/MOHMMAD ABDULBAGE/547,RUH-374/MOHMMAD HASSAN/548,RUH-375/MURTADA MOHMMAD/549,RUH-376/SABER AL JOMALE/550,RUH-377/MOHMMAD AL ZAIN/551,DMM-226/Abbas Ali Muhammad/552,DMM-227/Nabil Mohammed/553,DMM-228/Umair Akram/554,RUH-378/Khaled Mohammed AlAmmri/555,DMM-229/Haneef Mohammed Anu/556,RUH-379/Ahmed Hussain Alfarhan/557,RUH-380/Hasan Saad AlDeen/558,RUH-381/YOUSEF ZIYAD/559,RUH-382/Mohmed Mahjob Ali/560,RUH-383/RIYADH Abdullah ALjesh/561,RUH-384/Abdulrahman Alhamed/562,RUH-385/Hussain Mubarak/563,RUH-386/TYSYR FAYZ ABYSY/564,RUH-387/MOHAMED DIAB TAHA/565,RUH-388/MOHAMED GHALIB MOHMED /566,RUH-389/AHMED HUSSAIN ALBAYYARI/567,RUH-390/Mohamed Noureldin Abdellatif /568,RUH-391/MARWAN IBRAHIM ALI/569,JED-228/Bbar Khan/570,Jed-229/Ibrar Muhammad/571,Jed-230/Ahmed Javed/572,Jed-231/Amir Jahangir/573,jed-232/Mohammed Zubayr/574,Jed-233/Abdullah Ali/575,Jed-234/Ali Ebrahim/576,Jed-235/Bilal Ajmal/577,Jed-236/Hassam Shahid/578,Jed-237/Adnan Faiaz/579,Jed-238/Ahsan Riaz/580,RUH-392/AHMED ELSAYED MOHAMED/582,Jed-239/Syed Shoukat/583,DMM-230/Mussadiq Hussain/584,DMM-231/Shaikh Aijaz/585,jed-240/sahal ahmed/588,RUH-293/Ahmad Al Syed/590,jed-242/osama jameel/591,DMM-232/AbdulMaged Abdullah/592,DMM-233/Rashad Mahmood/594,DMM-234/Zahid Reza/595,jed-241/Saad Abdullah/596,DMM-236/Irshad Thekkhe/601,RUH-393/AbdulFattah Saif/603,JED-393/AbdulFattah Saif/604,DMM-235/DILIP DERRICK/605,JED-243/Mohammad Nouh/606,RUH-394/Ezzaddin Saleh/607,RUH-395/mehmood erfan/608,JED-244/Asghar ali/609,RUH-296/Bu Bakr Ahmed Nasser/610,DMM-237/Mohamed Abid/611,DMM-238/Mohsen Bahashwan/612,RUH-297/Hassan yagoob/613,JED-245/Mohammad Rashid/615,JED-246/Husam Azhari/616,JED-247/sarfaraslamm/617,jed-248/Noufal babu/618,JED-249/NIYAS VADAKKAKATH/619,Jed-250/MUHAMMAD TANVEER/620,Jed-251/Abdulmajid haider/621,Jed-252/OMAR ABDULLAH/622,RUH-396/Mohamed Ibrahim/623,RUH-397/Hazem Elsayed/624,Jed-253/Nijas Ashraf/625,jed-254/Shabeer Palakanday/626,jed-255/Haroon Rasheed/627,jed-256/Mahmood Shamshad/628,jed-257/salah ahmed/629,RUH-398/Tirad Ali/630,RUH-399/Asad Elgamer /631,JED-258/Faisal Nawaz/633,JED-259/IMTAZ AHMED/634,JED-260/Muhammad Haneefa/635,RUH-400/Nazar Gamal Ishag Musa/636,DMM-239/Naeem Ahmad/637,DMM-240/Islam Awadh Ellgaily/638,JED-261/Ghulam Murtaza/639,JED-262/Ilyas Shaikh/640,RUH-401/MOH LUTFI MANZAILJI/641,RUH-402/MOHAMMED ABDULQADER/642,RUH-403/AHMED BAKRI/643,RUH-404/HAITHAM MOHAMMED/644,RUH-405/MOHAMED ELSAYED/645,RUH-406/ALAA ALDEEN/646,RUH-407/AYMAN MOHAMAD/647,RUH-408/YOUSIF MAJDY/648,RUH-409/Mahmoud Reda/649,JED-263/Mohammad Sadham/656,JED-264/Anoob Manuppa/663,JED-265/Hussain ilyas/664,RUH-410/Amro Fawzi/665,RUH-412/Orwah Abdulrahim/667,DMM-241/Aftrb Rajput/668,RUH-413/Mossab Mirgni Osman/669,RUH-414/AbuBaker Mouhmed Eltayeb/670,RUH-415/Mamdouh Khalid/671,RUH-416/Eyed Salih Abdalla/672,DMM-242/Zai ur Rehman/673,DMM-243/Saif ullah/674,DMM-244/Tasawar Abbas/675,DMM-245/Ali Akbar/676,DMM-246/Mohammad Adnan/677,DMM-247/Mohsin Abbas/678,DMM-248/Bilal Arshad/679,DMM-249/Waqas Ahmed/680,DMM-251/Mohammad Asim/681,DMM-252/Muhammad Umair/682,DMM-253/Muhammad Muneeb/683,DMM-254/Mohammad Ali/684,DMM-255/Rahan Wllah/685,DMM-256/Esam Mumtaz/686,DMM-257/Muhammad Ans Idrees/687,DMM-258/Nasir Javed/688,JED-267/Abdulwuhab Mohammed/714,JED-268/IBRAHIM AHMAD/715,DMM-259/Imtiaz Ahmed/716,DMM-260/Shehzad Ahmed/717,DMM-261/Rao Mubashar Hussain/718,RUH-417/Mawia Mohammed/719,DMM-262/Muhammad Imran/720,DMM-263/Raja Mansoor/721,DMM-264/SAOOD RASHID/722,DMM-265/ASIM ISLAM/723,DMM-266/IMTIAZ AHMED/724,DMM-267/MOHAMMED ASIF/725,DMM-268/JAVED ASHRAF/728,DMM-269/MOHAMMAD GULAM RASUL/729,RUH-418/Fuad Saad Aldeen/730,RUH-419/Ali Mahgoub/731,JED-269/Faisal Elias Sabzal Jamal/732,JED-270/Shoaib Zulfiqar Ahmed Lal Khan/733,DMM-270/Aiman Abdullah/734,DMM-271/Mohammed Ahmed Mahyub/735,DMM-272/Mohammed Ali Esmail/736,DMM-273/Majed Ahmed/737,DMM-274/Ahmed Ahmed Abdalla/738,DMM-275/Muhammad Irfan/739,DMM-276/Ali Ali Hamedalla/740,JED-271/Shahid abbas muhammad nawaz/746,JED-272/Faisal javed/747,JED-273/Faizan muhammad anwar/748,RUH-420/Majed Mohammed Shoei/749,RUH-421/Izzatullah Rahmatullah/750,RUH-421/Izzatullah Rahmatullah/751,RUH-421/Izzatullah Rahmatullah/752,JED-274/ARSALAN ARIF/753,JED-275/SYED NASIR/754,JED-276/SHAHROZ AFZAL/755,JED-277/Azam Baig Mirza/756,RUH-422/Mohammaed Ali/757,RUH-423/SAMER SALAH/758,RUH-424/NAWAF ABDUL MUIN/759,JED-278/ABUL KALAM/764,JED-279/Muhammad Tahir/765,DMM-400/Abdul Rahman Khalid/766,DMM-401/Adnan Muhamed Idris/767,DMM-402/Yousif Nagamaldin/768,DMM-403/Fathi Mahmoud/769,JED-280/SAJAD AKRAM JAVED/770,JED-281/ABDUL AZIZ/771,RUH-425/Zabihullah rahmatullah/772,RUH-426/ABD ALBARE MOHAMMAD/773,RUH-427/HAITHM ABDULKREM/774,JED-282/Amir Mohammad/775,RUH-428/Muhammad Yousef/776,DMM-404/Naeem Ahmed/777,DMM-405/Mohammad Abid/778,RUH-429/Radwan Ahmed/779,RUH-430/Abdulraouf islamuldeen/780,JED-283/Abdul Rahman/781,RUH-240/Mohammed Muneer AbdulQader/782,RUH-241/Naif Mohammed/783,RUH-242/Alwaeed Mohammed Othaman/784,RUH-243/Faisal Abdulrehman/785,DMM-406/Muhammad Marghoob/786,JED-284/Abdul Salam/787,RUH-244/MAJED BASULAYMAN/788,DMM-407/ABDUL MASTAN/789,RUH-245/AHMAD HAMZA/790,RUH-246/Ahmad Hamza Fadelalmola/791,DMM-408/Abdullah Muhammad/792,RUH-247/Faris Asaad/793,DMM-409/Ahmed Muhyialdeen/794,JED-285/Rayan Ibrahim/795,JED-286/ABDIRAHMAN ALI/796,123/test/798,JED-288/Harun Burhani/799,JED-289/Muhammad Imran /801,RUH-248/Wael hammad/802,RUH-249/Raed Bawazir/803,RUH-250/Muhammad Zahoor/804,RUH-251/AMMAD ALI/805,RUH-252/MIZANUR RAHMAN/806,JED-290/SALAH AHMED/807,JED-291/Sajid hussain/809,JED-292/Muhammad sufyan/811,RUH-253/NourUllah Khan/812,JED-293/Rasheed ahmad/813,DMM-500/Admin-Dukar/814,DMM-410/Abdul Rahman Mohammed/815,DMM-411/Malik Umar Taj/816,RUH-254/Mirza Aurangzeb/817,RUH-256/SAEED ABDU MGMAL AATEFF/818,RUH-255/KHALID MOHAMED SULUB/819,RUH-257/Mirza Jahangir Mirza Alam/820,DMM-412/Ali Ahmed Bakurshum/821,DMM-413/Mohammad Esha/822,DMM-414/Aqib Pasha Abdul Qader/823,DMM-415/Syed Abrar Ahmed/824,DMM-416/Mohammad Didarul Alam/825,DMM-417/Mujahid Ali/826,DMM-421/Adnan Haider/827,DMM-422/Rehman Khaliq/828,JED-294/Salahuddin/829,JED-295/Omair akbar/830,JED-296/Mustafa yousaf/831,RUH-258/SULIMAN FIDA/832,JED-297/Qasim abid hussain/833,JED-298/Fahad elias/834,JED-299/Abdul aziz/835,RUH-259/Umeed Nawab Ziarat Gul/839,RUH-260/Ali Raza Sajjad Ashgar /840,RUH-261/Muhammad Noman YAseen Muhammad/841,JED-300/Zahid nazim/842,JED-301/Abdullah sulaiman/843,JED-302/Omar mohammad/844,RUH-262/SHUJAAT ALI BARKAT ALI /846,JED-303/Muhammad kashif/847,DMM-423/Moazam Khalid/848,DMM-418/Mohsin Ali/849,DMM-419/Muhammad Waqas/850,JED-304/Abdullah Mohammad Alem/851,RUH-263/MUHAMMAD NAEEM MUHAMMAD RAFIQUE /852,RUH-264/Omar Hafeez Mohammad Hafeez /853,RUH-265/Zubair Muhmmad Ashfaq /854,RUH-266/Shams Zafar Iqbal /855,RUH-267/Awais Tariq Tariq Mahmood /857,JED-305/Zabihullah mohammad/858,DMM-424/Muhammad Abdullah/859,DMM-425/Saliam sayeed/860,DMM-426/Mohamed Sam Al Fasi S. Abdul Cader/861,DMM-427/Aftab Rajput saber Mahmood Rajput/862,DMM-428/HANISH ULLI-VEETTIL/863,DMM-429/SHAMNATH SHIHABUDEEN/864,DMM-430/Abdul Shakoor Shaukat-Ali/865,DMM-431/Yasir Shoaib Syed Muhammad Shoaib/866,DMM-432/Ashmeel Ali Khan/867,DMM-433/Muhammad F Khan/868,JED-306/Rami Ahmed/869,JED-307/Khalil Raheem Ali/870,RUH-268/Yousef Alami Yousef/871,RUH-269/Khalid Abdullah/872,RUH-270/Irfan khan sher afzal /874,RUH-271/Faisal Alamgir Muhammad Almagir /876,RUH-272/Benjamin Benjamin Makur /877" placeholder="Courier" class="awesomplete ui-autocomplete-input watermark width_set form-control" autocomplete="off" aria-autocomplete="list"><ul hidden=""></ul><span class="visually-hidden" role="status" aria-live="assertive" aria-relevant="additions"></span></div>
                <span style="color:#F00">(don't remove the data of auto fill, it must be like (<strong>RUH-109/Ameen-Test/1</strong>))</span>
				</div>
				<div class="col-md-3">
				<label>From </label>
                <input type="date" value="" name="from" class="form-control">
				</div>
				<div class="col-md-3">
				<label>To </label>
                <input type="date" name="to" value="" class="form-control">
				</div>
				<div class="col-md-1"><br>
				<label>&nbsp;&nbsp;</label>
				<input type="submit" class="btn btn-info" value="Search" style="margin-top:-33px;">
				</div>
				<div class="col-md-2">
				<label>&nbsp;&nbsp;</label>
				<button class="btn btn-primary" type="submit" id="exce" onclick="create_zip();" name="import_to_excel" value="1" style="margin-top:33px;float:right;" >Export to Excel </button>
				</div>
				</div>
			</div>
        </div>	
        <div class="table-responsive">
            <table class="table table-hover mb-0">		
				<thead>
				   
					<tr>
						<th>#</th>
						<th>Courier Name</th> 
						<th>Date</th>
                        <th align="center">Vehical_&amp;_Fuel_Card</th>
						<th>Start Km</th>
						<th>End Km</th>
						<th>Start Time</th>
						<th>End Time</th>
						<th>Start Image</th>
						<th>end  Image</th>
						<th>Running Km</th>
                        <th>Required ltr</th>
						<th>Extra ltr given</th>
					    <th>Action</th>
							   
					</tr>
				</thead>
				<tbody>
				    <tr>
						<td>1</td>
						<th>Khalil Raheem Ali</th>
					    <td class="text_cap">2019-08-17</td>
						<td class="text_cap">
						<select name="v_id" id="v_3907" onchange="RemainigKm('3907');" class="form-control"> <option value="0">Select Vehilce</option> <option value="1/8">APV</option><option selected="selected" value="2/10">Sedan</option><option value="3/8">Hiace</option><option value="4/8">Dokker</option><option value="5/6">SUV</option><option value="6/6">Hiace High Roof</option><option value="7/6">Daihatsu</option></select>
						<br> 
						<input type="hidden" id="total_km_3907" value="0">
						<input type="hidden" id="pre_e_ltr_3907" value="15.70">
						<div class="badge badge-warning" id="fuelBox_3907" ondblclick="editTextFuel('3907')">&nbsp;&nbsp;&nbsp;&nbsp;0.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div> 
					    <input type="hidden" name="p_id" id="p_3907" min="0" class="form-control" value="0.00"> <i class="fa fa-check-square fa-1x" id="iconP_3907" style="display:none; margin-left:100px;" onclick="RemainigKm('3907');"></i>                 
						</td>
                        <td class="text_cap"><div class="badge badge-info" id="startBox_3907" ondblclick="editTextStart('3907')">37741</div>  <input type="hidden" id="start_3907" value="37741" class="form-control" style="width:100px;"> <i class="fa fa-check-square fa-1x" id="iconStart_3907" style="display:none; margin-left:90px;" onclick="saveValueStart('3907')"></i></td>
						<td class="text_cap"><div class="badge badge-info" id="endBox_3907" ondblclick="editTextEnd('3907')">0</div> <input type="hidden" id="end_3907" value="0" class="form-control" style="width:100px;"> <i class="fa fa-check-square fa-1x" id="iconEnd_3907" style="display:none; margin-left:90px;" onclick="saveValueEnd('3907')"></i></td> 
					    <td class="text_cap">10:17:00</td>
					    <td class="text_cap">00:00:00</td>
						<td class="text_cap"> <a href="" target="_blank" class="big" data-popup="lightbox">
						<img src="" alt="" class="img-rounded img-preview">
						</a></td>
						<td class="text_cap">
						<a href="odometerImg/" target="_blank" class="big" data-popup="lightbox">
						<img src="odometerImg/" alt="" class="img-rounded img-preview">
						</a>
						</td>
						<td class="text_cap" id="total_3907">0</td>
                        <td class="text_cap"><span id="r_3907">0.00</span></td>
						<td class="text_cap"><span id="e_3907">0.00</span></td>
                        <td> <a class="btn btn-primary btn-xs">Not Available</a>  <br> <a target="_blank" class="btn btn-info btn-xs" href="">Edit</a> </td>
					</tr>
					<tr>
						<td>1</td>
						<th>Khalil Raheem Ali</th>
					    <td class="text_cap">2019-08-17</td>
						<td class="text_cap">
						<select name="v_id" id="v_3907" onchange="RemainigKm('3907');" class="form-control"> <option value="0">Select Vehilce</option> <option value="1/8">APV</option><option selected="selected" value="2/10">Sedan</option><option value="3/8">Hiace</option><option value="4/8">Dokker</option><option value="5/6">SUV</option><option value="6/6">Hiace High Roof</option><option value="7/6">Daihatsu</option></select>
						<br> 
						<input type="hidden" id="total_km_3907" value="0">
						<input type="hidden" id="pre_e_ltr_3907" value="15.70">
						<div class="badge badge-warning" id="fuelBox_3907" ondblclick="editTextFuel('3907')">&nbsp;&nbsp;&nbsp;&nbsp;0.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div> 
					    <input type="hidden" name="p_id" id="p_3907" min="0" class="form-control" value="0.00"> <i class="fa fa-check-square fa-1x" id="iconP_3907" style="display:none; margin-left:100px;" onclick="RemainigKm('3907');"></i>                 
						</td>
                        <td class="text_cap"><div class="badge badge-info" id="startBox_3907" ondblclick="editTextStart('3907')">37741</div>  <input type="hidden" id="start_3907" value="37741" class="form-control" style="width:100px;"> <i class="fa fa-check-square fa-1x" id="iconStart_3907" style="display:none; margin-left:90px;" onclick="saveValueStart('3907')"></i></td>
						<td class="text_cap"><div class="badge badge-info" id="endBox_3907" ondblclick="editTextEnd('3907')">0</div> <input type="hidden" id="end_3907" value="0" class="form-control" style="width:100px;"> <i class="fa fa-check-square fa-1x" id="iconEnd_3907" style="display:none; margin-left:90px;" onclick="saveValueEnd('3907')"></i></td> 
					    <td class="text_cap">10:17:00</td>
					    <td class="text_cap">00:00:00</td>
						<td class="text_cap"> <a href="" target="_blank" class="big" data-popup="lightbox">
						<img src="" alt="" class="img-rounded img-preview">
						</a></td>
						<td class="text_cap">
						<a href="odometerImg/" target="_blank" class="big" data-popup="lightbox">
						<img src="odometerImg/" alt="" class="img-rounded img-preview">
						</a>
						</td>
						<td class="text_cap" id="total_3907">0</td>
                        <td class="text_cap"><span id="r_3907">0.00</span></td>
						<td class="text_cap"><span id="e_3907">0.00</span></td>
                        <td> <a class="btn btn-primary btn-xs">Not Available</a>  <br> <a target="_blank" class="btn btn-info btn-xs" href="">Edit</a> </td>
					</tr>
					<tr>
						<td>2</td>
						<th>Thilothaman</th>
					    <td class="text_cap">2019-08-17</td>
						<td class="text_cap">
						<select name="v_id" id="v_3907" onchange="RemainigKm('3907');" class="form-control"> <option value="0">Select Vehilce</option> <option value="1/8">APV</option><option selected="selected" value="2/10">Sedan</option><option value="3/8">Hiace</option><option value="4/8">Dokker</option><option value="5/6">SUV</option><option value="6/6">Hiace High Roof</option><option value="7/6">Daihatsu</option></select>
						<br> 
						<input type="hidden" id="total_km_3907" value="0">
						<input type="hidden" id="pre_e_ltr_3907" value="15.70">
						<div class="badge badge-warning" id="fuelBox_3907" ondblclick="editTextFuel('3907')">&nbsp;&nbsp;&nbsp;&nbsp;0.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div> 
					    <input type="hidden" name="p_id" id="p_3907" min="0" class="form-control" value="0.00"> <i class="fa fa-check-square fa-1x" id="iconP_3907" style="display:none; margin-left:100px;" onclick="RemainigKm('3907');"></i>                 
						</td>
                        <td class="text_cap"><div class="badge badge-info" id="startBox_3907" ondblclick="editTextStart('3907')">37741</div>  <input type="hidden" id="start_3907" value="37741" class="form-control" style="width:100px;"> <i class="fa fa-check-square fa-1x" id="iconStart_3907" style="display:none; margin-left:90px;" onclick="saveValueStart('3907')"></i></td>
						<td class="text_cap"><div class="badge badge-info" id="endBox_3907" ondblclick="editTextEnd('3907')">0</div> <input type="hidden" id="end_3907" value="0" class="form-control" style="width:100px;"> <i class="fa fa-check-square fa-1x" id="iconEnd_3907" style="display:none; margin-left:90px;" onclick="saveValueEnd('3907')"></i></td> 
					    <td class="text_cap">10:17:00</td>
					    <td class="text_cap">00:00:00</td>
						<td class="text_cap"> <a href="" target="_blank" class="big" data-popup="lightbox">
						<img src="" alt="" class="img-rounded img-preview">
						</a></td>
						<td class="text_cap">
						<a href="odometerImg/" target="_blank" class="big" data-popup="lightbox">
						<img src="odometerImg/" alt="" class="img-rounded img-preview">
						</a>
						</td>
						<td class="text_cap" id="total_3907">0</td>
                        <td class="text_cap"><span id="r_3907">0.00</span></td>
						<td class="text_cap"><span id="e_3907">0.00</span></td>
                        <td> <a class="btn btn-primary btn-xs">Not Available</a>  <br> <a target="_blank" class="btn btn-info btn-xs" href="">Edit</a> </td>
					</tr>
					<tr>
						<td>3</td>
						<th>Deepak Kumar</th>
					    <td class="text_cap">2019-08-17</td>
						<td class="text_cap">
						<select name="v_id" id="v_3907" onchange="RemainigKm('3907');" class="form-control"> <option value="0">Select Vehilce</option> <option value="1/8">APV</option><option selected="selected" value="2/10">Sedan</option><option value="3/8">Hiace</option><option value="4/8">Dokker</option><option value="5/6">SUV</option><option value="6/6">Hiace High Roof</option><option value="7/6">Daihatsu</option></select>
						<br> 
						<input type="hidden" id="total_km_3907" value="0">
						<input type="hidden" id="pre_e_ltr_3907" value="15.70">
						<div class="badge badge-warning" id="fuelBox_3907" ondblclick="editTextFuel('3907')">&nbsp;&nbsp;&nbsp;&nbsp;0.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div> 
					    <input type="hidden" name="p_id" id="p_3907" min="0" class="form-control" value="0.00"> <i class="fa fa-check-square fa-1x" id="iconP_3907" style="display:none; margin-left:100px;" onclick="RemainigKm('3907');"></i>                 
						</td>
                        <td class="text_cap"><div class="badge badge-info" id="startBox_3907" ondblclick="editTextStart('3907')">37741</div>  <input type="hidden" id="start_3907" value="37741" class="form-control" style="width:100px;"> <i class="fa fa-check-square fa-1x" id="iconStart_3907" style="display:none; margin-left:90px;" onclick="saveValueStart('3907')"></i></td>
						<td class="text_cap"><div class="badge badge-info" id="endBox_3907" ondblclick="editTextEnd('3907')">0</div> <input type="hidden" id="end_3907" value="0" class="form-control" style="width:100px;"> <i class="fa fa-check-square fa-1x" id="iconEnd_3907" style="display:none; margin-left:90px;" onclick="saveValueEnd('3907')"></i></td> 
					    <td class="text_cap">10:17:00</td>
					    <td class="text_cap">00:00:00</td>
						<td class="text_cap"> <a href="" target="_blank" class="big" data-popup="lightbox">
						<img src="" alt="" class="img-rounded img-preview">
						</a></td>
						<td class="text_cap">
						<a href="odometerImg/" target="_blank" class="big" data-popup="lightbox">
						<img src="odometerImg/" alt="" class="img-rounded img-preview">
						</a>
						</td>
						<td class="text_cap" id="total_3907">0</td>
                        <td class="text_cap"><span id="r_3907">0.00</span></td>
						<td class="text_cap"><span id="e_3907">0.00</span></td>
                        <td> <a class="btn btn-primary btn-xs">Not Available</a>  <br> <a target="_blank" class="btn btn-info btn-xs" href="">Edit</a> </td>
					</tr>
					<tr>
						<td>4</td>
						<th>Jagdish</th>
					    <td class="text_cap">2019-08-17</td>
						<td class="text_cap">
						<select name="v_id" id="v_3907" onchange="RemainigKm('3907');" class="form-control"> <option value="0">Select Vehilce</option> <option value="1/8">APV</option><option selected="selected" value="2/10">Sedan</option><option value="3/8">Hiace</option><option value="4/8">Dokker</option><option value="5/6">SUV</option><option value="6/6">Hiace High Roof</option><option value="7/6">Daihatsu</option></select>
						<br> 
						<input type="hidden" id="total_km_3907" value="0">
						<input type="hidden" id="pre_e_ltr_3907" value="15.70">
						<div class="badge badge-warning" id="fuelBox_3907" ondblclick="editTextFuel('3907')">&nbsp;&nbsp;&nbsp;&nbsp;0.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div> 
					    <input type="hidden" name="p_id" id="p_3907" min="0" class="form-control" value="0.00"> <i class="fa fa-check-square fa-1x" id="iconP_3907" style="display:none; margin-left:100px;" onclick="RemainigKm('3907');"></i>                 
						</td>
                        <td class="text_cap"><div class="badge badge-info" id="startBox_3907" ondblclick="editTextStart('3907')">37741</div>  <input type="hidden" id="start_3907" value="37741" class="form-control" style="width:100px;"> <i class="fa fa-check-square fa-1x" id="iconStart_3907" style="display:none; margin-left:90px;" onclick="saveValueStart('3907')"></i></td>
						<td class="text_cap"><div class="badge badge-info" id="endBox_3907" ondblclick="editTextEnd('3907')">0</div> <input type="hidden" id="end_3907" value="0" class="form-control" style="width:100px;"> <i class="fa fa-check-square fa-1x" id="iconEnd_3907" style="display:none; margin-left:90px;" onclick="saveValueEnd('3907')"></i></td> 
					    <td class="text_cap">10:17:00</td>
					    <td class="text_cap">00:00:00</td>
						<td class="text_cap"> <a href="" target="_blank" class="big" data-popup="lightbox">
						<img src="" alt="" class="img-rounded img-preview">
						</a></td>
						<td class="text_cap">
						<a href="odometerImg/" target="_blank" class="big" data-popup="lightbox">
						<img src="odometerImg/" alt="" class="img-rounded img-preview">
						</a>
						</td>
						<td class="text_cap" id="total_3907">0</td>
                        <td class="text_cap"><span id="r_3907">0.00</span></td>
						<td class="text_cap"><span id="e_3907">0.00</span></td>
                        <td> <a class="btn btn-primary btn-xs">Not Available</a>  <br> <a target="_blank" class="btn btn-info btn-xs" href="">Edit</a> </td>
					</tr>
						<tr><td colspan="13">
                        <input type="hidden" name="pageval" id="pagevalid" value="0">
					    <div class="input-group pagination"><div class="input-group-btn"> 
						<input type="submit" class="btn btn-default" value="‹ Prev">
						<input type="submit" class="btn btn-primary " value="1 " onclick="return callpage(1);">
						<input type="submit" class="btn btn-default center" value="2" onclick="return callpage(2);">
						<input type="submit" class="btn btn-default center" value="3" onclick="return callpage(3);">
						<input type="submit" class="btn btn-default center" value="4" onclick="return callpage(4);">
						<input type="submit" class="btn btn-default center" value="5" onclick="return callpage(5);">
						...
						<input type="submit" class="btn btn-default center" value="39" onclick="return callpage(39);">
						<input type="submit" class="btn btn-default center" value="Next ›" onclick="return callpage(2);">
						</div></div>
                        </td>
                    </tr>
				</tbody>
            </table>
        </div>			
    </section>		
<?php include APPPATH.'views/includes/footer.php';?>