<?php
include __DIR__ . "/header.php";
?>

<body>
    <form action="">
        <h1>Faça o seu login</h1>
        <label for="email">Seu e-mail*</label>
        <input type="email" id="email" />
        <label for="password">Sua senha*</label>
        <input type="password" id="password" />
        <input type="checkbox" />
        <p>Lembrar-me</p>
        <button>Entrar</button>
        <p>
            Esqueceu sua senha?
            <a href="https://www.com/">Clique aqui!</a>
        </p>
    </form>
</body>

<?php
include __DIR__ . "/footer.php";
?>