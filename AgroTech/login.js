const loginBtn = document.getElementById("loginBtn");
const registerBtn = document.getElementById("registerBtn");

const loginForm = document.getElementById("loginForm");
const registerForm = document.getElementById("registerForm");

// Toggle formularios
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

// Mostrar / ocultar contraseña
document.querySelectorAll(".toggle-pass").forEach(icon=>{
    icon.addEventListener("click",()=>{
        const input = icon.previousElementSibling;
        input.type = input.type === "password" ? "text" : "password";
    });
});

// Registro
registerForm.addEventListener("submit",function(e){
    e.preventDefault();

    const name = document.getElementById("registerName").value;
    const email = document.getElementById("registerEmail").value;
    const password = document.getElementById("registerPassword").value;

    const user = { name, email, password };
    localStorage.setItem("agroUser", JSON.stringify(user));

    alert("Usuario registrado correctamente ✅");
    loginBtn.click();
});

// Login
loginForm.addEventListener("submit",function(e){
    e.preventDefault();

    const email = document.getElementById("loginEmail").value;
    const password = document.getElementById("loginPassword").value;

    const storedUser = JSON.parse(localStorage.getItem("agroUser"));

    if(storedUser && storedUser.email === email && storedUser.password === password){
        window.location.href = "index.html";
    }else{
        alert("Credenciales incorrectas ❌");
    }
});