<?php 
include ("connect.php");
include ("functions.php");
session_start();

$email = $_SESSION['email'];
$view = "SELECT * FROM `users` WHERE `email` = '$email'";
$result = mysqli_query($con, $view);
$result1 = mysqli_fetch_assoc($result);
$role = $result1['role'];

if(isset($_POST['submit_query']))
  {
    $INCLUDETYPE = "QUERY"; 
    require_once 'query.php';
  }

if(isset($_POST['answer_query']))
  {
    $INCLUDETYPE = "ANSQUERY"; 
    require_once 'query.php';
  }
?>
<!DOCTYPE HTML><html> 
<!-- Mirrored from www.timothyprojects.net/manchester/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Sep 2015 16:40:42 GMT -->
<head> <script type=text/javascript src=js/jquery.js></script> <script type=text/javascript src=js/timothy.js></script> <script type=text/javascript src=js/slider.js></script> <script type=text/javascript src=js/simple-menu.js></script> <script type=text/javascript>var switchTo5x=true;</script> <script type=text/javascript src=../../w.sharethis.com/button/buttons.js></script> <script type=text/javascript>stLight.options({publisher: "ur-188beea2-d47-d892-3c0e-e51b985258a1"}); </script> <link href=css/styles.css rel=stylesheet type=text/css media=screen> <link href=css/print.css rel=stylesheet type=text/css media=print> <link href=css/slider.css rel=stylesheet type=text/css media=screen> <link href=css/simple-menu.css rel=stylesheet type=text/css media=screen> <meta http-equiv=Content-Type content="text/html; charset=utf-8" /> <meta http-equiv=Content-Type content=cache /> <meta name=robots content=INDEX,FOLLOW /> <meta name=robots content=noimageindex> <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel=stylesheet type=text/css> <link href='http://fonts.googleapis.com/css?family=Abel' rel=stylesheet type=text/css> <link href='http://fonts.googleapis.com/css?family=Mate+SC' rel=stylesheet type=text/css> <link href='http://fonts.googleapis.com/css?family=Bilbo' rel=stylesheet type=text/css> <title>FarmPal</title> <script type=text/javascript>  // This is the script for the banner slider
		$(document).ready(function() {
			$('#slider').s3Slider({
				timeOut: 5000
			});
		});
	</script> <meta name=keywords content="Enter Keywords" /> <meta name=description content="Description Here" /> <script src=js/faq.js type=text/javascript></script> <link href=css/faq.css rel=stylesheet type=text/css media=screen> <link href=css/skins/powderblue.css rel=stylesheet type=text/css media=screen> <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5475445-37', 'tmothyprojects.com');
  ga('send', 'pageview');

</script>

</head> <body> <div id=wrapper> <div id=top> <div id=name></div> <div id=social-media> <p><br />
        Email: <a href=http://www.gmail.com target=_blank>coolprabin2000@gmail.com</a></p> 
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
    <div class="clear sliderImage">
    </div> </ul> </div> 
    <div id=content> <h1>Freqently Asked Questions</h1> 
    <p>Here we have presented some of the common problems and confusions of farmers. Also we are trying to give optimal solutions to their problems. </p> 
    <!--
    <div id=faqs> <h3>Choosing Fertilizer </h3> 
      <div> <img src=images/icons/addressbook.png> <h4>I have small kitchen farm behind my house. I have cultivated vegetables there, but the problem is despite regular use of fertilizer, the crops are not growing well. What should i do? </h4> 
        <p>Well, you have mentioned that you are using fertilizer regularly, but it's not clear whether you are using organic fertilizer or the chemical fertilizer. For most of the vegetables, organic fertilizer is preferred to chemical. One of your mistake is using the fertilizer regularly. We should use the fertilizer only once during the plantation. Also the crops need sufficient sunlight and water supply. </p> 
      </div> 
      <h3>Using scientific equipments </h3> 
      <div> <img src=images/icons/chart.png> <h4>I have 2 ropani field in eastern terai. Ploughing the field with human power seems time consuming and costly. What should i do? </h4> 
        <p>The best solution to your problem is using modern technologies. You will have fruitful result in less effort and cost. </p> 
      </div> 
      <h3>Choosing crops </h3> 
      <div> <img src=images/icons/clock.png> <h4>I own 3 ana land in hilly area. There is shortage of water and enough sunlight. But i want to utilize the land in cultivation. What should i cultivate? </h4> 
        <p>From our point of view , cultivating maize and soyabean will be the best. . </p> 
      </div> </div> -->
    
    <?php 
    if($role == 'user')
    {
        $view = "SELECT * FROM `query`";
        $result = mysqli_query($con, $view);
    
        while($result2 = mysqli_fetch_assoc($result) ) 
        {
          if($result2["query"] != "" )
          {
            ?> 
            <h3> <font color="#356C73">
            <?php printf ("%s", $result2["query"]  . "<br>"); ?>
            </font></h3>
            <h4><font color="#000000">
            -> <?php printf ("%s", $result2["answer"]  . "<br><br>");?>
            </font></h4>
            <?php
          }
         } 
        
      ?>
      <p>If you have further queries, please ask us. We will reply to your valuable queries as fast as we can. </p> 
      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
      <h4>Your Query: </h4><br />
        <textarea type="text" name="query">  </textarea><br /><br />
        
        <input type="submit" name="submit_query" />
      </form>
      <?php
    }
    else if($role == 'agriculture')
    {
       $view = "SELECT * FROM `query`";
        $result = mysqli_query($con, $view);
        $view_query = "SELECT query FROM `query`";
        $result1 = mysqli_query($con, $view_query);
      
        while($result2 = mysqli_fetch_assoc($result) ) 
        {
          if($result2["query"] != "" && $result2["answer"] != "")
          {
            ?> 
            <h3> <font color="#356C73">
            <?php printf ("%s", $result2["query"]  . "<br>"); ?>
            </font></h3>
            <h4><font color="#000000">
            -> <?php printf ("%s", $result2["answer"]  . "<br><br>");?>
            </font></h4>
            <?php
          }
         } 
         ?>
         <h3><font color="#F44336"><?php echo "<br />"."Give your answers:"."<br />";?></font></h3><?php
        while($result3 = mysqli_fetch_assoc($result1) ) 
        {

          if($result3["query"] != "")
          {
            ?> 
            <h3><font color="#356C73"> <?php printf ("%s", $result3["query"]  . "<br>");?> </font></h3>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
            <h4>Your Answer: </h4><br />
              <textarea type="text" name="ans">  </textarea><br /><br />
              
              <input type="submit" name="answer_query" />
            </form> <?php
          }
        }
    } 
    else if($role == 'admin')
    {
      $view = "SELECT * FROM `query`";
        $result = mysqli_query($con, $view);
    
        while($result2 = mysqli_fetch_assoc($result) ) 
        {
          if($result2["query"] != "" )
          {
            ?> 
            <h3> <font color="#356C73">
            <?php printf ("%s", $result2["query"]  . "<br>"); ?>
            </font></h3>
            <h4><font color="#000000">
            -> <?php printf ("%s", $result2["answer"]  . "<br><br>");?>
            </font></h4>
            <?php
          }
         } 
    }
    else
    {
      $view = "SELECT * FROM `query`";
        $result = mysqli_query($con, $view);
    
        while($result2 = mysqli_fetch_assoc($result) ) 
        {
          if($result2["query"] != "" && $result2["answer"] != "")
          {
            ?> 
            <h3> <font color="#356C73">
            <?php printf ("%s", $result2["query"]  . "<br>"); ?>
            </font></h3>
            <h4><font color="#000000">
            -> <?php printf ("%s", $result2["answer"]  . "<br><br>");?>
            </font></h4>
            <?php
          }
         } 
    }
    ?>
        </div> 

        <div id=rightside>
          <h3>Green Nepal </h3> 
          <p>The main motto of our team is to build the Green Nepal. Support us to achieve our goal. Let's build Nepal. </p> 
          <img class=image src=images/gallery/2sm.jpg> <p>&nbsp;</p>
        <h3>QuestionCategories</h3> 
        <ul> <li><a href=#>Dry Land </a></li> 
          <li><a href=#>Modern agriculture system </a></li> 
          <li><a href=#>Irrigation</a></li> 
          <li><a href=#>Fertilizers</a></li> 
          <li><a href=#>Rainfall</a></li> 
        </ul> <p>.</p>
        <p>&nbsp;</p> </div> <div id=footer> <p class=footer-text>@Copyright Protected | All Rights Reserved | FarmPal Fax:90022 | 555.555.5555</p> 
          <div id=share> <span class=st_facebook_hcount displayText=Facebook></span> <span class=st_twitter_hcount displayText=Tweet></span> <span class=st_email_hcount displayText=Email></span> <span class=st_googleplus_hcount displayText='Google +'></span> </div> 
          <a href=http://www.timothyprojects.net/credits/manchester.html>copyright @coolprabin2000@gmail.com </a></div> 
        </div> </body> 
        <!-- Mirrored from www.timothyprojects.net/manchester/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Sep 2015 16:40:47 GMT -->
        </html>
      