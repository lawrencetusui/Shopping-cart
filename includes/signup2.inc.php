<?php
//check if submit button is clicked
if (isset($_POST['signup-submit']))
{
    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if (empty($username) || empty($password) || empty($passwordRepeat))
    {
        header("Location: ../html/signup2.php?error=emptyfields&uid=" . $username . "&mail=" . $email); //those data get sent back to the sgn up orm
        exit();
    }

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("Location: ../html/signup2.php?error=invalidmail&uid= Please enter @ and the hosting site" . $username); //those data get sent back to the sgn up orm
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username))
    {
        header("Location: ../html/signup2.php?error=invaliduid&mail=" . $email);

        exit();
    }
    else if ($password !== $passwordRepeat)
    {
        header("Location: ../html/signup2.php?error=passwordcheck&uid=" . $username . "&mail=" . $email); //those data get sent back to the sgn up orm
        exit();
    }
    else
    {

        $sql = "INSERT INTO Member (CustomerID,UserID,HashedPassword) VALUES(?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../html/signup2.php?error=sqlerror2");

            exit();
        }
        else
        {
            $hash_salt = password_hash($password, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hash_salt);
            mysqli_stmt_execute($stmt);
            header("Location: ../html/signup2.php?signup=success");

            //echo'<script type="text/javascript">success(); </script>':
            exit();
        }
        //}

    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn); //close off connection

}
else
{
    header("Location: ../html/signup2.php");
    exit();
}
