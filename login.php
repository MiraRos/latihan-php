<html>
<head><title> Login </title></head>
<body>
    <FORM ACTION="" METHOD="POST">
    Email : <input type="text" name="email"><br>
    password : <Input type="password" name="password"><br>
    <input type="submit" name="Input" value="Login">
    </FORM> 
</body>
</html>

<?php
if (isset ($_POST['Input'])){
    $email1 = $_POST['email'];
    $password1 = $_POST['password'];
    if ($email1=="mira@gmail.com"&& $password1=="sakainget"){
        echo "Login Berhasil";
}
    else{
        echo "Login Gagal";
    }
}
?>
