<?php
if (isset($_POST['login-submit']))
{
    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid']; //option to choose to sign themselves them
    $password = $_POST['pwd'];
    if (empty($mailuid) || empty($password))
    {
        //  header("Location:../html/index.php?error=emptyfields");
        header("Location:../html/Member/member.php?error=emptyfields");
        exit();
    }
    else
    {
        $sql = "SELECT  * FROM Customer WHERE  CustomerEmail=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            //header("Locaion: ../html/index.php?error=sqlerror");
            header("Locaion: ../html/Member/member.php?error=sqlerror");
            exit();
        }
        else
        {

            mysqli_stmt_bind_param($stmt, "s", $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result))
            {
                //
                $sql = "SELECT  * FROM Member WHERE  CustomerID=?;";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    //header("Locaion: ../html/index.php?error=sqlerror");
                    header("Locaion: ../html/Member/member.php?error=sqlerror");
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "s", $row['CustomerID']);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    if ($row1 = mysqli_fetch_assoc($result))
                    {
                        $pwdCheck = password_verify($password, $row1['HashedPassword']);

                        if ($pwdCheck == false)
                        {
                            //  header("Location:../html/index.php?error=wrongpwd");
                            header("Location:../html/Member/member.php?error=wrongpwd");
                            exit();
                        }
                        else if ($pwdCheck == true)
                        {
                            session_start();
                            $_SESSION['userId'] = $row['CustomerLastName'];

                            $_SESSION['userUid'] = $row['CustomerLastName']; //to tell if they ae login

 $_SESSION['CID'] = $row['CustomerID'];
 $_SESSION['CuID'] = $row['CustomerID'];
                            header("Location:../html/Member/member.php?login=success");
                            //header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
                            exit();
                        }
                        else {
                        //  header("Location:../html/index.php?error=wrongpwd");
                          header("Location:../html/Member/member.php?error=wrongpwd");
                          exit();
                        }
                    }

                }
            }
            else {
                  //header("Location:../html/index.php?error=nousers");
                  header("Location:../html/Member/member.php?error=nousers");
                  exit();
              }
        }
    }
  }
  else{
      header("Location:../html/Member/member.php");
    exit();
  }

//
//  $pwdCheck =password_verify($password, $row['HashedPassword']);
// if ($pwdCheck==false) {
//   //  header("Location:../html/index.php?error=wrongpwd");
//       header("Location:../html/Member/member.php?error=wrongpwd");
//     exit();
// }else if($pwdCheck==true){
// session_start();
// $_SESSION['userId']=$row['idUser'];
// $_SESSION['userUid']=$row['uidUsers'];//to tell if they ae login
// header("Location:../html/Member/member.php?login=success");
// //header("Location: http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
// exit();
// } else {
// //  header("Location:../html/index.php?error=wrongpwd");
//   header("Location:../html/Member/member.php?error=wrongpwd");
//   exit();
// } else {
//     //header("Location:../html/index.php?error=nousers");
//     header("Location:../html/Member/member.php?error=nousers");
//     exit();
// }
