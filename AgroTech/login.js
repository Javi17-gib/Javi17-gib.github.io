const loginBtn = document.getElementById("loginBtn");
const registerBtn = document.getElementById("registerBtn");

const loginForm = document.getElementById("loginForm");
const registerForm = document.getElementById("registerForm");

const rememberMeCheckbox = document.getElementById("rememberMe");

/* Toggle formularios */
loginBtn.onclick = () => {
    loginBtn.classList.add("active");
    registerBtn.classList.remove("active");
    loginForm.classList.add("active-form");
    registerForm.classList.remove("active-form");
};

registerBtn.onclick = () => {
    registerBtn.classList.add("active");
    loginBtn.classList.remove("active");
    registerForm.classList.add("active-form");
    loginForm.classList.remove("active-form");
};

/* Mostrar password */
document.querySelectorAll(".toggle-pass").forEach(icon=>{
    icon.addEventListener("click",()=>{
        const input = icon.previousElementSibling;
        input.type = input.type === "password" ? "text" : "password";
    });
});

/* Registro */
registerForm.addEventListener("submit",function(e){
    e.preventDefault();

    const user = {
        name: registerName.value,
        email: registerEmail.value,
        password: registerPassword.value
    };

    localStorage.setItem("agroUser", JSON.stringify(user));
    alert("Usuario registrado ✅");
    loginBtn.click();
});

/* Login */
loginForm.addEventListener("submit",function(e){
    e.preventDefault();

    const storedUser = JSON.parse(localStorage.getItem("agroUser"));

    if(storedUser &&
       storedUser.email === loginEmail.value &&
       storedUser.password === loginPassword.value){

        const sessionData = {
            name: storedUser.name,
            email: storedUser.email
        };

        if(rememberMeCheckbox.checked){
            localStorage.setItem("agroSession", JSON.stringify(sessionData));
        } else {
            sessionStorage.setItem("agroSession", JSON.stringify(sessionData));
        }

        window.location.href = "index.html";

    } else {
        alert("Credenciales incorrectas ❌");
    }
});

/* Auto-login */
window.addEventListener("load",()=>{
    const session =
        localStorage.getItem("agroSession") ||
        sessionStorage.getItem("agroSession");

    if(session){
        window.location.href = "index.html";
    }
});