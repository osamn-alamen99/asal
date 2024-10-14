
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="loo.css">
</head>
<body>
    

<div class="main">
<img src="imj/video.PNG" alt="">
<h3>اسم المستخدم mu</h3>
<h3> كلمة المرور mu</h3>
<form method="POST">
 <input type="text" name="username" required placeholder="اسم المستخدم">
<br>
 <input type="password" name="password" required placeholder="كلمة السر ">
<br>

<button name="login" type="submit">تسجيل دخول </button>

</form>
</div>
<?php
$username = "mu";
$password = "mu";
if(isset($_POST['login'])){
  $getusername = $_POST['username'];
  $getpassword = $_POST['password'];

  if($username === $getusername && $password === $getpassword){
   session_start();
   $_SESSION['USER'] = $getusername;
   $_SESSION['PASSWORD'] = $getpassword;
   $_SESSION['LOGIN'] = true;
   echo "<script> location.replace('admin.php')</script>";

  }else{
    echo "كلمة المرور او اسم المستخدم غير صحيح ";
  }

}
?>
</body>
</html>
