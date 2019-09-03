<?php
$msg='';
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $dir_name=$email."_".$password;
    if(is_dir($dir_name)){
    header("Location: welcome-page.php");
    }
   else{
        $msg="wrong email and password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Email</title>
    <script>
        function testvalidation() {
            var email=document.getElementById('val1').value;
            var password=document.getElementById('val2').value;
            if (email=="" && password=="") {
               alert("please enter your Email and Password");
               return false; 
            }
                else if (email=="") {
                    alert("please enter Email");
                    return false;
                } 
                else if (password=="") {
                    alert("please enter Password");
                    return false;
                } 

        }
    </script>
</head>
<body>     
<center>
    <div class="Login_box" style=" padding: 80px 120px;background: #B6E0FF; color: #555;  display: inline-block;  border-radius: 8px; ">
           <img src="login.jpeg" class="user">
           <h1>Login</h1>
           <h3><?php echo $msg; ?></h3>
       
    <form method="post" >

        <h3>Email:<input type="text" name="email" style="padding: 8px;width: 200px;     border: #A3C3E7 1px solid; border-radius: 4px; " required><br><br></h3>

            <h3>Password:<input type="password" name="password" style="padding: 8px;width: 200px;border: #A3C3E7 1px solid;border-radius: 4px; " required><br><br></h3>

            <a href="Forget password.php">Forget your password</a>
            <p>Create your registration form <a href="registration.php">Submit</a></p>

          <input type="Submit"  name="submit" value="Login" style=" background: #65C370;
          border: 0; padding: 8px 20px;border-radius: 4px;color: #FFF; text-transform: uppercase;">
    </form>
    </div>
  </center>
</body>
</html>



