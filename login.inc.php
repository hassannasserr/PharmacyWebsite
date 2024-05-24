<?php
session_start();
include 'db.php';
if(isset($_POST['uname']) && isset($_POST['pwd'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['pwd']);
    if(empty($uname)){
        header("Location: login.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location: login.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE UserName='$uname' AND Password='$pass'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['UserName'] === $uname && $row['Password'] === $pass){
                $_SESSION['UserName'] = $row['UserName'];
                $_SESSION['name'] = $row['FullName'];
                $_SESSION['username'] = $row['Full Name'];
                $_SESSION['email'] = $row['Email'];

                header("Location: index.php");
                exit();
            }else{
                header("Location: login.php?error=Incorect User name or password");
                exit();
            }
        }else{
            header("Location: login.php?error=Incorect User name or password");
            exit();
        }
    }

