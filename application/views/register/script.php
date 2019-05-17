<script>

    
$("#insert").validate({
        rules: {
            name: {
                required: true
            },
            Telephone: {
                required: true,
          },
          email: {
                required: true,
          },
          password: {
                required: true,
          },
          repassword: {
                required: true,
          }
        },
        messages: {
            name: {
                required: "กรอกชื่อบัญชีผู้ใช้"
            },
            Telephone: {
                required: "กรอกเบอร์โทรศัพท์",
            },
            email: {
                required: "กรอกอีเมล์",
            },
            password: {
                    required: "กรอกรหัสผ่าน",
            },
            repassword: {
                    required: "กรอกรหัสผ่าน",
            }
        },
    });
    $("#insert").submit(function(){
        login();
        
        
    })
    
    function login(){
        event.preventDefault();
        var isValid = $("#insert").valid();
        var data = {
                "repassword": $("#repassword").val()
            }
            var data2 = {
                "password": $("#password").val()
            }
            var name = {
                "name": $("#name").val()
            }
            var email = {
                "email": $("#email").val()
            }
           
            if(isValid){
                if(data.repassword !="" && data2.password != "" && name.name !="" &&email.email !=""){
                    if(data.repassword == data2.password){
                        alert("Register Has Complete Wellcome   "+name.name)
                        window.location.replace( href="<?=base_url("welcome") ?>");
                    }else{
                        alert("Password not match  Please Try again!!")
                    }
                }
                    
            }
            
        
        
    }
    </script>