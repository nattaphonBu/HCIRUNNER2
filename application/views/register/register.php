<!DOCTYPE html>
<html lang="en">
  <head>
    <title>RUN MY WAY REGISTER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

    <style>
        p.error1{
          font-size: 52px;
          display: block;
          margin-bottom: 5px;
          text-transform: uppercase;
          color: #2e9e5b;
          letter-spacing: 2px;
        }
        label.error{
          color: red !important;
        }
        
    </style>
  </head>
  <body>
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand1" href="<?=base_url("Welcome") ?>"><span>RUN MY WAY.</span></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <!-- <li class="nav-item"><a href="<?=base_url("Welcome") ?>" class="btn btn-primary " data-nav-section="home"><span>Home</span></a></li>&nbsp;&nbsp; -->
            <!-- <button class="btn btn-primary">หน้าหลัก</button> -->
	        </ul>
        </div>
        <ul class="navbar-nav nav ml-auto">
            <li class="nav-item"><a href="<?=base_url("Welcome/login") ?>" class="btn btn-primary "><span>ลงชื่อเข้าใช้</span></a></li>
            <!-- <li class="nav-item"><a href="<?=base_url("Welcome/register") ?>" class="btn btn-info "><span>ลงชื่ออก</span></a></li>&nbsp;&nbsp; -->
      </ul>
	    </div>
	  </nav>
    
    <!-- <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-section="home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="d-flex align-items-center" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
							<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center mr-3">
    						<span class="ion-ios-play play mr-2"></span>
    						<span class="watch">Watch Video</span>
    					</a>
						</p>
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We have a passion in creating new and unique spaces</h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Travel to the any corner of the world, without going around in circles</p>
          </div>
        </div>
      </div>
    </section> -->
	


  

    <section class="ftco-section contact-section ftco-no-pb" >
      <div class="container">
        
       
        <center>
        <p class="error1">สมัครสมาชิก</p>
        <p>ร่วมเป็นครอบครัว Run My Way </p>
          <div class="col-sm-4 order-md-last d-flex">
              
            <form id="insert" class="bg-light p-4 contact-form">
              <div class="form-group">
                    <div align='left'><label text>ชื่อบัญชีผู้ใช้ :</label></div>
                <input type="text" class="form-control" placeholder="ex.Burin panchat" id="name" name="name" > 
                
              </div>
              <div class="form-group">
                    <div align='left'><label text>เบอร์โทรศัพท์ :</label></div>
                <input type="tel"pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="10" minlength="6" class="form-control" placeholder="ex.08-0"  id="Telephone" name="ex.08-0 "  >
                
              </div>
              <div class="form-group">
                <div align='left'><label text>อีเมล์ :</label></div>
                <input type="email" class="form-control" placeholder="ex.HCI@mail.com" id="email" name="ex.HCI@mail.com"  >
                
              </div>
              <div class="form-group">
                <div align='left'><label text>รหัสผ่าน :</label></div>
                <input type="password" class="form-control" placeholder="" id="password" name="password" >
                
              </div>
              <div class="form-group">
                <div align='left'><label text>ยืนยันรหัสผ่าน :</label></div>
                <input type="password" class="form-control" placeholder="" id="repassword" name="repassword"  >
               
              </div>
              
              <div class="form-group">
                
                <button type="insert"  class="btn btn-secondary py-3 px-5">สมัครสมาชิก</button>
              </div>
            </form>
          
          </div>
        </center>
          <div class="col-md-1 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
     
    </section>

 
		

    <footer class="ftco-footer ftco-section">
        <div class="row">
          <div class="col-md-12 text-center">

            <p><a href="https://www.facebook.com/%E0%B8%A7%E0%B8%B4%E0%B8%A8%E0%B8%A7%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%8B%E0%B8%AD%E0%B8%9F%E0%B8%95%E0%B9%8C%E0%B9%81%E0%B8%A7%E0%B8%A3%E0%B9%8C-%E0%B8%A1%E0%B8%A7%E0%B8%A5%E0%B8%B1%E0%B8%A2%E0%B8%A5%E0%B8%B1%E0%B8%81%E0%B8%A9%E0%B8%93%E0%B9%8C-274248215956704/"><img src="https://img.icons8.com/color/48/000000/facebook.png"> : วิศวกรรมซอฟต์แวร์ ม.วลัยลักษณ์</a></p>
            <p>มหาวิทยาลัยวลัยลักษณ์ 222 ตำบลไทยบุรี อำเภอท่าศาลา จังหวัดนครศรีธรรมราช 80161. โทร.0-7567-3000 แฟกซ์. 0-7567-3708</p>
            <p>©Copyright 2019 Group.1_SWE60-232&SWE-342 All Rights Reserved 0.1234</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->


 
  
    
  </body>
</html>