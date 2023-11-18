const pswrdFieldf = document.querySelector(".form input[type='password']"),
toggleIcon = document.querySelector(".form .field i");

toggleIcon.onclick = () =>{
  if(pswrdFieldf.type === "password"){
    pswrdFieldf.type = "text";
    toggleIcon.classList.add("active");
  }else{
    pswrdFieldf.type = "password";
    toggleIcon.classList.remove("active");
  }
}

// checked