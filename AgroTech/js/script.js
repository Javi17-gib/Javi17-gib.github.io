// SIDEBAR TOGGLE
const menuToggle = document.getElementById("menuToggle");
const sidebar = document.getElementById("sidebar");

menuToggle.addEventListener("click", () => {
    sidebar.classList.toggle("active");
});

// CHART
const ctx = document.getElementById('salesChart');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Ene','Feb','Mar','Abr','May','Jun'],
        datasets: [
            {
                label: 'Ventas',
                data: [12000,19000,15000,22000,28000,30000],
                borderColor: '#2E7D32',
                backgroundColor: 'rgba(46,125,50,0.2)',
                tension:0.4,
                fill:true
            }
        ]
    },
    options:{
        responsive:true,
        plugins:{
            legend:{display:true}
        },
        scales:{
            y:{
                ticks:{color:"#ccc"},
                grid:{color:"#1f3a44"}
            },
            x:{
                ticks:{color:"#ccc"},
                grid:{display:false}
            }
        }
    }
});
// ACTIVAR ITEM
const menuItems = document.querySelectorAll(".menu li");

menuItems.forEach(item => {
    item.addEventListener("click", () => {
        menuItems.forEach(i => i.classList.remove("active"));
        item.classList.add("active");
    });
});

// COLAPSAR SIDEBAR (doble click logo)
document.querySelector(".logo-container")
.addEventListener("dblclick", () => {
    document.getElementById("sidebar")
    .classList.toggle("collapsed");
});
/* PROTECCIÓN GLOBAL */
window.addEventListener("load",()=>{

    const session =
        localStorage.getItem("agroSession") ||
        sessionStorage.getItem("agroSession");

    if(!session){
        window.location.href = "login.html";
    } else {
        const user = JSON.parse(session);
        const nameElement = document.querySelector(".admin-info span");
        if(nameElement){
            nameElement.textContent = user.name;
        }
    }

});

/* LOGOUT */
const logoutBtn = document.querySelector(".logout a");

if(logoutBtn){
    logoutBtn.addEventListener("click",(e)=>{
        e.preventDefault();
        localStorage.removeItem("agroSession");
        sessionStorage.removeItem("agroSession");
        window.location.href = "login.html";
    });
}