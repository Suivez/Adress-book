<?php
        include_once 'MyFrameworks/DBQuery.php';
    
        if(isset($_POST["IDSubmit"]))
        {
            $username = $_POST["usernametbx"];
            $password = $_POST["passwordtbx"];
            $DBConnection = new DBConnection;          
            $command = mysqli_query($DBConnection->getdbconnection(), "Select * from account_table where IDUsername='".$username."'");              
            $row = mysqli_fetch_array($command);
            if ($username == $row["IDUsername"] && password_verify($password, $row["IDPassword"]))
            {
                session_start();
                $_SESSION["Account-Login"]='';
                $_SESSION["LoginFirst"] =$username;
                echo '<script>window.location.href="CRUD.php?Home";</script>';
            }
            else{
                echo '<script>window.location.href="index.php?Error"</script>';
            }   
        }
        ?>        