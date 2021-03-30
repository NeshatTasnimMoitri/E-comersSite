<!DOCTYPE html>
<html>
    <head>
        <title>Form Validation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form name="login" onsubmit="return validation()">
            User Name :<input type="text" name="uname" value=""><br><br>
            User Password :<input type="password" name="pass" value=""><br><br>
            <input type="submit" name="btn" value="Submit">
        </form>
        <!java script-->
        
        <script type="text/javascript">
            function validation(){
                var uname = document.login.uname.value;
                var pass = document.login.pass.value;
                
                if(uname==""||pass==""){
                    alert("Both fields should not be blank");
                    return;
                }
                
                if(pass.length<6 || pass.length>12){
                    alert("Password must be 6 to 12 charecter");
                    return ;
                }
                
                var str = uname.slice(0,1);
                if(uname.slice(0,1)=="" || uname.slice(0,1)=="@"||str.match(/[0-9]/g)!=null){
                    alert("Username should not start with _,@and Number");
                    return ;
                }
            }
            
            
        </script>
        
    </body>
</html>
