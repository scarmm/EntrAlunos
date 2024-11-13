<?php
include __DIR__ . "/header.php";
?>

<div class="conteudo-cadastro">
<div class="container3">
    <h1>Cadastro de Usuário</h1>
    
    <form class="form-cadastro">
      <label for="funcionario">Funcionário</label>
      <input type="text" id="funcionario" placeholder="Nome do funcionário">

      <label for="email">Email</label>
      <input type="email" id="email" placeholder="Email do funcionário">

      <label for="senha">Senha</label>
      <input type="password" id="senha" placeholder="Senha">
      
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
          <th>Senha</th>
        </tr>
      </thead>
      <tbody>
        <!-- Exemplo de linhas de dados -->
        <tr>
          <td>João Silva</td>
          <td>joao@email.com</td>
          <td>********</td>
        </tr>
        <!-- Mais linhas -->
      </tbody>
    </table>
  </div>
  </div>
<?php
include __DIR__ . "/footer.php";
?>