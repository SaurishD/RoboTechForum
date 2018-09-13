<html>
    <head>
        <TITLE>
			RTF-apply
		</TITLE>

		<meta charset="utf-8">
		<title>particles.js</title>
         <link rel="icon" type="image/jpeg" href="logo.jpeg">
        <link rel="stylesheet" type="text/css" href="inc/css/loader.css">
		<meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="inc/css/about.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>        
    </head>
    <body>
        <div id="container">
            <div class="row cf">
              <div class="three col">
                <div class="loader" id="loader-2">
                  <span><br>R</span>
                  <span><br>T</span>
                  <span><br>F</span>
                </div>
              </div>
            </div>
          </div>
          
		<nav class="navbar navbar-default" style="position:fixed; z-index:5; width:100%;top:0px">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle" >
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
		 
			</div>
			<!-- Collection of nav links and other content for toggling -->
			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="nav navbar-nav" style="color:white;font-size:18px;"  >
					<li ><a href="index.php" >Home<br/></a></li>
					<li ><a href="about_us.html">About us<br/></a></li>
                      <li><a href="goal.html">Goals<br/></a></li>
                     <li><a href="gallary.html">Gallery<br/></a></li>
					<li ><a href="team.html">Our Team<br/></a></li>
                    <li  class="active"><a href="apply.php">Apply<br/></a></li>
                    <li><a href="workshop.php">Workshops<br/></a></li>
					 <li><a href="sponsor.html">Sponsors<br/></a></li>
                    <li><a href="contact.html">Contact Us<br/></a></li>
                    
				</ul>
			</div>
		</nav>
        <div style="width: 100%;height: 265px;background-color: #6C3AB7;">
            <h1 style="top: 65%;text-align: center;position: relative;color: white" >Apply<hr style="width:200px;"></h1>
            <p style="width: 100%;top: 240px;text-align: center;position: absolute;color: white">Want to be a part of RTF?</p>
        </div>
      
       
		

        <div >
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf_1oTjpcAATj_31YmzX9oUPUq3Eh3ZHAuqN3l0tcYttZxy4w/viewform?usp=sf_link" frameborder='0' scrolling="no"></iframe>
        </div>
       
         <footer> 
                 <div class="col-sm-8" id="googleMap" ></div>

                 <div class="col-sm-4 container" style="background-color:#424242;" id="footer-div">   
                    
                    <div style="padding:10%;padding-bottom:5%;font-family:'Comic Sans MS',cursive, sans-serif;}">
                        Contact:<br><br>Abhilash Ingle<br/>Email: abhilashingale08@gmail.com<br/>contact no. :+919421034820
                        <br><br>Anmol Lal<br> Email: lal.anmol01@gmail.com<br> Contact No. :+918551949013
                    </div>
                    <div style="position:relative; ">
                        <a href="https://www.facebook.com/robotechforum/" target="_blank"><img src="pics/fb.png" class="img2" /></a>
                        <a href="https://www.linkedin.com/company-beta/13366701/" target="_blank"><img src="pics/linkedin.png" class="img2" /></a>
                    </div>
                     <br><br><br>
                     <h6 style="padding:10px;margin:0px;font-size:10px;color: lightgray;text-align: left">Credits:<br>Developer - Saurish Darodkar</h6>
                </div>
               

		</footer>  
        
        
                        <script>
                function myMap() {
                var mapProp= {
                    center:new google.maps.LatLng(20.957211,77.75679979999995),
                    zoom:15,
                };
                var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                }
                </script>

                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZSL_f8fCgzrD2BbBoK4gRvS785HLtv_c&callback=myMap"></script>
            
    </body>
</html>