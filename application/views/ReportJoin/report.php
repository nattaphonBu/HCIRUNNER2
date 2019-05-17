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
</style>
<body>
    

    <form>
    <div class="container" id="bgbody">
        <p><h1 >ประวัติการเข้าร่วม</h1></p>
        <div class="card text-center">
        <div class="card-header">
        <h3>กิจกรรมที่ 1</h3>
        </div>
        <div class="card-body">
        <div class="row">
            <div class="col-sm-4"> 
                <p class="card-text"><img src="../images/chan.jpg" width="350" alt=""><h3 class="card-title">จันทบุรี ซีนิค ฮาล์ฟมาราธอน 2019</h3></p>
            </div>
            <div class="col-sm-8">
                <p ><h3>ระยะเวลาในการชำระเงิน</h3></p><p id="demo"></p>
                <p>ถึง</p>
                <p>Su June 16 2019 16:00:00 GMT+0700 (Indochina Time)</p>
                <a class="btn btn-secondary" style="width: 300px" href="<?=base_url("Welcome/payment") ?>">ชำระเงิน</a>
                <p>**หมายเหตุ หากไม่ชำระเงินภายในวันที่กำหนดทางเจ้าหน้าที่จะทำการยกเลิกการเข้าร่วมกิจกรรมดังกล่าวอัตโนมัติ</p>
            </div>
        </div>
            
        
        </div>
        <div class="card-footer text-muted" >
        <div>
        <div class="progress" style="height:40px">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
            <button type="button"  class="btn btn-outline-warning">รอการดำเนินการ</button>
        </div>
        
        </div>
        
        </div>
        </div>
        </div>
    </div>
    </form>
    <form>
    <div class="container" id="bgbody">
        
        <div class="card text-center">
        <div class="card-header">
        <h3>กิจกรรมที่ 2</h3>
        </div>
        <div class="card-body">
        <div class="row">
            <div class="col-sm-4"> 
                <p class="card-text"><img src="../images/ph2.jpg" width="200" alt=""><h4 class="card-title">

Championjam @แม่กำปองเทรล2019 </h4></p>
            </div>
            <div class="col-sm-8">
                <p ><h3>ระยะเวลาในการชำระเงิน</h3></p><p id="demos"></p>
                <p>ถึง</p>
                <p>Su June 16 2019 16:00:00 GMT+0700 (Indochina Time)</p>
                <p><button  class="btn btn-secondary" style="width: 300px">ชำระเงิน</button></p>
                <p>**หมายเหตุ หากไม่ชำระเงินภายในวันที่กำหนดทางเจ้าหน้าที่จะทำการยกเลิกการเข้าร่วมกิจกรรมดังกล่าวอัตโนมัติ</p>
            </div>
        </div>
            
        
        </div>
        <div class="card-footer text-muted" >
        <div>
        <div class="progress" style="height:40px">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
            <button type="button"  class="btn btn-outline-success">เข้าร่วมเรียบร้อยแล้ว</button>
        </div>
        
        </div>
        
        </div>
        </div>
        </div>
    </div>
    </form>
    <script>
        var d = new Date();
        document.getElementById("demo").innerHTML = d;
        document.getElementById("demos").innerHTML = d;
    </script>




</body>
</html>
