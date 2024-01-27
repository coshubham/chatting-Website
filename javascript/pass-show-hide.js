const visibilityBtn = document.getElementById("visibilityBtn")
visibilityBtn.addEventListener("click", toggleVisibility)

function toggleVisibility(){
    const passwordInput = document.getElementById("password")
    if (passwordInput.type === "password"){
        passwordInput.type ="text";
        visibilityBtn.classList.add("active");
    }else{
        passwordInput.type = "password";
        visibilityBtn.classList.remove("active");
    }
}
