<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chat with GPT</title>
    <link rel="stylesheet" href="AI.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  </head>
  <body>
    <!-- Chats container -->
    <div class="chat-container"></div>
    
    <!-- Typing container -->


    
    <div class="typing-container">
      <!-- <a href="php/logout.php?logout_id=<?php //echo $row['unique_id']; ?>">Logout</a> -->
      <a id="logout-link" style="display:flex; width: 200px;">
      <!-- href="php/logout.php?unique_id=<?php //$_GET['unique_id'] ?>" -->
        <span id="logout-btn" class="material-symbols-outlined" style="background-color: red;">logout</span>
        <span id="logout-btn" class="material-symbols-outlined" name="back">keyboard_return</span>
      </a>

      <div class="typing-content">
        <div class="typing-textarea">
          <textarea id="chat-input" spellcheck="false" placeholder="Enter a prompt here" required></textarea>
          <span id="send-btn" class="material-symbols-rounded">send</span>
        </div>
        <div class="typing-controls">
          <span id="theme-btn" class="material-symbols-rounded">light_mode</span>
          <span id="delete-btn" class="material-symbols-rounded">delete</span>
          <span id="history-btn" class="material-symbols-outlined">history</span>

      </div>
    </div>
    <script>
      const historybtn = document.querySelector("#history-btn");
      historybtn.onclick = () => {
        if(confirm("Are you sure see the history?") ){
          window.location.href = "history.html";
        }
      }
    </script>
    <script src="script.js" defer></script>
  </body>


  <script>

    let logoutbtn = document.querySelector("#logout-btn");
    logoutbtn.onclick = () => {
      var unique_id = localStorage.getItem('unique_id');
      // var logoutLink = document.getElementById('logout-link');
      window.location.href = "php/logout1.php?unique_id=" + unique_id;
    }
    let back = document.querySelector('[name="back"]');
    back.onclick = () => {
      window.location.href = "luan.php";
    };
  </script>
</html>