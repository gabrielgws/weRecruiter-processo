$(document).ready(function () {
  $('#listar_usuario').DataTable({
      processing: true,
      serverSide: true,
      ajax: "listar_usuario.php",
  });
});

const formNewUser = document.getElementById("form-cad-usuario");
const fecharModalCad = new bootstrap.Modal(document.getElementById("cadUsuarioModal"));
if (formNewUser){
  formNewUser.addEventListener("submit", async(e) => {
    e.preventDefault();
    const dadosForm = new FormData(formNewUser);
    //console.log(dadosForm);

    const dados = await fetch("cadastrar.php", {
      method: "POST",
      body: dadosForm
    });    

    const resposta = await dados.json();
    //console.log(resposta);

    if (resposta['status']) {
      document.getElementById("msgAlertErroCad").innerHTML = "";
      document.getElementById("msgAlerta").innerHTML = resposta['msg'];
      formNewUser.reset();
      fecharModalCad.hide();
      listarDataTables = $('#listar_usuario').DataTable();
      listarDataTables.draw();
  } else {
      document.getElementById("msgAlertErroCad").innerHTML = resposta['msg'];
  }

  });
};
