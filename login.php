<?php
include("Header.html")

?>
<?php
if(isset($_COOKIE['user']) && isset($_COOKIE['id']))
{
    header("location:home.php");
}
else{
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f0f2f5; 
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.login-box {
  background-color: #fff;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.login-box h2 {
  font-size: 24px;
  margin-bottom: 20px;
}

.input-group {
  margin-bottom: 20px;
}

.input-group label {
  display: block;
  font-size: 14px;
  margin-bottom: 5px;
}

.input-group input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 4px;
}

button {
  width: 100%;
  padding: 10px;
  background-color: #1877f2; 
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

button:hover {
  background-color: #166fe5; 

}

.forgot-password {
  text-align: right;
  text-align: center;
  margin-top: 10px;
}

.create-account {
  text-align: center;
}

.create-account a {
  color: #1877f2;  
  text-decoration: none;
}

.create-account a:hover {
  text-decoration: underline;
}
</style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  
</head>
<body>
  <div class="container">
    <div class="login-box">
      <h2>Log In to SocialBook</h2>
      <form method="post" action="authent.php">
        <div class="input-group">
          <label for="UserName">UserName</label>
          <input type="text" id="unm" name="unm" required>
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" name="u_submit">Log In</button>
        <div class="forgot-password">
          <a href="Forget.php">Forgot password?</a>
        </div>
      </form>
      <div class="create-account">
        <p>Don't have an account? <a href="signin.html">Sign Up</a></p>
      </div>
    </div>
  </div>

 
</body>
</html>
<?php }?>