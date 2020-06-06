<?php
	session_start();
?>

<?php
if(isset($_POST['signup-submit'])){

    // Check against manual page entry
    if(isset($_SESSION['loggedin'])) {
        header("Location: homepage.php?homepage=manualpageredirect");
        exit();
    }

    require_once 'db_connect.php';

    $name = $_POST['name'];
    $regno = $_POST['reg'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $branch = $_POST['branch'];

    if(empty($name) || empty($regno) || empty($email) || empty($username) || empty($password) || empty($branch)){
        header("Location: signup.php?signup=emptyfields");
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: signup.php?signup=invalidemail&name=$name&regno=$regno&branch=$branch");
    }
    elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: signup.php?signup=invalidusername&name=$name&regno=$regno&email=$email&branch=$branch");
    }
    /*elseif($password !== $passwordRepeat){
        header("Location: signup.php?error=passwordcheck&username=".$username."&email=".$email);
        exit();
    }*/
    else{
        $sql = "SELECT usnm FROM users WHERE usnm=?";
        if (!($stmt = $con->prepare($sql))) {
            header("Location: signup.php?signup=sqlerror");
        }
        else{
            $stmt->bind_param('s', $username);
            $stmt->execute();
            $res = $stmt->get_result();
            if($res->num_rows > 0){
                header("Location: signup.php?signup=usertaken");
            }
            else{
                $sql = "INSERT INTO users (name, regno, email, usnm, pswd, branch) VALUES (?, ?, ?, ?, ?, ?)";
                if(!($q = $con->prepare($sql))){
                    header("Location: signup.php?signup=sqlerror");
                }
                else{
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    $q->bind_param('ssssss', $name, $regno, $email, $username, $hashedPwd, $branch);
                    $q->execute();
                    header("Location: signup.php?signup=success");
                    $q->close();
                }
            }
            $stmt->close();
        }
    }
    $con->close();
}
else{
    header("Location: signup.php");
    exit();
}