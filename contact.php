<html>
    <head>
        <TITLE>
			Robo-Tech Forum
		</TITLE>
         <link rel="icon" type="image/jpeg" href="logo.jpeg">
		<meta charset="utf-8">
		<title>particles.js</title>
		<meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="inc/css/loader.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="inc/css/about.css">
        <link rel="stylesheet" href="aos/dist/aos.css" />
        <script src="aos/dist/aos.js"></script>
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
                      <li ><a href="goal.html">Goals<br/></a></li>
                     <li><a href="gallary.html">Gallery<br/></a></li>
					<li><a href="team.html">Our Team<br/></a></li>
                   
                    <li><a href="workshop.php">Workshops<br/></a></li>
					 <li><a href="sponsor.html">Sponsors<br/></a></li>
                    <li class="active"><a href="contact.php">Contact Us<br/></a></li>
				</ul>
			</div>
		</nav>
        <div style="width: 100%;height: 400px;background-color: #1A237E;">
                <h1 style="top: 40%;text-align: center;position: relative;color: white" data-aos="fade-down" data-aos-duration="1000">Contact Us<hr style="width:200px;"></h1>
                <p style="width: 100%;top: 240px;text-align: center;position: absolute;color: white"data-aos="fade-up" data-aos-duration="1000">Get in touch</p>
            </div><br><br>
        
        
        
        <div class="container" style="box-shadow:5px 5px 5px gray,-5px -5px 5px gray" data-aos="fade-down" data-aos-duration="500">
            <h1>Thank you for your interest in RTF!</h1><br>
            <h4>If you have any question regarding to the rtf, feel free to mail us:</h4><hr><br><br>
            <?php
            if(isset($_POST['fname'])){
                require_once 'phpMailer/PHPMailerAutoload.php';
                $mail = new PHPMailer();
                $mail->Host='smtp.gmail.com';
                $mail->SMTPAuth='true';
                $mail->Username='rtfgcoea@gmail.com';
                $mail->Password='plpaikrao';
                $mail->SMTPSecure='ssl';
                $mail->Port='465';
                $mail->IsHTML(true);
            
                $fname = filter_var($_POST['fname'],FILTER_SANITIZE_STRING);
                $lname = filter_var($_POST['lname'],FILTER_SANITIZE_STRING);
                $subject = filter_var($_POST['subject'],FILTER_SANITIZE_STRING);
                $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
                $question = filter_var($_POST['question'],FILTER_SANITIZE_STRING);

                $data = "Name: ".$fname." ".$lname."<br>Email: ".$email."<br>Question:  ".$question;

                $mail->SetFrom('rtfgcoea@gmail.com','RTF');
                $mail->addAddress('lal.anmol01@gmail.com');
                $mail->addReplyTo($email);
                
                $mail->Subject=$subject;
                $mail->Body=$data;
                
                if($mail->send()){
                    echo "<h4>*Thanks for your responce. You will be contacted as soon as possible</h4><br>";
                }
                else{
                    echo "<h4>*Your request cannot be proceed. Please try again after some time</h4><br>";
                }
            }
        ?>
            <form method="post" action="contact.php" style="padding: 0% 10% 0% 10%">
                <div >
                    <label for="fname" class="col-sm-3">First Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="fname" name="fname">
                    </div>
                </div><br><br>
                <div >
                    <label for="lname" class="col-sm-3">Last Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="lname" name="lname">
                    </div>
                </div><br><br>
                <div >
                    <label for="email" class="col-sm-3">Email Address:</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div><br><br>
                <div >
                    <label for="subject" class="col-sm-3">Subject: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="subject" name="subject">
                    </div>
                </div><br><br>
                <div >
                    <label for="question" class="col-sm-3">Question: </label>
                    <div class="col-sm-6">
                        <textarea class="form-control" id="question" name="question" rows="5"></textarea>
                    </div>
                </div><br><br><br><br><br><br>
                <div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary col-sm-6">Send</button>
                    </div>
                </div>
                
            </form><br><br>
        </div><br><br><br>
        
        <div class="container" style="margin-right:0px">
            <div class="container col-sm-4" data-aos="fade-left" data-aos-duration="1000">
                       <hr>
                <img src="pics/team/pratiksha.jpeg" class=" img-circle contact-img" >
                <div ><p class="contact-p" >Electronic Component Head<br>Pratiksha Parashar<br>3rd yr. Extc.<br>Email id: pratikshaanilparashar@gmail.com<br>Contact No. :+91 9011827603</p></div>
            </div>

           <div class="container col-sm-4" data-aos="fade-up" data-aos-duration="1000">
               <hr>
                <img src="pics/team/anmol.jpeg" class=" img-circle contact-img" >
                <div ><p class="contact-p">Student Co-ordinator<br>Anmol Lal<br>3rd yr Extc.<br>Email id:<br> lal.anmol01@gmail.com<br>Contact No.: +918551949013</p></div>
            </div>
            <div class="container col-sm-4" data-aos="fade-right" data-aos-duration="1000">
                <hr>
                <img src="pics/team/payal.jpeg" class=" img-circle contact-img" >
                <div><p class="contact-p">Mechanical Component Head<br>Payal Talda<br>3rd yr Mech.<br>Email id:<br> payaltld@gmail.com <br>Contact No.:+91 8308642833</p></div>
            </div>
        </div><br><br><br><br>
        <footer > 
                 <div class="col-sm-8" id="googleMap" ></div>

                 <div class="col-sm-4 container" style="background-color:#424242;" id="footer-div">   
                    
                    <div style="padding:10%;padding-bottom:5%;font-family:'Comic Sans MS',cursive, sans-serif;}">
                        Contact:<br><br>Abhilash Ingle<br/>Email: abhilashingale08@gmail.com<br/>contact no. :+919421034820
                        <br><br>Anmol Lal<br> Email: lal.anmol01@gmail.com <br> Contact No. :+918551949013
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
                            
                    window.onload = function() {
                    document.getElementById("container").style.display='none';
                    AOS.init();
                    
                }
                
                </script>

                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZSL_f8fCgzrD2BbBoK4gRvS785HLtv_c&callback=myMap"></script>
    </body>
</html>
        
        