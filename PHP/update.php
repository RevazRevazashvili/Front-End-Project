<?php
    require_once './connection.php';
    $id =$_GET['Id'];
    $sql= "SELECT * FROM user WHERE Id=$id";
    $query_result =mysqli_query($con,$sql);
    if($query_result===false){
        die();
    }
    else{
        $row=mysqli_fetch_assoc($query_result);
        $username = $row['Username'];
        $age = $row['Age'];
        $email = $row['Email'];
        $password = $row['Password'];
    }
    if(isset($_POST['sbm'])){
        $username = $_POST['Username'];
        $age = $_POST['Age'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        $sql = "UPDATE user SET username=?, age=?, email=?, password=? WHERE id=?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt,'siss',$username, $age, $email,$password,$id);
        mysqli_stmt_execute($stmt);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    <h1>update user</h1>
    <form action="" metho="post">
        <input type="text" name="username" placeholder="<?php echo $username ?>">
        <input type="text" name="age" placeholder="<?php echo $age ?>">
        <input type="text" name="email" placeholder="<?php echo $email ?>">
        <input type="text" name="password" placeholder="<?php echo $password ?>">
        <input type="submit" name="sbm" value="update">
    </form>
</body>
</html>