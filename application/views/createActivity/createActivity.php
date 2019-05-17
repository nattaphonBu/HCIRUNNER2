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
            <p class="error1">สร้างกิจกรรม</p>
          <div class="col-sm-12 order-md-last d-flex">
            <form id="insert" class="bg-light p-4 contact-form">
          <div class="row">
            <div class="col-6">
              <div align='left'><label text>ชื่อกิจกรรม : </label>
              <input type="text" class="form-control" placeholder="ชื่อกิจกรรม">
            </div>
          </div>
          <div class="col-3">
            <div align='left'><label text>วันเวลารับสมัคร :</label></div>
            <div align='left'><input class="form-control col-10" id="input1" width="234" /></div>
          </div>
          <div class="col-3">
            <div align='left'><label text>วันเวลาสิ้นสุดสมัคร :</label></div>
            <div align='left'><input class="form-control col-10" id="input" width="234" /></div>
          </div>
          <div class="col-6">
            <div align='left'><label for="exampleFormControlTextarea1">วัตถุประสงค์จัดงานวิ่ง :</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </div>
          <div class="col-6">
          <div align='left'><label for="exampleFormControlTextarea1">สถานที่วิ่ง :</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
                  <input type="text" class="form-control" placeholder="ราคาและของที่ระลึก">
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
                  <input type="text" class="form-control" placeholder="ราคาและของที่ระลึก">
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
                  <input type="text" class="form-control" placeholder="ราคาและของที่ระลึก">
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
              <input type="text" class="form-control" placeholder="ราคาและของที่ระลึก">
              </div>
            </div>
            </div>

            <div class="col-3">
              <div align='left'><label text>จัดกิจกรรมในวันที่ :</label></div>
              <div align='left'><input class="form-control col-10" id="input2" width="234" /></div>
          </div>
          <div class="col-3">
              <div align='left'><label text>ติดต่อสอบถาม :</label></div>
              <div align='left'><input class="form-control col-12" id="input2" width="234" /></div>
          </div>
            <div class="col-6">
              <div align='left'><label>เลือกไฟล์รูปกิจกรรม :</label>
              <input type="file" class="form-control" multiple="">
            </div>
            </div>    
              <br><br>
                <table id="myTable" class=" table order-list">
                  <thead>
                      <tr>
                        <td>กำหนดการงานวิ่ง</td>
                        <td>เวลา</td>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td class="col-sm-8">
                                  <input type="detail" name="detail"  class="form-control"/>
                          </td>
                          <td class="col-sm-2">
                              <input type="time" name="time" class="form-control" />
                          </td>
                          <td class="col-sm-2"><a class="deleteRow"></a>
                          </td>
                          <td colspan="5" style="text-align: left;">
                              <input type="button" class="btn btn-outline-primary"  id="addrow" value="เพิ่มตาราง" />
                          </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                </div>
                  <div class="form-group">
                  <button type="insert"  class="btn btn-success py-3 px-5">บันทึก</button>
              </div>
          </form>
        </center>
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

$('#input').datetimepicker({
            uiLibrary: 'bootstrap4',
            modal: true,
            footer: true
        });
$('#input1').datetimepicker({
            uiLibrary: 'bootstrap4',
            modal: true,
            footer: true
        });
$('#input2').datetimepicker({
            uiLibrary: 'bootstrap4',
            modal: true,
            footer: true
});

        function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function() {
	bs_input_file();
});

</script>