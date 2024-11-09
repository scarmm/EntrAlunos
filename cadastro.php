<?php
include __DIR__ . "/header.php";
?>


<body>
    <title>Cadastro</title>
    <div class="caixaCadastro">
      <h1 class="titulos">Cadastro de Usuário</h1>
      <div class="barra"></div>
      <form action="" class="form_login">
        <div class="mb-3">
          <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Nome Completo" required>
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </form>
    </div> 
</body>


<?php
include __DIR__ . "/footer.php";
?>