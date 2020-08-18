<?php include_once 'config/init.php'; ?>

<?php

if(isset($_POST['login-submit'])){
    $user = new User;

    // require "./lib/usersDatabase.php";
    
    $mailuid = $_POST['mailuid'];
    $pwd = $_POST['pass'];
     

    $data = array();
    $data['mailuid'] = $mailuid;
     
    if(empty($mailuid) || empty($pwd)){
        header("Location: index.php?error=emptfields");
        exit();
    }else{
        $result = $user->getUser($data);

        // if(!mysqli_stmt_prepare($stmt,$sql)){
        //     header("Location: index.php?error=sqlerror1");
        //     exit();
        // }else{
        //     mysqli_stmt_bind_param($stmt,"ss",$mailuid,$mailuid);
        //     mysqli_stmt_execute($stmt);
        //     $result = mysqli_stmt_get_result($stmt);
            
        //     if($row = mysqli_fetch_assoc($result)){
        //        $pwdCheck = password_verify($pwd,$row['pwd']);
        //        if($pwdCheck === false){
        //         header("Location: index.php?error=wrongpwd");
        //         exit();   
        //        }else if($pwdCheck === true){
        //          session_start();
        //          $_SESSION['email'] = $row['email'];
        //          $_SESSION['id'] = $row['id'];

        //          redirect('index.php','You Are Logged In','success');
        //         exit();
        //        }else{
        //         header("Location: index.php?error=nouser2");
        //         exit();
        //        }
        //     }else{
        //         header("Location: index.php?error=nouser1");
        //         exit();
        //     }
        // }
    }

}else{
    header("Location: index.php");
    exit();
}
?>