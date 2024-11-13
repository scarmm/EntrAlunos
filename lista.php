<?php
include __DIR__ . "/header.php";
?>

<div class="conteudo-lista">
    <div class="container5">
        <h1>Usuários</h1>
        <div class="search-bar">
            <input type="text" placeholder="Pesquisar">
            <button type="button">🔍</button>
        </div>

        <table class="user-table">
            <thead>
                <tr>
                    <th>Nome</th>
                </tr>
            </thead>
            <tbody>
                <!-- Exemplo de dados -->
                <tr>
                    <td>DAVI CÉSAR PEDRO FARIAS</td>
                </tr>
                <tr>
                    <td>EDUARDO SEVERINO DA CONCEIÇÃO</td>
                </tr>
                <tr>
                    <td>GIOVANNA CECÍLIA NUNES</td>
                </tr>
                <tr>
                    <td>MARIA ADRIANA LORENA CARDOSO</td>
                </tr>
                <tr>
                    <td>MÁRCIO CALEB MURILO BERNARDES</td>
                </tr>
                <tr>
                    <td>NOAH RYAN LEONARDO CAVALCANTI</td>
                </tr>
            </tbody>
        </table>

        <div class="pagination">
            <span>Resultados 1 a 6 de 4.213</span>
            <label for="show-count">Exibir</label>
            <input type="number" id="show-count" value="6">
            <div class="pagination-controls">
                <button>«</button>
                <button class="active">1</button>
                <button>2</button>
                <button>3</button>
                <button>4</button>
                <button>»</button>
            </div>
        </div>
    </div>
</div>
<?php
include __DIR__ . "/footer.php";
?>