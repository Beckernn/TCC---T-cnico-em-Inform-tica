<?php
$faculdades = [
    ["nome" => "UFRGS", "cidade" => "Porto Alegre", "site" => "https://www.ufrgs.br"],
    ["nome" => "UFPel", "cidade" => "Pelotas", "site" => "https://www.ufpel.edu.br"],
    ["nome" => "FURG", "cidade" => "Rio Grande", "site" => "https://www.furg.br"],
    ["nome" => "UFSM", "cidade" => "Santa Maria", "site" => "https://www.ufsm.br"],
    ["nome" => "Unipampa", "cidade" => "Várias Cidades", "site" => "https://www.unipampa.edu.br"],
    ["nome" => "UFFS", "cidade" => "Cerro Largo, Erechim, Chapecó, Laranjeiras do Sul, Realeza, Passo Fundo", "site" => "https://www.uffs.edu.br"],
    ["nome" => "UERGS", "cidade" => "Várias Cidades", "site" => "https://www.uergs.edu.br"],
    ["nome" => "PUCRS", "cidade" => "Porto Alegre", "site" => "https://www.pucrs.br"],
    ["nome" => "Unisinos", "cidade" => "São Leopoldo", "site" => "https://www.unisinos.br"],
    ["nome" => "UCS", "cidade" => "Caxias do Sul", "site" => "https://www.ucs.br"],
    ["nome" => "UNISC", "cidade" => "Santa Cruz do Sul", "site" => "https://www.unisc.br"],
    ["nome" => "Univates", "cidade" => "Lajeado", "site" => "https://www.univates.br"],
    ["nome" => "UNIFRA", "cidade" => "Santa Maria", "site" => "https://www.unifra.edu.br"],
    ["nome" => "Feevale", "cidade" => "Novo Hamburgo", "site" => "https://www.feevale.br"],
    ["nome" => "UPF", "cidade" => "Passo Fundo", "site" => "https://www.upf.br"],
    ["nome" => "UNICRUZ", "cidade" => "Cruz Alta", "site" => "https://www.unicruz.edu.br"],
    ["nome" => "URI", "cidade" => "Erechim", "site" => "https://www.uri.edu.br"],
    ["nome" => "UNIJUÍ", "cidade" => "Ijuí", "site" => "https://www.unijui.edu.br"],
    ["nome" => "URCAMP", "cidade" => "Bagé", "site" => "https://www.urcamp.edu.br"],
    ["nome" => "Unilasalle", "cidade" => "Canoas", "site" => "https://www.unilasalle.edu.br"],
    ["nome" => "São Judas", "cidade" => "Porto Alegre", "site" => "https://www.sjtpoa.edu.br"],
    ["nome" => "EST", "cidade" => "São Leopoldo", "site" => "https://www.est.edu.br"],
    ["nome" => "FACCAT", "cidade" => "Taquara", "site" => "https://www.faccat.br"],
    ["nome" => "CNEC Farroupilha", "cidade" => "Farroupilha", "site" => "http://faculdadefarroupilha.cnec.br/"],
    ["nome" => "CNEC Santo Ângelo", "cidade" => "Santo Ângelo", "site" => "http://educacaosuperior.cnec.br/santoangelo"],
    ["nome" => "CNEC", "cidade" => "Vários municípios", "site" => "https://www.cnec.br/"],
    ["nome" => "IDEAU", "cidade" => "Getúlio Vargas, Bagé, Caxias do Sul, Passo Fundo", "site" => "https://www.ideau.edu.br"],
    ["nome" => "ESPM", "cidade" => "Porto Alegre", "site" => "https://www.espm.br"],
    ["nome" => "IFRS", "cidade" => "Várias Cidades", "site" => "https://www.ifrs.edu.br"],
    ["nome" => "IFSUL", "cidade" => "Várias Cidades", "site" => "https://www.ifsul.edu.br"],
    ["nome" => "IFFarroupilha", "cidade" => "Várias Cidades", "site" => "https://www.farroupilha.ifrs.edu.br"],
    ["nome" => "ULBRA", "cidade" => "Canoas, Gravataí, Cachoeira do Sul, Caxias do Sul", "site" => "https://www.ulbra.br"],
    ["nome" => "UNIRITTER", "cidade" => "Porto Alegre, Canoas", "site" => "https://www.uniritter.edu.br"],
    ["nome" => "UCPel", "cidade" => "Pelotas", "site" => "https://www.ucpel.edu.br"],
    ["nome" => "IPA", "cidade" => "Porto Alegre", "site" => "https://www.ipa.edu.br"],
    ["nome" => "SENAC RS", "cidade" => "Porto Alegre, Passo Fundo, Pelotas", "site" => "https://rs.senac.br"],
    ["nome" => "IMED", "cidade" => "Passo Fundo", "site" => "https://www.imed.edu.br"],
    ["nome" => "FADERGS", "cidade" => "Porto Alegre", "site" => "https://www.fadergs.edu.br"],
    ["nome" => "SENAI RS", "cidade" => "Vários municípios", "site" => "https://www.senairs.org.br"],
    ["nome" => "Estácio", "cidade" => "Porto Alegre, Canoas, Vários", "site" => "https://www.estacio.br"],
    ["nome" => "Anhanguera", "cidade" => "Diversas cidades no Brasil", "site" => "https://www.anhanguera.com"],
    ["nome" => "Unopar", "cidade" => "Diversas cidades no Brasil", "site" => "https://www.unopar.br"],
    ["nome" => "Unicesumar", "cidade" => "Diversas cidades no Brasil", "site" => "https://www.unicesumar.edu.br"],
];

$resultados = $faculdades;
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $cidadeBusca = isset($_GET['cidade']) ? strtolower(trim($_GET['cidade'])) : "";
    $faculBusca = isset($_GET['faculdade']) ? strtolower(trim($_GET['faculdade'])) : "";

    $resultados = array_filter($faculdades, function ($facul) use ($cidadeBusca, $faculBusca) {
        $matchCidade = empty($cidadeBusca) || strpos(strtolower($facul["cidade"]), $cidadeBusca) !== false;
        $matchFacul = empty($faculBusca) || strpos(strtolower($facul["nome"]), $faculBusca) !== false;
        return $matchCidade && $matchFacul;
    });
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Explorar Faculdades - RS</title>
    <link rel="stylesheet" href="style_explorar2.css">
</head>
<body>

<header>
    <div class="logo">
        <img src="../imagens/logo.png" alt="Logo">
        <h1>Facul + RS</h1>
    </div>
    <nav>
        <a href="../index.php">Início</a>
        <a href="../index.php#oque">O que é</a>
        <a href="../index.php#como">Causas</a>
    </nav>
</header>
        <main>
<section class="busca">
    <h2>Encontre sua Faculdade</h2>
    <form method="GET" action="">
        <input type="text" name="cidade" placeholder="Digite sua cidade (opcional)" value="<?php echo isset($_GET['cidade']) ? htmlspecialchars($_GET['cidade']) : ''; ?>">
        <input type="text" name="faculdade" placeholder="Digite o nome da faculdade" value="<?php echo isset($_GET['faculdade']) ? htmlspecialchars($_GET['faculdade']) : ''; ?>">
        <button type="submit">Buscar</button>
    </form>
</section>

<section class="lista-faculdades">
    <?php if (empty($resultados)) : ?>
        <p class="nenhum-resultado">Nenhuma faculdade encontrada para sua busca.</p>
    <?php else : ?>
        <?php foreach ($resultados as $facul): ?>
            <div class="card">
                <h3><?php echo htmlspecialchars($facul["nome"]); ?></h3>
                <p><?php echo htmlspecialchars($facul["cidade"]); ?></p>
                <a href="<?php echo htmlspecialchars($facul["site"]); ?>" target="_blank">Visitar Site</a>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</section>
        </main>
<section class="info">

<footer>
    <p>&copy; 2025 - Projeto Acadêmico sobre Evasão Escolar | Desenvolvido por Felipe Becker</p>
</footer>

</body>
</html>