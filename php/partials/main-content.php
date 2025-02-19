    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top navbar-custom">
        <div class="container-fluid">
            <div class="logo">
                <a class="navbar-brand" href="#">
                    <img src="./media/img/logo.png" alt="Logo AB Videomaker">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto capitalize navbar-hover js_NavbarMenu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js_NavbarMenuItem" onclick="navigateToAnchor(this)" href="#skillsSection">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js_NavbarMenuItem" onclick="navigateToAnchor(this)" href="#portfolioSection">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js_NavbarMenuItem" onclick="navigateToAnchor(this)" href="#aboutSection">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js_NavbarMenuItem" onclick="navigateToAnchor(this)" href="#clientsSection">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js_NavbarMenuItem" onclick="navigateToAnchor(this)" href="#pricingSection">Prices</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js_NavbarMenuItem" onclick="navigateToAnchor(this)" href="#contactSection">Contacts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Scroll to top -->
    <div class="position-fixed fixed-bottom mb-5">
        <div class="d-flex justify-content-end mb-5 me-2">
            <button onclick='scrollToTop()' class="text-dark rounded-circle border-0 js_goTop">
                <i class="bi bi-arrow-up-circle-fill fs-1 p-1"></i>
            </button>
        </div>
    </div>

    <!-- Carousel -->
    <header id="introductionCarousel" class="carousel slide bg-carousel carousel-dark" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#introductionCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#introductionCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#introductionCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner bg-carousel-inner">
            <div class="carousel-item active" data-bs-interval="7000">
                <div class="row mx-slider py-slider flex-row-reverse">
                    <div class="col-12 col-md-8">
                        <h1>
                            Antonio Buttiglione <br>
                            UI Designer, Web & Graphic Designer, Videomaker
                        </h1>
                        <h3 class="heading-subtitle">
                            WHO I AM
                        </h3>
                        <p>
                            Hi, my name is Antonio, I'm <span id="age"></span> years old and I've started my career as a
                            video maker. I live in a little town in
                            South of Italy. Scroll down to discover more about me.
                        </p>
                        <a class="js_NavbarMenuItem btn btn-secondary text-white text-uppercase" href="#portfolioSection">Check my latest works</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <img class="img-fluid" src="./media/img/Slider01.png" alt="who I am image">
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="7000">
                <div class="row mx-slider py-slider flex-row-reverse">
                    <div class="col-12 col-md-8">
                        <h2>
                            FIRST OF ALL: BE PROFESSIONAL
                        </h2>
                        <h3 class="heading-subtitle">
                            HOW I WORK
                        </h3>
                        <p>
                            My motto is "Enjoy your job, but be always professional while you do it". I work
                            professionally, but at the same time I like what I do. This helps me to give always the
                            100%.
                        </p>
                        <a class="js_NavbarMenuItem btn btn-secondary text-white text-uppercase" href="#clientsSection">See what who I worked with says</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <img class="img-fluid" src="./media/img/Slider02.png" alt="who I am image">
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="7000">
                <div class="row mx-slider py-slider flex-row-reverse">
                    <div class="col-12 col-md-8">
                        <h2>
                            LOOK FORWARD
                        </h2>
                        <h3 class="heading-subtitle">
                            HOW I WOULD BE
                        </h3>
                        <p>
                            I want to be constantly better than I was, improving my working skills, but I can do that
                            just with the experiences. Every job is an experience for me. An opportunity to be better.
                        </p>
                        <a class="js_NavbarMenuItem btn btn-secondary text-white text-uppercase" href="#contactSection">Contact me for new jobs</a>
                    </div>
                    <div class="col-12 col-md-4">
                        <img class="img-fluid" src="./media/img/Slider03.png" alt="who I am image">
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev custom-carousel-nav-arrow" type="button" data-bs-target="#introductionCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next custom-carousel-nav-arrow" type="button" data-bs-target="#introductionCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </header>

    <!-- Skills -->
    <section id="skillsSection" class="container anchor-section pb-5">
        <div class="row my-3">
            <div class="col-12 border-bottom-line-light my-3">
                <h2 class="text-center text-light">
                    What I Do?
                </h2>
                <h3 class="text-center color-turquoise heading-subtitle">
                    Here's my most important skills: which one do you need?
                </h3>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-12 col-md-4 text-center">
                <div class="row">
                    <div class="col-12">
                        <img class="img-service" src="./media/img/Service3.png" alt="Service Video Making">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <h4 class="color-turquoise">Graphic, UI and Web Design</h4>
                        <p class="text-light">
                            Since I was a young boy I always liked drawing and Graphic Design is one of the best way to
                            express my creativity.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center">
                <div class="row">
                    <div class="col-12">
                        <img class="img-service" src="./media/img/Service1.png" alt="Service Video Making">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <h4 class="color-turquoise">Video Making</h4>
                        <p class="text-light">
                            With my camera I can create lot of videos to tell a story: even your Wedding or your Bar
                            Mitzvah. Mazel tov!
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center">
                <div class="row">
                    <div class="col-12">
                        <img class="img-service" src="./media/img/Service2.png" alt="Service Video Making">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <h4 class="color-turquoise">Photography</h4>
                        <p class="text-light">
                            Do you need a picture? You're lucky. My camera takes pictures too and I know how to use it!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Works Portfolio -->
    <?php include_once("./php/works-section.php"); ?> 
    
    <!-- About Me -->
    <section id="aboutSection" class="container anchor-section pb-5">
        <div class="row my-3">
            <div class="col-12 border-bottom-line-light my-3">
                <h2 class="text-center text-light">
                    Who We Are?
                </h2>
                <h3 class="text-center color-turquoise heading-subtitle">
                    We? Who said "we"? Actually I'm just one person but I'm composed by three people, let me introduce
                    them to you. Relax man, I don't suffer from personality disorder. Maybe.
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <figure class="position-relative team-container">
                    <img class="img-fluid" src="./media/img/Team3.jpg" alt="Team Video Maker">
                    <figcaption class="position-absolute caption-mask">
                        <h3>The Graphic, UI and Web Designer</h3>
                        <p>During my whole working experience I've managed to work in many media fields, I can create
                            Websites, Graphic Designs and User Interfaces.</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-12 col-md-4">
                <figure class="position-relative team-container">
                    <img class="img-fluid" src="./media/img/Team1.jpg" alt="Team Video Maker">
                    <figcaption class="position-absolute caption-mask">
                        <h3>The Video Maker</h3>
                        <p>No. Not the "Video Maker" software, that's for babies. Premiere Pro and After Effects are my
                            favourite weapons.</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-12 col-md-4">
                <figure class="position-relative team-container">
                    <img class="img-fluid" src="./media/img/Team2.jpg" alt="Team Video Maker">
                    <figcaption class="position-absolute caption-mask">
                        <h3>The Photographer</h3>
                        <p>"Give me a lever and I shall move the world." I say: "Give me a camera and I will shoot the
                            world. In lot of RAW files."</p>
                    </figcaption>
                </figure>
            </div>

        </div>
        <div class="row">
            <div class="col-12 my-3 text-center">
                <img class="img-service" src="./media/img/About.png" alt="About Img Icon">
                <h2 class="text-center color-turquoise">
                    About Me
                </h2>
                <h3 class="text-center text-light heading-subtitle">
                    My story? Really pal? Well, you just need to know that my skill are borned from my passion for
                    drawing. When I was 19, after the high school, I left my home town in South of Italy to reach one of
                    the best capital in the world, Rome. There I learned how to make a video, take a picture and create
                    good graphic designs. My skills are steadily improving, that's why I love my job.
                </h3>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-12 col-md-6">
                <h3 class="color-turquoise">Skills</h3>
                <div class="progress progress-custom my-4" role="progressbar" aria-label="Example with label" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-custom" style="width: 90%">Html & Css</div>
                </div>
                <div class="progress progress-custom my-4" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-custom" style="width: 70%">Web Design & UI/UX Design</div>
                </div>
                <div class="progress progress-custom my-4" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-custom" style="width: 80%">Graphic Design</div>
                </div>
                <div class="progress progress-custom my-4" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-custom" style="width: 65%">Photograpy & Video Making</div>
                </div>
            </div>
            <div class="col-12 col-md-6 bg-alternate text-center d-flex flex-column justify-content-center">
                <h3>
                    We're looking for a job
                </h3>
                <p>
                    Hey you! The three people up here need to work... if you hire one of them you'll make happy all of
                    them!
                </p>
                <a class="button mb-4" href="./media/Antonio_Buttiglione_resume_CV-low.pdf" target="_blank">
                    Download My Resume CV!
                </a>
                <!--                 <a class="button" href="#contactSection">
                    Contact Me!
                </a> -->
            </div>
        </div>
    </section>

    <!-- Clients -->
    <section id="clientsSection" class="anchor-section pb-5 gradient-custom">
        <div class="container mb-5">
            <div class="row my-3">
                <div class="col-12 border-bottom-line-light my-3">
                    <h2 class="text-center text-light">
                        What Clients Say?
                    </h2>
                    <h3 class="text-center text-light heading-subtitle">
                        The best business card for people like me is what my past clients think about me, here are some.
                    </h3>
                </div>
                <div class="card client-slider-card">
                    <div class="card-body py-5 d-flex align-items-center">
                        <!-- Carousel wrapper -->
                        <div id="carouselDarkVariant" class="carousel carousel-dark" data-mdb-ride="carousel">
                            <!-- Indicators -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselDarkVariant" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselDarkVariant" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselDarkVariant" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <!-- Indicators -->
                            <!-- Inner -->
                            <div class="carousel-inner pt-2 pb-5">
                                <!-- Single item -->
                                <div class="carousel-item active">
                                    <div class="row justify-content-center">
                                        <div class="col-8 col-md-8 col-lg-9 col-xl-8">
                                            <div class="d-flex flex-column flex-md-row align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="./media/img/clients/Client1.png" class="rounded-circle mb-4 mb-lg-0 shadow-2" alt="Client 1 Picture" width="90" height="90">
                                                </div>
                                                <div class="flex-grow-1 ms-4 ps-3">
                                                    <figure>
                                                        <blockquote class="blockquote mb-4">
                                                            <p>
                                                                <i class="bi bi-quote text-dark fs-3 me-2"></i>
                                                                <span class="font-italic">He collaborated in the
                                                                    Communication Area's staff, he worked as maker and
                                                                    manager of Company advertising and information
                                                                    campaign, he was responsible for coordination with
                                                                    the production department and administrative
                                                                    department.</span>
                                                            </p>
                                                        </blockquote>
                                                        <figcaption class="blockquote-footer">
                                                            Giuseppe Scaramuzzi - Head of Communications in <cite title="Source Title">in MV Line</cite>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single item -->
                                <div class="carousel-item">
                                    <div class="row justify-content-center">
                                        <div class="col-8 col-md-8 col-lg-9 col-xl-8">
                                            <div class="d-flex flex-column flex-md-row align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="./media/img/clients/Client2_hide.png" class="rounded-circle mb-4 mb-lg-0 shadow-2" alt="Client 2 Picture" width="90" height="90">
                                                </div>
                                                <div class="flex-grow-1 ms-4 ps-3">
                                                    <figure>
                                                        <blockquote class="blockquote mb-4">
                                                            <p>
                                                                <i class="bi bi-quote text-dark fs-3 me-2"></i>
                                                                <span class="font-italic">Creativity at work and good
                                                                    teamworking skill made Antonio, for over a year, a
                                                                    valuable collaborator for the Corporate
                                                                    Communication sector of Associazione Centro
                                                                    ELIS.</span>
                                                            </p>
                                                        </blockquote>
                                                        <figcaption class="blockquote-footer">
                                                            Fortunato Perez - Head of Communications <cite title="Source Title">in Associazione Centro ELIS</cite>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single item -->
                                <div class="carousel-item">
                                    <div class="row justify-content-center">
                                        <div class="col-8 col-md-8 col-lg-9 col-xl-8">
                                            <div class="d-flex flex-column flex-md-row align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="./media/img/clients/Client3.png" class="rounded-circle mb-4 mb-lg-0 shadow-2" alt="Client 3 Picture" width="90" height="90">
                                                </div>
                                                <div class="flex-grow-1 ms-4 ps-3">
                                                    <figure>
                                                        <blockquote class="blockquote mb-4">
                                                            <p>
                                                                <i class="bi bi-quote text-dark fs-3 me-2"></i>
                                                                <span class="font-italic">He had the ability to be a
                                                                    real problem solver and he reduced the complexity of
                                                                    procedural dynamics in a short time, he snatched
                                                                    with interest the fundamental concepts of procedural
                                                                    programming and objects programming.</span>
                                                            </p>
                                                        </blockquote>
                                                        <figcaption class="blockquote-footer">
                                                            Stefano Caruso - Former Web Master in <cite title="Source Title">in Rome Reports
                                                                Magazine</cite>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Inner -->
                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselDarkVariant" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselDarkVariant" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- Carousel wrapper -->
                    </div>
                </div>
            </div>
            <div class="row mt-4 g-3 align-items-baseline justify-content-center">
                <div class="col-6 col-md-3">
                    <img class="img-fluid w-100" src="./media/img/clients/ClientLogo01.png" alt="">
                </div>
                <div class="col-6 col-md-3">
                    <img class="img-fluid w-100" src="./media/img/clients/ClientLogo02.png" alt="">
                </div>
                <div class="col-6 col-md-3">
                    <img class="img-fluid w-100" src="./media/img/clients/ClientLogo03.png" alt="">
                </div>
                <div class="col-6 col-md-3">
                    <img class="img-fluid w-100" src="./media/img/clients/ClientLogo04.png" alt="">
                </div>
                <div class="col-6 col-md-3">
                    <img class="img-fluid w-100" src="./media/img/clients/ClientLogo05.png" alt="">
                </div>
                <div class="col-6 col-md-3">
                    <img class="img-fluid w-100" src="./media/img/clients/ClientLogo06.png" alt="">
                </div>
                <div class="col-6 col-md-3">
                    <img class="img-fluid w-100" src="./media/img/clients/ClientLogo07.png" alt="">
                </div>
                <div class="col-6 col-md-3 bg-dark">
                    <img class="img-fluid w-100" src="./media/img/clients/ClientLogo08.png" alt="">
                </div>
                <div class="col-6 col-md-3">
                    <img class="img-fluid w-100" src="./media/img/clients/ClientLogo09.png" alt="">
                </div>
                <div class="col-6 col-md-3 bg-light">
                    <img class="img-fluid w-100" src="./media/img/clients/ClientLogo10.png" alt="">
                </div>
                <div class="col-6 col-md-3">
                    <img class="img-fluid w-100" src="./media/img/clients/ClientLogo11.png" alt="">
                </div>
                <div class="col-6 col-md-3">
                    <h3 class="text-light text-center"><strong>BE MY NEXT CLIENT!</strong></h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section id="pricingSection" class="bg-alternate anchor-section pb-5">
        <div class="container pb-5">
            <div class="row my-3">
                <div class="col-12 border-bottom-line-dark">
                    <h2 class="text-center">
                        Prices
                    </h2>
                    <h3 class="text-center heading-subtitle">
                        Dulcis in fundo, as latin said. This prices refers to a single job, for a longer working
                        experience just contact me.
                    </h3>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <div class="row row-gap-4">
                        <div class="col-lg-3">
                            <div class="card mb-5 mb-lg-0 h-100">
                                <div class="card-header-custom p-4">
                                    <h3 class="card-title text-light text-uppercase text-center">WEB & UI DESIGN</h3>
                                </div>
                                <div class="card-body text-center card-body-custom d-flex flex-column justify-content-center">
                                    <p class="price">
                                        from 549 €
                                    </p>
                                    <hr>
                                    <p>
                                        Excluding web space rent and premium platforms subscriptions
                                    </p>
                                    <hr>
                                    <p>
                                        6 days per week support <br> (until end of the job)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-5 mb-lg-0 h-100">
                                <div class="card-header-custom p-4">
                                    <h3 class="card-title text-light text-uppercase text-center">GRAPHIC DESIGN</h3>
                                </div>
                                <div class="card-body text-center card-body-custom d-flex flex-column justify-content-center">
                                    <p class="price">
                                        from 199 €
                                    </p>
                                    <hr>
                                    <p>
                                        Excluding tools rent
                                    </p>
                                    <hr>
                                    <p>
                                        6 days per week support <br> (until end of the job)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-5 mb-lg-0 h-100">
                                <div class="card-header-custom p-4">
                                    <h3 class="card-title text-light text-uppercase text-center">VIDEO MAKING</h3>
                                </div>
                                <div class="card-body text-center card-body-custom d-flex flex-column justify-content-center">
                                    <p class="price">
                                        from 249 €
                                    </p>
                                    <hr>
                                    <p>
                                        Excluding tools rent
                                    </p>
                                    <hr>
                                    <p>
                                        6 days per week support <br> (until end of the job)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-5 mb-lg-0 h-100">
                                <div class="card-header-custom p-4">
                                    <h3 class="card-title text-light text-uppercase text-center">PHOTOGRAPHY</h3>
                                </div>
                                <div class="card-body text-center card-body-custom d-flex flex-column justify-content-center">
                                    <p class="price">
                                        from 99 €
                                    </p>
                                    <hr>
                                    <p>
                                        Excluding tools rent
                                    </p>
                                    <hr>
                                    <p>
                                        6 days per week support <br> (until end of the job)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contacts -->
    <section id="contactSection" class="anchor-section">
        <div class="container">
            <div class="row my-3">
                <div class="col-12 border-bottom-line-light">
                    <h2 class="text-center text-light">
                        Contact Me
                    </h2>
                    <h3 class="text-center color-turquoise heading-subtitle">
                        Would you like to contact me about a job? Just do it!
                    </h3>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-google-maps py-4">
            <div class="container">
                <div class="row my-3">
                    <div class="col-12 col-md-5 bg-alternate">
                        <form id="contact-form" class="text-center" action="./php/mail.php" method="POST">
                            <strong>This form is under maintainance, if you need to contact me check the email address
                                in the footer or contact me via social networks</strong>
                            <div class="my-3">
                                <input type="text" class="form-control" name="name" id="formName" aria-describedby="nameHelp" placeholder="* Your name..." required>
                            </div>
                            <div class="my-3">
                                <input type="email" class="form-control" name="email" id="formEmail" aria-describedby="emailHelp" placeholder="* Your email..." required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="comment" id="formComments" rows="3" placeholder="* Comments..." required></textarea>
                            </div>
                            <button class="g-recaptcha button my-3" data-sitekey="6LdqIcYpAAAAAPQ8hkYOGcKJL5K8WtmKRkxZMpbF" data-callback='onSubmit' data-action='submit'>Send message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>