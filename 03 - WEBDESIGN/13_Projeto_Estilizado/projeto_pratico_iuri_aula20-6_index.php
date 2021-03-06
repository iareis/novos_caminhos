 <!DOCTYPE html>
 <html lang="pt-br">

 <head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <meta name="robots" content="index, follow" />
     <link rel="shortcut icon" href="assets/img/ifto.svg" />
     <link rel="stylesheet" href="assets/css/fonticon.css" />
     <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="assets/styles/boot.css" />
     <link rel="stylesheet" href="assets/styles/style_one.css" />
     <title>Site do Curso</title>
 </head>

 <body>
     <!-- CABEÇALHO -->
     <header class="main_header">
         <div class="main_header_content">
             <a href="#" class="logo">
                 <img src="assets/img/logo.png" alt="logotipo do curso" title="logotipo do curso" width="250" />
             </a>
             <nav class="main_header_content_menu">
                 <ul>
                     <li><a href="#home">Home</a></li>
                     <li><a href="#blog">Blog</a></li>
                     <li><a href="#escola">A Escola</a></li>
                     <li><a href="#contatos">Contato</a></li>
                 </ul>
             </nav>
         </div>
     </header>
     <!-- FIM DO CABEÇALHO -->

     <main>

         <!-- CHAMADA PRINCIPAL -->
         <div class="main_cta">
             <article class="main_cta_content">
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
         </div>
         <!-- FIM DA CHAMADA PRINCIPAL -->

         <!-- ARTIGOS -->
         <section class="main_blog">
             <header class="main_blog_header">
                 <h1 class="icon-blog">
                     Nossos Últimos Artigos:
                 </h1>
                 <p>
                     Aqui você encontra os artigos necessários para auxiliar na
                     sua caminhada na WEB.
                 </p>
             </header>
             <?php for ($i = 0; $i < 12; $i++): ?>
             <article>
                 <a href="#" alt="" title="">
                     <<img src='assets/img/rede_federal2.jpg' alt='Rede Federal' title='Rede Federal'>
                 </a>
                 <p>
                     <a href="" class="category">
                         Categoria
                     </a>
                 </p>
                 <h2>
                     <a href="" class="title">
                         Et eos natus quia vel labore omnis. Nisi occaecati modi
                         saepe est. Et doloremque alias voluptas dicta voluptas.
                         Laudantium at repudiandae ut vero est sunt quibusdam
                         repellendus consectetur. Dolorem debitis pariatur
                         officia saepe. Laudantium est consequatur qui repellat
                         saepe.
                     </a>
                 </h2>
             </article>
             <?php endfor; ?>
         </section>
         <!-- FIM DOS ARTIGOS -->

         <!-- NEWS -->
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
         <!-- FIM DAS NEWS -->

         <!-- SOBRE O CURSO -->
         <section>
             <header>
                 <img src="/assets/img/ifto.svg" alt="logotipo do curso" title="logotipo do curso" width="150" />
                 <h1>Curso de Programação WEB</h1>
                 <p>
                     Aprenda a trabalhar com HTML5 e CSS3 para desenvolver
                     seus projetos e entregar páginas que estejam dentro
                     dos padrões WEB seguindoboas práticas de programação.
                 </p>
             </header>
             <?php
             $vantagens = [
                 "Curso 100% Online",
                 "Suporte Especializado",
                 "As aulas são divididas em Módulos",
                 "Certificado reconhecido em todo o território nacional",
                 "Veja aqui alguns comentários dos nossos alunos",
             ];

             $descricao = [
                 "Todas as aulas são gravadas e focadas na prática",
                 "Este curso possui suporte diretamente com um profissional da nossa equipe oficial",
                 "A modularização que você precisa para compreender de maneira mais objetiva",
                 "Ao concluir o curso você receberá um certificado federal com reconhecimento em todo o território nacional",
                 "Veja o que estão falando sobre o curso",
             ];
             ?>

             <?php for ($i = 0; $i < 4; $i++): ?>
             <article>
                 <header>
                     <h2>
                         <?= $vantagens[$i] ?>
                     </h2>
                 </header>
                 <p>
                     <?= $descricao[$i] ?>
                 </p>
             </article>
             <?php endfor; ?>

             <section>
                 <header>
                     <h2>Veja o que estão falando sobre o curso</h2>
                 </header>
                 <article>
                     <header>
                         <h3>Amadeus Qualquercoisa (Ponto Positivo)</h3>
                         <p>É online.</p>
                     </header>
                 </article>
                 <article>
                     <header>
                         <h3>Arcephalus Moya (Ponto Positivo)</h3>
                         <p>É online.</p>
                     </header>
                 </article>
                 <article>
                     <header>
                         <h3>Jazeiro Boyda (Ponto Positivo)</h3>
                         <p>É online.</p>
                     </header>
                 </article>
             </section>
         </section>
         <!-- FIM SOBRE O CURSO -->

         <!-- A ESCOLA -->
         <section>
             <header>
                 <h1>Bem vindo ao <i>Campus</i> Araguaina - IFTO</h1>
             </header>

             <article>
                 <header>
                     <p>
                         <a href="#">Facebook</a>
                         <a href="#">Intagram</a>
                         <a href="#">Youtube</a>
                     </p>
                     <h2>
                         Tudo o que você precisa para iniciar a sua carreia webmaster Full Stack
                     </h2>
                 </header>
                 <p>
                     Desde 2010 0 <i>Campus</i> Araguaina - IFTO vem ofertando os melhores cursos
                     na área de tecnologia em sua região. Entregamos ao aluno conhecimento prático e
                     testado, sem enrolação.
                 </p>
                 <p>
                     Que tal estudar conesco? E aprender a entregar seus projetos
                     utilizando HTML5 e CSS3 com boas práticas?
                 </p>
             </article>

             <section>
                 <header>
                     <h2>Confira nossos cursos</h2>
                 </header>
                 <?php $cursos = [
                     "Operador de Computador",
                     "Técnico em Biotecnologia",
                     "Técnico em Informática",
                     "Técnico em Análises Clínicas",
                     "Técnico em Enfermagem",
                     "Gestão de Produção Industrial",
                     "Formação Docente em Educação Ambiental de Desenvolvimento Sustentável",
                 ]; ?>

                 <?php foreach ($cursos as $key => $value): ?>
                 <article>
                     <header>
                         <h3>
                             <?= $value ?>
                         </h3>
                     </header>
                 </article>
                 <?php endforeach; ?>

                 <img src="assets/img/logo.png" alt='IFTO' title='IFTO'>
                 <article>
                     <header>
                         <h2>Nos Encontre</h2>
                     </header>
                     <p>
                         Av. Amazonas, esquina com a Av. Paraguai, Quadra S6,
                         Lote 01, Setor Cimba
                     </p>
                 </article>
             </section>
         </section>
         <!-- FIM A ESCOLA -->

         <!-- TUTOR -->
         <section>
             <header>
                 <h1>Conheça Iury Gomes, seu tutor nesse curso</h1>
                 <P>Eu quero te ajudar a criar sua webpage em HTML5 e CSS3</P>
             </header>
             <img src="assets/img/foto.jpeg" alt='Iury Gomes' title='Iury Gomes'>
             <article>
                 <header>
                     <h2>Formado em Ciência da Computação e apaixonado por ERB</h2>
                 </header>
                 <p>
                     Como muito, comecei na programnação por curiosidade!
                     com o tempo, o amor pela programação foi crescendo a
                     ponto de se tornar uma profissão e me especializar na
                     área. Hoje com a bagagem que tenho, compartilho meu
                     conhecimento com todos os alunos que estudam no <i>Campus</i>
                     Araguaina - IFTO.

                 </p>
             </article>
             <section>
                 <header>
                     <h2>Me siga nas redes sociais</h2>
                 </header>

                 <article>
                     <header>
                         <h3><a href="#">Meu Youtube</a></h3>
                     </header>
                 </article>
                 <article>
                     <header>
                         <h3><a href="#">Meu GitHub</a></h3>
                     </header>
                 </article>
                 <article>
                     <header>
                         <h3><a href="#">Meu Linkedin</a></h3>
                     </header>
                 </article>
                 <article>
                     <header>
                         <h3><a href="#">Meu Twitter</a></h3>
                     </header>
                 </article>
             </section>
         </section>
         <!-- FIM TUTOR -->
     </main>

     <!-- ÁREA VIP -->
     <section>
         <header>
             <h1>QUER RECEBER NOSSO CONTEÚDO EXCLUSIVO? Assine nossa área VIP</h1>
         </header>
         <article>
             <header>
                 <h2><a href="#" class='btn'>Entrar para a área VIP</a></h2>
             </header>
         </article>
     </section>
     <!-- FIM ÁREA VIP -->

     <!-- SABER MAIS -->
     <section>
         <header>
             <h1>Quer saber mais?</h1>
         </header>
         <section>
             <header>
                 <h2>Nossa páginas:</h2>
             </header>
             <ul>
                 <li><a href="#">Home</a></li>
                 <li><a href="#">Blog</a></li>
                 <li><a href="#">A Escola</a></li>
                 <li><a href="#">Contato</a></li>
             </ul>
         </section>
         <!--  -->
         <section>
             <header>
                 <h2>Links Úteis:</h2>
             </header>
             <ul>
                 <li><a href="#">Política de Privacidade</a></li>
                 <li><a href="#">Aviso Legal</a></li>
                 <li><a href="#">Termo de Uso</a></li>
             </ul>
         </section>
         <!--  -->
         <section>
             <header>
                 <h2>Sobre o Projeto:</h2>
             </header>
             <p>
                 Et eos natus quia vel labore omnis. Nisi occaecati modi
                 saepe est. Et doloremque alias voluptas dicta voluptas.
                 Laudantium at repudiandae ut vero est sunt quibusdam
                 repellendus consectetur. Dolorem debitis pariatur
                 officia saepe. Laudantium est consequatur qui repellat
                 saepe.
             </p>
         </section>
         <!--  -->
     </section>
     <!-- FIM SABER MAIS -->
     <footer>
         <p>
             &copy; Copyright 2020 - <?= date(
                 'Y'
             ) ?> , <i>Campus</i> Araguaina - IFTO
         </p>
     </footer>

     <script></script>
 </body>

 </html>