<script>

    
$("#insert").validate({
        rules: {
            name: {
                required: true
            },
            password: {
                required: true,
          }
        },
        messages: {
            name: {
                required: "กรอกบัญชีผู้ใช้"
            },
            password: {
                    required: "กรอกรหัสผ่าน",
            },
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