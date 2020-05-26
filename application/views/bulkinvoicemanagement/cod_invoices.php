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
                    <li class="breadcrumb-item active" aria-current="page">Bulk Invoice Management</li>
					<li class="breadcrumb-item active" aria-current="page">Bulk COD Invoices</li>
                </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Bulk COD Invoices</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<h5 class="hk-sec-title">Order Not Picked</h5>
	<div class="row">
			<div class="col-md-12">
			<div class ="table-responsive">
				<table class="table datatable-show-all table-bordered table-hover datatable-highlight">
      
         <form action="" method="post"></form>
		<tbody><tr>
			<th width="10px">
				Customers:
				<select class="form-control custom-select  mt-15"><option value="1">fastcoo(8437651)</option><option value="2">Ibrahim Al-Qurashi Perfume(1593268)</option><option value="7">Renjie Store(4251379)</option><option value="8">Kaaf Meem(3571849)</option><option value="9">Mirsal Exp(2817954)</option><option value="10">Maia Mart(8631749)</option><option value="11">Xzong(7596483)</option><option value="12">Dokkan Afkar(3179652)</option><option value="15">Khaliji Shop(2317584)</option><option value="16">SHENZHEN YOKESI SCP CO.,LIMITED(1894352)</option><option value="17">QPS Store(3927148)</option><option value="18">IOUD(1635497)</option><option value="19">Online Store(7654819)</option><option value="20">Modern Souq(4983751)</option><option value="22">Online Shopping KSA(4621897)</option><option value="24">Extra Stores(9715284)</option><option value="25">bljumla.com(9487325)</option><option value="26">Gizmooz(7415986)</option><option value="27">The beauty Brands(9536471)</option><option value="28">UCT Online Store(2359184)</option><option value="29">Grand Store(7489265)</option><option value="30">GlupShop(8236415)</option><option value="31">King Souq(2395641)</option><option value="32">Ashyae(5367914)</option><option value="33">arasouq(2496715)</option><option value="34">Shopify(2463798)</option><option value="35">E-GATE ONLINE SHOPPING(4235196)</option><option value="36">Feesheh(5796138)</option><option value="37">Arabian Oud(4931568)</option><option value="38">King Souq FXF(6783491)</option><option value="39">Zajil Express Company(2456938)</option><option value="40">Ajoul Company(3675914)</option><option value="41">Online Shopping KSA INT(2384597)</option><option value="42">Rabel Xpress(9234715)</option><option value="43">شركة بي ون BEONE COMPANY(1265849)</option><option value="45">Sky Express(4652179)</option><option value="48">lamsatj(6258471)</option><option value="50">Ladoun.com(6394217)</option><option value="52">Kabayan Shopper(2718354)</option><option value="53">Saqoor Al Royah(2453897)</option><option value="54">My Land General Trading LLC(1389572)</option><option value="56">SIAFA INTERNATIONAL MFG.CO(1872364)</option><option value="57">MATJER ROSH(7145236)</option><option value="58">Al Sultana Rayda (5126384)</option><option value="59">Test TAM Express(8523946)</option><option value="60">boutiqaat(2534986)</option><option value="61">Boutiquey(5681742)</option><option value="62">Fastcoo(1238695)</option><option value="63">fastcoo(8752364)</option><option value="64">Fastcoo(6258347)</option><option value="65">gsrhospital(7591624)</option>
			    </select>
			<br>
				Created By:
			<select class="form-control custom-select  mt-15"><option value="50">Abdul Aziz</option><option value="95">Abdul Rahman</option><option value="49">Abdul Salam</option><option value="84">Abdulkareem Abdulrhman Abdulqader</option><option value="98">Abdulrazaq Hawsawi</option><option value="120">Adnan</option><option value="27">ahmed abdullah</option><option value="87">Ahmed abdullah allhyani</option><option value="86">Ahmed Mohammed Youssef</option><option value="8">Ahmed Raza</option><option value="85">Ali Ahmad Al Easi</option><option value="13">Ali mustafa</option><option value="2">ameen</option><option value="7">Amer Hussain</option><option value="92">Arafat Ali	</option><option value="108">Asif Nawaz</option><option value="69">Aziz Ibrahim</option><option value="80">Bilal Nasir</option><option value="113">CS Staff</option><option value="6">Danish Khan</option><option value="101">Fahad Al Amri</option><option value="5">FASTCOO</option><option value="93">Hafiz Umar Zar	</option><option value="17">Hatim Alfaleet</option><option value="65">Husnain Raza</option><option value="66">Ibrahim Mahrous</option><option value="77">Mamum uddin</option><option value="72">MESHARI MUSTAFA MUZAFFAR</option><option value="91">Mirza Baieg</option><option value="105">Mohammad Sawalmeh</option><option value="59">Mohammed Ali Hefdhi</option><option value="37">Mubashar Saeed</option><option value="76">Muhammad Iqbal</option><option value="99">Muhammad Nabeel</option><option value="97">Muhannad Al Sofyani</option><option value="122">Mukhtar Hashi</option><option value="68">Musheer Raza</option><option value="88">Musleh Thaib Almotairi</option><option value="90">Raed Abdullah</option><option value="73">Rizwan Khan</option><option value="33">saeed omar</option><option value="78">Sajawal Zulfiqar</option><option value="51">Saleh Kassar</option><option value="61">Sameer Saif</option><option value="96">Sayed Abdulrazzaq</option><option value="3">Shehzad</option><option value="18">Sohail.Mohmmad</option><option value="53">Syed Atif</option><option value="116">Syed Masood</option><option value="100">Talal Abu Ali</option><option value="119">Tariq Bakhsh</option><option value="94">Zameem Al Attas</option><option value="107">Zeeshan Haider Ali</option>
				</select>
				<br>
				Cod Pay By:
			<select class="form-control custom-select  mt-15">	
			<option value="50">Abdul Aziz</option><option value="95">Abdul Rahman</option><option value="49">Abdul Salam</option><option value="84">Abdulkareem Abdulrhman Abdulqader</option><option value="98">Abdulrazaq Hawsawi</option><option value="120">Adnan</option><option value="27">ahmed abdullah</option><option value="87">Ahmed abdullah allhyani</option><option value="86">Ahmed Mohammed Youssef</option><option value="8">Ahmed Raza</option><option value="85">Ali Ahmad Al Easi</option><option value="13">Ali mustafa</option><option value="2">ameen</option><option value="7">Amer Hussain</option><option value="92">Arafat Ali	</option><option value="108">Asif Nawaz</option><option value="69">Aziz Ibrahim</option><option value="80">Bilal Nasir</option><option value="113">CS Staff</option><option value="6">Danish Khan</option><option value="101">Fahad Al Amri</option><option value="5">FASTCOO</option><option value="93">Hafiz Umar Zar	</option><option value="17">Hatim Alfaleet</option><option value="65">Husnain Raza</option><option value="66">Ibrahim Mahrous</option><option value="77">Mamum uddin</option><option value="72">MESHARI MUSTAFA MUZAFFAR</option><option value="91">Mirza Baieg</option><option value="105">Mohammad Sawalmeh</option><option value="59">Mohammed Ali Hefdhi</option><option value="37">Mubashar Saeed</option><option value="76">Muhammad Iqbal</option><option value="99">Muhammad Nabeel</option><option value="97">Muhannad Al Sofyani</option><option value="122">Mukhtar Hashi</option><option value="68">Musheer Raza</option><option value="88">Musleh Thaib Almotairi</option><option value="90">Raed Abdullah</option><option value="73">Rizwan Khan</option><option value="33">saeed omar</option><option value="78">Sajawal Zulfiqar</option><option value="51">Saleh Kassar</option><option value="61">Sameer Saif</option><option value="96">Sayed Abdulrazzaq</option><option value="3">Shehzad</option><option value="18">Sohail.Mohmmad</option><option value="53">Syed Atif</option><option value="116">Syed Masood</option><option value="100">Talal Abu Ali</option><option value="119">Tariq Bakhsh</option><option value="94">Zameem Al Attas</option><option value="107">Zeeshan Haider Ali</option><option value="125">Ziauddin</option>
			</select>	
					<br>
				Paybale Receive By:
				<select class="form-control custom-select  mt-15">
			<option value="50">Abdul Aziz</option><option value="95">Abdul Rahman</option><option value="49">Abdul Salam</option><option value="84">Abdulkareem Abdulrhman Abdulqader</option><option value="98">Abdulrazaq Hawsawi</option><option value="120">Adnan</option><option value="27">ahmed abdullah</option><option value="87">Ahmed abdullah allhyani</option><option value="86">Ahmed Mohammed Youssef</option><option value="8">Ahmed Raza</option><option value="85">Ali Ahmad Al Easi</option><option value="13">Ali mustafa</option><option value="2">ameen</option><option value="7">Amer Hussain</option><option value="92">Arafat Ali	</option><option value="108">Asif Nawaz</option><option value="69">Aziz Ibrahim</option><option value="80">Bilal Nasir</option><option value="113">CS Staff</option><option value="6">Danish Khan</option><option value="101">Fahad Al Amri</option><option value="5">FASTCOO</option><option value="93">Hafiz Umar Zar	</option><option value="17">Hatim Alfaleet</option><option value="65">Husnain Raza</option><option value="66">Ibrahim Mahrous</option><option value="77">Mamum uddin</option><option value="72">MESHARI MUSTAFA MUZAFFAR</option><option value="91">Mirza Baieg</option><option value="105">Mohammad Sawalmeh</option><option value="59">Mohammed Ali Hefdhi</option><option value="37">Mubashar Saeed</option><option value="76">Muhammad Iqbal</option><option value="99">Muhammad Nabeel</option><option value="97">Muhannad Al Sofyani</option><option value="122">Mukhtar Hashi</option><option value="68">Musheer Raza</option><option value="88">Musleh Thaib Almotairi</option><option value="90">Raed Abdullah</option><option value="73">Rizwan Khan</option><option value="33">saeed omar</option><option value="78">Sajawal Zulfiqar</option><option value="51">Saleh Kassar</option><option value="61">Sameer Saif</option><option value="96">Sayed Abdulrazzaq</option><option value="3">Shehzad</option><option value="18">Sohail.Mohmmad</option><option value="53">Syed Atif</option><option value="116">Syed Masood</option><option value="100">Talal Abu Ali</option><option value="119">Tariq Bakhsh</option><option value="94">Zameem Al Attas</option><option value="107">Zeeshan Haider Ali</option><option value="125">Ziauddin</option>
		    </select>
		<th width="10px">
		Invoice #:
		 <select name="invoices[]" value="" id="shipmentStatus" multiple="" class="js-select5 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
          
        </select><span class="select2 select2-container select2-container--bootstrap" dir="ltr" style="width: 33px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Select" style="width: 398px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
			<br>
			Shipment Mode:
			<select class="form-control custom-select  mt-15">
                        <option value="">Please Select</option>
                        <option value="CC">CC</option>
                        <option value="COD">COD</option>
                        </select>
			<br>
			Shipment Status:
			 <select class="form-control custom-select  mt-15">
                        <option value="">Please Select</option>
                        <option value="Delivered">Delivered</option>
                        <option value="Return to shiper">Return to shiper</option>
                        </select>
		</th>
			
		    <th colspan="2">
		Create	Date<br>	
        From Date:
        <input type="date" name="c_date1" class="form-control " id="search_date" value=""><br>
        To Date:
        <input type="date" name="c_date2" class="form-control " id="search_date1" value="">
       </th>
      		</tr><tr>	
		
		 <th width="10px">
		COD Pay	Date<br>		
        From Date:
        <input type="date" name="p_date1" class="form-control " id="search_date" value=""><br>
        To Date:
        <input type="date" name="p_date2" class="form-control " id="search_date1" value="">
       </th>
	 <th width="10px">
		Duties and Services	Receive Date<br>		
        From Date:
        <input type="date" name="r_date1" class="form-control " id="search_date" value=""><br>
        To Date:
        <input type="date" name="r_date2" class="form-control " id="search_date1" value="">
       </th>
	<th width="10px">
		Close Date<br>		
        From Date:
        <input type="date" name="cl_date1" class="form-control " id="search_date" value=""><br>
        To Date:
        <input type="date" name="cl_date2" class="form-control " id="search_date1" value="">
       </th>
		
       <th width="10px">
        <button type="submit" class="btn btn-info btn-lg btn btn-primary" id="gen_report">Search</button>
         
        
        </th>
       </tr>       
		</tbody></table>
			</div>
		
	
	<hr>
<div class="col-md-12">
	<div class ="table-responsive">
	<table class="table datatable-show-all table-bordered table-hover datatable-highlight">
                        
        <thead>
            <tr>
			<th>S.no</th>
            			<th>UID Account Number</th>
				<th>Company name</th>
				
		    <th>Invoice#</th>
				<th>Invoice Summery</th>
            <th>Created by </th>
       		 <th>Created Date </th>
              <th>COD Paid By </th>
                 <th>COD Paid Date </th>
            <th>Pay</th>
            
            <th>Action</th>
            </tr>
        </thead>
                        
        <tbody>
       	     
     
    
	<tr>
		<td>1<br>
        		</td><td>8761294</td>
					<td>fastcoo</td>
					
        <td>C51201961561904494
        </td>
		 <td><strong>Shipments#</strong>:2<br>
			  <strong> COD&nbsp;Charge</strong>:10.00<br> <strong> Return&nbsp;Charge</strong>:0.00<br><strong>Service&nbsp;Charge</strong>:30.00
			 
			 <br><strong>Total&nbsp;Vat</strong>:2.00
			 <hr><strong>COD&nbsp;Amount</strong>:100.00
        </td>
         <td>FASTCOO</td>
         <td>30- 06 -2019 </td>
		<td>--</td>
         <td>-- </td>
	 <td> 		 
		 <a data-toggle="modal" class="btn btn-danger" data-target="#updateLinehoulC51201961561904494" title="PAY"> Pay</a>
			</td>
<td>
<a href="" target="_blank" class="btn btn-primary">View</a>



     </td>
	
			
	</tr>
	     
     
    
	<tr>
		<td>2<br>
        		</td><td>8761294</td>
					<td>fastcoo</td>
					
        <td>C51201971563785355
        </td>
		 <td><strong>Shipments#</strong>:1<br>
			  <strong> COD&nbsp;Charge</strong>:5.00<br> <strong> Return&nbsp;Charge</strong>:0.00<br><strong>Service&nbsp;Charge</strong>:15.00
			 
			 <br><strong>Total&nbsp;Vat</strong>:1.00
			 <hr><strong>COD&nbsp;Amount</strong>:250.00
        </td>
         <td>FASTCOO</td>
         <td>22- 07 -2019 </td>
		<td>--</td>
         <td>-- </td>
	 <td> 		 
		 <a data-toggle="modal" class="btn btn-danger" data-target="#updateLinehoulC51201971563785355" title="PAY"> Pay</a>
			</td>
<td>
<a href="" target="_blank" class="btn btn-primary">View</a>



     </td>
	
			
	            <tr>
                <td colspan="12" align="center">
                
                                <input type="hidden" name="pageval" id="pagevalid" value="">
                                
                
                </td>
            </tr>
        			
        </tbody>
	</table>
	</div>
    </div>
</div>
	
    </section>	
<?php include APPPATH.'views/includes/footer.php';?>