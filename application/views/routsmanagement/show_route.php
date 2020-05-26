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
                    <li class="breadcrumb-item active" aria-current="page">Route Management</li>
                    <li class="breadcrumb-item active" aria-current="page">Show Route</li>
                </ol>
            </nav>
   <div class="container">
                <!-- Title -->
                            <div class="breadcrumb-line">
                <div class="hk-pg-header">
                <h4><i data-feather="arrow-left-circle"></i></i> 
                <span class="text-semibold"></span>Show Route</h4>
                </div>
            </div>
        
           
     <section class="hk-sec-wrapper">
    <div class="row">
    
    
    <div class="col-md-12">
       <div class="panel-heading">Show Route</div>
    </div>
  <table class="table datatable-show-all table-bordered table-hover datatable-highlight">
        
            <thead>
            <tr>
            
            <form name="search_form" method="post" action=""></form>
            <th colspan="3">
            <input type="text" name="search_val" placeholder="Please Enter Your Searching" class="form-control" onfocus="this.value=''" value="">
            </th>
            
            <th colspan="1">
            <input type="submit" name="Submit" value="Search" class="btn btn-primary" style="" onclick="return Valid_search(document.search_form);">
            <label><div id="search_val" style="display:inline;"></div></label>
            </th>
            
            
            <th colspan="2">
            <input class="btn-primary" type="button" onclick="create_zip();" value="Export to Zip" style="float:right;">
            </th>
            
            </tr>
            <tr>
            <th>Sr.No</th>
            <th>Routecode Management </th>
            <th>Route</th>
            <th>Keyword</th>
            <th>Action</th>
            </tr>
            </thead>
            
            <tbody>
                                    <tr>
            <td>1</td>                            <td>DAM-432</td>
            <td>King Fahd_Hofuf</td>
             <td>حي الملك فهد/King Fahd_Hofuf</td>            <!-- Action -->
            <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>2</td>                            <td>RYD-218</td>
            <td>Ad_Duraihimiyah_Riyadh</td>
             <td>الدريهمية_الرياض/Ad_Duraihimiyah_Riyadh</td>            <!-- Action -->
       <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>3</td>                            <td>DAM-431</td>
            <td>Al Bandariyah_Al Hofuf</td>
             <td>البندريه/Al Bandariyah_Al Hofuf</td>            <!-- Action -->
      <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>4</td>                            <td>DAM-430</td>
            <td>Al Juaimah</td>
             <td>الجعيمة/Al Juaimah</td>            <!-- Action -->
          <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>5</td>                            <td>DAM-429</td>
            <td>Al Shehabiyah_Al Hofuf</td>
             <td>الشهابية الهفوف/Al Shehabiyah_Al Hofuf</td>            <!-- Action -->
    <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>6</td>                            <td>RYD-217</td>
            <td>Imam Muhammad Ibn Saud Islamic University_Riyadh</td>
             <td>جامعة الامام محمد بن سعود الاسلامية، الرياض/Imam Muhammad Ibn Saud Islamic University_Riyadh</td>            <!-- Action -->
         <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>7</td>                            <td>RYD-216</td>
            <td>Az Zahra_Riyadh</td>
             <td>الزهراء، الرياض/Az Zahra_Riyadh</td>            <!-- Action -->
        <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>8</td>                            <td>RYD-215</td>
            <td>Al Hada_Al kharj</td>
             <td>الهدا، الخرج/Al Hada_Al kharj</td>            <!-- Action -->
          <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>9</td>                            <td>RYD-214</td>
            <td>RUH-269</td>
             <td>/RUH-269</td>            <!-- Action -->
        <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>10</td>                           <td>RYD-213</td>
            <td>Ad Deerah_Ad Dilam</td>
             <td>الديرة، الدلم/Ad Deerah_Ad Dilam</td>            <!-- Action -->
         <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>11</td>                           <td>DAM-428</td>
            <td>Al Anwar_Dammam</td>
             <td>الأنوار/Al Anwar_Dammam</td>            <!-- Action -->
         <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>12</td>                           <td>RYD-212</td>
            <td>Al Misfat_Riyadh</td>
             <td>المصفاة،الرياض/Al Misfat_Riyadh</td>            <!-- Action -->
        <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>13</td>                           <td>RYD-211</td>
            <td>Al Aziziyyah_Al Kharj</td>
             <td>العزيزية،الخرج/Al Aziziyyah_Al Kharj</td>            <!-- Action -->
           <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>14</td>                           <td>RYD-210</td>
            <td>Al Ghnamiah_Riyadh</td>
             <td>الغنامية،الرياض/Al Ghnamiah_Riyadh</td>            <!-- Action -->
          <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>15</td>                           <td>RYD-209</td>
            <td>Athahabi_Ad Dilam</td>
             <td>الذهبي، الدلم/Athahabi_Ad Dilam</td>            <!-- Action -->
          <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>16</td>                           <td>DAM-427</td>
            <td>Anak</td>
             <td>عنك/Anak</td>            <!-- Action -->
          <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>17</td>                           <td>DAM-426</td>
            <td>Ain Najm_Al Mubarraz</td>
             <td>عين نجم/Ain Najm_Al Mubarraz</td>            <!-- Action -->
           <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>18</td>                           <td>DAM-425</td>
            <td>Al Hassa</td>
             <td>الأحساء/Al Hassa</td>            <!-- Action -->
           <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>19</td>                           <td>DAM-424</td>
            <td>Al rashidiyah_Al mubarraz</td>
             <td>الراشدية المبرز/Al rashidiyah_Al mubarraz</td>            <!-- Action -->
           <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>20</td>                           <td>JDH-128</td>
            <td>Al-Suhaifah_jeddah</td>
             <td>الصحيفه جدة/Al-Suhaifah_jeddah</td>            <!-- Action -->
           <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>21</td>                           <td>DAM-423</td>
            <td>Al Hussain_Al Qatif</td>
             <td>الحسين/Al Hussain_Al Qatif</td>            <!-- Action -->
            <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>22</td>                           <td>DAM-422</td>
            <td>Al Hazm_Al Mubarraz</td>
             <td>حي الحزم/Al Hazm_Al Mubarraz</td>            <!-- Action -->
           <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>23</td>                           <td>DAM-421</td>
            <td>Al Gudaimat_Al Mubarraz</td>
             <td>القديمات/Al Gudaimat_Al Mubarraz</td>            <!-- Action -->
           <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>24</td>                           <td>DAM-420</td>
            <td>Hasa Industrial City_Al Hassa</td>
             <td>المنطقة الصناعية بالاحساء/Hasa Industrial City_Al Hassa</td>            <!-- Action -->
          <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>25</td>                           <td>DAM-419</td>
            <td>King Fahd International Airport_Dammam</td>
             <td>مطار الملك فهد الدولي/King Fahd International Airport_Dammam</td>            <!-- Action -->
            <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>26</td>                           <td>DAM-418</td>
            <td>Safwa</td>
             <td>صفوى/Safwa</td>            <!-- Action -->
            <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>27</td>                           <td>DAM-417</td>
            <td>King Abdulaziz Air Base_Az Zahran</td>
             <td>قاعدة الملك عبدالعزيز الجوية/King Abdulaziz Air Base_Az Zahran</td>            <!-- Action -->
           <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>28</td>                           <td>RYD-208</td>
            <td>Al Mansurah_Al Kharj</td>
             <td>المنصورة،الخرج/Al Mansurah_Al Kharj</td>            <!-- Action -->
            <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>29</td>                           <td>RYD-207</td>
            <td>Al Mansurah_Al Kharj</td>
             <td>المنصورة،الخرج/Al Mansurah_Al Kharj</td>            <!-- Action -->
            <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>30</td>                           <td>DAM-416</td>
            <td>Al Ghassaniya-1_Al Mubarraz</td>
             <td>الغسانية -1 المبرز/Al Ghassaniya-1_Al Mubarraz</td>            <!-- Action -->
            <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>31</td>                           <td>JDH-127</td>
            <td>Al Riyadh_jeddah</td>
             <td>الرياض جدة/Al Riyadh_jeddah</td>            <!-- Action -->
            <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>32</td>                           <td>RYD-206</td>
            <td>RUH-257</td>
             <td>Riya/RUH-257</td>            <!-- Action -->
           <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>33</td>                           <td>RYD-205</td>
            <td>RUH-256</td>
             <td>Riya/RUH-256</td>            <!-- Action -->
            <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>34</td>                           <td>RYD-204</td>
            <td>RUH-255</td>
             <td>Riya/RUH-255</td>            <!-- Action -->
           <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div></td>
            </tr>
                        <tr>
            <td>35</td>                           <td>RYD-203</td>
            <td>Ad Duraihimiyah_Riyadh</td>
             <td>الدريهمية، الرياض/Ad Duraihimiyah_Riyadh</td>            <!-- Action -->
            <td>
        <div class="btn-group">
                                            <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="fa fa-pencil-square-o" href="#">Edit</a><br>
                                                 <a class="fa fa-trash-o" href="#">Delete</a>
                                                
                                                
                                            </div>
                                        </div>
                                      </td>
            </tr>
                   
                                     
            
                  <!-- Action -->



                        
                              
            <tr>  
            <td colspan="8" align="center">
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
<input type="submit" class="btn btn-default center" value="10" onclick="return callpage(10);">
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