<?php
//check if submit button is clicked
if (isset($_POST['signup-submit']))
{
    require 'dbh.inc.php';
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $Suburb = $_POST['Suburb'];

    $State = $_POST['State'];
    $PostCode = $_POST['PostCode'];
    $Country = $_POST['Country'];
    $phone = $_POST['phone'];
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if (empty($fname) || empty($lname) || empty($phone) || empty($username) || empty($email) || empty($password) || empty($passwordRepeat))
    {
        header("Location: ../html/signup.php?error=emptyfields&uid=" . $username . "&mail=" . $email); //those data get sent back to the sgn up orm
        exit();
    }
    //Only a-Z allowed in fname and lname
    elseif (!preg_match("/^[a-zA-Z]*$/", $fname))
    {
        header("Location: ../html/signup.php?error=invalidFirstName: Name Only letters allowed"); //those data get sent back to the sgn up orm

    }
    elseif (!preg_match("/^[a-zA-Z]*$/", $lname))
    {
        header("Location: ../html/signup.php?error=invalidLirst: Name Only letters allowed"); //those data get sent back to the sgn up orm

    }
    // Doesn't allow / . % \ @
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username))
    {
        header("Location: ../html/signup.php?error=invalidmailuid"); //those data get sent back to the sgn up orm

    }

    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("Location: ../html/signup.php?error=invalidmail&uid= Please enter @ and the hosting site" . $username); //those data get sent back to the sgn up orm
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username))
    {
        header("Location: ../html/signup.php?error=invaliduid&mail=" . $email);

        exit();
    }
    else if (!preg_match("/^[0-9]*$/", $phone))
    {
        header("Location: ../html/signup.php?error=invaliduPhoneNumber=" . $phone);

        exit();
    }
    else if ($password !== $passwordRepeat)
    {
        header("Location: ../html/signup.php?error=passwordcheck&uid=" . $username . "&mail=" . $email); //those data get sent back to the sgn up orm
        exit();
    }
    else
    {
        $sql = "SELECT CustomerEmail FROM Customer WHERE CustomerEmail=?";
        $stmt = mysqli_stmt_init($conn);
        //$sql ="SELECT CustomerEmail FROM Customer WHERE CustomerID=?";
        //SELECT * FROM `Customer` WHERE `CustomerEmail` LIKE 'csheena@gmail.com'
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../html/signup.php?error=sqlerror1"); //those data get sent back to the sgn up orm
            exit();
        }
        else
        {
            //  $sql ="SELECT CustomerEmail FROM Customer WHERE CustomerEmail=?";
            mysqli_stmt_bind_param($stmt, "s", $email); //check customer table
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt); //fetch info fom database
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0)
            { //to check if the email is in the database
                //
                $sql = "SELECT * FROM Customer WHERE CustomerEmail=?";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    header("Location: ../html/signup.php?error=sqlerror1"); //those data get sent back to the sgn up orm
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "s", $email); //check customer table
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    while ($row = mysqli_fetch_assoc($result))
                    {
                        //header("Location: ../html/signup.php?display=".$row['CustomerID']); //those data get sent back to the sgn up orm
                        header("Location: ../html/signup2.php?UserID=" . $row['CustomerID'] . "&mail=" . $email); //those data get sent back to the sgn up orm

                    }
                    exit();
                }
            }
        }
        /*
        To new page:
        CustomerID - Not shown
        UserID: Provded by Member
        HashedPassword
        Email
        */

        //header("Location: ../html/signup.php?error=usertaken=".email); //those data get sent back to the sgn up orm
        //   $sql = "INSERT INTO Member (CustomerID,UserID,HashedPassword) VALUES(1,?,?)";
        //   $stmt = mysqli_stmt_init($conn);
        //   if(!mysqli_stmt_prepare($stmt, $sql)){
        //     header("Location: ../html/signup.php?error=sqlerror1"); //those data get sent back to the sgn up orm
        //   exit();
        // }
        //   $hash_salt = password_hash($password, PASSWORD_DEFAULT);
        //   mysqli_stmt_bind_param($stmt,"ss",$phone,$hash_salt);
        //   mysqli_stmt_execute($stmt);
        //   header("Location: ../html/signup.php?signup=ExistingMembersuccess");
        // exit();
        // }else{
        $sql = "INSERT INTO Customer (CustomerGivenName,CustomerLastName,CustomerEmail,CustomerAddress,CustomerSuburb, CustomerState, CustomerPostCode, CustomerCountry,CustomerPhoneNumber, CustomerAccountFlag) VALUES(?,?,?,?,?,?,?,?,?,'0')";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../html/signup.php?error=sqlerror");
            exit();
        }
        else
        {
            //$hash_salt=password_hash($password, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "sssssssss", $fname, $lname, $email, $address, $Suburb, $State, $PostCode, $Country, $phone);
            mysqli_stmt_execute($stmt);
            //  header("Location: ../html/signup.php?signup=success");
            //echo'<script type="text/javascript">success(); </script>':
            $sql = "SELECT CustomerEmail FROM Customer WHERE CustomerEmail=?";
            $stmt = mysqli_stmt_init($conn);
            //$sql ="SELECT CustomerEmail FROM Customer WHERE CustomerID=?";
            //SELECT * FROM `Customer` WHERE `CustomerEmail` LIKE 'csheena@gmail.com'
            if (!mysqli_stmt_prepare($stmt, $sql))
            {
                header("Location: ../html/signup.php?error=sqlerror1"); //those data get sent back to the sgn up orm
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmt, "s", $email); //check customer table
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt); //fetch info fom database
                $resultCheck = mysqli_stmt_num_rows($stmt);
                if ($resultCheck > 0)
                { //to check if the email is in the database
                    //
                    $sql = "SELECT * FROM Customer WHERE CustomerEmail=?";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql))
                    {
                        header("Location: ../html/signup.php?error=sqlerror1"); //those data get sent back to the sgn up orm
                        exit();
                    }
                    else
                    {
                        mysqli_stmt_bind_param($stmt, "s", $email); //check customer table
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        while ($row = mysqli_fetch_assoc($result))
                        {
                            //header("Location: ../html/signup.php?display=".$row['CustomerID']); //those data get sent back to the sgn up orm
                            //header("Location: ../html/signup2.php?UserID=".$row['CustomerID']."&mail=".$email); //those data get sent back to the sgn up orm
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
                                mysqli_stmt_bind_param($stmt, "sss", $row['CustomerID'], $email, $hash_salt);
                                mysqli_stmt_execute($stmt);
                                header("Location: ../html/signup.php?signup=success");

                                //echo'<script type="text/javascript">success(); </script>':
                                exit();
                            }
                        }
                    }
                    exit();
                }

                //
                // $sql = "SELECT MAX(CustomerID) FROM Customer"
                // $result = mysqli_query($conn,$sql);
                // $resultCheck= mysqli_stmt_num_rows($result);
                // if ($resultCheck>0){
                //   while($row= mysqli_fetch_assoc($result)){
                //     header("Location: ../html/signup.php?userID=".$row['CustomerID']);
                //
                //   }

            }
        }
        //}

    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn); //close off connection

}
else
{
    header("Location: ../html/signup.php");
    exit();
}
