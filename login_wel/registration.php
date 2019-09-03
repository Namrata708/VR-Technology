<?php
if (isset($_POST['submit'])) {
    
    $email=($_POST['email']);
    
    $password=($_POST['psw']);

    $Megha=$email."_".$password;
mkdir($Megha);
}
?>

<form action="" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required><br><br>

    <hr>

    <input type="submit" value="submit">
  </div>

  </div>
</form>