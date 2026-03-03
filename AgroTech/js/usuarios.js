const users = [
{
name:"Juan Pérez",
email:"juan@email.com",
role:"Productor",
status:"Activo",
date:"01 Mar 2026"
},
{
name:"María López",
email:"maria@email.com",
role:"Comprador",
status:"Inactivo",
date:"20 Feb 2026"
}
];

const tableBody = document.getElementById("tableBody");
const searchInput = document.getElementById("searchInput");
const roleFilter = document.getElementById("roleFilter");
const statusFilter = document.getElementById("statusFilter");

function renderTable(data){
tableBody.innerHTML="";
data.forEach(user=>{
tableBody.innerHTML += `
<tr>
<td>${user.name}</td>
<td>${user.email}</td>
<td>${user.role}</td>
<td><span class="badge ${user.status.toLowerCase()}">${user.status}</span></td>
<td>${user.date}</td>
<td><button onclick="deleteUser('${user.email}')">Eliminar</button></td>
</tr>
`;
});
}

function filterUsers(){
let filtered = users.filter(user=>{
return (
user.name.toLowerCase().includes(searchInput.value.toLowerCase()) &&
(roleFilter.value==="" || user.role===roleFilter.value) &&
(statusFilter.value==="" || user.status===statusFilter.value)
);
});
renderTable(filtered);
}

searchInput.addEventListener("input", filterUsers);
roleFilter.addEventListener("change", filterUsers);
statusFilter.addEventListener("change", filterUsers);

function deleteUser(email){
const index = users.findIndex(u=>u.email===email);
users.splice(index,1);
filterUsers();
}

/* MODAL */
const modal = document.getElementById("userModal");
document.getElementById("openModal").onclick = ()=> modal.style.display="flex";
document.getElementById("closeModal").onclick = ()=> modal.style.display="none";

document.getElementById("saveUser").onclick = ()=>{
const name = document.getElementById("nameInput").value;
const email = document.getElementById("emailInput").value;
const role = document.getElementById("roleInput").value;
const status = document.getElementById("statusInput").value;

users.push({
name,email,role,status,
date:new Date().toLocaleDateString()
});

modal.style.display="none";
filterUsers();
};

renderTable(users);