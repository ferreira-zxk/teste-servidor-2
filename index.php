    <?php
    $usuario = isset($_GET['nome']) ? htmlspecialchars($_GET['nome']) : "Visitante"; 
    $horaAtual = date("H:i");
    $diaSemana = date("l");

   $materias = [
    "Matematica" => "A Matemática é a área do conhecimento que estuda números, cálculos e raciocínio lógico. Ela está presente no nosso dia a dia, sendo usada em situações como compras, medições, organização financeira e resolução de problemas. Seus principais conteúdos incluem álgebra, geometria e aritmética.",

    "Historia" => "A História é a disciplina que estuda os acontecimentos do passado da humanidade. Por meio dela, entendemos como as sociedades evoluíram, analisando culturas, guerras, descobertas e transformações sociais ao longo do tempo. Ela é essencial para compreender o presente e construir o futuro.",

    "Geografia" => "A Geografia estuda o espaço geográfico e a relação entre o ser humano e o meio ambiente. Ela aborda temas como clima, relevo, vegetação, população e urbanização. Essa matéria ajuda a entender como o mundo é organizado e como as atividades humanas impactam o planeta.",
];

    $temaSelecionado =isset($_GET['tema']) ? $_GET['tema'] : null;
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Página Dinâmica PHP</title>
    <style>
        body { 
                font-family: sans-serif; 
                line-height: 1.6; 
                padding: 20px; 
                background: #f3e8ff;
            }
        .card { 
            background: #6a0dad; 
            padding: 20px; 
            border-radius: 8px; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .btn { 
            display: inline-block; 
            padding: 10px 15px; 
            background: #4b0082;; 
            color: white; 
            text-decoration: none; 
            border-radius: 5px;
        }

        .btn:hover {
        background: #5d1aa3;
        transform: scale(1.05);
       }
        .destaque { 
            color: #ffcc00; 
            font-weight: bold;
        }

        h1, h2, h3 {
        margin-bottom: 10px;
       }

        nav {
        margin-top: 10px;
       }

        hr {
        border: none;
        height: 1px;
        background: rgba(255,255,255,0.3);
        margin: 15px 0;
        }
  </style>
<body>
    <div class="card">
        <h1>Olá, <?php echo $usuario; ?> </h1>
        <p>Hoje é <span class="destaque"><?php echo $diaSemana; ?></span>, e agora são <?php echo $horaAtual; ?>.</p>

        <hr>

        <h3>Explore os conteúdos:</h3>

        <nav>
            <a href="?tema=Matematica&nome=<?php echo $usuario; ?>" class="btn">Matemática</a>
            <a href="?tema=Historia&nome=<?php echo $usuario; ?>" class="btn">História</a>
            <a href="?tema=Geografia&nome=<?php echo $usuario; ?>" class="btn">Geografia</a>
        </nav>

        <section style="margin-top: 20px;">
            <?php if ($temaSelecionado && array_key_exists($temaSelecionado, $materias)): ?>
                <h2>Conteúdo de <?php echo $temaSelecionado; ?></h2>
                <p><?php echo $materias[$temaSelecionado]; ?></p>
            <?php else: ?>
                <p>Selecione um tema acima para carregar as informações dinamicamente.</p>
            <?php endif; ?>
        </section>
    </div>
</body>
<footer style="margin-top: 20px; font-size: 14px; text-align: center;">
    <p>© 2026 - Página de Estudos</p>
</footer>
</html> 