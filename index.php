<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Evasão Escolar - Site Informativo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="logo">
        <img src="logo.png">
        <h1>Facul + RS</h1>
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="#oque">O que é</a></li>
            <li><a href="#como">Causas</a></li>
            <li><a href="#solucao">Soluções</a></li>
        </ul>
    </nav>
</header>

<section class="principal">
    <div class="principal-conteudo">
        <div class="principal-texto">
            <h2>A evasão escolar é um desafio que podemos vencer juntos!</h2>
            <p class="textinho">A educação é a chave para transformar vidas, criar oportunidades e construir um futuro melhor.</p>
            
            <ul class="lista-massa">
                <li>📚 Mais oportunidades de estudo</li>
                <li>💼 Preparação para o mercado de trabalho</li>
                <li>🌍 Impacto positivo na sociedade</li>
            </ul>

            <a href="explorar/explorar_faculdades.php" class="btn btn-gradient">Explorar Faculdades</a>
        </div>

        <div class="principal-imagem">
            <img src="real_gaucho.png">
        </div>
    </div>
</section>

<main>
 
    <section id="oque" class="section secao-azul">
        <h2>O que é evasão escolar?</h2>
        <p>A evasão escolar acontece quando estudantes deixam de frequentar a intituição de ensino na qual estão matriculadas, antes de concluir a etapa de ensino. 
        Esse fenômeno compromete a formação individual, reduz oportunidades de trabalho e impacta o desenvolvimento social e econômico do país.</p>
    </section>


    <section id="como" class="section secao-cinza">
        <h2>Principais Causas da Evasão Escolar</h2>
        <div class="cartoes">
            <div class="card card-red">
                <h3>Dificuldades financeiras</h3>
                <p>Muitos estudantes precisam trabalhar cedo e abandonam os estudos.</p>
            </div>
            <div class="card card-orange">
                <h3>Desmotivação</h3>
                <p>A falta de incentivo e de identificação com os conteúdos escolares desestimula a permanência.</p>
            </div>
            <div class="card card-green">
                <h3>Falta de estrutura</h3>
                <p>Escolas com pouca infraestrutura e recursos contribuem para o abandono.</p>
            </div>
            <div class="card card-purple">
                <h3>Problemas pessoais</h3>
                <p>Questões familiares ou sociais interferem no aprendizado e continuidade escolar.</p>
            </div>
        </div>
    </section>

    <section class="section dados">
    <h2>Por que precisamos agir?</h2>
    <div class="dados-caixa">
        <div class="stat dado-azul"><strong>24%</strong><p>dos jovens abandonam o ensino médio</p></div>
        <div class="stat dado-vermelho"><strong>50%</strong><p>dos universitários não concluem o curso</p></div>
        <div class="stat dado-verde"><strong>1,3 milhão</strong><p>fora da escola (IBGE)</p></div>
    </div>
</section>

   <section id="solucao" class="section secao-amarela">
    <h2>Construindo soluções</h2>
    <p>Uma forma de combater a evasão escolar é oferecer acesso a oportunidades e informações. 
    Por isso, criamos uma ferramenta de busca universidades no Rio Grande do Sul, para auxiliar estudantes que não tem ideia de como entrar em uma faculdade, ou 
    qual faculdade é mais acessivel para a região que ele mora. Aqui também temos informações sobre como entrar em uma faculdade e pequenos textos sobre oque cada 
    curso aborda</p><br>

    <div class="botoes-container">
        <a class="btn-gradient" href="explorar/explorar_faculdades.php">Explorar Faculdades</a>
        <a class="btn-gradient" href="informacao/informacoes.html">Informações Adicionais</a>
    </div>
</section>
</main>

<footer>
    <p>&copy; 2025 - Projeto Acadêmico sobre Evasão Escolar | Desenvolvido por Felipe Becker</p>
</footer>

</body>
</html>