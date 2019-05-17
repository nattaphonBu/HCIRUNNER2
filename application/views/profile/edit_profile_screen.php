<!DOCTYPE html>
<html lang="en">
  <head>
    <title>RUN MY WAY REGISTER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    
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
	  
   


  

    <section class="ftco-section contact-section ftco-no-pb" >
      <div class="container">
        
       
        <center>
        <p class="error1 ">แก้ไขข้อมูลผู้ใช้</p>
        <!-- <p class="error1 "><i class="fa fa-address-book" style="font-size:48px;color:Green"></i>ข้อมูลผู้ใช้</p> -->
        <!-- <p>Join with us </p> -->
          <div class="col-sm-10 order-md-last d-flex">
              
            <form id="insert" class="bg-light p-4 contact-form">
              <div class="form-group ">
                <div class="row">
                    <div class="col">
                        <div align='left'><label text>ชือนามสกุล :</label></div>
                         <input type="text" class="form-control" placeholder="อภิรยา ทองสวรรค์" id="name" name="name"  > 
                    </div>
                    <div class="col">
                        <div align='left'><label text>เบอร์โทรศัพท์ :</label></div>
                         <input type="text" class="form-control" placeholder="086-551-2999" id="name" name="name"  > 
                    </div>
                    <div class="col">
                        <div align='left'><label text>อีเมล์ :</label></div>
                         <input type="text" class="form-control" placeholder="apiraya_2000@mail.com" id="name" name="name"  > 
                    </div>
              </div>
              <div class="row">
                    <div class="col">
                    <div align='left'><label text>อายุ :</label></div>
                            <input type="number" class="form-control  " placeholder="" id="password" name="password" >
                    </div>
                    <div class="col">
                    <div align='left'><label text>กรุ๊ปเลือด :</label></div>
                        <input type="text" class="form-control" placeholder="" id="repassword" name="repassword"  >
                    </div>
                    <div class="col">
                        <div align='left'><label text>สัญชาติ :</label></div>
                         <input type="text" class="form-control" placeholder="" id="name" name="name"  > 
                    </div>
              </div>
             
              
              
              <div class="form-group">
                <div align='left'><label text> ที่อยู่ :</label></div>
                <input type="text" class="form-control" placeholder="" id="repassword" name="repassword"  >
               
              </div>
              
              <div class="form-group">
                <div class="row">
                    <div class="col">
               
                <button onClick="myFunction()" class="btn btn-secondary py-3 px-5">แก้ไขข้อมูลผู้ใช้</button>
                    </div>

                </div>
            </div>
            </form>
          
          </div>
        </center>
         
        </div>
      </div>
     
    </section>



 
 
  
    
  </body>
</html>

<script>
    function myFunction() {
      var txt;
      if (confirm("ต้องการบันทึกข้อมูลใช่หรือไม่ ")) {
        alert("ระบบบันทึกข้อมูลสำเร็จ");
        
       
      } else {
         alert("ระบบบันทึกข้อมูลไม่สำเร็จ");
      }
      // document.getElementById("demo").innerHTML = txt;
    }

    </script>