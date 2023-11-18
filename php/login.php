<?php 
    session_start();
    include_once "config.php";
    // $outgoing_id = $_SESSION['unique_id'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($password);
            $enc_pass = $row['password'];
            if($user_pass === $enc_pass){
                $status = "Active now";
                $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
               
                if($sql2){
                    // echo "$A"; 
                    $query1 = "SELECT role_of_chat FROM users WHERE unique_id = {$row['unique_id']}"; // 
                    $A = mysqli_query($conn, $query1);
                    $row1 = mysqli_fetch_assoc($A);
                    $role_of_chat = $row['role_of_chat'];
                    // if($A == "health_expert"){
                    //     header("location: ../users.php");
                    // }
                    $_SESSION['unique_id'] = $row['unique_id'];
                    echo "$role_of_chat";
                    // exit();
                    if ($sql2) {
                        $_SESSION['unique_id'] = $row['unique_id'];
                        echo "success";
                    }
                }else{
                    echo "Something went wrong. Please try again!";
                }
            }else{
                echo "Email or Password is Incorrect!";
            }
        }else{
            echo "$email - This email not Exist!";
        }
    }else{
        echo "All input fields are required!";
    }
?>