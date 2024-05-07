<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Technomac</title>

        <!-- Fonts -->
        <meta content="" name="author">
        <meta content="Suprek - Top-Of-The-Line Equipment Rentals" name="description">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="HandheldFriendly" content="true">
        <meta name="format-detection" content="telephone=no">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="assets/css/libs.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

        <link href="assets/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/vendor/bootstrap-icons/bootstrap-icons.css'" rel="stylesheet">

        
        <script>window.gtranslateSettings = {"default_language":"en","native_language_names":true,"languages":["en","ar","pt","ru"],"wrapper_selector":".gtranslate_wrapper","switcher_horizontal_position":"right"}</script>
        <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="./assets/js/libs.js"></script>
        <script src="assets/js/main.js"></script>

        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
            }

            .preloader {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: #ffffff;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column; /* Adiciona uma coluna para a mensagem de carregamento */
                z-index: 9999; /* Garante que o preloader fique acima de todo o conteúdo */
    
            }

            .spinner {
                width: 70px;
                height: 70px;
                position: relative; /* Adiciona posição relativa para que possamos posicionar as camadas de rotação */
            }

            .spinner:before,
            .spinner:after {
                content: '';
                position: absolute;
                width: inherit;
                height: inherit;
                border: 5px solid transparent;
                border-top-color: #ff851b;
                border-radius: 50%;
                animation: spin 1s linear infinite; /* Animação de rotação */
            }

            .spinner:before {
                animation-delay: -0.5s; /* Atrasa a animação da camada inferior */
            }

            .spinner img {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 40px; /* Largura do favicon */
                height: 40px; /* Altura do favicon */
            }

            .loading-message {
                margin-top: 40px; /* Espaçamento superior para a mensagem */
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }

            /* Adiciona uma mudança de cor ao spinner */
            @keyframes changeColor {
                0% { border-top-color: #3498db; }
                50% { border-top-color: #e74c3c; }
                100% { border-top-color: #3498db; }
            }

            .content {
                display: none; /* Oculta o conteúdo da página até que o preloader seja removido */
            }

        </style>
    </head>
    <body class="page-home">
        <div class="page-wrapper">
            <!-- Preloader -->
            <!-- <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="assets/img/logo.png" alt="TechnLogo" height="100" width="200">
            </div> -->
            <div class="preloader">
                <div class="spinner"> 
                    <img src="assets/img/logo_phone.png" alt="T"> 
                </div>
                <div class="loading-message">loading...</div>
            </div>

            <!-- Header Section -->
            <header class="page-header --two-line">
                <div class="page-header__top-line">
                    <div class="uk-container">
                        <div class="page-header__inner">
                            <div class="page-header__contacts-list">
                                <ul>
                                    <li><a href="https://goo.gl/maps/RwFh5b8Po1pdxBS19" target="_blank"><span data-uk-icon="location"></span><span>35 Oakridge Lane, NJ 08102</span></a></li>
                                    <li><a href="mailto:info@techmactrade.com"><span data-uk-icon="mail"></span><span>info@techmactrade.com</span></a></li>
                                </ul>
                            </div>
                            <div class="page-header__social">
                                <ul class="social">
                                    <li class="social__item"><a class="social__link" href="http://www.facebook.com" target="_blank"><span data-uk-icon="facebook"></span></a></li>
                                    <li class="social__item"><a class="social__link" href="http://www.twitter.com" target="_blank"><span data-uk-icon="twitter"></span></a></li>
                                    <li class="social__item"><a class="social__link" href="http://www.instagram.com" target="_blank"><span data-uk-icon="instagram"></span></a></li>
                                    <li class="social__item"><a class="social__link" href="http://www.linkedin.com" target="_blank"><span data-uk-icon="linkedin"></span></a></li>
                                    <li class="social__item"><a class="social__link" href="http://www.youtube.com" target="_blank"><span data-uk-icon="youtube"></span></a></li>
                                </ul>
                            </div>
                            <div class="page-header__contacts"><a class="contacts-block" href="tel:17881239911"><span data-i18n = "contacts.needHelp">Need Help? Call Us</span><strong>788-123-9900</strong></a></div>
                        </div>
                    </div>
                </div>
                <div class="page-header__bottom-line" data-uk-sticky>
                    <div class="uk-container">
                        <div class="page-header__inner">
                            <!-- Para desktop -->
                            <div class="page-header__logo d-none d-lg-block me-auto"><a class="logo" href="/"><img src="assets/img/logo.png" alt="image" class="img-fluid"></a></div>
                            
                            <!-- Para smartphones -->
                            <div class="page-header__logo d-block d-lg-none me-auto">
                                <a class="logo" href="/">
                                    <img src="assets/img/logo_phone.png" alt="image" class="img-fluid">
                                </a>
                            </div>

                            <div class="page-header__mainmenu">
                                <ul class="uk-navbar-nav" data-uk-navbar>
                                    <li class=""><a href="/" span>Home</span></a></li>
                                    <li><a href="equipments-grid.php"><span>Equipments</span></a></li>
                                    <li><a href="equipment-categories.php"><span>Our Solutions</span></a></li>
                                    <li><a href="about-us.php"><span>About Us</span></a></li>
                                    <li><a href="contact-us.php"><span>Contact</span></a></li>
                                </ul>
                            </div>
                            <div class="page-header__search">
                                <div class="search-full"><a class="uk-icon-button" href="#modal-search-full" data-uk-search-icon data-uk-toggle></a>
                                    <div class="uk-modal-full uk-modal" id="modal-search-full" data-uk-modal>
                                        <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" data-uk-height-viewport><button class="uk-modal-close-full" type="button" data-uk-close></button>
                                            <form class="uk-search uk-search-large"><input class="uk-search-input uk-text-center" type="search" placeholder="Search" autofocus></form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="page-header__search">
                            <div class="gtranslate_wrapper"></div>
                            </div>
                            <div class="page-header__mobile-menu-btn"><button data-uk-toggle="target: #offcanvas" type="button"><span data-uk-icon="menu"></span></button></div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main -->
            <main class="page-main">
                <!-- Slider Section -->
                <section class="s-slider">
                    <div class="js-slider-homepage">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="uk-inline">
                                        <img src="assets/img/img-slide-1.jpg" alt="image">
                                        <div class="uk-overlay-primary uk-position-cover"></div>
                                        <div class="uk-overlay uk-position-center-left uk-light uk-width-1-1">
                                            <div class="uk-container" data-aos="zoom-in" data-aos-delay="100">
                                                <h1>Rent Quality Equipments<br> & Industry Solutions</h1>
                                                <p class="uk-text-lead" >No matter what type of heavy equipment you need<br> to rent, our rental services are ready to help</p>

                                                <div data-uk-margin>
                                                    <a class="uk-button uk-button-danger uk-button-large" href="#!">
                                                        <span>Get a free quote</span>
                                                        <span data-uk-icon="arrow-right"></span>
                                                    </a>
                                                    <a class="uk-button uk-button-light uk-button-large" href="#!">
                                                        <span>View categories</span>
                                                        <span data-uk-icon="arrow-right"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="uk-inline"><img src="assets/img/img-slide-2.jpg" alt="image">
                                        <div class="uk-overlay-primary uk-position-cover"></div>
                                        <div class="uk-overlay uk-position-center-left uk-light">
                                            <div class="uk-container uk-text-center" data-aos="fade-up">
                                                <h1>Convenient & Simple Ways<br> to Choose the Right Equipment</h1>
                                                <p class="uk-text-lead">No matter what type of heavy equipment you need to<br> rent, our rental services are ready to help</p>
                                                <div data-uk-margin><a class="uk-button uk-button-danger uk-button-large" href="#!"><span>Get a free quote</span><span data-uk-icon="arrow-right"></span></a><a class="uk-button uk-button-light uk-button-large" href="#!"><span>View categories</span><span data-uk-icon="arrow-right"></span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="uk-inline">
                                        <img src="assets/img/img-slide-3.jpg" alt="image">
                                        <div class="uk-overlay-primary uk-position-cover"></div>
                                        <div class="uk-overlay uk-position-center uk-light uk-width-1-1">
                                            <div class="uk-container" data-aos="zoom-in" data-aos-delay="100">
                                                <h1>High-Quality Equipment <br> Rental Services</h1>
                                                <p class="uk-text-lead" >Explore our wide range of heavy equipment <br> and find the perfect match for your needs </p>

                                                <div data-uk-margin>
                                                    <a class="uk-button uk-button-danger uk-button-large" href="#!">
                                                        <span>Browse Equipaments</span>
                                                        <span data-uk-icon="arrow-right"></span>
                                                    </a>
                                                    <a class="uk-button uk-button-light uk-button-large" href="contact-us.php">
                                                        <span>Contact us</span>
                                                        <span data-uk-icon="arrow-right"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="uk-inline"><img src="assets/img/img-slide-2.jpg" alt="image">
                                        <div class="uk-overlay-primary uk-position-cover"></div>
                                        <div class="uk-overlay uk-position-center uk-light">
                                            <div class="uk-container uk-text-center">
                                                <h1> Expert Assistance & <br> Reliable Support</h1>
                                                <p class="uk-text-lead">No matter what type of heavy equipment you need to<br> rent, our rental services are ready to help</p>
                                                <div data-uk-margin>
                                                    <a class="uk-button uk-button-danger uk-button-large" href="#!">
                                                        <span>Get in touch </span>
                                                        <span data-uk-icon="arrow-right"></span>
                                                    </a>
                                                    <a class="uk-button uk-button-light uk-button-large" href="#!">
                                                        <span>Learn more</span>
                                                        <span data-uk-icon="arrow-right"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </section>
                <!-- Search form Section -->
                <div class="search-form">
                    <div class="uk-container">
                        <div class="search-form__box">
                            <form class="uk-form-stacked" action="#!">
                                <div class="uk-grid uk-grid-small uk-grid-divider uk-child-width-1-4@l uk-child-width-1-2@s uk-flex-middle" data-uk-grid>
                                    <div><label class="uk-form-label">Select Category</label>
                                        <div class="uk-form-controls">
                                            <select class="js-select">
                                                    <option value="Aerial Machines">Aerial Machines</option>
                                                    <option value="Excavators">Excavators</option>
                                                    <option value="Forklifts">Forklifts</option>
                                                    <option value="Dump Trucks">Dump Trucks</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="uk-form-label">Select Equipment</label>
                                            <div class="uk-form-controls">
                                                <select class="js-select">
                                                    <option value="New York">New York</option>
                                                    <option value="Los Angeles">Los Angeles</option>
                                                    <option value="Chicago">Chicago</option>
                                                    <option value="Houston">Houston</option>
                                                </select>
                                            </div>
                                        </div>
                                    <div><label class="uk-form-label">When</label>
                                        <div class="uk-form-controls"><input class="js-date" type="text" name="data" placeholder="March 30, 2024 02:30"></div>
                                    </div>
                                    <div><button class="uk-button uk-button-danger uk-button-large" type="button"><span>Find equipment</span><span data-uk-icon="arrow-right"></span></button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--- About US Section----->
                <section class="s-about">
                    <div class="uk-section uk-container" data-aos="fade-up">
                        <div class="uk-grid uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
                            <!-- Company logo image -->
                            <div class="uk-text-center">
                                <img src="assets/img/why-us.png" alt="image" data-aos="zoom-in" data-aos-delay="150">
                            </div>

                            <!-- Company information text -->
                            <div>
                                <div class="section-title">
                                    <span>About Us</span>
                                    <h3>Empowering Industries with 10k+ Equipment Available for Rentals Anytime</h3>
                                </div>

                                <div class="section-content" id="our-content" style="display: block;">
                                    <div class="section-content-item active" id="content-about">
                                        <!-- Company overview text -->
                                        <p>
                                            TECHNOMAC TRADING AND SERVICES is a professional manufacturer and trader, 
                                            specialized in research and development, sales, and services in the drilling 
                                            and geological exploration industry.
                                        </p>
                                    </div>

                                    <div class="section-content-item" style="display: none;" id="content-vision">
                                        <!-- Company vision text -->
                                        <p>
                                            Our vision is to create sustainable solutions with the efficient delivery of 
                                            high-quality underground and surface drilling parts for our business partners.
                                        </p>
                                    </div>

                                    <div class="section-content-item" style="display: none;" id="content-mission">
                                        <!-- Company mission text -->
                                        <p>
                                            Our mission is to earn high trust by increasing productivity for our business 
                                            partners through continuity and to play a leading role in the international market 
                                            in the rock drilling machinery sector.
                                        </p>
                                    </div>

                                    <div class="section-content-item" style="display: none;" id="content-values">
                                        <!-- Company values text -->
                                        <ol>
                                            <!-- List of company values -->
                                            <li><strong>High Quality:</strong> We prioritize delivering high-quality equipment.</li>
                                            <li><strong>Reliability:</strong> We ensure reliability in all our services.</li>
                                            <li><strong>Continuous Improvement:</strong> We continuously strive for improvement.</li>
                                        </ol>
                                    </div>
                                </div>

                                <!-- Call-to-action buttons section -->
                                <div class="s-about__btns" data-uk-margin>
                                    <a class="uk-icon-button ico_mission"  data-target="#content-about" data-uk-tooltip="title: About Us; pos: bottom"></a>
                                    <a class="uk-icon-button ico_mission"  data-target="#content-vision" data-uk-tooltip="title: Our Vision; pos: bottom"></a>
                                    <a class="uk-icon-button ico_track"  data-target="#content-mission" data-uk-tooltip="title: Our Mission; pos: bottom"></a>
                                    <a class="uk-icon-button ico_track"  data-target="#content-values" data-uk-tooltip="title: Our Value; pos: bottom"></a>
                                    <a class="uk-button uk-button-danger uk-button-large" href="11_about-us.html" data-uk-icon="arrow-right">Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Features Section -->
                <section class="s-features">
                    <div class="uk-section uk-container">
                        <div class="uk-grid uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
                            <div>
                                <div class="section-title"><small class="color-accent">[30 Years Of Equipment Rental Expertise]</small>
                                    <h3>Our Services</h3>
                                </div>
                            </div>
                            <div>
                                <div class="section-content"><span>At TECHNOMAC TRADING AND SERVICES, we offer a range of services to support your drilling and exploration needs:</span></div>
                            </div>
                        </div>
                        <div class="feature-items">
                            <div data-uk-slider>
                                <div class="uk-position-relative" tabindex="-1">
                                    <ul class="uk-grid uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@l">
                                        <li data-aos="zoom-in" data-aos-delay="100">
                                            <div class="feature-item">
                                                <div class="feature-item__box">
                                                    <div class="feature-item__icon"><img src="assets/img/ico-feature-1.png" alt="image"></div>
                                                    <div class="feature-item__title">Consultation and <br> Technical Support</div>
                                                    <div class="feature-item__text">We provide expert consultation and technical support to ensure that you get the right equipment and solutions for your projects. Our team is dedicated to assisting you every step of the way, from selecting the appropriate equipment to providing technical assistance...</div>
                                                    <div class="feature-item__more"><a href="#"><span data-uk-icon="arrow-right"></span></a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-aos="zoom-in" data-aos-delay="300">
                                            <div class="feature-item">
                                                <div class="feature-item__box">
                                                    <div class="feature-item__icon"><img src="assets/img/ico-feature-2.png" alt="image"></div>
                                                    <div class="feature-item__title">Equipment Maintenance <br> and Repair</div>
                                                    <div class="feature-item__text">Our comprehensive maintenance and repair services ensure that your equipment operates at peak performance, minimizing downtime and maximizing productivity. Our skilled technicians provide timely maintenance and repairs to keep your equipment in top condition...</div>
                                                    <div class="feature-item__more"><a href="07_equipment-detail.html"><span data-uk-icon="arrow-right"></span></a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-aos="zoom-in" data-aos-delay="400">
                                            <div class="feature-item">
                                                <div class="feature-item__box">
                                                    <div class="feature-item__icon"><img src="assets/img/ico-feature-3.png" alt="image"></div>
                                                    <div class="feature-item__title">Training and Skill <br> Development Programs</div>
                                                    <div class="feature-item__text">Our training and skill development programs are designed to empower your team with the knowledge and expertise needed to operate equipment safely and efficiently. Through hands-on training and comprehensive instructional materials, we equip your workforce...</div>
                                                    <div class="feature-item__more"><a href="07_equipment-detail.html"><span data-uk-icon="arrow-right"></span></a></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-aos="zoom-in" data-aos-delay="500">
                                            <div class="feature-item">
                                                <div class="feature-item__box">
                                                    <div class="feature-item__icon"><img src="assets/img/ico-feature-4.png" alt="image"></div>
                                                    <div class="feature-item__title">Customized Solutions <br> for Special Projects</div>
                                                    <div class="feature-item__text">Our team specializes in providing customized solutions tailored to meet the unique requirements of your special projects. Whether you have specific equipment needs, challenging site conditions, or unique project constraints, we work closely with you to...</div>
                                                    <div class="feature-item__more"><a href="07_equipment-detail.html"><span data-uk-icon="arrow-right"></span></a></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Brands Section -->
                <section class="s-brands">
                    <div class="uk-container" data-aos="zoom-in-down">
                        <div class="section-title --center">
                            <span>[Explore Our Equipment Brands]</span>
                            <h3>High-Quality Machinery for Your Toughest Tasks</h3>
                            <p>Choose from a wide range of reputable equipment brands for your rental needs</p>
                        </div>
                        <div class="section-content" data-aos="zoom-out-right" data-aos-delay="100">
                            <div data-uk-slider="autoplay: true">
                                <div class="uk-position-relative">
                                    <div class="uk-slider-container uk-light">
                                        <ul class="uk-slider-items uk-grid-small uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-4@m uk-text-center">
                                            <?php
                                                // Diretório onde as imagens estão localizadas
                                                $diretorio = 'assets/img/brands/';

                                                // Obter lista de arquivos na pasta
                                                $arquivos = scandir($diretorio);

                                                // Iterar sobre os arquivos
                                                foreach ($arquivos as $arquivo) {
                                                    // Verificar se o arquivo é uma imagem
                                                    if (is_file($diretorio . $arquivo) && in_array(pathinfo($arquivo, PATHINFO_EXTENSION), array('jpg', 'jpeg', 'png', 'gif'))) {
                                                        // Exibir a imagem dentro de um elemento <li>
                                                        echo '<li><img class="uk-width-1-1" src="' . $diretorio . $arquivo . '" alt="brand"></li>';
                                                    }
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="uk-visible@s">
                                        <a class="uk-slidenav uk-position-center-left-out" href="#" data-uk-slider-item="previous" data-uk-icon="arrow-left"></a>
                                        <a class="uk-slidenav uk-position-center-right-out" href="#" data-uk-slider-item="next" data-uk-icon="arrow-right"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Equipments Section -->
                <section class="s-equipments">
                    <div class="uk-section uk-container uk-container-large">
                        <div class="section-title --center"><span>[Premier Equipment Rental Service]</span>
                            <h3>Popular Equipments On Rent</h3>
                        </div>
                        <div class="section-content" data-aos="zoom-in">
                            <div data-uk-slider>
                                <div class="uk-position-relative" tabindex="-1">
                                    <ul class="uk-slider-items uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@l">
                                        <li data-aos="zoom-in" data-aos-delay="100">
                                            <div class="equipment-item">
                                                <div class="equipment-item__box">
                                                    <div class="equipment-item__media"><a href="07_equipment-detail.html"><img src="assets/img/equipaments/hydraulic_core_drilling_rig.webp" alt="Standard Excavator 8T" /></a></div>
                                                    <div class="equipment-item__info">
                                                        <div class="equipment-item__title"><a href="07_equipment-detail.html">Full Hydraulic Core Drilling Rig</a></div>
                                                        <div class="equipment-item__links"><a href="03_equipment-categories.html">View Catelogue</a><a href="04_equipment-categories.html">Print Quotation</a></div>
                                                        <div class="equipment-item__list">
                                                            <ul>
                                                                <li>Brand: Wacker Neuson</li>
                                                                <li>MFG Year: 2019</li>
                                                                <li>Model: EZ17</li>
                                                                <li>Operating Weight: 1.7 Ton</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="equipment-item__btn"><button class="uk-button uk-button-default uk-button-large uk-width-1-1" type="button"><span>Book now</span><span data-uk-icon="arrow-right"></span></button></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-aos="zoom-in" data-aos-delay="200">
                                            <div class="equipment-item">
                                                <div class="equipment-item__box">
                                                    <div class="equipment-item__media"><a href="07_equipment-detail.html"><img src="assets/img/equipaments/pneumatic_dth_drilling_rig.webp" alt="Standard Excavator 8T" /></a></div>
                                                    <div class="equipment-item__info">
                                                        <div class="equipment-item__title"><a href="07_equipment-detail.html">Pneumatic DTH drilling rig</a></div>
                                                        <div class="equipment-item__links"><a href="03_equipment-categories.html">View Catelogue</a><a href="04_equipment-categories.html">Print Quotation</a></div>
                                                        <div class="equipment-item__list">
                                                            <ul>
                                                                <li>Brand: Wacker Neuson</li>
                                                                <li>MFG Year: 2019</li>
                                                                <li>Model: EZ17</li>
                                                                <li>Operating Weight: 1.7 Ton</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="equipment-item__btn"><button class="uk-button uk-button-default uk-button-large uk-width-1-1" type="button"><span>Book now</span><span data-uk-icon="arrow-right"></span></button></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-aos="zoom-in" data-aos-delay="300">
                                            <div class="equipment-item">
                                                <div class="equipment-item__box">
                                                    <div class="equipment-item__media"><a href="07_equipment-detail.html"><img src="assets/img/equipaments/percussion_rc_hydrualic.webp" alt="Standard Excavator 8T" /></a></div>
                                                    <div class="equipment-item__info">
                                                        <div class="equipment-item__title"><a href="07_equipment-detail.html">Percussion RC Hydrualic Bored Pile Drilling Rig</a></div>
                                                        <div class="equipment-item__links"><a href="03_equipment-categories.html">View Catelogue</a><a href="04_equipment-categories.html">Print Quotation</a></div>
                                                        <div class="equipment-item__list">
                                                            <ul>
                                                                <li>Brand: Wacker Neuson</li>
                                                                <li>MFG Year: 2019</li>
                                                                <li>Model: EZ17</li>
                                                                <li>Operating Weight: 1.7 Ton</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="equipment-item__btn"><button class="uk-button uk-button-default uk-button-large uk-width-1-1" type="button"><span>Book now</span><span data-uk-icon="arrow-right"></span></button></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-aos="zoom-in" data-aos-delay="400">
                                            <div class="equipment-item">
                                                <div class="equipment-item__box">
                                                    <div class="equipment-item__media"><a href="07_equipment-detail.html"><img src="assets/img/equipment-1.jpg" alt="Standard Excavator 8T" /></a></div>
                                                    <div class="equipment-item__info">
                                                        <div class="equipment-item__title"><a href="07_equipment-detail.html">Pneumatic DTH Drilling Rig</a></div>
                                                        <div class="equipment-item__links"><a href="03_equipment-categories.html">View Catelogue</a><a href="04_equipment-categories.html">Print Quotation</a></div>
                                                        <div class="equipment-item__list">
                                                            <ul>
                                                                <li>Brand: Wacker Neuson</li>
                                                                <li>MFG Year: 2019</li>
                                                                <li>Model: EZ17</li>
                                                                <li>Operating Weight: 1.7 Ton</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="equipment-item__btn"><button class="uk-button uk-button-default uk-button-large uk-width-1-1" type="button"><span>Book now</span><span data-uk-icon="arrow-right"></span></button></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-aos="zoom-in" data-aos-delay="500">
                                            <div class="equipment-item">
                                                <div class="equipment-item__box">
                                                    <div class="equipment-item__media"><a href="07_equipment-detail.html"><img src="assets/img/equipaments/air_compressor.jpg" alt="Air Compressor" /></a></div>
                                                    <div class="equipment-item__info">
                                                        <div class="equipment-item__title"><a href="07_equipment-detail.html">Air Compressor</a></div>
                                                        <div class="equipment-item__links"><a href="03_equipment-categories.html">View Catelogue</a><a href="04_equipment-categories.html">Print Quotation</a></div>
                                                        <div class="equipment-item__list">
                                                            <ul>
                                                                <li>Brand: Wacker Neuson</li>
                                                                <li>MFG Year: 2019</li>
                                                                <li>Model: EZ17</li>
                                                                <li>Operating Weight: 1.7 Ton</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="equipment-item__btn"><button class="uk-button uk-button-default uk-button-large uk-width-1-1" type="button"><span>Book now</span><span data-uk-icon="arrow-right"></span></button></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Reasons Choose Section -->
                <section class="s-reasons-choose">
                    <div class="uk-section uk-container uk-container-large">
                        <div class="uk-grid uk-child-width-1-2@l" data-uk-grid>
                            <div>
                                <div class="section-title">
                                    <span>[Equipment Rental Industry]</span>
                                    <h3>Reasons to Choose Suprek Equipment Rental Services</h3>
                                </div>
                                <div class="section-content">
                                    <div class="video-link" data-uk-lightbox="video-autoplay: true">
                                        <a href="https://youtu.be/IUYs3mYgEPI" data-attrs="width: 1280; height: 720;" data-caption="YouTube">
                                            <img src="assets/img/ico-play.png" alt="Play Icon">
                                        </a>
                                        <span>Helping with the best and widest selection of rental equipment always available.</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div data-uk-slider>
                                    <div class="uk-position-relative" tabindex="-1">
                                        <ul class="uk-slider-items uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-2@l">
                                            <li>
                                                <div class="reason-item">
                                                    <img class="reason-item__img" src="assets/img/img-reason-1.jpg" alt="Reason Image">
                                                    <div class="reason-item__body">
                                                        <div class="reason-item__icon">
                                                            <img src="assets/img/ico-reason-1.png" alt="Reason Icon">
                                                        </div>
                                                        <div class="reason-item__desc">
                                                            <h4 class="reason-item__title">Collaborative Support</h4>
                                                            <p class="reason-item__text">Providing timely assistance and working together seamlessly.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="reason-item">
                                                    <img class="reason-item__img" src="assets/img/img-reason-2.jpg" alt="Reason Image">
                                                    <div class="reason-item__body">
                                                        <div class="reason-item__icon">
                                                            <img src="assets/img/ico-reason-2.png" alt="Reason Icon">
                                                        </div>
                                                        <div class="reason-item__desc">
                                                            <h4 class="reason-item__title">Outstanding Performance</h4>
                                                            <p class="reason-item__text">Consistently exceeding expectations and delivering exceptional results.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="reason-item">
                                                    <img class="reason-item__img" src="assets/img/img-reason-1.jpg" alt="Reason Image">
                                                    <div class="reason-item__body">
                                                        <div class="reason-item__icon">
                                                            <img src="assets/img/ico-reason-1.png" alt="Reason Icon">
                                                        </div>
                                                        <div class="reason-item__desc">
                                                            <h4 class="reason-item__title">Outstanding Performance</h4>
                                                            <p class="reason-item__text">Consistently delivering top-tier performance that stands out from the crowd.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="reason-item">
                                                    <img class="reason-item__img" src="assets/img/img-reason-2.jpg" alt="Reason Image">
                                                    <div class="reason-item__body">
                                                        <div class="reason-item__icon">
                                                            <img src="assets/img/ico-reason-2.png" alt="Reason Icon">
                                                        </div>
                                                        <div class="reason-item__desc">
                                                            <h4 class="reason-item__title">Collaborative Support</h4>
                                                            <p class="reason-item__text">Building bridges and nurturing relationships for collective success.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <!-- Footer -->
            <footer class="page-footer animate">
                <div class="page-footer__top">
                    <div class="uk-container uk-container-large">
                        <div class="page-footer__inner">
                            <div class="page-footer__contacts"><a class="footer-logo" href="/"><img src="assets/img/logo-white.png" alt="image"></a>
                                <p>Need assistance or have any questions? Feel free to reach out to us. Our team is here to help!</p>
                                <ul class="contacts-list">
                                    <li><a href="https://goo.gl/maps/XdgZbYX9V62UpBwc7" target="_blank"><span data-uk-icon="location"></span><span>35 Oakridge Lane, NJ 08102</span></a></li>
                                    <li><a href="tel:12367995500/6600"><span data-uk-icon="receiver"></span><span>+1 (236) 799 5500 / 6600</span></a></li>
                                    <li><a href="mailto:info@techmactrade.com"><span data-uk-icon="mail"></span><span>info@techmactrade.com</span></a></li>
                                </ul>
                                <ul class="social">
                                    <li><a href="http://www.facebook.com/" target="_blank"><span data-uk-icon="facebook"></span></a></li>
                                    <li><a href="http://www.twitter.com/" target="_blank"><span data-uk-icon="twitter"></span></a></li>
                                    <li><a href="http://www.instagram.com/" target="_blank"><span data-uk-icon="instagram"></span></a></li>
                                    <li><a href="http://www.linkedin.com/" target="_blank"><span data-uk-icon="linkedin"></span></a></li>
                                    <li><a href="http://www.youtube.com/" target="_blank"><span data-uk-icon="youtube"></span></a></li>
                                </ul>
                            </div>
                            <div class="page-footer__menu">
                                <h4>OuR Solutions</h4>
                                <ul class="uk-nav">
                                    <li><a href="page-typography.html">Safe Walls System</a></li>
                                    <li><a href="page-typography.html">Climate Control</a></li>
                                    <li><a href="page-typography.html">Health Care</a></li>
                                    <li><a href="page-typography.html">Entertainment</a></li>
                                    <li><a href="page-typography.html">Power Generation</a></li>
                                    <li><a href="page-typography.html">Industrial Lighting</a></li>
                                </ul>
                            </div>
                            <div class="page-footer__menu">
                                <h4>COMPANY INFO</h4>
                                <ul class="uk-nav">
                                    <li><a href="about-us.php">About Technomac</a></li>
                                    <li><a href="our_soluction.php">Our Solutions</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Protections & Coverages</a></li>
                                    <li><a href="CMS/login/">Administrator</a></li>
                                </ul>
                            </div>
                            <div class="page-footer__news">
                                <h4>Latest News</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-footer__bottom">
                    <div class="uk-container uk-container-large">
                        <div class="page-footer__copy"><span>(c) 2024 <b>Technomac</b> - Heavy Equipment Rental Service</span><a href="page-typography.html">Terms & Conditions</a></div>
                    </div>
                </div>
            </footer>
            <div id="offcanvas" data-uk-offcanvas="mode: reveal; overlay: true">
                <div class="uk-offcanvas-bar uk-flex uk-flex-column uk-flex-between"><button class="uk-offcanvas-close" type="button" data-uk-close></button>
                    <div class="uk-margin-bottom"><a class="logo uk-margin-bottom" href="/"><img src="assets/img/logo-white.png" alt="image"></a>
                        <ul class="uk-nav uk-nav-default uk-nav-parent-icon" data-uk-nav>
                            <li class=""><a href="/"><span>Home</span></a></li>
                            <li><a href="equipments-grid.php"><span>Equipments</span></a></li>
                            <li><a href="equipment-categories.php"><span>Our Solutions</span></a></li>
                            <li><a href="about-us.php"><span>About Us</span></a></li>
                            <li><a href="contact-us.php"><span>Contact</span></a></li>
                        </ul>
                    </div>
                    <div class="uk-margin"><a class="contacts-block" href="tel:17881239911"><span>Need Help? Call Us</span><strong>(+1) 788-123-9911</strong></a></div>
                </div>
            </div>
        </div>

        <script>
            AOS.init({
                duration: 1000, // Define a duração da animação em milissegundos
                easing: 'ease-in-out', // Define o tipo de animação (suave)
                once: true, // Garante que a animação ocorra apenas uma vez
                mirror: false
            });
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script>
            $(document).ready(function() {
            // Manipulador de eventos para os links
                $('.s-about__btns a').click(function(e) {
                    e.preventDefault(); // Impede o comportamento padrão do link
                    var target = $(this).data('target'); // Obtém o valor do atributo data-target
                    $('.section-content-item').hide(); // Oculta todos os elementos
                    $(target).show(); // Exibe o elemento alvo correspondente
                });

                // Exibe o primeiro elemento ao carregar a página
                $('#content-about').show();
            });

        </script>

        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
        <div class="elfsight-app-e2e0a5b4-53b5-4c73-a11b-07ef7a8e51f0" data-elfsight-app-lazy style="display: none;"></div>
        <script>
            window.addEventListener('load', function() {
                var preloader = document.querySelector('.preloader');
                var content = document.querySelector('.content');

                // Remove o preloader e mostra o conteúdo da página
                preloader.style.display = 'none';
                content.style.display = 'block';
            });

        </script>
    </body>
</html>