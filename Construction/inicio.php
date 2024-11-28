
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nithel Construction</title>
    <link rel="stylesheet" href="./style.css">
    <!--=============== Boxicoins ===============-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>  
    <!-- Swipers CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />  
</head>
<body>
    
<!--==================== Header ====================-->
<header class="header" id="header">
    <nav class="nav container">
        <a href="#" class="nav__logo">
            Nithel Construction<i class='bx bxs-home-alt-2'></i>
        </a>
        <div class="nav__menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#home" class="nav__link activate-link">
                        <i class='bx bx-home-alt-2'></i>
                        <span>Início</span>
                    </a>
                </li>    

                <li class="nav__item">
                    <a href="#popular" class="nav__link">
                        <i class='bx bx-building-house' ></i>
                        <span>Imóveis</span>
                    </a>
                </li>    

                <li class="nav__item">
                    <a href="#value" class="nav__link">
                        <i class='bx bx-award' ></i>
                        <span>Valores</span>
                    </a>
                </li>   

                <li class="nav__item">
                    <a href="#contact" class="nav__link">
                        <i class='bx bx-phone'></i>
                        <span>Contato</span>
                    </a>
                </li>    

                <li class="nav__item">
                    <a href="agendamento.php" class="nav__link">
                        <i class='bx bx-phone'></i>
                        <span>Agendamentos</span>
                    </a>
                </li> 

                <li class="nav__item">
                <a href="logout.php" class="nav__link">
    <i class='bx bx-home-alt-2'></i>
    <span>Desconectar</span>
</a>

                </li>    
            </ul>
        </div> 
    </nav>       
</header>



<!--==================== Home ====================-->
<main class="main">
    <section class="home section" id="home">
       <div class="home__container container grid">
            <div class="home__data">
                <h1 class="home__title">
                    Descubra <br> os melhores <br> apartamentos na planta
                </h1>
                <p class="home__description">
                    Encontre o imóvel dos seus sonhos com todas as informações necessárias em um só lugar.
                </p>

                <div class="div home__value">
                    <div>
                        <h1 class="home__value-number">
                            15<span>+</span>
                        </h1>
                        <span class="home__value-description">
                            Imóveis <br> de Luxo
                        </span>
                    </div>
                    
                    <div>
                        <h1 class="home__value-number">
                            30<span>+</span>
                        </h1>
                        <span class="home__value-description">
                            Imóveis <br> Comerciais
                        </span>
                    </div>
                    
                    <div>
                        <h1 class="home__value-number">
                            112<span>+</span>
                        </h1>
                        <span class="home__value-description">
                            Imóveis<br> Populares
                        </span>
                    </div>
                </div> 
            </div>

            <div class="home__images">
                <div class="home__orbe"></div>

                <div class="home__img">
                    <img src="./assets/images/home.jpg" alt="">
                </div>
            </div>
       </div>      
    </section>


<!--==================== Logos ====================-->
<section class="logos section" id="logos">
    <div class="logos__container container grid">
        <div class="logos__img">
            <img src="./assets/images/logo1.png" alt="Construtora Parceira">
        </div>
        <div class="logos__img">
            <img src="./assets/images/logo2.png" alt="Construtora Parceira">
        </div>
        <div class="logos__img">
            <img src="./assets/images/logo3.png" alt="Construtora Parceira">
        </div>
        <div class="logos__img">
            <img src="./assets/images/logo4.png" alt="Construtora Parceira">
        </div>
    </div>
</section>



<section class="popular section" id="popular">
    <div class="container">
        <span class="section__subtitle">Alta Classe</span>
        <h2 class="section__title">
            Imóveis de luxo<span>.</span>
        </h2>

        <div class="popular__container swiper">
            <div class="swiper-wrapper">

                <!--Exempo 1-->
                <article class="popular__card swiper-slide">
                    <img src="./assets/images/popular1.jpg" alt="" class="popular__img">
                    <div class="popular__data">
                        <h2 class="popular__price">
                            <span>R$</span>Preço
                        </h2>
                        <h3 class="popular__title">
                            Título
                        </h3>
                        <p class="popular__description">
                            Endereço
                        </p>
                    </div>
                </article>

                <!--Exempo 2-->
                <article class="popular__card swiper-slide">
                    <img src="./assets/images/popular2.jpg" alt="" class="popular__img">
                    <div class="popular__data">
                        <h2 class="popular__price">
                            <span>R$</span>Preço
                        </h2>
                        <h3 class="popular__title">
                            Título
                        </h3>
                        <p class="popular__description">
                            Endereço
                        </p>
                    </div>
                </article>

                <!--Exempo 3-->
                <article class="popular__card swiper-slide">
                    <img src="./assets/images/popular3.jpg" alt="" class="popular__img">
                    <div class="popular__data">
                        <h2 class="popular__price">
                            <span>R$</span>Preço
                        </h2>
                        <h3 class="popular__title">
                            Título
                        </h3>
                        <p class="popular__description">
                            Endereço
                        </p>
                    </div>
                </article>

                <!--Exempo 4-->
                <article class="popular__card swiper-slide">
                    <img src="./assets/images/popular1.jpg" alt="" class="popular__img">
                    <div class="popular__data">
                        <h2 class="popular__price">
                            <span>R$</span>Preço
                        </h2>
                        <h3 class="popular__title">
                            Título
                        </h3>
                        <p class="popular__description">
                            Endereço
                        </p>
                    </div>
                </article>

                <!--Exempo 5-->
                <article class="popular__card swiper-slide">
                    <img src="./assets/images/popular1.jpg" alt="" class="popular__img">
                    <div class="popular__data">
                        <h2 class="popular__price">
                            <span>R$</span>Preço
                        </h2>
                        <h3 class="popular__title">
                            Título
                        </h3>
                        <p class="popular__description">
                            Endereço
                        </p>
                    </div>
                </article>
            </div>

            <div class="container">
                <span class="section__subtitle">Para seu negócio</span>
                <h2 class="section__title">
                    Imóveis Comerciais<span>.</span>
                </h2>
        
                <div class="popular__container swiper">
                    <div class="swiper-wrapper">
        
                        <!--Exempo 1-->
                        <article class="popular__card swiper-slide">
                            <img src="./assets/images/popular1.jpg" alt="" class="popular__img">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>R$</span>Preço
                                </h2>
                                <h3 class="popular__title">
                                    Título
                                </h3>
                                <p class="popular__description">
                                    Endereço
                                </p>
                            </div>
                        </article>
        
                        <!--Exempo 2-->
                        <article class="popular__card swiper-slide">
                            <img src="./assets/images/popular1.jpg" alt="" class="popular__img">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>R$</span>Preço
                                </h2>
                                <h3 class="popular__title">
                                    Título
                                </h3>
                                <p class="popular__description">
                                    Endereço
                                </p>
                            </div>
                        </article>
        
                        <!--Exempo 3-->
                        <article class="popular__card swiper-slide">
                            <img src="./assets/images/popular1.jpg" alt="" class="popular__img">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>R$</span>Preço
                                </h2>
                                <h3 class="popular__title">
                                    Título
                                </h3>
                                <p class="popular__description">
                                    Endereço
                                </p>
                            </div>
                        </article>
        
                        <!--Exempo 4-->
                        <article class="popular__card swiper-slide">
                            <img src="./assets/images/popular1.jpg" alt="" class="popular__img">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>R$</span>Preço
                                </h2>
                                <h3 class="popular__title">
                                    Título
                                </h3>
                                <p class="popular__description">
                                    Endereço
                                </p>
                            </div>
                        </article>
        
                        <!--Exempo 5-->
                        <article class="popular__card swiper-slide">
                            <img src="./assets/images/popular1.jpg" alt="" class="popular__img">
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>R$</span>Preço
                                </h2>
                                <h3 class="popular__title">
                                    Título
                                </h3>
                                <p class="popular__description">
                                    Endereço
                                </p>
                            </div>
                        </article>
                    </div>

                    <div class="container">
                        <span class="section__subtitle">Para familia ou casal</span>
                        <h2 class="section__title">
                            Imóveis populares<span>.</span>
                        </h2>
                
                        <div class="popular__container swiper">
                            <div class="swiper-wrapper">
                
                                <!--Exempo 1-->
                                <article class="popular__card swiper-slide">
                                    <img src="./assets/images/popular1.jpg" alt="" class="popular__img">
                                    <div class="popular__data">
                                        <h2 class="popular__price">
                                            <span>R$</span>250.000
                                        </h2>
                                        <h3 class="popular__title">
                                            Apartamento 3 Qts
                                        </h3>
                                        <p class="popular__description">
                                            Cascavel - Alto Alegre,
                                            Rua Silvino Blender, 271
                                        </p>
                                    </div>
                                </article>
                
                                <!--Exempo 2-->
                                <article class="popular__card swiper-slide">
                                    <img src="./assets/images/popular2.jpg" alt="" class="popular__img">
                                    <div class="popular__data">
                                        <h2 class="popular__price">
                                            <span>R$</span>320.000
                                        </h2>
                                        <h3 class="popular__title">
                                            Casa 5 Suites
                                        </h3>
                                        <p class="popular__description">
                                            Cascavel - Floresta,
                                            Rua Santo Augostino, 5444
                                        </p>
                                    </div>
                                </article>
                
                                <!--Exempo 3-->
                                <article class="popular__card swiper-slide">
                                    <img src="./assets/images/popular3.jpg" alt="" class="popular__img">
                                    <div class="popular__data">
                                        <h2 class="popular__price">
                                            <span>R$</span>1.250.000
                                        </h2>
                                        <h3 class="popular__title">
                                            Casa 2 Quartos
                                        </h3>
                                        <p class="popular__description">
                                            Cascavel - Santa Cruz,
                                            Rua Carijós, 265
                                        </p>
                                    </div>
                                </article>
                
                                <!--Exempo 4-->
                                <article class="popular__card swiper-slide">
                                    <img src="./assets/images/popular4.jpg" alt="" class="popular__img">
                                    <div class="popular__data">
                                        <h2 class="popular__price">
                                            <span>R$</span>150.000
                                        </h2>
                                        <h3 class="popular__title">
                                            Casa 3 Quartos
                                        </h3>
                                        <p class="popular__description">
                                            Cascavel - Jardim Itália,
                                            Rua Tolentino Perez, 451
                                        </p>
                                    </div>
                                </article>
                
                                <!--Exempo 5-->
                                <article class="popular__card swiper-slide">
                                    <img src="./assets/images/popular5.jpg" alt="" class="popular__img">
                                    <div class="popular__data">
                                        <h2 class="popular__price">
                                            <span>R$</span>750.000
                                        </h2>
                                        <h3 class="popular__title">
                                            Lote 1000m²
                                        </h3>
                                        <p class="popular__description">
                                            Cascavel - Tropical,
                                            Rua Aurora, 455
                                        </p>
                                    </div>
                                </article>
                            </div>

            <div class="swiper-pagination"></div> 
        </div>
    </div>
</section>



<!--==================== Value ====================-->
<section class="value section" id="value">
    <div class="value__container container grid">
        <div class="value__images">
            <div class="value__orbe"></div>

            <div class="value__img">
                <img src="./assets/images/value.jpg" alt="">
            </div>
        </div>    
            <div class="value__content">
                <div class="value_data">
                   
                <span class="section__subtitle">Nossos Valores</span>
                    <a href="agendamento.php">
                <button>Agendar aqui</button>
            </a>
                    <h2 class="section__title">
                        Damos valor a você<span>.</span>
            
                    </h2>
                    <p class="value__description">
                        Estamos sempre prontos em ajudar a encontrar o melhor lugar para sua vida ou negócio.
                    </p>

            <!--Item 1-->
            <div class="value__accordion">
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i class='bx bxs-star value__accordion-icon'></i>
                        <h3 class="value__accordion-title">
                            Os melhores imóveis para você.
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class='bx bxs-down-arrow'></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Imóveis de qualidade em regiões privilegiadas.
                        </p>
                    </div>
                </div>

            <!--Item 2-->           
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i class='bx bxs-bar-chart-square value__accordion-icon'></i>
                        <h3 class="value__accordion-title">
                            Os melhores preços do mercado.
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class='bx bxs-down-arrow'></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Buscamos sempre as melhores ofertas do mercado, para que você possa encontrar seu lar com as melhores condições.
                        </p>
                    </div>
                </div>

            <!--Item 3-->      
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i class='bx bxs-check-square value__accordion-icon'></i>
                        <h3 class="value__accordion-title">
                            Confiança na empreita
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class='bx bxs-down-arrow'></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Garantimos que seu investimento valerá a pena.
                        </p>
                    </div>
                </div>
        </div>
    </div>
</section>

<!--==================== Contato ====================-->
<section class="contact section" id="contact">
    <div class="contact__container container grid">
        <div class="contact__images">
            <div class="contact__orbe"></div>

            <div class="contact__img">
                <img src="./assets/images/contact.png" alt="Contato">
            </div>
        </div>

        <div class="contact__content">

            <div class="contact__data">
                <span class="section__subtitle">Contato</span>
                <h2 class="section__title">
                    Entre em contato<span>.</span>
                </h2>
                <p class="contact__description">
                    É um problema encontrar seu imóvel dos sonhos? Precisa de ajuda para comprar sua primeira casa? Ou precisa de uma consultoria para investir em imóveis? Entre em contato conosco.
                </p>
            </div>


            <div class="contact__card">

                <!--Contato telefone-->
                <div class="contact_card-box">
                    <div class="contact__card-info">
                        <i class='bx bxs-phone-call'></i>
                        <div>
                            <h3 class="contact__card-title">
                            Telefone
                            </h3>
                            <p class="contact__card-description">
                                (45) 9 9946-5450
                            </p>
                        </div>
                    </div>
                    
                    <a href="tel:+5545999468450">
                        <button class="contact__card-button">
                            Ligue Agora
                        </button>
                    </a>
                    
                    
                </div>

                <!--Contato WhatsApp-->
                <div class="contact_card-box">
                    <div class="contact__card-info">
                        <i class='bx bxl-whatsapp'></i>
                        <div>
                            <h3 class="contact__card-title">
                                Chat
                            </h3>
                            <p class="contact__card-description">
                                (45) 9 9946-5450
                            </p>
                        </div>
                    </div>

                    <a href="https://wa.me/5545999465450" target="_blank">
                        <button class="contact__card-button">
                            WhatsApp
                        </button>
                    </a>
                </div>

                <!--Contato Email-->
                <div class="contact_card-box">
                    <div class="contact__card-info">
                        <i class='bx bxs-envelope'></i>
                        <div>
                            <h3 class="contact__card-title">
                                E-mail
                            </h3>
                            <p class="contact__card-description">
                                nithelconstruction@gmail.com
                            </p>
                        </div>
                    </div>

                    <a href="mailto:nithelconstruction@gmail.com">
                        <button class="contact__card-button">
                            Mensagem
                        </button>
                    </a>
                </div>

            
            </div>
        </div>
    </div>    
</section>
<?php

// Configuração do e-mail
include_once ('config.php');

// Processar o formulário apenas se o método for POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitizar os dados para evitar injeção
    $nome = $_POST['Nome'];
    $telefone = $_POST['Telefone'];
    $formaRetorno = $_POST['return'];
    $mensagem = $_POST['Mensagem'];

    
        $sql = "INSERT INTO contatos (nome, telefone, forma_retorno, mensagem) 
                VALUES ('$nome', '$telefone', '$formaRetorno', '$mensagem')";

        if ($conexao->query($sql) === TRUE) {
            echo "Novos registros inseridos com sucesso";
        } else {
            echo "Erro: " . $sql . "<br>" . $conexao->error;
        }
       
    }
        

?>
<!--==================== Appointment ====================-->

<section class="appointment section">
    <div class="appointment-container container">
        <div class="info">
            <h2>Envie uma mensagem<span>.</span></h2>
            <p>Mande uma mensagem que entraremos em contato o mais breve possivel.</p>
        </div>

        <form action="" method="POST" class="form__appointment">

            <div class="form__group">
                <label for="name">Nome</label>
                <input type="text" placeholder="Digite seu nome" name="Nome" id="name" required>
            </div>

            <div class="form__group">
                <label for="phone">Telefone</label>
                <input type="number" placeholder="Digite seu telefone" name="Telefone" id="number" required>
            </div>

            <div class="form__group">
                <label for="return">Selecione a forma de retorno</label>
                <select name="return" required>
                    <option value="ligação-durante-manha" required>Ligação durante o período da manhã</option>
                    <option value="ligação-durante-tarde">Ligação durante o período da tarde</option>
                    <option value="ligação-durante-noite">Ligação durante o período da noite</option>
                    <option value="whatsApp">WhatsApp</option>
                    
                </select>
            </div>


            <div class="form__group">
                <label for="message">Mensagem</label>
                <textarea name="Mensagem" id="message" rows="6" placeholder="Adicione uma mensagem"></textarea>
            </div>
            <input type="submit" value="Enviar Mensagem" class="btn-primary">
        </form>
    </div>
</section>


<!--==================== Footer ====================-->
<footer class="footer section">
    <div class="footer__container container grid">
        <div>
            <a href="#" class="footer__logo">
                Nithel Construction<i class='bx bxs-home-alt-2'></i>
            </a>
            <p class="footer__description">
                Nossa missão é fazer as pessoas <br>
                encontrarem o melhor lugar para viver.
            </p>
        </div>

        <div class="footer__content">
                <h3 class="footer__title">
                    Novidades
                </h3>
                <ul class="footer__social">
                    <a href="" target="_blank" class="footer__social-link">
                        <i class='bx bxl-youtube'></i>
                    </a>
                    <a href="" target="_blank" class="footer__social-link">
                        <i class='bx bxl-instagram-alt'></i>
                    </a>
                    <a href="https://www.tiktok.com/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-tiktok'></i>
                    </a>
                </ul>
        </div>
    </div>

    <div class="footer__info ">
        <span class="footer__copy">
            &#169; Nithel Osmar Uebel Pereira. Todos os direitos reservados.
        </span>
    </div>
</footer>


<!--========== Scroll Up ==========-->
<a href="#" class="scrollup" id="scroll-up">
    <i class='bx bx-chevrons-up'></i>
</a>

<!--=============== Scrollreveal ===============-->
<script src="https://unpkg.com/scrollreveal"></script>


<!-- Swiper Javascript -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<!--=============== Javascript ===============-->
<script src="./assets/js/main.js"></script>
    
</body>
</html>