document.getElementById("btnGuardar").onclick=(event)=>{
    event.preventDefault() // evita recargar la paguina
    document.getElementById("form").classList.add('was-validated')
    document.querySelector("#divAlerta").classList.remove("d-none")
    Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Algo salio mal !",
        footer: '<a href="#">Why do I have this issue?</a>'
      });
}