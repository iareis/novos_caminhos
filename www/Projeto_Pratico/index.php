<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow" />
    <link rel="shortcut icon" href="" />
    <link rel="stylesheet" href="" />
    <title>Site do Curso Programador WEB</title>
</head>

<body>
    <!-- CABEÇALHO -->
    <header>
        <a href="#">
            <img src="/assets/img/ifto.svg" alt="logotipo do curso" title="logotipo do curso" />
        </a>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#escola">A Escola</a></li>
                <li><a href="#contatos">Contato</a></li>
                <li><a href="/novos_caminhos_iuri/www/Avaliacao3/index.php">Avaliação 3</a></li>
                <li><a href="/novos_caminhos_iuri/www/Projeto_Pratico/index.php">Projeto Pático</a></li>
                <li><a href="/novos_caminhos_iuri/www/testesIuri/readtesteiar.php">Redes Sociais</a></li>
            </ul>
        </nav>
    </header>
    <!-- FIM DO CABEÇALHO -->

    <main>

        <!-- CHAMADA PRINCIPAL -->
        <article>
            <header>
                <h1>
                    Aqui você aprende o essencial para trabalhar como
                    Webmaster Fullstack
                </h1>
                <p>Estude o HTML 5 e o CSS 3 na disciplina de webdesign</p>
                <p>
                    <a href="#" class="btn">Saiba mais</a>
                </p>
            </header>
        </article>
        <!-- FIM DA CHAMADA PRINCIPAL -->
        <section>
            <header>
                <h1>Nossos Últimos Artigos:</h1>
            </header>
            <p>
                Aqui você encontra os artigos necessários para auxiliar na
                sua caminhada na WEB.
            </p>
            <?php for ($i = 0; $i < 12; $i++): ?>
            <article>
                <a href="" alt="" title=""></a>
                <p>Categoria</p>
                <h2>
                    Et eos natus quia vel labore omnis. Nisi occaecati modi
                    saepe est. Et doloremque alias voluptas dicta voluptas.
                    Laudantium at repudiandae ut vero est sunt quibusdam
                    repellendus consectetur. Dolorem debitis pariatur
                    officia saepe. Laudantium est consequatur qui repellat
                    saepe.
                </h2>
            </article>
            <?php endfor; ?>
        </section>
        <article>
            <header>
                <h1>Quer receber todas as novidades em seu e-mail ?</h1>
                <p>
                    Informe seu nome e e-mail no campo ao lado e clique em
                    OK !
                </p>
            </header>
            <form action="" method="post">
                <input type="text" name="nome" placeholder="Seu nome" required>
                <input type="email" name="email" placeholder="Seu e-mail" required>
                <button type="submit">OK !</button>
            </form>
        </article>

        <section>
            <header>
                <h1></h1>
            </header>
        </section>

    </main>
    <footer></footer>

    <script></script>
</body>

</html>