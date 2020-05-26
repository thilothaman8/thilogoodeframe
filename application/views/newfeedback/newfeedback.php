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
            <li class="breadcrumb-item active" aria-current="page">feedback</li>
			<li class="breadcrumb-item active" aria-current="page"> Show New Feedback</li>
        </ol>
    </nav>
	<div class = "container">
	<div class="breadcrumb-line">
	    <div class="hk-pg-header">
            <h4><i data-feather="arrow-left-circle"></i></i> 
            <span class="text-semibold"></span>Show New Feedback</h4>
		</div>
	</div>
	<section class="hk-sec-wrapper">
		<div class="panel-heading">
				<h5 class="panel-title">Show New Feedback</h5>
		</div><br>
		<table class="table datatable-show-all table-bordered table-hover datatable-highlight">
           <form method="post" action=""></form>
        
            <thead>
                <tr>
                
        		<th colspan="5">
            <input type="text" class="form-control" name="search_val" value="" placeholder="search awb" onfocus="this.value=''"></th>
            
            	<th colspan="1">
            <input type="submit" name="Submit" class="btn btn-primary" value="Search" onclick="return Valid_search(document.search_form);"></th>
        
    				
              
                </tr>                      
        </thead><thead>
            <tr>
                <th class="head0">Sr.No.</th>
                <th class="head1">Date</th>
                <th class="head0">AWB No./Ref. No.</th>
                
                <th class="head0">Subject</th> 
                <th class="head1">Details</th> 
				<th class="head1">Rating
		</th>
            </tr>
        </thead>
                        
        <tbody>
                            <tr> 
                <td>1</td>
                <td>Aug 30, 2018</td>
                <td>  TAM1110259011 </td>
               
                <td> Complaint of employee(s)</td> 
                 <td> sadfa</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>2</td>
                <td>Sep  1, 2018</td>
                <td>  TAM5437786765 </td>
               
                <td> Support request</td> 
                 <td> tesr</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>3</td>
                <td>Sep  1, 2018</td>
                <td>  TAM5437786765 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> Test </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>4</td>
                <td>Sep  1, 2018</td>
                <td>  TAM5437786765 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> jkhkhjk</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>5</td>
                <td>Sep  1, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> Djsjjs</td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>6</td>
                <td>Sep  1, 2018</td>
                <td>  TAM7612020554 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> Test</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>7</td>
                <td>Sep  3, 2018</td>
                <td>  TAM5438677455 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> test 123456</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>8</td>
                <td>Sep  7, 2018</td>
                <td>  TAM1827862337 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> I went my order</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>9</td>
                <td>Sep  7, 2018</td>
                <td>  TAM1827862337 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> ابغى طلب حقي</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>10</td>
                <td>Sep  8, 2018</td>
                <td>  TAM2686237182 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> تم استلامها من قبل</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>11</td>
                <td>Sep  9, 2018</td>
                <td>  TAM3448296135 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td>  بعد كتابة الطلب لم نجد الية لإلغاء الطلب في حينه ونأسف على ازعاجكم</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>12</td>
                <td>Sep 13, 2018</td>
                <td>  TAM5777303083 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> رفضت الطلب لأنني لم اطلبه</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>13</td>
                <td>Sep 17, 2018</td>
                <td>  TAM5553526334 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> بسبب انه تم توصيل الطلب لجدة بينما انا في الرياض ولم ارفض الاستلام بل طلبت بتوصيله لرياض</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>14</td>
                <td>Sep 18, 2018</td>
                <td>  TAM7135394833 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> كنسل طلبيه</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>15</td>
                <td>Sep 22, 2018</td>
                <td>  TAM1214763964 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> this is test </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>16</td>
                <td>Sep 22, 2018</td>
                <td>  TAM1158626235 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> سبب رفضي للطلبية ان الواقع مخالف للاعلان فقد استلمت بناتي طلبية مماثلة عددها ٥ خواتم واخذتها عند الصائغ الذي افاد انها ليست الماس والدعاية تفيد الماس قيراط ونصف لذا تم طلبها كونها الماس واذا كانت بالفعل الماس يتم تزويدي بشهادة تضمن لي بذلك وشكراً لتفهمكم </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>17</td>
                <td>Sep 22, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> عدم المصداقيه وعدم إسبات صحة المنتج من الغش </td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>18</td>
                <td>Sep 25, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لم أرفض الطلب سبق وأن طلبت طقمين وعدت 
ارجو إرسالها أن أمكن لكم ذلك فقط  الطلابية الى واحد فقط </td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>19</td>
                <td>Sep 26, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> السبب هو التأخير </td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>20</td>
                <td>Sep 27, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لعدم المصدافيه وعدم تواصلهم معي الا بعد اسبوعين وانا الذي كلمتهم يوم الاثنين وقال طلبيتك وصلت جده وبعد العصر تستلمها وكل يوم اتصل ماوصلت بكره توصل حتي هذا اليوم  فكرهت الطلبيه من وماطلتهم وعدم مصدافيتهم لو كانت من امريكا طلبيتي ماتاخذ اسبوعين ونص وهم بالمدينه المنوره بالكثير يومين ياايت تحاسبو منوظفيكم ولو تبي ارسلك مراسلتي ع الواتس مع مندوب مدري مندوبه ارسلي رقمكم وتس ورسلكم محادثات موظفكم وتاريخ الطلبيه </td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>21</td>
                <td>Sep 27, 2018</td>
                <td>  TAM5362284333 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> ابغاه ارجوا توصيله لي ..كان السبب وقت التوصيل غير مناسب ارجوا توصيله الساعه  ٥ </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>22</td>
                <td>Sep 29, 2018</td>
                <td>  TAM6256591064 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> مطلي مواهب اصلي</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>23</td>
                <td>Sep 29, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لم اطلب شئ من هذا وأرى أن ما تم تسجيله بإسمي هو إحتيال</td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>24</td>
                <td>Sep 30, 2018</td>
                <td>  TAM6343862225 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> المنتج عير اصلي </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>25</td>
                <td>Oct  1, 2018</td>
                <td>  TAM8843717534 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لقد تم الطلب على مرتين وتم استلام الطلب </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>26</td>
                <td>Oct  1, 2018</td>
                <td>  TAM4769941887 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لا تقوموا بتوصيله الي في عنواني بالنماص بالمنطقه الجنوبيه وتقولون توصلو فقط الي الرياض وجده </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>27</td>
                <td>Oct  1, 2018</td>
                <td>  TAM9206254946 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> دونت في أصل الطلب استفسارات عن بعض النقاط مثل الوزن والحجم ولم يتم الرد </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>28</td>
                <td>Oct  1, 2018</td>
                <td>  TAM9626077251 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لا أريده خلاص </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>29</td>
                <td>Oct  1, 2018</td>
                <td>  TAM9626077251 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لا أريده خلاص </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>30</td>
                <td>Oct  1, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> الصنف غير المطلوب </td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>31</td>
                <td>Oct  2, 2018</td>
                <td>  TAM6066437688 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> إلغاء طلب </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>32</td>
                <td>Oct  2, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> قمت بإلغاء الطلب عند اتصال المستودع </td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>33</td>
                <td>Oct  2, 2018</td>
                <td>  TAM5705695164 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> I heard it’s fake one </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>34</td>
                <td>Oct  2, 2018</td>
                <td>  TAM3525449614 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> The phone is not original that’s why </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>35</td>
                <td>Oct  2, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> المنتج غير اصلي ولايوجد عليه ضمان وبعدين اتصلت علي الموقع مشغول دايما</td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>36</td>
                <td>Oct  2, 2018</td>
                <td>  TAM4429924574 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> متواجد عندي مثل المنتج هذا</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>37</td>
                <td>Oct  2, 2018</td>
                <td>  TAM6023961136 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> المنتج غير اصلي</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>38</td>
                <td>Oct  3, 2018</td>
                <td>  TAM1570577908 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> Original </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>39</td>
                <td>Oct  3, 2018</td>
                <td>  TAM1570577908 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> No cancel</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>40</td>
                <td>Oct  3, 2018</td>
                <td>  TAM1570577908 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> No cancel  please </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>41</td>
                <td>Oct  3, 2018</td>
                <td>  TAM1276773032 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لبس لدي ثمنه </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>42</td>
                <td>Oct  3, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لم يتم الطلب من طرفي وتم الاتصال من قبل الشركه واوضحت لهم اني لم اقم بالطلب وتم الغاءه</td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>43</td>
                <td>Oct  4, 2018</td>
                <td>  TAM1570577908 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> My order all Khafji </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>44</td>
                <td>Oct  4, 2018</td>
                <td>  TAM9100228963 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> عدم الاالتزام بوقت الاحضار الطلبيه </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>45</td>
                <td>Oct  4, 2018</td>
                <td>  TAM7604181698 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لست بحاجة الية الآن مع الشكر لقبول اعتذاري</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>46</td>
                <td>Oct  4, 2018</td>
                <td>  TAM5366582057 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> مابغا الطلب </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>47</td>
                <td>Oct  4, 2018</td>
                <td>  TAM5366582057 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> نعم يتم الغاء الطلب </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>48</td>
                <td>Oct  4, 2018</td>
                <td>  TAM3882542632 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> السلام عليكم ورحمة الله وبركاته لم يتم إلغاء أو رفض الطلب ولكنني خارج السعودية وشكرا </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>49</td>
                <td>Oct  6, 2018</td>
                <td>  TAM1211637418 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لعدم توفر المال حالينا</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>50</td>
                <td>Oct  6, 2018</td>
                <td>  TAM2506918417 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> Nobody gave me the assurance of the quality that it is genuine peice or duplicate.</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>51</td>
                <td>Oct  6, 2018</td>
                <td>  TAM2661539590 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> This time is not money </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>52</td>
                <td>Oct  7, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> ahmad
</td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>53</td>
                <td>Oct  7, 2018</td>
                <td>  TAM5737710744 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> I’m confused about the product it is original or not</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>54</td>
                <td>Oct  7, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> اخي الأصغر طلبها بالغلط </td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>55</td>
                <td>Oct  7, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> Fake mobile not original</td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>56</td>
                <td>Oct  8, 2018</td>
                <td>  TAM3281478350 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> جوال صيني وليس سامسونج 9</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>57</td>
                <td>Oct  8, 2018</td>
                <td>  TAM8714120055 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> بسبب السعر انا طلبت على حسب المبلغ الموضح في الموقع وكان السعر 199ريال وليس 299
وشكرا</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>58</td>
                <td>Oct  8, 2018</td>
                <td>  TAM8714120055 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> The price change from the amount shown on the website is 199 riyals
Upon arrival shipping agreements that the amount of 299 riyals was refused to receive the shipment</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>59</td>
                <td>Oct  9, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> اعتذر عن قبول الطلب والسبب : وجدت تقريباً نفس المنتج في سوق اخر بسعر اقل من المعروض لديكم بـ ثلاثة اضعاف تقريباً . شكراً لكم . </td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>60</td>
                <td>Oct 10, 2018</td>
                <td>  TAM8112644629 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> التأخير بالتواصل معي لتثبيت شراء السلعه قمت بالشراء من موقع اخر</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>61</td>
                <td>Oct 11, 2018</td>
                <td>  TAM1414870289 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لا احتاج الطلب </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>62</td>
                <td>Oct 11, 2018</td>
                <td>  TAM1414870289 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لا احتاج الطلب </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>63</td>
                <td>Oct 11, 2018</td>
                <td>  TAM9637559252 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لم اطلب هذا الطلب..
وقامت شركة يالامس بالاتصال بي من الامارات وقلت لهم اثناء المكالمة لا اريد شراء هذا الجوال</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>64</td>
                <td>Oct 11, 2018</td>
                <td>  TAM7911357029 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> شركه نصابه بتبيع تليفونات مش أصليه علي انها أصليه ولما اريد ارجاعه واحاول اتكلم علي تليفون او ابعت إيميل عشان يردو مابيردو ولا إيميل بيردو ياريت لا تتعاملون معهم</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>65</td>
                <td>Oct 11, 2018</td>
                <td>  TAM5358513478 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لايوجد سبب خدمه جيده</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>66</td>
                <td>Oct 13, 2018</td>
                <td>  TAM6103610795 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> أيفون x</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>67</td>
                <td>Oct 13, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td>  fake order
I dont have any online order mobile els </td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>68</td>
                <td>Oct 13, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> Sorry Fake order</td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>69</td>
                <td>Oct 14, 2018</td>
                <td>  TAM7799380339 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> الطلب ناقص </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>70</td>
                <td>Oct 14, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> المنتج غير اصلي</td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>71</td>
                <td>Oct 14, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> ابغي اعرف صيني ولا ايه ولو طلع خربان كيف يرجع تاني</td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>72</td>
                <td>Oct 15, 2018</td>
                <td>  TAM4269547330 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لقد تم التواصل معي يوم الاربعاء الماضي وتم اخباري بوجود المكنسة المطلوبة وحيث اني اسكن بالمحمدية اخبرت المتصل من شركتكم اذا وقت التوصيل سيكون صباح الخميس. فأنا موجود بمكتبي الى الساعة الثالثة مساءاً. قام السائق بالاتصال يوم الخميس صباحاً واخبرني انه في حي الزهراء ويريد توصيل الطلب الى منزلي بالمحمدية وقلت له انني اخبرت المكتب التوصيل في الصباح في مكتبي وبعد التحاورلم يتم التوصيل. وفي المرة الثانية يوم السبت الماضي تم الاتصال من مكتب الشركة حوالي  الساعة الحادي عشر صباحاً  (وانا نائم فاخبرته بتوص</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>73</td>
                <td>Oct 15, 2018</td>
                <td>  TAM5823282034 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لم اقم برفض الطلب فقط تم الاتصال عليا مره واحدة فقط ولم اكن عند الهاتف </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>74</td>
                <td>Oct 15, 2018</td>
                <td>  TAM5823282034 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لم اقم برفض الطلب فقط تم الاتصال عليا مره واحدة فقط ولم اكن عند الهاتف </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>75</td>
                <td>Oct 20, 2018</td>
                <td>  TAM3439298183 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> تم إستلام طلبي بتاريخ18/10/2018</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>76</td>
                <td>Oct 21, 2018</td>
                <td>  TAM2434227292 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> Iambus in madina for one month  after that go back to jeddah I will call you</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>77</td>
                <td>Oct 22, 2018</td>
                <td>  TAM6364725515 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> I need only one 
</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>78</td>
                <td>Oct 22, 2018</td>
                <td>  TAM8056598124 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> شركة اسواق الخليج قد تم شراء نظارات منهم من قبل وحاولت ارجاعها لعدم مناسبتها لي ولم يرد احد سواء ايميل او غيره ....اريد ارجاع النظارات للقياده الليليه وان ارى ان الشركة غير جديره وتعاملها مع العملاء جدا سيء  </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>79</td>
                <td>Oct 23, 2018</td>
                <td>  TAM1552400267 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> عندما قام الموظف الخاص بشركة الشحن 
لتبليغي بوصول الشحنه . سألني موقع العموان لكي يتم التسليم و عندما قولت له بأنني اقيم في المملكة العربية السعودية بمنطقة المدينة المنورة قال لي لا يوجد توصيل إلى المدينة المنورة يوجد بمنطقة جدة فقط و يأقوم بإلغاء شحنتك و قام بإغلاق الهاتف </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>80</td>
                <td>Oct 23, 2018</td>
                <td>  TAM7271627519 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> الامر الاول - التاخير في ارسال الشحنه 
ثانيا- غدا مسافر لمده اسبوعين </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>81</td>
                <td>Oct 25, 2018</td>
                <td>  TAM3477656588 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> sorry i need an original  phone  .thats it sorry for not original</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>82</td>
                <td>Oct 25, 2018</td>
                <td>  TAM8852069853 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> انا في محافظه القويعيه وهم يقولون انهم لا يوصلون الا  الى الرياض والدمام وجده فقط هذي هي المشكله</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>83</td>
                <td>Oct 25, 2018</td>
                <td>  TAM8852069853 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> انا في محافظه القويعيه وهم لا يوصلون اليها يوصلون الا الرياض والدمام وجده فقط </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>84</td>
                <td>Oct 25, 2018</td>
                <td>  TAM9765506984 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> Not applicable</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>85</td>
                <td>Oct 25, 2018</td>
                <td>  TAM5416791732 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> This s China made mobile, not original. Advertisement says “Original” Not interested to loose money for a chinese mobile. Thanks</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>86</td>
                <td>Oct 27, 2018</td>
                <td>  TAM1964846083 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> عدم التوصيل</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>87</td>
                <td>Oct 30, 2018</td>
                <td>  TAM1765155190 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> سلام أسباب مفي توسيل الخرج</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>88</td>
                <td>Oct 31, 2018</td>
                <td>  TAM9926099383 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> السبب ان المنتج يناسب جوالات معينة لا يناسب جوال الايفون اكس</td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>89</td>
                <td>Nov  1, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لظرف خاصوطاريء  بي وليس له دخل بالبضاعة </td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>90</td>
                <td>Nov  1, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> شحنتك رقم "TAM8689033614
" مع مندوب التوصيل "MOHSIN NASEER"  920011657 جاهزة للتسليم
... رفعت طلب بالإسترجاع واتصلت بكم قبل يومين ووافقوا على الإسترجاع.. والبضاعة لم تستلم لسهولة إرجاعها لكم. وشكرا </td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>91</td>
                <td>Nov  2, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لعدم القدره الماليه</td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>92</td>
                <td>Nov  2, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> تغيير الحجم
وبالفعل قمت بالشراء عن طريق الموقع </td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>93</td>
                <td>Nov  3, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> Order was cancelled from EXTRA.
you have a great delivery team with a great quality of service, keep it up</td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>94</td>
                <td>Nov  3, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> لقد وصلتني عن طريق مندوبكم يوم الاربعاء وقد استلمتها ولم اطلب طلبيتين طلبت واحده فقط</td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>95</td>
                <td>Nov  3, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> سواء اتعامل من قبل المرسل اشحن هاذا لي خلاني ارفض الطبيه على تعامل مع زباينكم تحطوان اشخص ماء عندهم اسلوب في تعامل مع العملاء حبيت اوضحلكم عن تصرفات اموضفين من قبلكم وشكرآ</td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>96</td>
                <td>Nov  3, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> I cancelled my order with EXTRA 3 days ago</td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>97</td>
                <td>Nov  3, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> السلام عليكم ورحمه الله وبركاته
اعتذر عن استلام الشحنه حيث قمت بالغاء الشحنه قبل ثلاث ايام من شركة اكسترا </td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>98</td>
                <td>Nov  3, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> Only one item was in the delivery, without the the other 2 items although they were all under one reference number </td>   
					            <td>0</td>
		   </tr>
                    <tr> 
                <td>99</td>
                <td>Nov  4, 2018</td>
                <td>  TAM5831191470 </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td>  تم تفقد االعلبه داخل كيس الشحن بواسطه اللمس وجدت 
 العلبه مفتوحه </td>   
					            <td></td>
		   </tr>
                    <tr> 
                <td>100</td>
                <td>Nov  4, 2018</td>
                <td>  See Details </td>
               
                <td> cancel / refuse the order - إلغاء / رفض الطلب</td> 
                 <td> تم رفض الشحنة رقم 2727494523 وذلك للسبب التالي  أن تم شراء ثلاث شحنات بسعر 245.64 ريال سعودي والشحن كان 27.80 ريال سعودي بإجمالي 273.44 ريال سعودي على أن يتم الدفع عند الاستلام؛ ولكن عند وصول الشحنة اتصل بي المندوب وبلغني بأن المبلغ المطلوب هو 999 ريال سعودي اي بزيادة قدرها 725.56 ريال سعودي - فما سبب هذه الزيادة فقمت برفض الشحنة </td>   
					            <td>0</td>
		   </tr>
                    <tr>
                <td colspan="9" align="center">
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
<input type="submit" class="btn btn-default center" value="11" onclick="return callpage(11);">
<input type="submit" class="btn btn-default center" value="Next ›" onclick="return callpage(2);">
</div></div>
                </form>
                </td>
            </tr>
        			
        </tbody>
	</table>
    </section>		
<?php include APPPATH.'views/includes/footer.php';?>