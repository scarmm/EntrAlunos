<?php
include __DIR__ . "/header.php";
?>


<title>Login</title>
<div class="conteudo-lista">
  <img src="assets/images/logoEntraluno.png" class="logoEntrA">
  <form action="" class="form_login">
    <div class="mb-3">
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
    </div>
    <div class="mb-3">
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" required>
    </div>
    <button type="submit" class="btn btn-primary">Entrar</button>
    <br>
    <h6 class="senha_botao">Esqueci Minha Senha</h6>
    <br>
    <button class="btn btn-secondary">Criar Nova Conta</button>
  </form>
</div>


<?php
include __DIR__ . "/footer.php";
?>