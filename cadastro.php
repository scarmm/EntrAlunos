<?php
include __DIR__ . "/header.php";
?>

<div class="conteudo-cadastro">
<div class="container3">
    <h1>Cadastro de Usuário</h1>
    
    <form class="form-cadastro" action="" method="post" enctype="multipart/form-data" >
      <label for="funcionario">Funcionário</label>
      <input type="text" name="nome_usuario" id="nome_usuario" placeholder="Nome do funcionário">

      <label for="email">Email</label>
      <input type="email" name="email_usuario" id="email_usuario" placeholder="Email do funcionário">

      <label for="senha">Senha</label>
      <input type="password" name="senha_usuario" id="senha_usuario" placeholder="Senha">
      
      <div class="button-group">
        <button type="button" class="btn add">+</button>
        <button type="submit" class="btn save">💾</button>
        <button type="reset" class="btn delete">✖️</button>
      </div>
    </form>

    <div class="search-bar">
      <label for="search">Pesquisar por funcionário</label>
      <input type="text" id="search" placeholder="Pesquisar">
    </div>

    <table class="user-table">
      <thead>
        <tr>
          <th>Nome do Aluno/Funcionário</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <!-- Exemplo de linhas de dados -->
        <tr>
          <td>DAVI CÉSAR PEDRO FÁRIAS</td>
          <td>davicesar@gmail.com</td>
        </tr>
        <!-- Mais linhas -->
      </tbody>
    </table>
  </div>
  </div>

<?php
include __DIR__ . "/footer.php";
?>