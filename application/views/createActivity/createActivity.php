<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Create Activity</title>
  <head>
    <title>RUN MY WAY REGISTER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

  </head>
  <body>
  <section class="ftco-section contact-section ftco-no-pb" >
  
<!-- <form>
<div class="container">
<center>
    <div class="row">
        <div class='col-sm-8'>

          <div class="form-group">
            <label for="exampleFormControlInput1">ชื่อกิจกรรม</label>
            <input class="form-control" type="text" placeholder="ชื่อกิจกรรม">
          </div>

        

          <div class="form-group">
            <label for="exampleFormControlTextarea1">วัตถุประสงค์จัดงานวิ่ง</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">สถานที่วิ่ง</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-group">
          <label for="exampleFormControlTextarea1">ประเภทการวิ่ง</label>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Half Marathon ระยะ 21.1 km (ค่าสมัคร 850 บาท ได้รับ เสื้อ FINISHER, เสื้อวิ่ง และ เหรียญรางวัล)
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
              <label class="form-check-label" for="exampleRadios2">
                 Mini Marathon ระยะ 10.55 km(ค่าสมัคร 750 บาท ได้รับ เสื้อวิ่ง และ เหรียญรางวัล)
              </label>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
              <label class="form-check-label" for="exampleRadios2">
                Micro Marathon ระยะ 5.0 km (ค่าสมัคร 600 บาท จะได้รับ เสื้อวิ่ง และ เหรียญรางวัล)
              </label>
            </div>
          </div>

          <div class="container">
            <table id="myTable" class=" table order-list">
            <thead>
                <tr>
                    <td>กำหนดการ</td>
                    <td>เวลา</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="col-sm-4">
                            <input type="detail" name="detail"  class="form-control"/>
                    </td>
                    <td class="col-sm-4">
                        <input type="time" name="time" class="form-control" />
                    </td>
                    <td class="col-sm-2"><a class="deleteRow"></a>
                    </td>
                    <td colspan="5" style="text-align: left;">
                        <input type="button" class="btn btn-lg btn-block"  id="addrow" value="Add Row" />
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                   
                </tr>
                <tr>
                </tr>
            </tfoot>
        </table>
        </div>
        </div>

    </div>
  </div>
</form>
</center>
</section> -->
<section class="ftco-section contact-section ftco-no-pb" >
      <div class="container">
        
       
        <center>
        <p class="error1">Create Activity</p>
        <!-- <p>Join with us </p> -->
          <div class="col-sm-10 order-md-last d-flex">
              
            <form id="insert" class="bg-light p-4 contact-form">
            <div class="form-group">
            <div align='left'><label text>ชื่อกิจกรรม :</label></div>
            <input class="form-control" type="text" placeholder="ชื่อกิจกรรม">
          </div>S
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

</body>
</html>
<script>
$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="detail" class="form-control" name="detail' + counter + '"/></td>';
        cols += '<td><input type="time" class="form-control" name="time' + counter + '"/></td>';

        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});

function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}
</script>