/*document.getElementById("btnGuardar1").onclick=(event)=>{
    event.preventDefault() // evita recargar la paguina
    document.getElementById("form").classList.add('was-validated')
    document.querySelector("#divAlerta").classList.remove("d-none")
    Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Algo salio mal !",
        footer: '<a href="#">Why do I have this issue?</a>'
      });
}*/

var botones = document.getElementsByClassName("btnEliminar")


for(var i=0; i<botones.length; i++){
  botones[i].onclick=(evt)=>{
    var btn = evt.target
    var id = btn.getAttribute('data-id2')
    //alert("ID: " + id)
    Swal.fire({
      title: "Eliminar?",
      text: "Deseas eliminar el usuario y los datos elimnados!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#15ff00",
      cancelButtonColor: "#d33",
      confirmButtonText: "Eliminar"
    }).then((result) => {
      if (result.isConfirmed) {
        location.href="../admin/php/remove-inventario.php?id="+id
        }
      });
    }
  }
