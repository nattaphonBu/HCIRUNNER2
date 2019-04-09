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
                        <!-- <li class="nav-item"><a href="home.html" class="nav-link" data-nav-section="blog"><span>Home</span></a></li> -->
                        <li class="nav-item"><a href="#" class="nav-link1"><span>Sign in</span></a></li>&nbsp;&nbsp;
                  </ul>

	        </ul>
	      </div>
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
        <p class="error1">Sign Up</p>
        <p>Join with us </p>
          <div class="col-sm-4 order-md-last d-flex">
              
            <form id="insert" class="bg-light p-4 contact-form">
              <div class="form-group">
                    <div align='left'><label text>Fullname :</label></div>
                <input type="text" class="form-control" placeholder="ex.Burin panchat" id="name" name="name" > 
                
              </div>
              <div class="form-group">
                    <div align='left'><label text>Telephone :</label></div>
                <input type="tel"pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="10" minlength="6" class="form-control" placeholder="ex.08-0"  id="Telephone" name="ex.08-0 "  >
                
              </div>
              <div class="form-group">
                <div align='left'><label text>email :</label></div>
                <input type="email" class="form-control" placeholder="ex.HCI@mail.com" id="email" name="ex.HCI@mail.com"  >
                
              </div>
              <div class="form-group">
                <div align='left'><label text>password :</label></div>
                <input type="password" class="form-control" placeholder="password" id="password" name="password" >
                
              </div>
              <div class="form-group">
                <div align='left'><label text>re password :</label></div>
                <input type="password" class="form-control" placeholder="re password" id="repassword" name="repassword"  >
               
              </div>
              
              <div class="form-group">
                
                <button type="insert"  class="btn btn-secondary py-3 px-5">Sing up</button>
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
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->


 
  
    
  </body>
</html>