<?php 
session_start();
include("connect.php");
include("functions.php");

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
{
$email = $_SESSION['email'];
$view = "SELECT * FROM `users` WHERE `email` = '$email'";
$result = mysqli_query($con, $view);
$result1 = mysqli_fetch_assoc($result);
$role = $result1['role'];

?>
<!DOCTYPE HTML><html> 
<!-- Mirrored from www.timothyprojects.net/manchester/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Sep 2015 16:38:51 GMT -->
<head> <script type=text/javascript src=js/jquery.js></script> <script type=text/javascript src=js/timothy.js></script> <script type=text/javascript src=js/slider.js></script> <script type=text/javascript src=js/simple-menu.js></script> <script type=text/javascript>var switchTo5x=true;</script> <script type=text/javascript src=../../w.sharethis.com/button/buttons.js></script> <script type=text/javascript>stLight.options({publisher: "ur-188beea2-d47-d892-3c0e-e51b985258a1"}); </script> <link href=css/styles.css rel=stylesheet type=text/css media=screen> <link href=css/print.css rel=stylesheet type=text/css media=print> <link rel="stylesheet" href="css/style_reg.css" /><link href=css/style_reg.css rel=stylesheet type=text/css media=screen> <link href=css/slider.css rel=stylesheet type=text/css media=screen><link href=css/simple-menu.css rel=stylesheet type=text/css media=screen> <meta http-equiv=Content-Type content="text/html; charset=utf-8" /> <meta http-equiv=Content-Type content=cache /> <meta name=robots content=INDEX,FOLLOW /> <meta name=robots content=noimageindex> <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel=stylesheet type=text/css> <link href='http://fonts.googleapis.com/css?family=Abel' rel=stylesheet type=text/css> <link href='http://fonts.googleapis.com/css?family=Mate+SC' rel=stylesheet type=text/css> <link href='http://fonts.googleapis.com/css?family=Bilbo' rel=stylesheet type=text/css> <title>FarmPal</title> <script type=text/javascript>  // This is the script for the banner slider
    $(document).ready(function() {
      $('#slider').s3Slider({
        timeOut: 5000
      });
    });
  </script> <meta name=keywords content="Enter Keywords" /> <meta name=description content="Description Here" /> <link href=css/skins/tan.css rel=stylesheet type=text/css media=screen> <script type=text/javascript>
      function MM_preloadImages() { //v3.0
        var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
          var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
          if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
      }
      
      function MM_swapImgRestore() { //v3.0
        var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
      }
      
      function MM_findObj(n, d) { //v4.01
        var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
          d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
        if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
        for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
        if(!x && d.getElementById) x=d.getElementById(n); return x;
      }
      
      function MM_swapImage() { //v3.0
        var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
         if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
      }
          </script> <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5475445-37', 'tmothyprojects.com');
  ga('send', 'pageview');

</script>

</head> <body onLoad="MM_preloadImages('images/gallery/1sm.jpg','images/gallery/4sm.jpg')"><div id=wrapper> <div id=top> <div id=name></div> <div id=social-media> <p>&nbsp;</p> 
  <ul> <li><a href=http://www.facebook.com target=_blank><img src=images/icons/facebook_32.png></a></li> <li><a href=http://www.twitter.com target=_blank><img src=images/icons/twitter_32.png></a></li> <li><a href=#><img src=images/icons/rss_32.png></a></li> <li><a href=http://www.yelp.com target=_blank><img src=images/icons/yelp_32.png></a></li> 
  <li><a href=http://www.linkedin.com/ target=_blank><img src=images/icons/linkedin_32.png></a></li> 
  <li><a href=http://www.youtube.com/ target=_blank><img src=images/icons/youtube_32.png></a></li> </ul>
  <p> <?php include "welcome.php"; ?></p></div> </div> 
    
     <div id=topnav class=wrap> <ul id=nav>
     <li><a href=main.php>HOME</a></li> 
     <li><a href=about.php>ABOUT</a>  </li> 
          <li><a href=services.php>ANALSIS</a></li>
          <li><a href=faq.php>FAQ</a></li>
          <?php if($role == 'admin') { ?><li><a href=user.php>USER</a></li> <?php } ?>
      </ul> 
      </div> <div id=slider> <ul id=sliderContent> <li class=sliderImage>
    <img src=images/banner/b1.jpg /> <span class=top><strong>WHEAT</strong><br />Temperature: 14 - 18 degree celcius.<br/> High temperature is harmful for cultivation.<br /><br/>Rainfall: 50 cm to 100 cm <br />In primarimary stage cold moisture<br />At the time of harvesting hot climate is required<br /><br />Soil: Fertile alluvial soil or mixed soil <br /><br />Land: Plain land or gentle slope is ideal.</span> </li> <li class=sliderImage>
   <img src=images/banner/b2.jpg /> <span class=top><strong>COFFEE</strong><br />Temperature:19 - 21.5 degree celcius<br />It requires warm and wet climate<br /><br />Rainfall: 180 to 280 cm is a must<br />Atleast 120 mm for adequate growth<br /><br />Soil: Well drained loamy soil<br />Hilly areas are more suitable</span>  </li> <li class=sliderImage>
    <img src=images/banner/b3.jpg /> <span class=top><strong>RICE</strong><br />Temperature:20 - 40 degree celcius<br />The optimum temperature: 30 degree during day and 20 degree during night<br /><br />Rainfall: 100 to 200 mm is a must<br />125 cm during vegetative season<br /><br />Soil: Clayey alluvial soil which can retain water.</span>  </li> <li class=sliderImage>
    <img src=images/banner/b4.jpg /> <span class=top><strong>MAIZE</strong><br />Temperature:15 - 30 degree celcius<br /><br />Rainfall: 100 to 250 mm is a must.<br /><br />Soil: Clayey alluvial soil which can retain water.</span> </li>
    <div class="clear sliderImage"></div> </ul> </div> <div id=content> <h1>Welcome To FarmPal </h1> 
        <p>FarmPal is the obvious friend of Nepali farmers as well as the needy farmers from around the world. Here we deals with the major cultivation problems and try to provide optimal solutions. We have high level experts, professors and government agricultural officers who are involved continuously to promote the agricultural system. </p> 
        <h2>FarmPal Collections</h2> 
        <p>We want to see crops growing from the barren land and our main aim is to help farmers to grow healthy crops out of their fields so they the agricultural production rate increases along with the life standard of farmers.. </p> 
        <div id=box1> <a href=collection-one.html><img src=images/gallery/1sm-sepia.jpg id=Image1 onMouseOver="MM_swapImage('Image1','','images/gallery/1sm.jpg',1)" onMouseOut=MM_swapImgRestore()></a> <h2>Productivity of soil </h2> 
          <p>We intend to aid farmers with scientific ideas to improve the production capacity of soil. We help them to utilize their lands even during off-seasons. </p> 
        </div> <div id=box2> <a href=collection-two.html><img src=images/gallery/4sm-sepia.jpg id=Image2 onMouseOver="MM_swapImage('Image2','','images/gallery/4sm.jpg',1)" onMouseOut=MM_swapImgRestore()></a> <h2>Curing diseases </h2> 
          <p>Based on the description and pictures provided by the farmers, we tend to provide optimal solution to get rid of unhealthy productions. </p> 
        </div><br/> <h2>More About FarmPal </h2> 
        <p>&nbsp;</p> 
        <p>&nbsp;</p> 
        <p>To know more about us please go to <a href=about.php>ABOUT</a> page. </p> 
        <p>&nbsp;</p> 
        <h3> Serving farmers to solve their problems is our motto. </h3> 
      </div> <div id=rightside><h3>Green Nepal </h3> 
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
      <p>&nbsp;</p> <div id=twitter-feed> <script charset=utf-8 src=../../widgets.twimg.com/j/2/widget.js></script> <script>
               new TWTR.Widget({
                 version: 2,
                 type: 'profile',
                 rpp: 4,
                 interval: 30000,
                 width: 250,
                 height: 300,
                 theme: {
                   shell: {
                     background: '#e6811c',
                     color: '#ffffff'
                   },
                   tweets: {
                     background: '#ffffff',
                     color: '#000000',
                     links: '#a87e1c'
                   }
                 },
                 features: {
                   scrollbar: false,
                   loop: false,
                   live: false,
                   behavior: 'all'
                 }
               }).render().setUser('createthenet').start();
               </script> </div> </div> <div id=footer> <p class=footer-text>@Copyright Protected | All Rights Reserved | FarmPal Fax:90022 | 555.555.5555</p> 
                 <div id=share> <span class=st_facebook_hcount displaytext=Facebook></span> <span class=st_twitter_hcount displaytext=Tweet></span> <span class=st_email_hcount displaytext=Email></span> <span class=st_googleplus_hcount displaytext='Google +'></span> </div> 
               <a href=http://www.timothyprojects.net/credits/manchester.html>copyright @coolprabin2000@gmail.com </a> </div> 
               </div> </body> 
<!-- Mirrored from www.timothyprojects.net/manchester/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Sep 2015 16:39:53 GMT -->
</html>

<?php
}
else
{
  ?>
<!DOCTYPE HTML><html> 
<!-- Mirrored from www.timothyprojects.net/manchester/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Sep 2015 16:38:51 GMT -->
<head> <script type=text/javascript src=js/jquery.js></script> <script type=text/javascript src=js/timothy.js></script> <script type=text/javascript src=js/slider.js></script> <script type=text/javascript src=js/simple-menu.js></script> <script type=text/javascript>var switchTo5x=true;</script> <script type=text/javascript src=../../w.sharethis.com/button/buttons.js></script> <script type=text/javascript>stLight.options({publisher: "ur-188beea2-d47-d892-3c0e-e51b985258a1"}); </script> <link href=css/styles.css rel=stylesheet type=text/css media=screen> <link href=css/print.css rel=stylesheet type=text/css media=print> <link href=css/style_reg.css rel=stylesheet type=text/css media=screen> <link href=css/slider.css rel=stylesheet type=text/css media=screen><link href=css/simple-menu.css rel=stylesheet type=text/css media=screen> <meta http-equiv=Content-Type content="text/html; charset=utf-8" /> <meta http-equiv=Content-Type content=cache /> <meta name=robots content=INDEX,FOLLOW /> <meta name=robots content=noimageindex> <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel=stylesheet type=text/css> <link href='http://fonts.googleapis.com/css?family=Abel' rel=stylesheet type=text/css> <link href='http://fonts.googleapis.com/css?family=Mate+SC' rel=stylesheet type=text/css> <link href='http://fonts.googleapis.com/css?family=Bilbo' rel=stylesheet type=text/css> <title>FarmPal</title> <script type=text/javascript>  // This is the script for the banner slider
    $(document).ready(function() {
      $('#slider').s3Slider({
        timeOut: 5000
      });
    });
  </script> <meta name=keywords content="Enter Keywords" /> <meta name=description content="Description Here" /> <link href=css/skins/tan.css rel=stylesheet type=text/css media=screen> <script type=text/javascript>
      function MM_preloadImages() { //v3.0
        var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
          var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
          if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
      }
      
      function MM_swapImgRestore() { //v3.0
        var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
      }
      
      function MM_findObj(n, d) { //v4.01
        var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
          d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
        if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
        for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
        if(!x && d.getElementById) x=d.getElementById(n); return x;
      }
      
      function MM_swapImage() { //v3.0
        var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
         if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
      }
          </script> <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5475445-37', 'tmothyprojects.com');
  ga('send', 'pageview');

</script>

</head> <body onLoad="MM_preloadImages('images/gallery/1sm.jpg','images/gallery/4sm.jpg')"><div id=wrapper> <div id=top> <div id=name></div> <div id=social-media> <p>&nbsp;</p> 
  <ul> <li><a href=#><img src=images/icons/facebook_32.png></a></li> <li><a href=#><img src=images/icons/twitter_32.png></a></li> <li><a href=#><img src=images/icons/rss_32.png></a></li> <li><a href=#><img src=images/icons/yelp_32.png></a></li> 
  <li><a href=#><img src=images/icons/linkedin_32.png></a></li> 
  <li><a href=#><img src=images/icons/youtube_32.png></a></li> </ul> 
  <p><a href=register.php>Register</a> <a href=Login.php>Login</a> </p></div> </div> 
    
     <div id=topnav class=wrap> <ul id=nav>
      <li><a href=main.php>HOME</a></li> 
      <li><a href=about.php>ABOUT</a>  </li> 
      <li><a href=services.php>ANALSIS</a></li>
      <li><a href=faq.php>FAQ</a></li>
      </ul> 
      </div> <div id=slider> <ul id=sliderContent> <li class=sliderImage>
    <img src=images/banner/b1.jpg /> <span class=top><strong>WHEAT</strong><br />Temperature: 14 - 18 degree celcius.<br/> High temperature is harmful for cultivation.<br /><br/>Rainfall: 50 cm to 100 cm <br />In primarimary stage cold moisture<br />At the time of harvesting hot climate is required<br /><br />Soil: Fertile alluvial soil or mixed soil <br /><br />Land: Plain land or gentle slope is ideal.</span> </li> <li class=sliderImage>
   <img src=images/banner/b2.jpg /> <span class=top><strong>COFFEE</strong><br />Temperature:19 - 21.5 degree celcius<br />It requires warm and wet climate<br /><br />Rainfall: 180 to 280 cm is a must<br />Atleast 120 mm for adequate growth<br /><br />Soil: Well drained loamy soil<br />Hilly areas are more suitable</span>  </li> <li class=sliderImage>
    <img src=images/banner/b3.jpg /> <span class=top><strong>RICE</strong><br />Temperature:20 - 40 degree celcius<br />The optimum temperature: 30 degree during day and 20 degree during night<br /><br />Rainfall: 100 to 200 mm is a must<br />125 cm during vegetative season<br /><br />Soil: Clayey alluvial soil which can retain water.</span>  </li> <li class=sliderImage>
    <img src=images/banner/b4.jpg /> <span class=top><strong>MAIZE</strong><br />Temperature:15 - 30 degree celcius<br /><br />Rainfall: 100 to 250 mm is a must.<br /><br />Soil: Clayey alluvial soil which can retain water.</span> </li>
    <div class="clear sliderImage"></div> </ul> </div> <div id=content> <h1>Welcome To FarmPal </h1> 
        <p>FarmPal is the obvious friend of Nepali farmers as well as the needy farmers from around the world. Here we deals with the major cultivation problems and try to provide optimal solutions. We have high level experts, professors and government agricultural officers who are involved continuously to promote the agricultural system. </p> 
        <h2>FarmPal Collections</h2> 
        <p>We want to see crops growing from the barren land and our main aim is to help farmers to grow healthy crops out of their fields so they the agricultural production rate increases along with the life standard of farmers.. </p> 
        <div id=box1> <a href=collection-one.html><img src=images/gallery/1sm-sepia.jpg id=Image1 onMouseOver="MM_swapImage('Image1','','images/gallery/1sm.jpg',1)" onMouseOut=MM_swapImgRestore()></a> <h2>Productivity of soil </h2> 
          <p>We intend to aid farmers with scientific ideas to improve the production capacity of soil. We help them to utilize their lands even during off-seasons. </p> 
        </div> <div id=box2> <a href=collection-two.html><img src=images/gallery/4sm-sepia.jpg id=Image2 onMouseOver="MM_swapImage('Image2','','images/gallery/4sm.jpg',1)" onMouseOut=MM_swapImgRestore()></a> <h2>Curing diseases </h2> 
          <p>Based on the description and pictures provided by the farmers, we tend to provide optimal solution to get rid of unhealthy productions. </p> 
        </div><br/> <h2>More About FarmPal </h2> 
        <p>&nbsp;</p> 
        <p>&nbsp;</p> 
        <p>To know more about us please go to ABOUT page. </p> 
        <p>&nbsp;</p> 
        <h3> Serving farmers to solve their problems is our motto. </h3> 
      </div> <div id=rightside><h3>Green Nepal </h3> 
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
      <p>&nbsp;</p> <div id=twitter-feed> <script charset=utf-8 src=../../widgets.twimg.com/j/2/widget.js></script> <script>
               new TWTR.Widget({
                 version: 2,
                 type: 'profile',
                 rpp: 4,
                 interval: 30000,
                 width: 250,
                 height: 300,
                 theme: {
                   shell: {
                     background: '#e6811c',
                     color: '#ffffff'
                   },
                   tweets: {
                     background: '#ffffff',
                     color: '#000000',
                     links: '#a87e1c'
                   }
                 },
                 features: {
                   scrollbar: false,
                   loop: false,
                   live: false,
                   behavior: 'all'
                 }
               }).render().setUser('createthenet').start();
               </script> </div> </div> <div id=footer> <p class=footer-text>@Copyright Protected | All Rights Reserved | FarmPal Fax:90022 | 555.555.5555</p> 
                 <div id=share> <span class=st_facebook_hcount displaytext=Facebook></span> <span class=st_twitter_hcount displaytext=Tweet></span> <span class=st_email_hcount displaytext=Email></span> <span class=st_googleplus_hcount displaytext='Google +'></span> </div> 
               <a href=http://www.timothyprojects.net/credits/manchester.html>copyright @coolprabin2000@gmail.com </a> </div> 
               </div> </body> 
<!-- Mirrored from www.timothyprojects.net/manchester/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Sep 2015 16:39:53 GMT -->
</html>

<?php 
  }
?>