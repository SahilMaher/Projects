<?php
include("Header.html")

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
  <title>Forget-Password</title>
  
</head>
<body>
  <div class="container">
    <div class="login-box">
      <h2>Forget-Password</h2>
      <form method="post" action="#">
        <div class="input-group">
          <label for="UserName">UserName</label>
          <input type="text" id="unm" name="unm" required>
        </div>
        <div class="input-group">
          <label for="password">NewPassword</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="input-group">
          <label for="Bdate">BirthDate</label>
          <input type="date" id="bdate" name="bdate" required>
        </div>
        <button type="submit" name="u_submit">Submit</button>
       
      </form>
     
    </div>
  </div>

 
</body>
</html>
<?php
if(isset($_POST['u_submit']))
{
$unm=$_POST['unm'];
$pass=$_POST['password'];
$bdt=$_POST['bdate'];

$con=mysqli_connect("localhost","root","","social_book");
if($con==false)
{
    echo"Connection Error";
}
$query=mysqli_query($con,"select u_username ,u_birthdate from user_data where u_username='$unm' ");
$res=mysqli_fetch_array($query);
if($query)
{
    if($res[1]==$bdt && $unm==$res[0])
    {
        $con2=mysqli_connect("localhost","root","","social_book");
        $insquery=mysqli_query($con2,"update user_data set u_password='$pass' where u_username='$unm' ");
        if($insquery)
        {
            echo"Password Forgeted <a href='login.php'>Login Now</a>";
        }
        else
        {
            echo"New Query Problem";
        }
   
    }
    else
    {
        echo"<script>
        alert('data not Match Try Again');
        </script>
        ";
    }
}
else
{
    echo"query problem";
}


}


?>
