<script>
    // alert("hello");
    password1 = document.getElementById("password").value;
    password2 = document.getElementById("repassword").value;
    
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
                required: "Please Enter Name"
            },
            Telephone: {
                required: "Please Enter Telphone",
            },
            email: {
                required: "Please Enter Email",
            },
            password: {
                    required: "Please Enter Password",
            },
            repassword: {
                    required: "Please Enter Re Password",
            }
        },
    });
    $("#insert").submit(function(){
        login();
        // checkpassword(password1,password2);
        
    })
    // function checkPassword(password1,password2) { 
        
    //            if (password1 != password2) { 
    //                 alert ("\nPassword did not match: Please try again...") 
    //                 return false; 
    //             }else{
    //                 login();
    //             }
    //         } 
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
            if(data.repassword == data2.password){
                if(isValid){
                    alert("Register Has Complete Wellcome   "+name.name)
                window.location.replace( href="<?=base_url("welcome") ?>");
  
                }
            
            }else{
                alert("Password not match!!")
            }
        
        
    }
    </script>