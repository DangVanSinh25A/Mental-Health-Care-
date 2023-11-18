<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health Care</title>
    <style>

        body {
            background-image: url('../images/background-heath.jpg');
  
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-family: 'Arial',  sans-serif;
            /* Canh giữa theo chiều dọc */
        }

        body::after {
            content: ""; /* Thêm nội dung trống */
            position: absolute; /* Đặt vị trí tuyệt đối để lớp overlay không ảnh hưởng tới nội dung khác */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Màu của overlay (ở đây là màu đen với độ trong suốt 0.5) */
        }

        h3 {
            width: 70%;
        }

        h1 {
            margin-top: 20vh;
            font-size: 48px;
        }

        h1,
        h3 {
            color:#ffffff;
            z-index: 999;
            text-align: center;
        }

        h3 {
            font-size: 32px;
            ;
        }

        body>div {
            display: flex;

        }

        button {
            min-width: 200px;
            display: block;
            margin: 0 auto;
            padding: 10px 20px;
            margin-right: 10px;
            font-size: 22px;
            background-color: #2a333d;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
           
            z-index: 999 !important;
        }

        a{
          text-decoration: none;
        
            z-index: 999;
        }
    </style>
</head>
<?php
session_start();
include_once "php/config.php";
echo "<script>localStorage.setItem('unique_id', '{$_SESSION['unique_id']}');</script>";
?>

<body>
    <div id="wellcom"></div>
    <h3>I am here to provide support and assistance in helping you effectively manage and alleviate stress and tension.
        Whether you're feeling overwhelmed, anxious, or simply need someone to talk to,
        I am dedicated to helping you</h3>
    <div>
        <a href="chatGPT.php"><button>Chat with GPT</button></a>
        <a href="users.php"><button>Chat with Educator</button></a>
    </div>
    
    <script>
        document.getElementById("wellcom").innerHTML =    `<h1>
                                            Welcome <?= $_SESSION['unique_id']; ?> to Mental Health Care
                                            </h1>`;
    </script>
</body>

</html>