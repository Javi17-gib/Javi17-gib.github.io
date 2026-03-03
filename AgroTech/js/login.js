// BOTONES
const loginBtn = document.getElementById("loginBtn");
const registerBtn = document.getElementById("registerBtn");

// FORMULARIOS
const loginForm = document.getElementById("loginForm");
const registerForm = document.getElementById("registerForm");

// INPUTS LOGIN
const loginEmail = document.getElementById("loginEmail");
const loginPassword = document.getElementById("loginPassword");

// INPUTS REGISTRO
const registerName = document.getElementById("registerName");
const registerEmail = document.getElementById("registerEmail");
const registerPassword = document.getElementById("registerPassword");

const rememberMeCheckbox = document.getElementById("rememberMe");


// 🔄 TOGGLE ENTRE FORMULARIOS
loginBtn.addEventListener("click", () => {
    loginBtn.classList.add("active");
    registerBtn.classList.remove("active");
    loginForm.classList.add("active-form");
    registerForm.classList.remove("active-form");
});

registerBtn.addEventListener("click", () => {
    registerBtn.classList.add("active");
    loginBtn.classList.remove("active");
    registerForm.classList.add("active-form");
    loginForm.classList.remove("active-form");
});


// 👁 MOSTRAR / OCULTAR PASSWORD
document.querySelectorAll(".toggle-pass").forEach(icon => {
    icon.addEventListener("click", () => {
        const input = icon.previousElementSibling;
        input.type = input.type === "password" ? "text" : "password";
    });
});


// 📝 REGISTRO
registerForm.addEventListener("submit", function(e){
    e.preventDefault();

    const user = {
        name: registerName.value,
        email: registerEmail.value,
        password: registerPassword.value
    };

    localStorage.setItem("agroUser", JSON.stringify(user));

    alert("Usuario registrado correctamente ✅");

    registerForm.reset();
    loginBtn.click();
});


// 🔐 LOGIN
loginForm.addEventListener("submit", function(e){
    e.preventDefault();

    const storedUser = JSON.parse(localStorage.getItem("agroUser"));

    if(
        storedUser &&
        storedUser.email === loginEmail.value &&
        storedUser.password === loginPassword.value
    ){

        const sessionData = {
            name: storedUser.name,
            email: storedUser.email
        };

        if(rememberMeCheckbox.checked){
            localStorage.setItem("agroSession", JSON.stringify(sessionData));
        } else {
            sessionStorage.setItem("agroSession", JSON.stringify(sessionData));
        }

        alert("Bienvenido " + storedUser.name + " 🌱");

        window.location.href = "admin.html";

    } else {
        alert("Credenciales incorrectas ❌");
    }
});


// 🚀 AUTO LOGIN
window.addEventListener("load", () => {

    const session =
        localStorage.getItem("agroSession") ||
        sessionStorage.getItem("agroSession");

    if(session){
        window.location.href = "admin.html";
    }

});