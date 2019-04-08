<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css">
	<script src="main.js"></script>

	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
	span.error{
		color:red;
	}
	body {
		background-color: #f0f0f5;
	}
</style>

</head>
<body background="#E6E6FA">
	<form>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">FireRun</a>
    </div>
   
    <ul class="nav navbar-nav navbar-right">
	<!-- <li class="active"><a href="#">Home</a></li> -->
      <li><a href="#">งานวิ่ง</a></li>
      <li><a href="#">Page 2</a></li>
      <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> ลงชื่อเข้าใช้</a></li>
    </ul>
  </div>
</nav>


<div class="container-fluid">
        <div class="row">
        <div class="col-md-5 col-md-offset-5">
            <div class="intro-text">
                <h1>สมัครสมาชิก</h1>
            </div>  
        </div> 
            <div class="col-md-2 col-md-offset-5">
			<span class="error">*</span><label class="h5">ชื่อ-สกุล:</label>
                <div class="form-group"> 
                    <div class="intro-text">
                    <input type="text" class="form-control" id="username" name="username" placeholder="ชื่อ-สกุล">
                </div>
                </div>
            </div>  
			
			<div class="col-md-2 col-md-offset-5">
            <div class="form-group"> 
                <div class="form-group">
				<span class="error">*</span><label class="h5">Email:</label>
                    <input type="email" class="form-control" id="password" name="password" placeholder="Email">           
                </div>  
            </div>
            </div>
			<div class="col-md-2 col-md-offset-5">
            <div class="form-group"> 
                <div class="form-group">
				<span class="error">*</span><label class="h5">เบอร์โทรศัพท์:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="เบอร์โทรศัพท์">           
                </div>  
            </div>
            </div>
			<div class="col-md-2 col-md-offset-5">
            <div class="form-group"> 
                <div class="form-group">
				<span class="error">*</span><label class="h5">รหัสผ่าน:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน">           
                </div>  
            </div>
            </div>
			<div class="col-md-2 col-md-offset-5">
            <div class="form-group"> 
                <div class="form-group">
				<span class="error">*</span><label class="h5">กรอกรหัสผ่านอีกครั้ง</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="กรอกรหัสผ่านอีกครั้ง">           
                </div>  
            </div>
            </div>	
			
			<div class="col-md-2 col-md-offset-5">
		
                <div class="form-group">
                    <button type="insert" class="btn btn-primary btn-block">สมัครสมาชิก</button>
				</div>  
          
            </div>
            
            </div>
        </div>
    </div>
	
	</form>
</body>
</html>

