<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    // print ($_SESSION['unique_id']); $outgoing_id: là id của tài khoản đăng nhập hiện tại.

    $query = "SELECT role_of_chat FROM users WHERE unique_id = {$outgoing_id} LIMIT 1";
    // echo "$A";
    $A = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($A);
    $role_of_chat = $row['role_of_chat'];

    if ($role_of_chat == "health_expert") {
        $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND role_of_chat = 'user' ORDER BY user_id DESC";
    } 
    else {
        $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND NOT role_of_chat = 'user' ORDER BY user_id DESC";
    }
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        // $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>