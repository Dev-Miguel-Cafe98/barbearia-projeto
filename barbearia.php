<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia TWO BROTHERS</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header class="topo">
        <div class="limitador">
            <h1 class="titulo"><img src="imagens/2_irmãos-removebg-preview.png" alt=""></h1>
            <nav class="menu">
                <h2 class="titulo-menu"><a href="">Menu &equiv; </a></h2>
                <ul class="links-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="produtos.php">Produtos</a></li>
                    <li><a href="servicos.php">Serviços</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="conteudo">
        <article class="banner">
            <div class="banner-content destaque ">
                <h2>Bem-vindo à Barbearia Two Brothers</h2>
                <p>Seu estilo, nossa paixão.</p>
                <a href="#" class="button ">Agende seu horário</a>
            </div>
        </article>

        <div class="missao-container">
            <article class="missao limitador">
                <p>"Experimente a sensação de um cuidado especial na Barbearia Two Brothers.
                    Nosso compromisso é proporcionar um momento de relaxamento e bem-estar, onde você pode cuidar de si
                    mesmo enquanto desfruta de um serviço de qualidade. Com profissionais altamente qualificados e um
                    ambiente moderno, oferecemos uma ampla gama de serviços para atender às suas necessidades."</p>
            </article>
        </div>
        <article class="fundo-card  ">
            <section class="servicos limitador"> 
                <h2>Nossos Serviços</h2>

                <div class="cards-container">

                    <?php
                    $servicos = array(
                        array("imagem" => "imagens/corte.jpg", "titulo" => "Corte Moderno", "preco" => "R$ 30,00"),
                        array("imagem" => "imagens/corte-barba.jpg", "titulo" => "Corte + Barba", "preco" => "R$ 40,00"),
                        array("imagem" => "imagens/barba.jpg", "titulo" => "Barba", "preco" => "R$ 30,00")
                        // Add more services as needed
                    );

                    foreach ($servicos as $servico) {
                        echo '<article class="card">';
                        echo '<img src="' . $servico['imagem'] . '" alt="' . $servico['titulo'] . '">';
                        echo '<h3>' . $servico['titulo'] . '</h3>';
                        echo '<p>' . $servico['preco'] . '</p>';
                        echo '<button>Agendar horário</button>';
                        echo '</article>';
                    }
                    ?>
                </div>
            </section>
        </article>

        <section class="client-comments">
            <h2 class="comment-title">Comentários do Cliente</h2>
            <div class="comment-cards">
            <?php
            $comentarios = array(
                array(
                    "texto" => '"Experiência incrível na #BarbeariaTwoBrothers! O @BarberIgor me deixou com
                        um visual totalmente novo e me deu várias dicas de como cuidar do meu cabelo. Com certeza
                        voltarei mais vezes."',
                    "nome" => "@Carlos Souza",
                    "hashtags" => "#Corte#Barba#Sobrancelha"
                ),
                array(
                    "texto" => '"O atendimento da #BarbeariaTwoBrothers é simplesmente impecável! Os
                        barbeiros são super atenciosos e fazem a gente se sentir em casa. Além disso, a experiência
                        completa, com um cafézinho e boa música, é o toque final perfeito!"',
                    "nome" => "@Bruno Henrique",
                    "hashtags" => "#Corte#Barba"
                )
                 // Add more comments as needed
            );


            foreach ($comentarios as $comentario) {
                echo '<article class="card">';
                echo '<p style="color: black;">' . $comentario['texto'] . '</p>';
                echo '<p class="client-name">' . $comentario['nome'] . '</p>';
                echo '<p class="hashtags">' . $comentario['hashtags']. '</p>';
                echo '</article>';

            }

            ?>

            </div>
        </section>



        <article class="rodape-container limitador ">
            <figure><img src="imagens/2_irmãos-removebg-preview.png" alt=""></figure>
            <p> Você
                encontra o melhor da barbearia tradicional
                e moderna, com serviços de alta qualidade
                para cuidar do seu Visual.
            </p>
            <p>Experimente um ambiente acolhedor e um
                atendimento exclusivo.</p>

        </article>

        <article class="localizacao">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.9210509818345!2d-46.68051112570856!3d-23.678781165914483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4ffd74d8dc19%3A0x962142e96bdfc59a!2sR.%20C%C3%A9sar%20Marengo%2C%20325%20-%20Vila%20Campo%20Grande%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2004455-220!5e0!3m2!1spt-BR!2sbr!4v1732162703342!5m2!1spt-BR!2sbr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </article>
    </main>

    <footer class="rodape">
        <article class="contact-info ">
            <p>Barbearia Two Brothers</p>
            <p>Rua César Marengo, 325 - Campo Grande, São Paulo - SP, 04455-220</p>
            <p>Telefone: (11) 96186-8302</p>
            <p class="copyright">&copy; 2024 Barbearia Two Brothers. Todos os direitos reservados.</p>

        </article>

            
        <div class="social-media">
            <a href=""><wow-image id="img_comp-lf9wa09n" class="HlRz5e BI8PVQ"
                    data-image-info="{&quot;containerId&quot;:&quot;comp-lf9wa09n&quot;,&quot;displayMode&quot;:&quot;fill&quot;,&quot;targetWidth&quot;:71,&quot;targetHeight&quot;:66,&quot;isLQIP&quot;:false,&quot;encoding&quot;:&quot;AVIF&quot;,&quot;imageData&quot;:{&quot;width&quot;:400,&quot;height&quot;:400,&quot;uri&quot;:&quot;fc962d_dbe051afca5641fa8237dc9a7b5cec43~mv2.gif&quot;,&quot;name&quot;:&quot;372108180_WHATSAPP_ICON_400.gif&quot;,&quot;displayMode&quot;:&quot;fill&quot;}}"
                    data-motion-part="BG_IMG" data-bg-effect-name="" data-has-ssr-src=""
                    style="--wix-img-max-width:max(400px, 100%)"><img
                        src="https://static.wixstatic.com/media/fc962d_dbe051afca5641fa8237dc9a7b5cec43~mv2.gif"
                        alt="Whatsapp Barbearia Two Brothers" style="width:71px;height:66px;object-fit:cover" width="71"
                        height="66"
                        srcset="https://https://static.wixstatic.com.com/media/fc962d_dbe051afca5641fa8237dc9a7b5cec43~mv2.gif 1x, https://static.wixstatic.com/media/fc962d_dbe051afca5641fa8237dc9a7b5cec43~mv2.gif 2x"
                        fetchpriority="low" loading="lazy" decoding="async"></wow-image></a>
        </div>
    </footer>

    <script src="js/menu.js"></script>
</body>

</html>

