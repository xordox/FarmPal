<?php 
include ("connect.php");
include ("functions.php");
session_start();

$email = $_SESSION['email'];
$view = "SELECT * FROM `users` WHERE `email` = '$email'";
$result = mysqli_query($con, $view);
$result1 = mysqli_fetch_assoc($result);
$role = $result1['role'];
?>
<!DOCTYPE HTML><html> 
<!-- Mirrored from www.timothyprojects.net/manchester/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Sep 2015 16:40:16 GMT -->
<head> <script type=text/javascript src=js/jquery.js></script> <script type=text/javascript src=js/timothy.js></script> <script type=text/javascript src=js/slider.js></script> <script type=text/javascript src=js/simple-menu.js></script> <script type=text/javascript>var switchTo5x=true;</script> <script type=text/javascript src=../../w.sharethis.com/button/buttons.js></script> <script type=text/javascript>stLight.options({publisher: "ur-188beea2-d47-d892-3c0e-e51b985258a1"}); </script> <link href=css/styles.css rel=stylesheet type=text/css media=screen> <link href=css/print.css rel=stylesheet type=text/css media=print> <link href=css/slider.css rel=stylesheet type=text/css media=screen> <link href=css/simple-menu.css rel=stylesheet type=text/css media=screen> <meta http-equiv=Content-Type content="text/html; charset=utf-8" /> <meta http-equiv=Content-Type content=cache /> <meta name=robots content=INDEX,FOLLOW /> <meta name=robots content=noimageindex> <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel=stylesheet type=text/css> <link href='http://fonts.googleapis.com/css?family=Abel' rel=stylesheet type=text/css> <link href='http://fonts.googleapis.com/css?family=Mate+SC' rel=stylesheet type=text/css> <link href='http://fonts.googleapis.com/css?family=Bilbo' rel=stylesheet type=text/css> 
<title>FarmPal</title> <script type=text/javascript>  // This is the script for the banner slider
		$(document).ready(function() {
			$('#slider').s3Slider({
				timeOut: 5000
			});
		});
	</script> <meta name=keywords content="Enter Keywords" /> <meta name=description content="Description Here" /> <link href=css/skins/olive.css rel=stylesheet type=text/css media=screen> <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5475445-37', 'tmothyprojects.com');
  ga('send', 'pageview');

</script>

</head> <body> <div id=wrapper> <div id=top> <div id=name></div> <div id=social-media> <p>&nbsp;</p> 
  <ul> <li><a href=http://www.facebook.com/timothywebdesign target=_blank><img src=images/icons/facebook_32.png></a></li> <li><a href=http://www.twitter.com/createthenet target=_blank><img src=images/icons/twitter_32.png></a></li> <li><a href=#><img src=images/icons/rss_32.png></a></li> <li><a href=http://www.yelp.com/ target=_blank><img src=images/icons/yelp_32.png></a></li> <li><a href=http://www.linkedin.com/ target=_blank><img src=images/icons/linkedin_32.png></a></li> <li><a href=http://www.youtube.com/createthenet target=_blank><img src=images/icons/youtube_32.png></a></li> </ul> 
  <p>  <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {  include "welcome.php"; } else {?> <a href=register.php>Register</a> <a href=Login.php>Login</a> <?php } ?> </p></div> </div> 
  
 <div id=topnav class=wrap> <ul id=nav>
	   <li><a href=main.php>HOME</a></li> 
	   <li><a href=about.php>ABOUT</a>  </li> 
          <li><a href=services.php>ANALSIS</a></li>
          <li><a href=faq.php>FAQ</a></li>
          <?php if($role == 'admin') { ?><li><a href=user.php>USER</a></li> <?php } ?>
		  </ul> 
      </div> 
  <div id=slider>
    <ul id=sliderContent>
      <li class=sliderImage> <img src=images/banner/b1.jpg /> <span class=top><strong>WHEAT</strong><br />
        Temperature: 14 - 18 degree celcius.<br/>
        High temperature is harmful for cultivation.<br />
        <br/>
        Rainfall: 50 cm to 100 cm <br />
        In primarimary stage cold moisture<br />
        At the time of harvesting hot climate is required<br />
        <br />
        Soil: Fertile alluvial soil or mixed soil <br />
        <br />
        Land: Plain land or gentle slope is ideal.</span> </li>
      <li class=sliderImage> <img src=images/banner/b2.jpg /> <span class=top><strong>COFFEE</strong><br />
        Temperature:19 - 21.5 degree celcius<br />
        It requires warm and wet climate<br />
        <br />
        Rainfall: 180 to 280 cm is a must<br />
        Atleast 120 mm for adequate growth<br />
        <br />
        Soil: Well drained loamy soil<br />
        Hilly areas are more suitable</span> </li>
      <li class=sliderImage> <img src=images/banner/b3.jpg /> <span class=top><strong>RICE</strong><br />
        Temperature:20 - 40 degree celcius<br />
        The optimum temperature: 30 degree during day and 20 degree during night<br />
        <br />
        Rainfall: 100 to 200 mm is a must<br />
        125 cm during vegetative season<br />
        <br />
        Soil: Clayey alluvial soil which can retain water.</span> </li>
      <li class=sliderImage> <img src=images/banner/b4.jpg /> <span class=top><strong>RICE</strong><br />
        Temperature:20 - 40 degree celcius<br />
        The optimum temperature: 30 degree during day and 20 degree during night<br />
        <br />
        Rainfall: 100 to 200 mm is a must<br />
        125 cm during vegetative season<br />
        <br />
        Soil: Clayey alluvial soil which can retain water.</span> </li>
      <div class="clear sliderImage"></div>
    </ul>
  </div>
  <div id=content> <h1>Some major analysis </h1> 
    <table id=sample-table class=tablesorter> <caption>
                    Major crops grown in different regions of Nepal 
    </caption> <thead> <tr> <th width="6%">SN</th>
                        <th width="18%">Zone</th>
                        <th width="76%">Crops</th>
                         </tr> </thead> <tbody> <tr> <td>1.</td>
                             <td><p>Terai</p>
                             <p>(60-100m)</p></td>
                             <td>Paddy, maize, wheat, chickpea, pigeonpea, lentil, jute, niger, sesame, Perilla, wild relatives of rice, sugarcane, tobacco, kodomillet, mustard, etc. </td>
                        
                    </tr> <tr> <td>2.</td>
                          <td><p>Hill</p>
                          <p>(1000-3000m)</p></td>
                          <td>Paddy, maize, wheat, barley, buckwheat, covered barley, field peas, niger, wild relatives of buckwheat, finger millet, rice bean, jute, sesame, bean, cowper, rape, mustard, prosomillet, fox-tail millet, black gram, soyabean, etc. </td>
                           
                    </tr> <tr> <td>3.</td>
                            <td><p>Mountain</p>
                            <p>((3000-8848m)</p></td>
                            <td>Cold tolerance rice, wheat, maize, amaranths, chenopods, rice bean, blackgram, buckwheat, nacked barley, etc. </td>
                             
                    </tr>  </tbody> <tfoot> <tr>
                      <td colspan=4>&nbsp;</td>
                  </tr> </tfoot> </table>
	   <h2>Sample Level Two Heading</h2>
	    <p> Aliquam est mauris, cursus sit amet facilisis nec, euismod in elit. Integer eu pharetra odio. Proin dictum urna non nibh adipiscing laoreet at a dolor. Quisque varius lacus vitae neque.</p>
		
		<table id=sample-table class=tablesorter> <caption>
                    Some landraces of important food crops in Nepal
		</caption> <thead> <tr> <th width="7%">SN</th>
		    <th width="37%">Nepali Name</th>
		    <th width="22%">Crop</th>
		    <th width="34%">Landraces</th> 
		</tr> </thead> <tbody> <tr> <td>1.</td>
                        <td>Dhan</td>
                        <td>Rice</td>
                        <td>Jaswa, Lalsar, Basmati, Kalanamak, Jethobudho, Tauli, Jumli Marsi, Thapachiniya, Ghature, Tulasi, Attiya, Takmaro, Malinge, Solsale, Patle marsi, Jade marsi, Tyang malayo, Bhelghuthi,Chirake,Yangsare </td> 
                    </tr> <tr> <td>2.</td>
                          <td>Kodo</td>
                          <td>Fingermillet</td>
                          <td>Balu Nala, Kree, Mudke, Bang Katuwa, Dalle, Kalobunde, Seto Kodo Mudule, Pangdur, Jharpre, Kartike, Mangsire, Bange, Nagre, Dhante </td> 
                    </tr> <tr> <td>3.</td>
                            <td>Bhatmans</td>
                            <td>Soybean</td>
                            <td>Mahili, Kanchi, Kalo, Seto </td> 
                    </tr> <tr> <td>4.</td>
                            <td>Ghau</td>
                            <td>Wheat</td>
                            <td>Bhote ghau, Mudule, Dabde </td> 
                    </tr> <tr> <td>5.</td>
                              <td>Makai</td>
                              <td>Maize</td>
                              <td>Khkhre, Seto, Pahyale, Sano paine, Thulo paine, dhude, Chipte, Karchungum, Seepudhangre </td> 
                    </tr> <tr> <td>6.</td>
                              <td>Phapar</td>
                              <td>Buckwheat</td>
                              <td>Tite, Mithe </td> 
                    </tr> <tr> <td>7.</td>
                                <td>Khursani</td>
                                <td>Chilli</td>
                                <td>Akabare, Jire, Long, Dalle </td> 
                    </tr> </tbody> <tfoot> <tr>
                      <td colspan=4>&nbsp;</td>
                    </tr>
                     
</tfoot> </table>
		
  </div> 
		 
		 <div id=rightside><h3>Green Nepal </h3> 
		 <p>The main motto of our team is to build the Green Nepal. Support us to achieve our goal. Let's build Nepal. </p> 
		 <img class=image src=images/gallery/2sm.jpg> <p>&nbsp;</p>
		 <h3>QuestionCategories</h3> 
		 <ul> 
		   <li><a href=#>Dry Land </a></li>
		   <li><a href=#>Modern agriculture system </a></li>
		   <li><a href=#>Irrigation</a></li>
		   <li><a href=#>Fertilizers</a></li>
		   <li><a href=#>Rainfall</a></li>
		   </ul> 
		 <p>&nbsp;</p>
		 <p>&nbsp;</p> </div> <div id=footer> <p class=footer-text>@Copyright Protected | All Rights Reserved | FarmPal Fax:90022 | 555.555.5555</p> 
      <div id=share> <span class=st_facebook_hcount displayText=Facebook></span> <span class=st_twitter_hcount displayText=Tweet></span> <span class=st_email_hcount displayText=Email></span> <span class=st_googleplus_hcount displayText='Google +'></span> </div> 
      <a href=http://www.timothyprojects.net/credits/manchester.html>copyright @coolprabin2000@gmail.com </a></div> 
</div> </body> 
<!-- Mirrored from www.timothyprojects.net/manchester/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Sep 2015 16:40:18 GMT -->
</html>