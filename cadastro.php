<?php
global $usuarios;
// Verifica se o formulário foi enviado via método POST
if (isset($_POST['nome_usuario'])) {
    // Recebe os dados do formulário
    $nome_usuario = $_POST['nome_usuario'];
    $senha_usuario = $_POST['senha_usuario'];
    $email_usuario = $_POST['email_usuario'];

    // Inclui a configuração do banco de dados
    include __DIR__ . '/config/db.php';

    $stmt = $pdo->prepare("INSERT INTO usuarios (nome_usuario, senha_usuario, email_usuario) VALUES (:nome_usuario, :senha_usuario, :email_usuario)");
    // Vincula os parâmetros da consulta às variáveis
    $stmt->bindParam(":nome_usuario", $nome_usuario);
    $stmt->bindParam(":senha_usuario", $senha_usuario);
    $stmt->bindParam(":email_usuario", $email_usuario);
    // Executa a consulta
    $stmt->execute();
}

?>
<?php
  $stmt = $pdo->prepare("SELECT * FROM usuarios");
  $stmt->execute();
  $noticias = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // Verifica se há notícias para exibir
  if ($noticias):
?>

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
          <td><?php echo $usuarios['nome_usuario']; ?></td>
          <td><?php echo $usuarios['email_usuario']; ?></td>
        </tr>
        <!-- Mais linhas -->
      </tbody>
    </table>
    <?php
    endif;
    ?>
  </div>
  </div>

<?php
include __DIR__ . "/footer.php";
?>