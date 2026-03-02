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