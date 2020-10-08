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
<!-- Mirrored from www.timothyprojects.net/manchester/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Sep 2015 16:40:11 GMT -->
<head> <script type=text/javascript src=js/jquery.js></script> <script type=text/javascript src=js/timothy.js></script> <script type=text/javascript src=js/slider.js></script> <script type=text/javascript src=js/simple-menu.js></script> <script type=text/javascript>var switchTo5x=true;</script> <script type=text/javascript src=../../w.sharethis.com/button/buttons.js></script> <script type=text/javascript>stLight.options({publisher: "ur-188beea2-d47-d892-3c0e-e51b985258a1"}); </script>
 <link href=css/styles.css rel=stylesheet type=text/css media=screen>
  <link href=css/print.css rel=stylesheet type=text/css media=print> 
  <link href=css/slider.css rel=stylesheet type=text/css media=screen>
   <link href=css/simple-menu.css rel=stylesheet type=text/css media=screen>
   <meta http-equiv=Content-Type content="text/html; charset=utf-8" /> <meta http-equiv=Content-Type content=cache /> <meta name=robots content=INDEX,FOLLOW /> <meta name=robots content=noimageindex> <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel=stylesheet type=text/css> <link href='http://fonts.googleapis.com/css?family=Abel' rel=stylesheet type=text/css> <link href='http://fonts.googleapis.com/css?family=Mate+SC' rel=stylesheet type=text/css> <link href='http://fonts.googleapis.com/css?family=Bilbo' rel=stylesheet type=text/css> <title>FarmPal</title> <script type=text/javascript>  // This is the script for the banner slider
		$(document).ready(function() {
			$('#slider').s3Slider({
				timeOut: 5000
			});
		});
	</script> <meta name=keywords content="Enter Keywords" /> <meta name=description content="Description Here" /> <link href=css/skins/orange.css rel=stylesheet type=text/css media=screen> <script type=text/javascript src=js/popup.js></script> <link rel=stylesheet href=css/popup.css> <script type=text/javascript src=js/tablesorter.js></script> <link rel=stylesheet href=css/tablesorter.css> <script type=text/javascript>
			$(document).ready(function()
				{ $("#sample-table").tablesorter(); 	}
			);
		</script> <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5475445-37', 'tmothyprojects.com');
  ga('send', 'pageview');

</script>

</head> <body> <div id=wrapper> <div id=top> <div id=name></div> <div id=social-media> <p>&nbsp;</p> 
   <ul> <li><a href=http://www.facebook.com target=_blank><img src=images/icons/facebook_32.png></a></li> <li><a href=http://www.twitter.com target=_blank><img src=images/icons/twitter_32.png></a></li> <li><a href=#><img src=images/icons/rss_32.png></a></li> <li><a href=http://www.yelp.com target=_blank><img src=images/icons/yelp_32.png></a></li> 
  <li><a href=http://www.linkedin.com/ target=_blank><img src=images/icons/linkedin_32.png></a></li> 
  <li><a href=http://www.youtube.com/ target=_blank><img src=images/icons/youtube_32.png></a></li> </ul> 
  <p> <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true) {  include "welcome.php"; } else {?> <a href=register.php>Register</a> <a href=Login.php>Login</a> <?php } ?> </p></div> </div> 
  
 <div id=topnav class=wrap> <ul id=nav>
	   <li><a href=main.php>HOME</a></li> 
	   <li><a href=about.php>ABOUT</a>  </li> 
          <li><a href=services.php>ANALSIS</a></li>
          <li><a href=faq.php>FAQ</a></li>
          <?php if($role == 'admin') { ?><li><a href=user.php>USER</a></li> <?php } ?>
		  </ul> 
      </div>
  
   <div id=slider> <ul id=sliderContent> <li class=sliderImage>
    <img src=images/banner/b1.jpg /> <span class=top><strong>WHEAT</strong><br />Temperature: 14 - 18 degree celcius.<br/> High temperature is harmful for cultivation.<br /><br/>Rainfall: 50 cm to 100 cm <br />In primarimary stage cold moisture<br />At the time of harvesting hot climate is required<br /><br />Soil: Fertile alluvial soil or mixed soil <br /><br />Land: Plain land or gentle slope is ideal.</span> </li> <li class=sliderImage>
	 <img src=images/banner/b2.jpg /> <span class=top><strong>COFFEE</strong><br />Temperature:19 - 21.5 degree celcius<br />It requires warm and wet climate<br /><br />Rainfall: 180 to 280 cm is a must<br />Atleast 120 mm for adequate growth<br /><br />Soil: Well drained loamy soil<br />Hilly areas are more suitable</span>  </li> <li class=sliderImage>
	  <img src=images/banner/b3.jpg /> <span class=top><strong>RICE</strong><br />Temperature:20 - 40 degree celcius<br />The optimum temperature: 30 degree during day and 20 degree during night<br /><br />Rainfall: 100 to 200 mm is a must<br />125 cm during vegetative season<br /><br />Soil: Clayey alluvial soil which can retain water.</span>  </li> <li class=sliderImage>
	  <img src=images/banner/b4.jpg /> <span class=top><strong>RICE</strong><br />Temperature:20 - 40 degree celcius<br />The optimum temperature: 30 degree during day and 20 degree during night<br /><br />Rainfall: 100 to 200 mm is a must<br />125 cm during vegetative season<br /><br />Soil: Clayey alluvial soil which can retain water.</span> </li>
    <div class="clear sliderImage"></div> </ul> </div> <div id=content> <h1>About FarmPal </h1> 
    <p>FarmPal is the obvious friend of Nepali farmers as well as the needy farmers from around the world. Here we deals with the major cultivation problems and try to provide optimal solutions. We have high level experts, professors and government agricultural officers who are involved continuously to promote the agricultural system. </p> 
    <h2>Fields covered by FarmPal </h2>
    <p>We cover different areas of agriculture sector including research on the crops cultivated in different regions of our country. Some of the major areas of our research are as follows: </p> 
    <div id=sample-popup> <ul> <li><a href=# data-reveal-id=myModal1></a>Food crop genetic resources </li> 
        <div id=myModal1 class=reveal-modal> <h3>Sample Modal Popup Window</h3> <p>This is the descriptive text in the popup. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium nunc eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium nunc eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium nunc eget.</p> <a class=close-reveal-modal>×</a> </div> 
        <li><a href=# data-reveal-id=myModal2>Distribution of diversity </a></li> 
        <div id=myModal2 class="reveal-modal large"> <img src=images/11.png> <h4>Modal Popup with Image</h4> <p>This is the descriptive text in the popup. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium nunc eget. This is the descriptive text in the popup. This is the descriptive text in the popup. This is the descriptive text in the popup.This is the descriptive text in the popup. This is the descriptive text in the popup. </p> <p>This is the descriptive text in the popup. Lorem ipsum dolor sit amet, This is the descriptive text in the popup. This is the descriptive text in the popup. consectetur adipiscing elit. Phasellus pretium nunc eget. </p> <a class=close-reveal-modal>×</a> </div> 
        <li><a href=# data-reveal-id=myModal3>Implementing scientific methodology in agriculture </a></li> 
        <div id=myModal3 class="reveal-modal xlarge"> <h3>Large Modal Popup</h3> <p>This is the descriptive text in the popup. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pretium nunc eget. This is the descriptive text in the popup. This is the descriptive text in the popup. This is the descriptive text in the popup.This is the descriptive text in the popup. This is the descriptive text in the popup. </p> <p>This is the descriptive text in the popup. Lorem ipsum dolor sit amet, This is the descriptive text in the popup. This is the descriptive text in the popup. consectetur adipiscing elit. Phasellus pretium nunc eget. </p> <a class=close-reveal-modal>×</a> </div> 
        <li><a href=# data-reveal-id=myModal4>Hybrid crop cultivation </a></li> 
        <div id=myModal4 class="reveal-modal small"> <h3>Small Modal Popup</h3> <p>This is the descriptive text in the popup. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> <a class=close-reveal-modal>×</a> </div> 
        <li><a href=# data-reveal-id=myModal5>Optimizing the profit margin </a></li> 
        <div id=myModal5 class="reveal-modal medium"> <h3>Modal Popup with Google Map</h3> <p>This is the descriptive text in the popup. Lorem ipsum dolor sit amet, ipsum dolor sit amet orem ipsum dolor sit amet consectetur adipiscing elit.</p> <iframe width=425 height=350 frameborder=0 scrolling=no marginheight=0 marginwidth=0 src="http://maps.google.com/maps?hl=en&amp;q=222+n+spring+street+los+angeles&amp;ie=UTF8&amp;hq=&amp;hnear=222+N+Spring+St,+Los+Angeles,+California+90012&amp;gl=us&amp;t=m&amp;z=14&amp;ll=34.053788,-118.243615&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?hl=en&amp;q=222+n+spring+street+los+angeles&amp;ie=UTF8&amp;hq=&amp;hnear=222+N+Spring+St,+Los+Angeles,+California+90012&amp;gl=us&amp;t=m&amp;z=14&amp;ll=34.053788,-118.243615&amp;source=embed" style=color:#0000FF;text-align:left>View Larger Map</a></small> <a class=close-reveal-modal>×</a> </div> 
        <li><a href=# data-reveal-id=myModal6>Statistical analysis of cultivation </a></li> 
        <div id=myModal6 class="reveal-modal large"> <div id=wufoo-z7x1w3> Fill out my <a href=http://timothywebdesign.wufoo.com/forms/z7x1w3>online form</a>. </div> <script type=text/javascript>var z7x1w3;(function(d, t) {
                         var s = d.createElement(t), options = {
                         'userName':'timothywebdesign', 
                         'formHash':'z7x1w3', 
                         'autoResize':true,
                         'height':'488',
                         'async':true,
                         'header':'show'};
                         s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
                         s.onload = s.onreadystatechange = function() {
                         var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
                         try { z7x1w3 = new WufooForm();z7x1w3.initialize(options);z7x1w3.display(); } catch (e) {}};
                         var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
                         })(document, 'script');
                    </script> <a class=close-reveal-modal>×</a> </div> </ul> </div> 
    <p>In near future we are also planning to provide online training to the farmers related to implementing scientific process of cultivation as well as growing improved crops. </p> 
                    <h2>Team Members:</h2> 
                    <table id=sample-table class=tablesorter> <caption>
                    Sample Data Table - Team Members
                    </caption> <thead> <tr> <th>Department</th><th>Last Name</th><th>First Name</th><th>Telephone</th> </tr> </thead> <tbody> <tr> <td>Research</td>
                        <td>Maharjan</td>
                        <td>Prabin</td>
                        <td>980.555.1211</td> 
                    </tr> <tr> <td>Hybrid crop development</td>
                          <td>Bhusal</td>
                          <td>Ganesh</td>
                          <td>980.555.1212</td> 
                    </tr> <tr> <td>Data Analysis </td>
                            <td>Upreti</td>
                            <td>Pukar</td>
                            <td>980.555.1213</td> 
                    </tr> <tr> <td>Information Technology</td>
                            <td>Shrestha</td>
                            <td>Abishek</td>
                            <td>980.555.1214</td> 
                    </tr> <tr> <td>Communication and Leadership </td>
                              <td>Khadka</td>
                              <td>Sabina</td>
                              <td>980.555.1215</td> 
                    </tr> <tr> <td>Accounting</td>
                              <td>Thapa</td>
                              <td>Goma</td>
                              <td>980.555.1216</td> 
                    </tr> <tr> <td>Management</td>
                                <td>Maharjan</td>
                                <td>Pralesh</td>
                                <td>980.555.1217</td> 
                    </tr> </tbody> <tfoot> <tr>
                      <td colspan=4>Fig: Team members of FarmPal </td>
                    </tr> </tfoot> </table> 
                    <p>We are strongly committed in improving the agriculture process of our country. We would love to hear from our users frequently. </p> 
                    <p>&nbsp;</p> </div> <div id=rightside><h3>Green Nepal </h3> 
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
                      <div id=share> <span class=st_facebook_hcount displaytext=Facebook></span> <span class=st_twitter_hcount displaytext=Tweet></span> <span class=st_email_hcount displaytext=Email></span> <span class=st_googleplus_hcount displaytext='Google +'></span> </div> 
                      <a href=http://www.timothyprojects.net/credits/manchester.html>copyright @coolprabin2000@gmail.com </a></div> 
</div> </body> 
<!-- Mirrored from www.timothyprojects.net/manchester/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Sep 2015 16:40:15 GMT -->
</html>