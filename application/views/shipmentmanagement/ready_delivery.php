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
			<li class="breadcrumb-item active" aria-current="page">All RFD</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h5><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>  All RFD ( Ready for Delivery )</h5>
		</div>
	</div>
	<section class="hk-sec-wrapper">
	<h5>Show RFD</h5><br>
	 <table class="table table-hover table-bordered mb-0">
	    <thead>
        <tr> 
        <form name="search_form" method="post" action=""></form>
        <th class="head1" colspan="3">
        <input type="text" name="search_val" placeholder="DRS Unique id./Route code/City/Driver Name/AWB No." class="form-control" onfocus="this.value=''" value="">
        </th>
        
        <th class="head1" colspan="2">
        <input type="date" name="search_date" placeholder="Date" class="form-control" onfocus="this.value=''" value="">
        </th>
        
        <th class="head1" colspan="2">
        <input type="date" name="search_date1" placeholder="Date" class="form-control" onfocus="this.value=''" value="">
        </th>
        
        <th colspan="2">
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
            <th>Action</th>
    	</tr>
    </thead>
	<tbody>
	    <tr>
            <td>1</td>
            <td><img src="data:image/jpeg;base64,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"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ICOI19</td>
            <td>08- 09 -2019</td>
            <td></td>
            <td>RUH-255</td>
            <td>KHALID MOHAMED SULUB</td>
            <td></td>
          
            <td><div class="btn-group">
                <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#"><i class="fa fa-print fa-fw"></i>Print</a>
				<a class="dropdown-item" href="#"><i class="fa fa-exclamation fa-fw"></i>View</a>
                </div>
             </div></td>
        </tr>
		
		<tr>
            <td>2</td>
            <td><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD//gA+Q1JFQVRPUjogZ2QtanBlZyB2MS4wICh1c2luZyBJSkcgSlBFRyB2NjIpLCBkZWZhdWx0IHF1YWxpdHkK/9sAQwAIBgYHBgUIBwcHCQkICgwUDQwLCwwZEhMPFB0aHx4dGhwcICQuJyAiLCMcHCg3KSwwMTQ0NB8nOT04MjwuMzQy/9sAQwEJCQkMCwwYDQ0YMiEcITIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIy/8AAEQgAUACNAwEiAAIRAQMRAf/EAB8AAAEFAQEBAQEBAAAAAAAAAAABAgMEBQYHCAkKC//EALUQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+v/EAB8BAAMBAQEBAQEBAQEAAAAAAAABAgMEBQYHCAkKC//EALURAAIBAgQEAwQHBQQEAAECdwABAgMRBAUhMQYSQVEHYXETIjKBCBRCkaGxwQkjM1LwFWJy0QoWJDThJfEXGBkaJicoKSo1Njc4OTpDREVGR0hJSlNUVVZXWFlaY2RlZmdoaWpzdHV2d3h5eoKDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uLj5OXm5+jp6vLz9PX29/j5+v/aAAwDAQACEQMRAD8A9/rx+z/5L1rP/YVsP/TXd17BXj9n/wAl61n/ALCth/6a7ugDoNF/5Fj4W/8AbD/02z1z/iH/AJAfhP8A7KBJ/wClt1XQaL/yLHwt/wC2H/ptnrn/ABD/AMgPwn/2UCT/ANLbqgDyDTv+Zc/7FTVf/chXf/Fz/kr0H/YqX3/pPeVwGnf8y5/2Kmq/+5Cu/wDi5/yV6D/sVL7/ANJ7ygDA8Cf8ffhr/sFWv/p/Wu/sf+Q58FP+wVcf+kUdcB4E/wCPvw1/2CrX/wBP6139j/yHPgp/2Crj/wBIo6AOfuf+RY8Xf9jXrn/ptuawLz/kgujf9gq//wDTpaVv3P8AyLHi7/sa9c/9NtzWBef8kF0b/sFX/wD6dLSgDf8ACX/IsfEX/sVNM/8ATa1HwS/5GfQv+xUuP/TlJR4S/wCRY+Iv/YqaZ/6bWo+CX/Iz6F/2Klx/6cpKADwl/wAix8Rf+xU0z/02tXAat/ySHTP+3T/0o1Wu/wDCX/IsfEX/ALFTTP8A02tXAat/ySHTP+3T/wBKNVoA+v6KKKACiiigArx+z/5L1rP/AGFbD/013dewV4/Z/wDJetZ/7Cth/wCmu7oA6DRf+RY+Fv8A2w/9Ns9c/wCIf+QH4T/7KBJ/6W3VdBov/IsfC3/th/6bZ65/xD/yA/Cf/ZQJP/S26oA8g07/AJlz/sVNV/8AchXf/Fz/AJK9B/2Kl9/6T3lcBp3/ADLn/Yqar/7kK7/4uf8AJXoP+xUvv/Se8oAwPAn/AB9+Gv8AsFWv/p/Wu/sf+Q58FP8AsFXH/pFHXAeBP+Pvw1/2CrX/ANP6139j/wAhz4Kf9gq4/wDSKOgDn7n/AJFjxd/2Neuf+m25rAvP+SC6N/2Cr/8A9OlpW/c/8ix4u/7GvXP/AE23NYF5/wAkF0b/ALBV/wD+nS0oA3/CX/IsfEX/ALFTTP8A02tR8Ev+Rn0L/sVLj/05SUeEv+RY+Iv/AGKmmf8Aptaj4Jf8jPoX/YqXH/pykoAPCX/IsfEX/sVNM/8ATa1cBq3/ACSHTP8At0/9KNVrv/CX/IsfEX/sVNM/9NrVwGrf8kh0z/t0/wDSjVaAPr+iiigAooooAK8fs/8AkvWs/wDYVsP/AE13dewV4/Z/8l61n/sK2H/pru6AOg0X/kWPhb/2w/8ATbPXP+If+QH4T/7KBJ/6W3VdBov/ACLHwt/7Yf8Aptnrn/EP/ID8J/8AZQJP/S26oA8g07/mXP8AsVNV/wDchXf/ABc/5K9B/wBipff+k95XAad/zLn/AGKmq/8AuQrv/i5/yV6D/sVL7/0nvKAMDwJ/x9+Gv+wVa/8Ap/Wu/sf+Q58FP+wVcf8ApFHXAeBP+Pvw1/2CrX/0/rXf2P8AyHPgp/2Crj/0ijoA5+5/5Fjxd/2Neuf+m25rAvP+SC6N/wBgq/8A/TpaVv3P/IseLv8Asa9c/wDTbc1gXn/JBdG/7BV//wCnS0oA3/CX/IsfEX/sVNM/9NrUfBL/AJGfQv8AsVLj/wBOUlHhL/kWPiL/ANippn/ptaj4Jf8AIz6F/wBipcf+nKSgA8Jf8ix8Rf8AsVNM/wDTa1cBq3/JIdM/7dP/AEo1Wu/8Jf8AIsfEX/sVNM/9NrVwGrf8kh0z/t0/9KNVoA+v6KKKACiiigArx+z/AOS9az/2FbD/ANNd3XsFeP2f/JetZ/7Cth/6a7ugDoNF/wCRY+Fv/bD/ANNs9c/4h/5AfhP/ALKBJ/6W3VdBov8AyLHwt/7Yf+m2euf8Q/8AID8J/wDZQJP/AEtuqAPINO/5lz/sVNV/9yFd/wDFz/kr0H/YqX3/AKT3lcBp3/Muf9ipqv8A7kK7/wCLn/JXoP8AsVL7/wBJ7ygDA8Cf8ffhr/sFWv8A6f1rv7H/AJDnwU/7BVx/6RR1wHgT/j78Nf8AYKtf/T+td/Y/8hz4Kf8AYKuP/SKOgDn7n/kWPF3/AGNeuf8AptuawLz/AJILo3/YKv8A/wBOlpW/c/8AIseLv+xr1z/023NYF5/yQXRv+wVf/wDp0tKAN/wl/wAix8Rf+xU0z/02tR8Ev+Rn0L/sVLj/ANOUlHhL/kWPiL/2Kmmf+m1qPgl/yM+hf9ipcf8ApykoAPCX/IsfEX/sVNM/9NrVwGrf8kh0z/t0/wDSjVa7/wAJf8ix8Rf+xU0z/wBNrVwGrf8AJIdM/wC3T/0o1WgD6/ooooAKKKKACvH7P/kvWs/9hWw/9Nd3XsFeP2f/ACXrWf8AsK2H/pru6AOg0X/kWPhb/wBsP/TbPXP+If8AkB+E/wDsoEn/AKW3VdBov/IsfC3/ALYf+m2euf8AEP8AyA/Cf/ZQJP8A0tuqAPINO/5lz/sVNV/9yFd/8XP+SvQf9ipff+k95XAad/zLn/Yqar/7kK7/AOLn/JXoP+xUvv8A0nvKAMDwJ/x9+Gv+wVa/+n9a7+x/5DnwU/7BVx/6RR1wHgT/AI+/DX/YKtf/AE/rXf2P/Ic+Cn/YKuP/AEijoA5+5/5Fjxd/2Neuf+m25rAvP+SC6N/2Cr//ANOlpW/c/wDIseLv+xr1z/023NYF5/yQXRv+wVf/APp0tKAN/wAJf8ix8Rf+xU0z/wBNrUfBL/kZ9C/7FS4/9OUlHhL/AJFj4i/9ippn/ptaj4Jf8jPoX/YqXH/pykoAPCX/ACLHxF/7FTTP/Ta1cBq3/JIdM/7dP/SjVa7/AMJf8ix8Rf8AsVNM/wDTa1cBq3/JIdM/7dP/AEo1WgD6/ooooAKKKKAP/9k="><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CSPA3M</td>
            <td>05- 09 -2019</td>
            <td></td>
            <td>RUH-110</td>
            <td>Fastcoo</td>
            <td></td>
            <td>
			<div class="btn-group">
                <button type="button" class="btn btn-primary"><i class="icon-list"></i></button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(138px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">
                <a class="dropdown-item" href="#"><i class="fa fa-print fa-fw"></i>Print</a>
				<a class="dropdown-item" href="#"><i class="fa fa-exclamation fa-fw"></i>View</a>
                </div>
             </div>
            </td>
        </tr>
		
		<tr>
            <td colspan="8" align="center" style="text-align:center;">
            <form name="frm_pagi" action="" method="post">
            <input type="hidden" name="pageval" id="pagevalid" value="0">
                        <div class="input-group pagination">
						<div class="input-group-btn"> 
                        <input type="submit" class="btn btn-default" value="‹ Prev">
                        <input type="submit" class="btn btn-primary " value="1 " onclick="return callpage(1);">
                        <input type="submit" class="btn btn-default center" value="2" onclick="return callpage(2);">
                        <input type="submit" class="btn btn-default center" value="3" onclick="return callpage(3);">
                        <input type="submit" class="btn btn-default center" value="4" onclick="return callpage(4);">
                        <input type="submit" class="btn btn-default center" value="5" onclick="return callpage(5);">
                        ...
                        <input type="submit" class="btn btn-default center" value="112" onclick="return callpage(112);">
                        <input type="submit" class="btn btn-default center" value="Next ›" onclick="return callpage(2);">
                        </div>
						</div>
            </form>
            </td>
        </tr>
	</tbody>
	</table>
	</section>
   <?php include APPPATH.'views/includes/footer.php';?>