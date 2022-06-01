<?php

require_once('config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portifolio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/pesquisa-de-personalidade.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <?php
    $pdo_statement = $pdo->prepare("select * from users");
    $pdo_statement->execute();
    $result = $pdo_statement->fetchAll();
    ?>
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Sobre</span></a></li>
                <li><a href="#facts" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Fatos</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resumo</span></a></li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
                <li><a href="#testimonials" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Testemunhas</span></a></li>

                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contato</span></a></li>
                <!-- <li><a href="register.php" class="nav-link scrollto"><i class="bx bx-envelope"></i><span>Registrar Portifólio</span></a></li> -->
            </ul>
        </nav>

    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <?php

            if (!empty($result)) {
                foreach ($result as $row) {;
            ?>

                    <h2 for="nome"><?php echo $row['nome']; ?></h2>

            <?php
                }
            }
            ?>
            <p>Eu sou <span class="typed" data-typed-items="Designer, Desenvolvedor, Fotógrafo"></span></p>
            <div class="social-links">
                <a href="https://twitter.com/LuizFe_Matias" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100069404614319" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/luizfe_matias/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://github.com/luizfe-matias/" class="google-plus"><i class="bx bxl-github"></i></a>
                <!-- <a href="https://www.youtube.com/channel/UCqn5qmxITNO9E-EN0YM92PA" class="linkedin"><i class="bx bxl-youtube"></i></a> -->
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Sobre</h2>
                    <p>Agora minhas informações pessoais e um resumo sobre minhas qualificações e experiencias</p>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <img src="assets/img/Eu.jpg" class="img-fluid profile" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content">
                        <h3><?php echo $row['profissao'] ?></h3>
                        </br>
                        <!-- <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p> -->
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <?php

                                    if (!empty($result)) {
                                        foreach ($result as $row) {;
                                    ?>

                                            <li><i for="nascimento" class="bi bi-chevron-right"></i> <strong>Nascimento:</strong><span><?php echo $row['nascimento'] ?></span></li>
                                            <li><i class="bi bi-chevron-right"></i> <strong>Telefone:</strong> <span><?php echo $row['telefone'] ?></span></li>
                                            <li><i class="bi bi-chevron-right"></i> <strong>Cidade:</strong> <span><?php echo $row['cidade'] ?></span></li>
                                            <li><i class="bi bi-chevron-right"></i> <strong>Genero:</strong> <span><?php echo $row['genero'] ?></span></li>

                                            <li><i for="nascimento" class="bi bi-chevron-right"></i> <strong>Nascimento:</strong><?php echo $row['nascimento'] ?><span></span></li>

                                </ul>

                            </div>
                            <div class="col-lg-6">


                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Idade:</strong> <span><?php echo $row['idade'] ?></span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Grau:</strong> <span><?php echo $row['grau'] ?></span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo $row['email'] ?></span></li>
                                </ul>


                            </div>
                        </div>

                <?php
                                        }
                                    }
                ?>
                    </div>
                </div>

            </div>
            <!-- <?php

                    ?> -->
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
            <?php
            $pdo_statement = $pdo->prepare("select * from fatos");
            $pdo_statement->execute();
            $res = $pdo_statement->fetchAll();
            ?>
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Fatos</h2>
                    <p>Alguns dos meus fatos profissionais incluindo projetos, horas total dos projetos, clientes satisfeitos e conquistas</p>
                </div>

                <div class="row">
                    <?php

                    if (!empty($res)) {
                        foreach ($res as $row) {
                    ?>
                            <div class="col-lg-3 col-md-6">
                                <div class="count-box">
                                    <i class="bi bi-emoji-smile"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="<?php echo $row['clientes']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Clientes Satisfeitos</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                                <div class="count-box">
                                    <i class="bi bi-journal-richtext"></i>
                                    <span data-purecounter-start="0" data-purecounter-end=" <?php echo $row['projetos']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Projetos</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                                <div class="count-box">
                                    <i class="bi bi-headset"></i>
                                    <span data-purecounter-start="0" data-purecounter-end=" <?php echo $row['horas']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Horas de Suporte</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                                <div class="count-box">
                                    <i class="bi bi-award"></i>
                                    <span data-purecounter-start="0" data-purecounter-end=" <?php echo $row['conquistas']; ?>" data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Conquistas</p>
                                </div>
                            </div>

                </div>

            </div>
    <?php
                        }
                    }
    ?>
        </section><!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">
                <?php
                $pdo_statement = $pdo->prepare("select * from habilidades");
                $pdo_statement->execute();
                $res1 = $pdo_statement->fetchAll();
                ?>

                <?php
                if (!empty($res1)) {
                    foreach ($res1 as $row) {;
                ?>


                        <div class="section-title">
                            <h2>Habilidades</h2>
                            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                        </div>

                        <div class="row skills-content">

                            <div class="col-lg-6">

                                <div class="progress">
                                    <span class="skill"><?php echo $row['nome_habilidades'] ?><i class="val"><?php echo $row['nivel']; ?>%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="progress">
                                    <span class="skill">CSS <i class="val">100%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="progress">
                                    <span class="skill">JavaScript <i class="val">75%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-6">

                                <div class="progress">
                                    <span class="skill">PHP <i class="val">80%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="progress">
                                    <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="progress">
                                    <span class="skill">Photoshop <i class="val">55%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div>

                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <?php
            $pdo_statement = $pdo->prepare("select * from users");
            $pdo_statement->execute();
            $result = $pdo_statement->fetchAll();
            ?>
            <div class="container" data-aos="fade-up">
                <?php

                if (!empty($result)) {
                    foreach ($result as $res2) {;
                ?>

                        <div class="section-title">
                            <h2>Resume</h2>
                            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="resume-title">Sumario</h3>
                                <div class="resume-item pb-0">
                                    <h4><?php echo $res2['nome']; ?></h4>
                                    <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
                                    <ul>
                                        <li><?php echo $res2['cidade'] ?></li>
                                        <li><?php echo $res2['telefone']; ?></li>
                                        <li><?php echo $res2['email']; ?></li>
                                    </ul>
                                </div>

                                <h3 class="resume-title">Educação</h3>
                                <div class="resume-item">
                                    <h4>Master of Fine Arts &amp; Graphic Design</h4>
                                    <h5>2015 - 2016</h5>
                                    <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                                    <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
                                </div>
                                <div class="resume-item">
                                    <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                                    <h5>2010 - 2014</h5>
                                    <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                                    <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="resume-title">Professional Experience</h3>
                                <div class="resume-item">
                                    <h4>Senior graphic design specialist</h4>
                                    <h5>2019 - Present</h5>
                                    <p><em>Experion, New York, NY </em></p>
                                    <ul>
                                        <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                                        <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                                        <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                                        <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
                                    </ul>
                                </div>
                                <div class="resume-item">
                                    <h4>Graphic design specialist</h4>
                                    <h5>2017 - 2018</h5>
                                    <p><em>Stepping Stone Advertising, New York, NY</em></p>
                                    <ul>
                                        <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                                        <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                                        <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                                        <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Alguns de meus trabalhos fotograficos, tanto pessoais quanto profissionais. Fotos de diversos tipo, cenarios e composisões</p>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-other">Other</li>
                            <li data-filter=".filter-nature">Nature</li>
                            <li data-filter=".filter-landscape">Landscape</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-other">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/Hand.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Pessoal</h4>
                                <p>Iphone</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/Hand.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="A prison soul"><i class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-other">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/motor.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Pessoal</h4>
                                <p>Iphone</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/motor.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sunset"><i class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-landscape">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/Purple-sky.JPG" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Camera</h4>
                                <p>Canon EOS T7</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/Purple-sky.JPG" data-gallery="portfolioGallery" class="portfolio-lightbox" title="A beautiful sunset"><i class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-landscape">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/Field.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Celular</h4>
                                <p>Samsung</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/Field.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Field"><i class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-other">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/Street.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Profissional</h4>
                                <p>Canon Sl3</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/Street.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Street of Autumn"><i class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-other">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/Fire.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Profissional</h4>
                                <p>Canon Sl3</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/Fire.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Fire"><i class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-lg-4 col-md-6 portfolio-item filter-landscape">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/Floresta.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Celular</h4>
                                <p>Samsung</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/Floresta.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Forest"><i class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-other">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/Train.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Pessoal</h4>
                                <p>Canon EOS t7i</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/Train.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-nature">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/White-flower.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Camera</h4>
                                <p>Canon Sl3</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/White-flower.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="White Flower"><i class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-nature">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/Pink-flower.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Camera</h4>
                                <p>Canon 70D</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/Pink-flower.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pink Flower"><i class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-nature">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/Pink-flower2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Camera</h4>
                                <p>Canon 70D</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/Pink-flower2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pink Flower"><i class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-nature">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/Yellow-flower.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Camera</h4>
                                <p>Canon 70D</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/Yellow-flower.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Pink Flower"><i class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-landscape">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/Sky-fire.jpeg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Celular</h4>
                                <p>Iphone</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/Sky-fire.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sky on Fire"><i class="bx bx-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->



        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Testemunhas</h2>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/Hiago.jpg" class="testimonial-img" alt="">
                                <h3>Hiago Zolin</h3>
                                <h4>Dba</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/Tiago.jpg" class="testimonial-img" alt="">
                                <h3>Tiago</h3>
                                <h4>Designer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/Gabriel.jpg" class="testimonial-img" alt="">
                                <h3>Gabriel Moreira</h3>
                                <h4>Store Owner</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/Ronaldo.jpg" class="testimonial-img" alt="">
                                <h3>Ronaldo Pires</h3>
                                <h4>Full Stack Developer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/Romario.jpg" class="testimonial-img" alt="">
                                <h3>Romario Pires</h3>
                                <h4>Ceo Geminis</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <?php

                if (!empty($result)) {
                    foreach ($result as $res3) {;
                ?>

                        <div class="section-title">
                            <h2>Contato</h2>
                        </div>

                        <div class="row mt-1">

                            <div class="col-lg-4">
                                <div class="info">
                                    <div class="address">
                                        <i class="bi bi-geo-alt"></i>
                                        <h4>Localização:</h4>
                                        <p><?php echo $res3['cidade']; ?></p>
                                    </div>

                                    <div class="email">
                                        <i class="bi bi-envelope"></i>
                                        <h4>Email:</h4>
                                        <p><?php echo $res3['email'] ?></p>
                                    </div>

                                    <div class="phone">
                                        <i class="bi bi-phone"></i>
                                        <h4>Telefone:</h4>
                                        <p><?php echo $res3['email'] ?></p>
                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-8 mt-5 mt-lg-0">

                                <form action="" method="POST" role="form" class="php-email-form">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <input type="text" name="nome-contato" class="form-control" placeholder="Seu Nome" required>
                                        </div>
                                        <div class="col-md-6 form-group mt-3 mt-md-0">
                                            <input type="email" class="form-control" name="email-contato" placeholder="Seu Email" required>
                                        </div>
                                    </div>

                                    <div class="form-group mt-3">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
                                    </div>
                                    <div class="my-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                    </div>
                                    <div class="text-center"><button type="submit">Enviar Mensagem </button></div>
                                </form>

                            </div>

                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">

            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>