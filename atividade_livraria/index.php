<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Livre</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/d75179a710.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <h2>Livraria Livre</h2>
    </header>

    <main>
        <h1>Lançamentos</h1>

        <div class="produtos">


            <?php
            $livros = [
                1 => [
                    'imagem' => 'imgs/978-65-5921-136-4.jpg',
                    'id_imagem' => '978-65-5921-136-4',
                    'titulo' => 'Domingos Sondré, Um Sacerdote Africano',
                    'Autor(a)' => 'João José Reis',
                    'sobre' => 'Seguindo as pistas encontradas em variada documentação, o livro
                    traça a biografi de um africano liberto que circula na Bahia do século XIX e 
                    examina seus múltiplos papéis ao...',
                    'preco' => 124.9,
                    'n_paginas' => 488,
                    'formato' => 'Impresso'
                ],

                2 => [
                    'imagem' => 'imgs/978-85-3593-785-5.jpg',
                    'id_imagem' => '978-85-3593-785-5',
                    'titulo' => 'Imagens da Branquitude',
                    'Autor(a)' => 'Lilia Motriz Schwarcz',
                    'sobre' => 'Em livro precio, Lilia Motriz Schwarcz analisa
                    o fenômeno social e cultural da branquitude a partir de suas
                    manifestações simbólicas e econográficas.',
                    'preco' => 99.9,
                    'n_paginas' => 432,
                    'formato' => 'eBook'
                ],

                3 => [
                    'imagem' => 'imgs/978-85-8285-198-2.jpg',
                    'id_imagem' => '978-85-8285-198-2',
                    'titulo' => 'Três vidas',
                    'Autor(a)' => 'Gertrude Stein Trad.: Vanessa Barbara',
                    'sobre' => 'Uma das autoras  mais importantes do modernismo,
                    Gertrude Stein ficou conhecida por questionar os fundamentos básicos
                    da narrativa realista e experimentar com os limit...',
                    'preco' => 59.9,
                    'n_paginas' => 240,
                    'formato' => 'Impresso/eBook'
                ],

                4 => [
                    'imagem' => 'imgs/978-85-3593-771-8.jpg',
                    'id_imagem' => '978-85-3593-771-8',
                    'titulo' => 'Pura Cor',
                    'Autor(a)' => 'Sheila Heti Trad.: Bruna Beber',
                    'sobre' => 'Pura cor oferece um mergulho na beleza  da imperfeição,
                    explorando os limites do indizível. Espirituosa e comovente, a escrita 
                    de Sheila Heti reflete sobre o que constitui as...',
                    'preco' => 79.9,
                    'n_paginas' => 232,
                    'formato' => 'eBook'
                ],

                5 => [
                    'imagem' => 'imgs/978-65-5424-023-9.jpg',
                    'id_imagem' => '978-65-5424-023-9',
                    'titulo' => 'A Essência de Empreender ',
                    'Autor(a)' => 'Miguel Krigsner',
                    'sobre' => 'A inspiradora jornada de empresário que transformou uma
                    pequena farmácia de manipulação em Curitiba no Grupo Boticário -- com cerca
                    3, 7 mil lojas no Brasil e presente em...',
                    'preco' => 69.9,
                    'n_paginas' => 144,
                    'formato' => 'Impresso'
                ],

            ];

            foreach ($livros as $valor) {
                echo '<div class="produto">';
                echo '<img src="' . $valor['imagem'] . '"' . ' widht="300" height="300" class="capa" rel="Imagem do livro">';
                echo '<p class="isbn">' . $valor['id_imagem'] . '</p>';
                echo '<h2>' . $valor['titulo'] . '</h2>';
                echo '<p class="autor">' . $valor['Autor(a)'] . '</p>';
                echo '<p class="apresentacao">' . $valor['sobre'] . '</p>';
                echo '<p class="detalhes">' . 'Detalhes' . '</p>';
                echo '<p class="preco">' . 'R$ ' . $valor['preco'] . '</p>';
                echo '<p class="paginas">' . $valor['n_paginas'] . ' páginas' . '</p>';
                echo '<p class="formato">' . 'Formato: ' . $valor['formato'] . '</p>';
                echo '</div>';
            }


            ?>
        </div>  
    </main>

    <footer>
        <p>&copy; 2024</p>
    </footer>
</body>

</html>