<!DOCTYPE html>
<html>
<title>FOR BURININININ</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700 ,900" rel="stylesheet">
<style>
    body{
        font-family: Rubik;
    }
    .cen{
        text-align: center;
        
    }
</style>
<body>
    

    <form>
    <div class="container" id="bgbody">
    <p><h1 class="cen">การจัดการงานวิ่ง</h1></p>
        <div class="row">
            <div class="col-sm-6 cen" > 
            <br><br><br><br>
            <a href="<?=base_url("Welcome/ListActivity") ?>">
            <img src="https://img.icons8.com/color/96/000000/test-partial-passed.png" width="150px" >
            <p><h3>แจ้งเตือนกิจกรรมที่รอการอนุมัติ</h3></p>
            </a>
            <br><br><br><br>
            </div>
            <div class="col-sm-6 cen">
            <br><br><br><br>
            <a href="<?=base_url("Welcome/ListActivity") ?>">
            <img src="https://img.icons8.com/color/96/000000/refund.png" width="150px">
            <p><h3>อนุมัติการจ่ายเงิน</h3></p>
            </a>
            <br><br><br><br>
            </div>
        </div>
    </div>
    </form>
</body>
</html>
