<?php
include __DIR__ . "/header.php";
?>
<div class="container1">
<div class="container2">
    <h1>Relatórios</h1>
    <div class="filter-box">
      <button class="filter-button"><img src="assets/images/filtro.png" alt="filtro" width="20px"> Filtros de Pesquisa</button>
      <div class="filters">
        <div class="input-group">
          <label for="nome-visitante">Nome do Visitante</label>
          <select id="nome-visitante">
            <option value="">Selecione</option>
          </select>
        </div>
        <div class="input-group">
          <label for="data-inicial">Data Inicial</label>
          <input type="date" id="data-inicial">
        </div>
        <div class="input-group">
          <label for="data-final">Data Final</label>
          <input type="date" id="data-final">
        </div>
        <div class="input-group">
          <label for="ocorrencia">Ocorrência</label>
          <select id="ocorrencia">
            <option value="entradas">Entradas</option>
            <option value="saidas">Saídas</option>
          </select>
        </div>
        <div class="checkbox-group">
          <input type="checkbox" id="horario">
          <label for="horario">Incluir Horário</label>
        </div>
        <div class="checkbox-group">
          <input type="checkbox" id="total-ocorrencias">
          <label for="total-ocorrencias">Total de Ocorrências</label>
        </div>
        <div class="buttons">
          <button class="btn limpar">Limpar</button>
          <button class="btn pesquisar">Pesquisar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include __DIR__ . "/footer.php";
?>