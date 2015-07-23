<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>kinnaghsh</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/responsiveSlider.css">
    <link rel="stylesheet" type="text/css" href="css/master.css">
    <meta name="description" content="کیانقش | نمایشگاه |">
    <meta name="author" content="rayweb.ir | شرکت طراحی وب سایت رای وب">
    <meta name='robots' content='index,follow'>   
</head>
<body>
    <nav class="navbar navbar-fixed-top navbar-default">
        <header>    
            <div id="navOne" class="navbar" role="navigation">
                <div class="container">
                	<div class="col-md-2">
                    
                    	<div class="col-sm-2">
                            <a class="navbar-brand logo" href="#" title="kiannaghsh | کیان نقش"> 
                                <img src="images/kian_logo.png" alt="kiannaghsh | کیان نقش" / width="75">
                            </a>
                        </div>
					</div>
                    <div class="navbar-header"> 
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="pull-right">منو</span>
                        </button>
                    </div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">         
							<li class="active pull-right"><a href="?page=home" data-close-others="true">خانه</a>
                            </li>
                            <li class="dropdown pull-right">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="caret">
                            	</span>
                                نمونه کارها
                            	</a>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                	<li class="text-right"><a href="#">نمونه کار 1</a></li>
                                    <li class="text-right"><a href="#">نمونه کار 2</a></li>
                                    <li class="text-right"><a href="#">نمونه کار 3</a></li>
                                </ul>
                            </li>
                            <li class=" pull-right">
                                <a href="#" class="dropdown-toggle">اخبار</a>
                            </li>
                            <li class=" pull-right">
                                <a href="#" class="dropdown-toggle">فروشگاه</a>
                            </li>
                            <li class=" pull-right">
                                <a href="#" class="dropdown-toggle">انجمن</a>
                            </li>            
                            <li class=" pull-right">
                                <a href="?page=contact" class="dropdown-toggle">ارتباط با ما</a>
                            </li>            
                            <li class=" pull-right">
                                <a href="#" class="dropdown-toggle">درباره ما</a>
                            </li>                    
                        </ul>
                    </div>	     
                </div>
            </div>		
        </header>
	</nav>
<!--/.nav-collapse -->
<div class="clearfix"></div>
<?php
	if(isset($_GET['page'])){
				if(is_file('include/'.$_GET['page'].'.php')){
					include 'include/'.$_GET['page'].'.php';
					}else{
					die('صفحه مورد نظر وجود ندارد');
					}
				}else{
					include 'include/home.php';
					}


?>	
	<div class="clearfix"></div>
    <footer  class="footerInfo">
                <div class="col-md-4" align="justify">
                    <div>
                        <h4 align="center">ارتباط با <strong class="goldenColor">کیان نقش</strong></h4>
                        <hr >
                        <h4>گروه طراحی و غرفه آرایی </h4>
                        
                        <ul style="list-style-type: none;">
                            <li>
                            	<i class="fa fa-taxi">
                            	</i> تهران ، بزرگراه چمران ، محل دائمی نمایشگاههای بین المللی ، سالن 37 ، دفتر شماره 7
                            </li>
                           	<li>
                            	<i class="fa fa-phone">
                                </i> 22657042 - 021 
                            </li>
                            <li>
                            	<i class="fa fa-fax">
                                </i> 22662855 - 021 
                            </li>
                            <li>
                            <i class="fa fa-envelope-o" >
                                </i>
                                <a href="mailto:example@example.ir" title="Email Us" style="color:#fff;"> example@example.ir 
                                </a>
                            	
                           	</li>    
                        </ul>
                        <hr>
                        <h4>بخش فنی و اجرایی </h4>
                        
                        <ul style="list-style-type: none;">
                            <li>
                            	<i class="fa fa-taxi">
                            	</i> تهران ، بزرگراه چمران ، محل دائمی نمایشگاههای بین المللی ، جنب سالن 38A ، واحد چاپخانه 
                            </li>
                            <li>
                            	<i class="fa fa-fax">
                                </i> 22662737 - 021 
                            </li>   
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                     <h4 style="text-align:center">لینک های مرتبط</h4>
                        <hr>
                        <ul style="list-style-type: none; text-align:center;">
                            <li>
                            	<a href="/" style="color:#fff;">
                                	<h5>خانه</h5> 
                                </a>
                            </li>
                            <li>
                            	<a href="/" style="color:#fff;">
                                	<h5>نمونه کارها</h5>
                                </a>
                            </li>
                            <li>
                            	<a href="/" style="color:#fff;">
                                	 <h5>اخبار</h5>
                                </a>
                            </li>
                    		<li>
                            	<a href="/" style="color:#fff;">
                                 <h5>فروشگاه</h5>
                                </a>
                            </li>         
                            <li>
                            	<a href="/" style="color:#fff;"> 
                                <h5>انجمن</h5>
                                </a>
                            </li>
                            <li>
                            	<a href="/" style="color:#fff;">
                                 <h5>ارتباط با ما</h5>
                                </a>
                            </li>
                            <li>
                            	<a href="/" style="color:#fff;">
                                 <h5>درباره ما</h5>
                                </a>
                            </li>
                        </ul>
                </div>
                <div class="col-md-4">
                		<h4 style="text-align:center;">درباره ما</h4>
                        <hr>
                        	<p style="text-align:justify;">مجموعه کیان نقش با حضور بیش از یک دهه در محل دائمی نمایشگاه تهران و همچنین با در اختیار داشتن تجهیزات و کادری باتجربه در زمینه های طراحی و اجرای غرفه های ویژه ، اسپیس فریم ، ماکسیما فعالیت می نماید.
                            </p>
                            
                </div>
                <div class="clearfix"></div>
             	<div class="container col col-social-icons text-center">
                	<a href="https://www.facebook.com/" target="_blank">
                    	<i class="fa fa-facebook"></i>         
                    </a>
                    <a href="https://plus.google.com/">
                    	<i class="fa fa-google-plus"></i>    
                    </a>
                    <a href="https://www.linkedin.com/">
                        <i class="fa fa-linkedin"></i>    
                    </a>
                    <a href="https://instagram.com/">
                        <i class="fa fa-instagram"></i>
                    </a>
                 </div>
            </div>
            <div  class="footerDesign">
               <div class="copyright" dir="rtl">
                		<p>کلیه حقوق مادی و معنوی این وب سایت متعلق به کیان نقش می باشد.</p>
                        	<p> طراح :
                             <a href="http://rayweb.ir"> رای وب </a></p>  
               			</div>   
            	</div>
   		</div>
    </footer>	
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script>
	  $(".rslides").responsiveSlides({
		  auto: true,             // Boolean: Animate automatically, true or false
		  speed: 500,            // Integer: Speed of the transition, in milliseconds
		  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
		  pager: true,           // Boolean: Show pager, true or false
		  nav: true,             // Boolean: Show navigation, true or false
		  random: false,          // Boolean: Randomize the order of the slides, true or false
		  pause: false,           // Boolean: Pause on hover, true or false
		  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
		  prevText: "قبلی",   // String: Text for the "previous" button
		  nextText: "بعدی",       // String: Text for the "next" button
		  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
		  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
		  manualControls: "",     // Selector: Declare custom pager navigation
		  namespace: "rslides",   // String: Change the default namespace used
		  before: function(){},   // Function: Before callback
		  after: function(){}     // Function: After callback
	  });
	</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/master.js"></script>
  </body>
</html>
