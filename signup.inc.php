<?php
if(isset($_POST['signup-submit'])){

    require 'dbh.inc.php';

    $name = $_POST['name'];
    $regno = $_POST['reg'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $branch = $_POST['branch'];

    if(empty($name) || empty($regno) || empty($email) || empty($username) || empty($password) || empty($branch)){
        header("Location: signup.php?signup=emptyfields");
        exit();
    }
    // elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
    //     header("Location: signup.php?error=invalidemailusername");
    //     exit();
    // }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: signup.php?signup=invalidemail&name=$name&regno=$regno&branch=$branch");
        exit();
    }
    elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: signup.php?signup=invalidusername&name=$name&regno=$regno&email=$email&branch=$branch");
        exit();
    }
    /*elseif($password !== $passwordRepeat){
        header("Location: signup.php?error=passwordcheck&username=".$username."&email=".$email);
        exit();
    }*/
    else{
        $sql = "SELECT usnm FROM users WHERE usnm=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: signup.php?signup=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
                //header("Location: login.php");
                header("Location: signup.php?signup=usertaken");
                exit();
            }
            else{
                //header("Location: login.php");
                $sql = "INSERT INTO users (name, regno, email, usnm, pswd, branch) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: signup.php?signup=sqlerror");
                    exit();
                }
                else{
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ssssss", $name, $regno, $email, $username, $hashedPwd, $branch);
                    mysqli_stmt_execute($stmt);
                    header("Location: signup.php?signup=success");
                    //header("Location: signup.php?signup=success");
                    //exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else{
    header("Location: signup.php");
    exit();
}