const form = document.querySelector(".signup form"),
continueBtn = form.querySelector(".button input"),
errorText = form.querySelector(".error-text");

form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "success"){
                location.href="users.php";
              }else{
                errorText.style.display = "block";
                errorText.textContent = data;
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);

    // fetch("php/signup.php", {
    //   method: "POST",
    //   body: new FormData(form)
    // })
    //   .then(response => {
    //     if (response.ok) {
    //       return response.text();
    //     } else {
    //       throw new Error("Network response was not ok.");
    //     }
    //   })
    //   .then(data => {
    //     if (data === "success") {
    //       location.href = "users.php";
    //     } else {
    //       errorText.style.display = "block";
    //       errorText.textContent = data;
    //     }
    //   })
    //   .catch(error => {
    //     console.error("Error:", error);
    //   });
}