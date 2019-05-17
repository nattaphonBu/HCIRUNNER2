<!DOCTYPE html>
<html lang="en">
  <head>
    <title>RUN MY WAY REGISTER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

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
        .files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 120px 0px 85px 35%;
    text-align: center !important;
    margin: 0;
    width: 100% !important;
}
.files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
 }
.files{ position:relative}
.files:after {  pointer-events: none;
    position: absolute;
    top: 60px;
    left: 0;
    width: 50px;
    right: 0;
    height: 56px;
    content: "";
    background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
    display: block;
    margin: 0 auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
.color input{ background-color:#f1f1f1;}
.files:before {
    position: absolute;
    bottom: 10px;
    left: 0;  pointer-events: none;
    width: 100%;
    right: 0;
    height: 57px;
    content: " or drag it here. ";
    display: block;
    margin: 0 auto;
    color: #2ea591;
    font-weight: 600;
    text-transform: capitalize;
    text-align: center;
}
        
    </style>
  </head>
  <body>
	  

    
   


  

    <section class="ftco-section contact-section ftco-no-pb" >
      <div class="container">
        
       
        <center>
        <p class="error1">แจ้งชำระเงิน</p>
        <!-- <p>Join with us </p> -->
          <div class="col-sm-10 order-md-last d-flex">
          
            <form id="insert" class="bg-light p-4 contact-form">
            <div class="form-group" >
              <img src="../images/pay.jpg" alt="" width="800">
            </div>
            <div class="form-group">
                    <div align='left'><label text>ชื่องานวิ่ง :</label></div>
                <input type="text" class="form-control" placeholder="PRC : Next Step Run 2019 Mini marathon" id="name" name="name" disabled > 
                
              </div>
              <div class="form-group">
                    <div align='left'><label text>แพคเกจ :</label></div>
                <input type="text" class="form-control" placeholder="Marathon 42.5KM" id="name" name="name" disabled > 
                
              </div>
              <div class="form-group">
                    <div align='left'><label text>ราคา :</label></div>
                <input type="text" class="form-control" placeholder="1000 บาท" id="name" name="name" disabled > 
                
              </div>
              <div class="form-group">
              <div align='left'><label text>วันเวลา :</label></div>
              <div align='left'><input id="input" width="234" /></div>
              
</div>
<div class="form-group">
                    <div align='left'><label text>จำนวนที่โอน :</label></div>
                <input type="number" step="0.01" class="form-control" placeholder="" id="name" name="name"  > 
                
              </div>
            <div class="form-group files">
                <label>Upload Your File </label>
                <input type="file" class="form-control" multiple="">
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

 
		

   
 
 
  
    
  </body>
</html>

<script>
     $('#input').datetimepicker({
            uiLibrary: 'bootstrap4',
            modal: true,
            footer: true
        });
</script>