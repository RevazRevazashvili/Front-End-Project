<?php
    if(isset($_POST['register'])){
        $str=$_POST['Username'].'/'. $_POST['Age'].'/'.$_POST['Email'].'/'.$_POST['password'].'/';
        $myFile=fopen('users.txt','a');
        fwrite($myFile,$str);
        fclose($myFile);
        header('refresh:1;url=logIn.php');
    }
    else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        .myForm input{
            background-color: lightblue;
            width:25%;
            margin-left:35%;
            margin-top:10px;
            height:30px;
            float:left;
        }
    </style>
</head>
<body>
    <form action="" method="post" class="myForm">
        <h2>Username</h2>
        <input type="text" name="Username" placeholder="Username">
        <h2>Age</h2>
        <input type="text" name="Age" placeholder="Age">
        <h2>Email</h2>
        <input type="text" name="Email" placeholder="Email">
        <h2>Password</h2>
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="register" value="register">
    </form>
    <script src="JS/index.js"></script>
</body>
</html>

<?php
    }
?>