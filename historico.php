<?php
include __DIR__ . "/header.php";
?>

<div class="conteudo-lista">
  <div class="container_historico">
    <div class="row">
      <div class="col-md-12">
        <div class="caixa_historico">
          <div class="input_historico">

            <form action="" id="form">

              <label for="form_funcionario">Funcionário</label>
              <input
                type="text"
                class="form-control"
                id="form_funcionario"
                name="funcionario"
                required />

              <label for="form_matricula">Matrícula</label>
              <input
                type="password"
                class="form-control"
                id="form_matricula" ,
                name="matricula"
                required />


          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div>



        </div>
      </div>
    </div>
  </div>
</div>





<?php
include __DIR__ . "/footer.php";
?>