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
                    <li class="breadcrumb-item active" aria-current="page">Seo</li>
                    <li class="breadcrumb-item active" aria-current="page">Edit SEO</li>
                </ol>
            </nav>
  <div class="container">
                <!-- Title -->
            <div class="breadcrumb-line">
                <div class="hk-pg-header">
                <h4><i data-feather="arrow-left-circle"></i></i> 
                <span class="text-semibold"></span>Edit SEO</h4>
                </div>
            </div>
        
           
    <section class="hk-sec-wrapper">
	<h5 class="hk-sec-title">Edit SEO</h5><br>
	<section class="hk-sec-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
    					<div class="col-lg-12">
                           
						    <form name="add_seo" action="" method="post" enctype="multipart/form-data" class="search_form general_form">
                   
                   <div class="form-group">
                            <label>Name:</label><span class="alert" id="name"></span>
                           
                                
       							<input type="text" name="name" value="TAM EXPRESS COMPANY - شركة تم للتوصيل السريع" class="form-control input-lg  input-lg">                              
                               
                           
                    </div>
					 <div class="form-group">
                            <label>Title:</label> <span class="alert" id="title"></span>
                           
                               
       							<input type="text" class="form-control input-lg  input-lg" name="title" value="Tamco.sa - Contact Us - تم للتوصيل السريع إتصل بنا">                               
                               
                            
                    </div>
					 <div class="form-group">
                            <label>Keyword:</label> <span class="alert" id="keyword"></span>
                            
                               
       							<input type="text" class="form-control input-lg  input-lg" name="keyword" value="contact us, إتصل بنا">                             
                               
                           
                    </div>
					
					 <div class="form-group">
                            <label>Descrition:</label> <span class="alert" id="des"></span>
                           
       							<input type="text" class="form-control input-lg  input-lg" name="des" value="Reach us by email. mobile etc. - إتصل بنا عبر البريد الإلكتروني أو الجوال">                           
                               
                          
                    </div>
					
                   
                         
                            <input name="submit" type="submit" class="btn btn-primary" value="Submit" onclick="return Valid_add_seo(document.add_seo);"><input name="id" type="hidden" value="7">
                           
                   
				  </form>
                            
   						 </div>
					</div>
				</div>
			</div>
		</div>
	</div>
    </section>
</section>


  

    
<?php include APPPATH.'views/includes/footer.php';?>  
      
