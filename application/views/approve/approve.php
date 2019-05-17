<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Create Activity</title>
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
        /* body { padding: 1rem; } */
        
    </style>
    </head>
    <body>
      <section class="ftco-section contact-section ftco-no-pb" >
        <div class="container">
        <center>
            <p class="error1">รายละเอียดกิจกรรม</p>
          <div class="col-sm-12 order-md-last d-flex">
            <form id="insert" class="bg-light p-4 contact-form">
          <div class="row">
            <div class="col-6">
              <div align='left'><label text>ชื่อกิจกรรม : </label>
              <input type="text" class="form-control" placeholder="Bangkok Airways ChiangRai Half Marathon 2019 "disabled>
            </div>
          </div>
          <div class="col-3">
            <div align='left'><label text>วันเวลารับสมัคร :</label></div>
            <input type="text" class="form-control" placeholder="09:00 05/08/2019"disabled>
          </div>
          <div class="col-3">
            <div align='left'><label text>วันเวลาสิ้นสุดสมัคร :</label></div>
            <input type="text" class="form-control" placeholder="18:00 09/11/2019"disabled>
          </div>
          <div class="col-6">
            <div align='left'><label for="exampleFormControlTextarea1">วัตถุประสงค์จัดงานวิ่ง :</label>
              <textarea disabled class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder=" 1.    เพื่อนำเงินรายได้หลังหักค่าใช้จ่ายจากการแข่งขันมอบให้บำรุงเสนาสนะของวัดราษฎร์สามัคคีและสร้างเสาธงของโรงเรียนบ้านขลอด
2.    เพื่อส่งเสริมให้ประชาชนในจังหวัดชลบุรี และจังหวัดใกล้เคียงได้ออกกำลังกาย
3.    เพื่อเป็นการส่งเสริมการท่องเที่ยวอำเภอสัตหีบ จังหวัดชลบุรี
4.    เพื่อเผยแพร่ชื่อเสียงของวัด โรงเรียนและจังหวัดชลบุรี
5.    เพื่อเสริมสร้างสัมพันธภาพอันดีและการมีส่วนร่วมระหว่างหน่วยงานในจังหวัดชลบุรี
6.    เพื่อให้ทุกคนมีส่วนร่วมในการจัดกิจกรรมการวิ่งให้เป็นประเพณีของวัดและโรงเรียน"></textarea>
            </div>
          </div>
          <div class="col-6">
          <div align='left'><label for="exampleFormControlTextarea1">สถานที่จัดงานวิ่ง :</label>
              <textarea disabled class="form-control" rows="3" placeholder="ศาลากลาง จ.เชียงราย https://goo.gl/maps/t1KBSxwLVZF2

(วันรับบิ๊บ มีบริการรถรับส่ง จากอนุสาวรีย์พ่อขุนเม็งราย ถึง สิงห์ปาร์ค เชียงราย (รถวิ่งวนทุก 1 ชม. หรือ รถจะออกเมื่อผู้โดยสารเต็มคัน)"></textarea>
            </div>
          </div>
          <div class="col-6">
            <div align='left'><label for="exampleFormControlTextarea1">ประเภทการวิ่ง :</label>
              <div  class="form-check">
                <label><input type="checkbox" class="form-check-input" name="optradio" checked>Fun run (ระยะ 3.5 km)</label>
              </div>
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputAmount">Amount (in Swiss Francs)</label>
                <div class="input-group" class="col-6">
                  <div class="input-group-addon">ราคาและของที่ระลึก</div>&nbsp;&nbsp;
                  <input type="text" class="form-control" placeholder="-" disabled>
                </div>
              </div>
            </div>
            <div class="col-6">
            <div align='left'><label for="exampleFormControlTextarea1">ประเภทการวิ่ง :</label>
              <div  class="form-check">
                <label><input type="checkbox" class="form-check-input" name="optradio" >Micro Marathon (ระยะ 5.0 km)</label>
              </div>
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputAmount">Amount (in Swiss Francs)</label>
              <div class="input-group" class="col-6">
                  <div class="input-group-addon">ราคาและของที่ระลึก</div>&nbsp;&nbsp;
                  <input type="text" class="form-control" placeholder="500 บาท" disabled>
                </div>
              </div>
            </div>
            <div class="col-6">
                <div align='left'><label for="exampleFormControlTextarea1">ประเภทการวิ่ง :</label>
                <div  class="form-check">
                 <label><input type="checkbox" class="form-check-input" name="optradio" checked>Mini Marathon (ระยะ 10.55 km)</label>
              </div>
            </div>
            <div class="form-group">
              <label class="sr-only" for="exampleInputAmount">Amount (in Swiss Francs)</label>
              <div class="input-group" class="col-6">
                <div class="input-group-addon">ราคาและของที่ระลึก</div>&nbsp;&nbsp;
                  <input type="text" class="form-control" placeholder="550 บาท" disabled>
                </div>
              </div>
            </div>
            <div class="col-6">
            <div align='left'><label for="exampleFormControlTextarea1">ประเภทการวิ่ง :</label>
              <div class="form-check">
                <label><input type="checkbox" class="form-check-input" name="optradio" checked>Half Marathon (ระยะ 21.1 km)</label>
              </div>
            </div>
        <div class="form-group">
            <label class="sr-only" for="exampleInputAmount">Amount (in Swiss Francs)</label>
            <div class="input-group" class="col-6">
              <div class="input-group-addon">ราคาและของที่ระลึก</div>&nbsp;&nbsp;
              <input type="text" class="form-control" placeholder="700 บาท " disabled>
              </div>
            </div>
            </div>

            <div class="col-3">
              <div align='left'><label text>จัดกิจกรรมในวันที่ :</label></div>
              <input type="text" class="form-control" placeholder="04:00 28/11/2019"disabled>
          </div>
          <div class="col-3">
              <div align='left'><label text>ติดต่อสอบถาม :</label></div>
              <input type="text" class="form-control" placeholder="https://www.facebook.com/BangkokAirways.Run/"disabled>
          </div>
            <div class="col-6">
              <!-- <div align='left'><label>เลือกไฟล์รูปกิจกรรม :</label>
              <input type="file" class="form-control" multiple=""> -->
              <img src="../images/Logo05.png" class="img-rounded" alt="Cinque Terre" width="204" height="136">
              <img src="../images/a1.jpg" class="img-rounded" alt="Cinque Terre" width="204" height="136">
            </div>   

             <!-- <div class="col-md-6">
            <img src="http://placehold.it/1000x550" alt="test" class="img-responsive">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
            </div> 
         </div>   
 </div>
</div> -->
   
              <br><br>
              <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">เวลา</th>
                    <th scope="col">กำหนดการ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">เวลา 04.00 น.</th>
                    <td>นักวิ่งรวมตัว บริเวณจุดปล่อยตัว และ งานกิจกรรม</td>
                    </tr>
                    <tr>
                    <th scope="row">เวลา 05.00 น. </th>
                    <td>ปล่อยตัวนักวิ่ง ระยะ Half Marathon 21.1 km</td>
                    </tr>
                    <tr>
                    <th scope="row">เวลา 06.00 น.</th>
                    <td>ปล่อยตัวนักวิ่ง ระยะ Mini Marathon 10.55 km </td>
                    </tr>
                    <tr>
                    <th scope="row">เวลา 06.10 น.</th>
                    <td>ปล่อยตัวนักวิ่ง ระยะ Micro Marathon 5.0 km</td>
                    </tr>
                    <tr>
                    <th scope="row">เวลา 06.15 น.</th>
                    <td>ปล่อยตัวนักวิ่ง ระยะ ทุเรียน รัน 3.0 km</td>
                    </tr>
                    <tr>
                    <th scope="row">เวลา 07.00 น.</th>
                    <td>กิจกรรมแจกรางวัล บนเวที </td>
                    </tr>
                    <tr>
                    <th scope="row">เวลา 12.00 น.</th>
                    <td>เสร็จสิ้นกิจกรรม</td>
                    </tr>
                </tbody>
                </table>
                  <div class="form-group">
                  <button  class="btn btn-success py-3 px-5" onClick="myFunction()">อนุมัติ</button>&nbsp;&nbsp;
              </div>
              <div class="form-group">
                  <button   class="btn btn-danger py-3 px-5" onClick="myFunction1()">ไม่อนุมัติ</button>
              </div>
          </form>
        </center>
      </div>
    </div>
  </section>
      

</body>
</html>

<script>
 function myFunction() {
      var alert;    
      if (confirm("คุณต้องการอนุมัติกิจกรรมใช่หรือไม่ ")) {
        alert("ระบบทำการอนุมัติ");
        window.location.replace("AdminHome");
      } else {
        alert("ยกเลิก")
        
      }
      // document.getElementById("demo").innerHTML = txt;
}
function myFunction1() {
      var alert;
      if (confirm("คุณไม่ต้องการอนุมัติกิจกรรมนี้ใช่หรือไม่ ")) {
        alert("ระบบไม่อนุมัติ");
      } else {
        alert("ยกเลิก");
      }
      
}


</script>