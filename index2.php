<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<header class="topo">
        <div class="limitador">
            <h1 class="titulo"><img src="imagens/2_irmãos-removebg-preview.png" alt=""></a></h1>
            <nav class="menu">
            <h2 class="titulo-menu"><a href="">Menu &equiv; </a></h2>
                <ul class="links-menu">
                    <li><a href="#" data-target="home">Home</a></li>
                    <li><a href="#" data-target="servicos">Serviços</a></li>
                    <li><a href="#" data-target="contato">Contato</a></li>
                </ul>
            </nav>
        </div>
        <article>

            <section class="login-register">
                <div class="login">
                    <div class="login-register-buttons">
                        <a href="login.php" class="button">Login</a>
                    </div>
                </div>
            </section>
        </article>
    </header>



    

    <main class="conteudo">
        <section id="home">

            <article class="banner">
                <div class="banner-content destaque ">
                    <h2>Bem-vindooooooooooo à Barbearia Two Brothers</h2>
                    <p>Seu estilo, nossa paixão.</p>
                    <a href="login.php" class="button ">Agende seu horário</a>
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
        </section>

        <article class="fundo-card  ">
            <section id="servicos">

                <section class="servicos limitador"> <!-- Use <section> instead of <div> -->
                    <h2>Nossos Serviços</h2>

                    <div class="cards-container">

                        <article class="card">
                            <img src="imagens/corte.jpg" alt="Corte Masculino">
                            <h3>Corte Masculino</h3>
                            <p>R$ 30,00</p>
                            <a href="login.php"><button href="login.php" class="button ">Agendar seu horário</button></a>

                        </article>
                        <article class="card ">
                            <img src="imagens/corte-barba.jpg" alt="Corte + Barba">
                            <h3>Corte + Barba</h3>
                            <p>R$ 40,00</p>
                            <a href="login.php"><button href="login.php" class="button ">Agendar seu horário</button></a>
                        </article>
                        <article class="card">
                            <img src="imagens/barba.jpg" alt="Barba">
                            <h3>Barba</h3>
                            <p>R$ 15,00</p>
                            <a href="login.php"><button href="login.php" class="button ">Agendar seu horário</button></a>
                        </article>
                        <article class="card">
                            <img src="imagens/design mais barba.jpg" alt="Barba + Design">
                            <h3>Barba + Design</h3>
                            <p>R$ 25,00</p>
                            <a href="login.php"><button href="login.php" class="button ">Agendar seu horário</button></a>
                        </article>
                        <article class="card">
                            <img src="imagens/limpeza de sobrancelha.jpg" alt="Limpeza Sobrancelha">
                            <h3>Limpeza Sobrancelha</h3>
                            <p>R$ 15,00</p>
                            <a href="login.php"><button href="login.php" class="button ">Agendar seu horário</button></a>
                        </article>
                        <!-- Add more cards as needed -->
                    </div>
                </section>
            </section>
        </article>

        <section class="client-comments">
            <h2 style="color: black;" class="comment-title">Comentários do Cliente</h2>
            <div class="comment-cards">
                <article class="card">
                    <p style="color: black;">"Experiência incrível na #BarbeariaTwoBrothers! O @BarberIgor me deixou com
                        um visual totalmente novo e me deu várias dicas de como cuidar do meu cabelo. Com certeza
                        voltarei mais vezes."</p>
                    <p class="client-name">@Carlos Souza</p>
                    <p class="hashtags">#Corte#Barba#Sobrancelha</p>
                </article>
                <article class="card">

                    <p style="color: black;">"O atendimento da #BarbeariaTwoBrothers é simplesmente impecável! Os
                        barbeiros são super atenciosos e fazem a gente se sentir em casa. Além disso, a experiência
                        completa, com um cafézinho e boa música, é o toque final perfeito!"</p>
                    <p class="client-name">@Bruno Henrique</p>
                    <p class="hashtags">#Corte#Barba</p>
                </article>
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
        <?php
        require 'contato.php';

        ?>
    </main>
</body>
</html>