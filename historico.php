<?php
include __DIR__ . "/header.php";
?>

<div class="conteudo-lista">
  <div class="row">
    <div class="col-md-12">
      <div class="container_historico">
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
    </div>
    <div class="col-md-12">
      <div class="container_historico">
        <table>
        
         <thead>
           <tr>
             <th>Cod.</th>
             <th>Nome do Aluno/Funcionário</th>
             <th>Data da Entrada</th>
             <th>Horário da Entrada</th>
             <th>Horário da Saída</th>
           </tr>
         </thead>
        
         <tbody>
           <tr>
             <td>01</td>
             <td>DAVI CÉSAR PEDRO FÁRIAS</td>
             <td>15/06/2024</td>
             <td>16:36</td>
             <td>21:42</td>
           </tr>
           <tr>
             <td>02</td>
             <td>EDUARDO SEVERINO DA CONCEIÇÃO</td>
             <td>15/06/2024</td>
             <td>16:58</td>
             <td>21:50</td>
           </tr>
           <tr>
             <td>03</td>
             <td>GIOVANNA CECÍLIA NUNES</td>
             <td>15/06/2024</td>
             <td>19:01</td>
             <td>22:03</td>
           </tr>
           </tbody>
      
        </table>
        </div>
      </div>
    </div>
  </div>
</div>





<?php
include __DIR__ . "/footer.php";
?>