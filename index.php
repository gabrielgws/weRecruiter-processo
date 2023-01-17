<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Athenas Tecnologia</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
</head>
<body>
  <div class="container">
    <!--header-->
    <h1 class="pt-4">Ajax CRUD with Bootstrap modals and Datatables</h1>
    <h3 class="mt-4">Person Data</h3>
    <!--header-->

    <!--button Add Person-->
    <button 
      type="button"
      class="btn btn-success mt-4"
      data-bs-toggle="modal"
      data-bs-target="#cadUsuarioModal"><i class="bi bi-plus"></i>
        Add Person
    </button>

    <span id="msgAlerta"></span>

    <!-- Modal -->
    <div class="modal fade" id="cadUsuarioModal" tabindex="-1" aria-labelledby="cadUsuarioModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="cadUsuarioModalLabel">Cadastrar Usuário</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span id="msgAlertErroCad"></span>
          <form method="POST" id="form-cad-usuario">
            <div class="mb-3">
              <label for="firt_name" class="form-label">Primeiro Nome:</label>
              <input type="text" id="firt_name" name="firt_name" class="form-control" placeholder="Digite o Primeiro nome">
            </div>
            <div class="mb-3">
              <label for="last_name" class="form-label">Sobrenome:</label>
              <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Digite o Sobrenome">
            </div>
            <div class="mb-3">
              <label for="gender" class="form-label">Sexo:</label>
              <input type="text" id="gender" name="gender" class="form-control" placeholder="Digite o Sexo">
            </div>
            <div class="mb-3">
              <label for="adress" class="form-label">Endreço:</label>
              <input type="text" id="adress" name="adress" class="form-control" placeholder="Digite o endereço/local">
            </div>
            <div class="mb-3">
              <label for="birthday" class="form-label">Data Nascimento:</label>
              <input type="text" id="birthday" name="birthday" class="form-control" placeholder="Digite o Ano de nascimento">
            </div>
            <button type="submit" class="btn btn-outline-success btn-sm" value="Cadastrar">Cadastrar</button>
          </form>
          </div>
        </div>
      </div>
    </div>
    <!--button Add Person-->

    <!--Show options abd Searc
    <div class="mt-5 d-flex align-items-center justify-content-between">
      <div class="col-md-6 d-flex align-items-center justify-content-start">
        <label class="me-1">Show</label>        
         <div class="form-group">
          <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option>10</option>
            <option>20</option>
            <option>30</option>
            <option>40</option>
            <option>50</option>
          </select>
          </div>
          <label class="ms-1">entries</label>
        </div>

      <div class="col-md-6 d-flex align-items-center justify-content-end">
          <label class="me-1">Search:</label>
        <div class="form-group align-items-center">
          <input type="text" class="form-control" placeholder="">
        </div>
      </div>

    </div>
    Show options abd Searc-->

    <!--table-->
    <div class="mt-4">
      <table id="listar_usuario" class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Address</th>
            <th scope="col">Date of Birth</th>
          </tr>
        </thead>

        <tfoot>
          <tr>
            <th scope="col">id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Address</th>
            <th scope="col">Date of Birth</th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!--table-->

    <!-- showing pages
    <div class=" d-flex align-items-center justify-content-between">
      <div class="col-md-6 d-flex align-items-center justify-content-start">
        <label class="me-1">Showing 1 to 5 of 5 entries</label>
        </div>

      <div class="col-md-6 d-flex align-items-center justify-content-end">
        <button type="button" class="btn btn-outline-secondary">Previous</button>
        <button type="button" class="btn btn-primary">1</button>
        <button type="button" class="btn btn-outline-secondary">Next</button>
      </div>

    </div>
    showing pages -->
    
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>