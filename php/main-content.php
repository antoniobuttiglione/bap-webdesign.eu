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
    <section id="portfolioSection" class="bg-alternate anchor-section pb-5">
        <div class="container">
            <div class="row my-3">
                <div class="col-12 border-bottom-line-dark">
                    <h2 class="text-center">
                        Have you seen my works?
                    </h2>
                    <h3 class="text-center heading-subtitle">
                        Every parent should be proud of his children. My works. My children. Here's some. Please choose
                        one of
                        the categories down here.
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills nav-fill portfolio-nav-pills">
                        <li class="nav-item">
                            <button class="nav-link button active js_portfolioNavBtn portfolio-filter-btn" onclick="filterPortfolio(this.id)" id="allProjects">All</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link button js_portfolioNavBtn" onclick="filterPortfolio(this.id)" id="ux">UX Design</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link button js_portfolioNavBtn" onclick="filterPortfolio(this.id)" id="graphic">Graphic Design</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link button js_portfolioNavBtn" onclick="filterPortfolio(this.id)" id="video">Video</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link button js_portfolioNavBtn" onclick="filterPortfolio(this.id)" id="photo">Photo</button>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Portfolio Preview Container-->
            <div id="portfolioItemDetails" class="anchor-section">
                <div class="row bg-black single-project" data-js-project-id="1" style="display:none;">
                    <div class="col-12 col-md-6 p-0 js_portfolioPreview">
                        <img src="./media/img/portfolio/Portfolio02.jpg" alt="Old guy in Dublin">
                    </div>
                    <div class="col-12 col-md-6 py-3 js_portfolioDescription text-light">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Street photography</h3>
                                <span class="js_closeSingleProject close float-end">
                                    <i class="bi bi-x-circle fs-3"></i>
                                </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Date</span>July 2013
                                </div>
                                <div>
                                    <span>Skills</span>Photography, Photo editing
                                </div>
                            </div>
                            <p>
                                This is a picture taken during my last holiday in Dublin. The street artist was
                                performing in Grafton Street.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row bg-black single-project" data-js-project-id="2" style="display:none;">
                    <div class="col-12 col-md-6 p-0 js_portfolioPreview">
                        <div class="w3-content w3-display-container">
                            <img class="mySlides" src="./media/img/portfolio/0-Homepage.jpg" style="width:100%; display:block;">
                            <img class="mySlides" src="./media/img/portfolio/1-Basic_Search.jpg" style="width:100%; display:none;">
                            <img class="mySlides" src="./media/img/portfolio/2-Advanced_Search_Empty_Form_Multiple_Keyword.jpg" style="width:100%; display:none;">
                            <img class="mySlides" src="./media/img/portfolio/6-Results_Table_with_Alert.jpg" style="width:100%; display:none;">
                            <img class="mySlides" src="./media/img/portfolio/10-Result_Detail.jpg" style="width:100%; display:none;">

                            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 'mySlides')">&#10094;</button>
                            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 'mySlides')">&#10095;</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 py-3 js_portfolioDescription text-light">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>UX Design Project</h3>
                                <span class="js_closeSingleProject close float-end">
                                    <i class="bi bi-x-circle fs-3"></i>
                                </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Date</span>May 2022
                                </div>
                                <div>
                                    <span>Skills</span>UX Design, UX research and Web Design
                                </div>
                            </div>
                            <p>
                                As freelance UX Designer in NTT Data I worked on redesigning FE and BE of the United
                                Nations Juris Database.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row bg-black single-project" data-js-project-id="3" style="display:none;">
                    <div class="col-12 col-md-6 p-0 js_portfolioPreview">
                        <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fvicolodellacultura%2Fvideos%2F1134893469870767%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                    </div>
                    <div class="col-12 col-md-6 py-3 js_portfolioDescription text-light">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Corto Movie for Adda pass&agrave; 'a nuttata</h3>
                                <span class="js_closeSingleProject close float-end">
                                    <i class="bi bi-x-circle fs-3"></i>
                                </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Date</span>July 2014
                                </div>
                                <div>
                                    <span>Skills</span>Video shooting & mounting, Visual Effects, Post-production
                                </div>
                            </div>
                            <p>
                                Corto Movie, realized with Adda passà 'a nuttata no profit association, about abusive
                                valet racket in Italy, especially in Napoli.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row bg-black single-project" data-js-project-id="4" style="display:none;">
                    <div class="col-12 col-md-6 p-0 js_portfolioPreview">
                        <img src="./media/img/portfolio/Portfolio03.jpg" alt="Old guy in Dublin">
                    </div>
                    <div class="col-12 col-md-6 py-3 js_portfolioDescription text-light">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>iMatik Catalogue</h3>
                                <span class="js_closeSingleProject close float-end">
                                    <i class="bi bi-x-circle fs-3"></i>
                                </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Client</span>MV Line
                                </div>
                                <div>
                                    <span>Date</span>November 2014
                                </div>
                                <div>
                                    <span>Skills</span>Graphic Design and Page Styles with InDesign
                                </div>
                            </div>
                            <p>
                                Catalogue of electric motors for roller shutters and roller blinds of iMatik
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row bg-black single-project" data-js-project-id="5" style="display:none;">
                    <div class="col-12 col-md-6 p-0 js_portfolioPreview">
                        <img src="./media/img/portfolio/Portfolio05.jpg" alt="Old guy in Dublin">
                    </div>
                    <div class="col-12 col-md-6 py-3 js_portfolioDescription text-light">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Street photography</h3>
                                <span class="js_closeSingleProject close float-end">
                                    <i class="bi bi-x-circle fs-3"></i>
                                </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Date</span>July 2013
                                </div>
                                <div>
                                    <span>Skills</span>Photography, Photo editing
                                </div>
                            </div>
                            <p>
                                This is a picture taken during my last holiday in Dublin.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row bg-black single-project" data-js-project-id="6" style="display:none;">
                    <div class="col-12 col-md-6 p-0 js_portfolioPreview">
                        <img src="./media/img/portfolio/Portfolio06.jpg" alt="Old guy in Dublin">
                    </div>
                    <div class="col-12 col-md-6 py-3 js_portfolioDescription text-light">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Newspaper Advertising</h3>
                                <span class="js_closeSingleProject close float-end">
                                    <i class="bi bi-x-circle fs-3"></i>
                                </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Client</span>MV Line
                                </div>
                                <div>
                                    <span>Date</span>July 2014
                                </div>
                                <div>
                                    <span>Skills</span>Graphic Design and Page Styles with InDesign
                                </div>
                            </div>
                            <p>
                                Advertising of "Irene" flyscreen by MV Line published on the italian newspaper "La
                                Repubblica"
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row bg-black single-project" data-js-project-id="7" style="display:none;">
                    <div class="col-12 col-md-6 p-0 js_portfolioPreview">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/4DUFi_d1IlM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-12 col-md-6 py-3 js_portfolioDescription text-light">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Self-made Video</h3>
                                <span class="js_closeSingleProject close float-end">
                                    <i class="bi bi-x-circle fs-3"></i>
                                </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Date</span>December 2014
                                </div>
                                <div>
                                    <span>Skills</span>Video shooting & mounting, Post-production
                                </div>
                            </div>
                            <p>
                                Video made all by myself about the Olive Oil, with my grandfather as actor and Oil
                                producer, the video is based on the cooking scene of the most popular tv show in the
                                world, Breaking Bad.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row bg-black single-project" data-js-project-id="8" style="display:none;">
                    <div class="col-12 col-md-6 p-0 js_portfolioPreview">
                        <img src="./media/img/portfolio/Portfolio08.jpg" alt="Old guy in Dublin">
                    </div>
                    <div class="col-12 col-md-6 py-3 js_portfolioDescription text-light">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Street photography</h3>
                                <span class="js_closeSingleProject close float-end">
                                    <i class="bi bi-x-circle fs-3"></i>
                                </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Date</span>December 2014
                                </div>
                                <div>
                                    <span>Skills</span>Photography, Photo editing
                                </div>
                            </div>
                            <p>
                                Picture taken at Plaza Mayor in Salamanca during my last studing travel in Spain.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row bg-black single-project" data-js-project-id="9" style="display:none;">
                    <div class="col-12 col-md-6 p-0 js_portfolioPreview">
                        <img src="./media/img/portfolio/Portfolio09.jpg" alt="Old guy in Dublin">
                    </div>
                    <div class="col-12 col-md-6 py-3 js_portfolioDescription text-light">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Newspaper Advertising</h3>
                                <span class="js_closeSingleProject close float-end">
                                    <i class="bi bi-x-circle fs-3"></i>
                                </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Client</span>MV Line
                                </div>
                                <div>
                                    <span>Date</span>September 2014
                                </div>
                                <div>
                                    <span>Skills</span>Graphic Design and Page Styles with InDesign
                                </div>
                            </div>
                            <p>
                                Advertising panel with sizes 150x170 cm for TecnoChiusura of the "Phantomatik" flyscreen
                                by MV Line.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row bg-black single-project" data-js-project-id="10" style="display:none;">
                    <div class="col-12 col-md-6 p-0 js_portfolioPreview">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ETBwv6qC41s?si=T7RLj8pHiv4LFKmW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="col-12 col-md-6 py-3 js_portfolioDescription text-light">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Self-made Video</h3>
                                <span class="js_closeSingleProject close float-end">
                                    <i class="bi bi-x-circle fs-3"></i>
                                </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Date</span>March 2010
                                </div>
                                <div>
                                    <span>Skills</span>Video Editing, Motion Design
                                </div>
                            </div>
                            <p>
                                Video made all by myself for a Multimedia course test
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row bg-black single-project" data-js-project-id="11" style="display:none;">
                    <div class="col-12 col-md-6 p-0 js_portfolioPreview">
                        <img src="./media/img/portfolio/Portfolio10.jpg" alt="Old guy in Dublin">
                    </div>
                    <div class="col-12 col-md-6 py-3 js_portfolioDescription text-light">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Street photography</h3>
                                <span class="js_closeSingleProject close float-end">
                                    <i class="bi bi-x-circle fs-3"></i>
                                </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Date</span>August 2015
                                </div>
                                <div>
                                    <span>Skills</span>Photography, Photo editing
                                </div>
                            </div>
                            <p>
                                Picture taken at Monte Carlo during my last studing travel in France.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row bg-black single-project" data-js-project-id="12" style="display:none;">
                    <div class="col-12 col-md-6 p-0 js_portfolioPreview">
                        <img src="./media/img/portfolio/Portfolio11.jpg" alt="Old guy in Dublin">
                    </div>
                    <div class="col-12 col-md-6 py-3 js_portfolioDescription text-light">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Street photography</h3>
                                <span class="js_closeSingleProject close float-end">
                                    <i class="bi bi-x-circle fs-3"></i>
                                </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Date</span>August 2015
                                </div>
                                <div>
                                    <span>Skills</span>Photography, Photo editing
                                </div>
                            </div>
                            <p>
                                Picture taken at Juan-les-Pins in Antibes during my last studing travel in France.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row bg-black single-project" data-js-project-id="13" style="display:none;">
                    <div class="col-12 col-md-6 p-0 js_portfolioPreview">
                        <iframe src="https://player.vimeo.com/video/192421725?h=53d79e51c0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-12 col-md-6 py-3 js_portfolioDescription text-light">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Self-made Video</h3>
                                <span class="js_closeSingleProject close float-end">
                                    <i class="bi bi-x-circle fs-3"></i>
                                </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Client</span>The Digital Box S.p.A.
                                </div>
                                <div>
                                    <span>Date</span>March 2017
                                </div>
                                <div>
                                    <span>Skills</span>Video shooting & editing, Post-production
                                </div>
                            </div>
                            <p>
                                Corporate video created for The Digital Box company to promote the ADA Platform, main
                                product of the company
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row bg-black single-project" data-js-project-id="14" style="display:none;">
                    <div class="col-12 col-md-6 p-0 js_portfolioPreview">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/u0dm_gJB7-A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-12 col-md-6 py-3 js_portfolioDescription text-light">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Self-made Video</h3>
                                <span class="js_closeSingleProject close float-end">
                                    <i class="bi bi-x-circle fs-3"></i>
                                </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Date</span>May 2017
                                </div>
                                <div>
                                    <span>Skills</span>Video shooting & editing, Post-production
                                </div>
                            </div>
                            <p>
                                This is a video made by myself during the procession of the Patron Saint in my town,
                                Gioia del Colle.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row bg-black single-project" data-js-project-id="15" style="display:none;">
                    <div class="col-12 col-md-6 p-0 js_portfolioPreview">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/f0JFWsSom8w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-12 col-md-6 py-3 js_portfolioDescription text-light">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Self-made Video</h3>
                                <span class="js_closeSingleProject close float-end">
                                    <i class="bi bi-x-circle fs-3"></i>
                                </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Date</span>August 2017
                                </div>
                                <div>
                                    <span>Skills</span>Video shooting & editing, Post-production
                                </div>
                            </div>
                            <p>
                                This is a video made by myself and submitted to the "Accademia Mediterranea del Cinema"
                                for the contest "Nonostante la Xylella".
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row bg-black single-project" data-js-project-id="16" style="display:none;">
                    <div class="col-12 col-md-6 p-0 js_portfolioPreview">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/tx3PsRI1ssU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-12 col-md-6 py-3 js_portfolioDescription text-light">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Produced Corto Trailer</h3>
                                <span class="js_closeSingleProject close float-end">
                                    <i class="bi bi-x-circle fs-3"></i>
                                </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Date</span>December 2022
                                </div>
                                <div>
                                    <span>Skills</span>Video shooting & editing, Post-production
                                </div>
                            </div>
                            <p>
                                A brief introduction made with a video of the highlights during a concert made by this
                                Ensemble Resonare Fibris. Shooting and Editing made by me
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row bg-black single-project" data-js-project-id="17" style="display:none;">
                    <div class="col-12 col-md-6 p-0 js_portfolioPreview">
                        <div class="w3-content w3-display-container">
                            <img class="mySlides2" src="./media/img/portfolio/Login_form.png" style="width:100%; display:block;">
                            <img class="mySlides2" src="./media/img/portfolio/Registration_form.png" style="width:100%; display:none;">
                            <img class="mySlides2" src="./media/img/portfolio/First_help_overlay.png" style="width:100%; display:none;">
                            <img class="mySlides2" src="./media/img/portfolio/Homepage_dashboard.png" style="width:100%; display:none;">
                            <img class="mySlides2" src="./media/img/portfolio/Homepage_toolbar.png" style="width:100%; display:none;">
                            <img class="mySlides2" src="./media/img/portfolio/Internal_page_1.png" style="width:100%; display:none;">
                            <img class="mySlides2" src="./media/img/portfolio/Internal_page_2.png" style="width:100%; display:none;">
                            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 'mySlides2')">&#10094;</button>
                            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 'mySlides2')">&#10095;</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 py-3 js_portfolioDescription text-light">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>Web & UI Design Project</h3>
                                <span class="js_closeSingleProject close float-end">
                                    <i class="bi bi-x-circle fs-3"></i>
                                </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Date</span>April 2017
                                </div>
                                <div>
                                    <span>Skills</span>UX Design, UX research and Web Design
                                </div>
                            </div>
                            <p>
                                Working in the Web Design Unit at The Digital Box S.p.A. and creating, among the rest,
                                the main User Interface of ADA Platform.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row bg-black single-project" data-js-project-id="18" style="display:none;">
                    <div class="col-12 col-md-6 p-0 js_portfolioPreview">
                        <div class="w3-content w3-display-container">
                            <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="800" height="450" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2FLlkQZk0BmWusObdkjoMA6f%2Fw.academy%3Fpage-id%3D1%253A5%26type%3Ddesign%26node-id%3D841-6471%26viewport%3D-943%252C-521%252C0.35%26t%3DWZO56WlFyivA3Frf-1%26scaling%3Dcontain%26starting-point-node-id%3D494%253A4658%26mode%3Ddesign" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 py-3 js_portfolioDescription text-light">
                        <div class="project-description">
                            <div class="project-title clearfix">
                                <h3>UX/UI Project Work</h3>
                                <span class="js_closeSingleProject close float-end">
                                    <i class="bi bi-x-circle fs-3"></i>
                                </span>
                            </div>
                            <div class="project-info">
                                <div>
                                    <span>Date</span>March 2024
                                </div>
                                <div>
                                    <span>Skills</span>UI Design, UX research, Prototyping with Figma
                                </div>
                            </div>
                            <p>
                                Through a UX/UI Course, I've managed to work with my course team on doing a research on
                                a website and a learning platform for w.academy. Open the prototype in full screen mode
                                for a better experience.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Preview Container End-->

            <!-- Portfolio Thumbs Container-->
            <div class="row my-4 gy-5">
                <div class="col-12 col-md-4 js_portfolioThumb" data-js-category="ux">
                    <div class="position-relative overlay-animation">
                        <div class="plus position-absolute text-center">
                            <a href="#portfolioItemDetails" class="js_openSingleProject" onclick="openSingleProject(this)" data-js-preview-id="18">
                                <i class="bi bi-plus-circle text-light"></i>
                            </a>
                        </div>
                        <figure class="mb-0">
                            <div class="portfolio-thumb-img">
                                <img class="w-100" src="./media/img/portfolio/Homepage_wacademy.png" alt="w.academy home preview">
                            </div>
                            <figcaption class="bg-black text-center p-1">
                                <p class="text-light m-0">
                                    UX/UI Design
                                </p>
                                <p class="color-turquoise">
                                    w.academy Website & Learning platform
                                </p>
                            </figcaption>
                        </figure>
                        <div class="position-absolute overlay-black">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 js_portfolioThumb" data-js-category="ux">
                    <div class="position-relative overlay-animation">
                        <div class="plus position-absolute text-center">
                            <a href="#portfolioItemDetails" class="js_openSingleProject" onclick="openSingleProject(this)" data-js-preview-id="17">
                                <i class="bi bi-plus-circle text-light"></i>
                            </a>
                        </div>
                        <figure class="mb-0">
                            <div class="portfolio-thumb-img">
                                <img class="w-100" src="./media/img/portfolio/Homepage_toolbar.png" alt="ADA Platform Preview">
                            </div>
                            <figcaption class="bg-black text-center p-1">
                                <p class="text-light m-0">
                                    Web & UI Design
                                </p>
                                <p class="color-turquoise">
                                    ADA Mobile Engagement Platform
                                </p>
                            </figcaption>
                        </figure>
                        <div class="position-absolute overlay-black">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 js_portfolioThumb" data-js-category="ux">
                    <div class="position-relative overlay-animation">
                        <div class="plus position-absolute text-center">
                            <a href="#portfolioItemDetails" class="js_openSingleProject" onclick="openSingleProject(this)" data-js-preview-id="2">
                                <i class="bi bi-plus-circle text-light"></i>
                            </a>
                        </div>
                        <figure class="mb-0">
                            <div class="portfolio-thumb-img">
                                <img class="w-100" src="./media/img/portfolio/0-Homepage.jpg" alt="United Nations Juris DB Preview">
                            </div>
                            <figcaption class="bg-black text-center p-1">
                                <p class="text-light m-0">
                                    UX Design
                                </p>
                                <p class="color-turquoise">
                                    United Nations Juris DB
                                </p>
                            </figcaption>
                        </figure>
                        <div class="position-absolute overlay-black">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 js_portfolioThumb" data-js-category="video">
                    <div class="position-relative overlay-animation">
                        <div class="plus position-absolute text-center">
                            <a href="#portfolioItemDetails" class="js_openSingleProject" onclick="openSingleProject(this)" data-js-preview-id="3">
                                <i class="bi bi-plus-circle text-light"></i>
                            </a>
                        </div>
                        <figure class="mb-0">
                            <div class="portfolio-thumb-img">
                                <img class="w-100" src="./media/img/portfolio/Park-fiction-preview.jpg" alt="Park Fiction Corto Movie Preview">
                            </div>
                            <figcaption class="bg-black text-center p-1">
                                <p class="text-light m-0">
                                    Video Shooting and Editing
                                </p>
                                <p class="color-turquoise">
                                    Corto movie "Park Fiction"
                                </p>
                            </figcaption>
                        </figure>
                        <div class="position-absolute overlay-black">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 js_portfolioThumb" data-js-category="photo">
                    <div class="position-relative overlay-animation">
                        <div class="plus position-absolute text-center">
                            <a href="#portfolioItemDetails" class="js_openSingleProject" onclick="openSingleProject(this)" data-js-preview-id="1">
                                <i class="bi bi-plus-circle text-light"></i>
                            </a>
                        </div>
                        <figure class="mb-0">
                            <div class="portfolio-thumb-img">
                                <img class="w-100" src="./media/img/portfolio/Portfolio02.jpg" alt="Old guy in Dublin">
                            </div>
                            <figcaption class="bg-black text-center p-1">
                                <p class="text-light m-0">
                                    Street photo in Dublin
                                </p>
                                <p class="color-turquoise">
                                    Street artist on Grafton Street
                                </p>
                            </figcaption>
                        </figure>
                        <div class="position-absolute overlay-black">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 js_portfolioThumb" data-js-category="graphic">
                    <div class="position-relative overlay-animation">
                        <div class="plus position-absolute text-center">
                            <a href="#portfolioItemDetails" class="js_openSingleProject" onclick="openSingleProject(this)" data-js-preview-id="4">
                                <i class="bi bi-plus-circle text-light"></i>
                            </a>
                        </div>
                        <figure class="mb-0">
                            <div class="portfolio-thumb-img">
                                <img class="w-100" src="./media/img/portfolio/Portfolio03.jpg" alt="Old guy in Dublin">
                            </div>
                            <figcaption class="bg-black text-center p-1">
                                <p class="text-light m-0">
                                    iMatik catalogue
                                </p>
                                <p class="color-turquoise">
                                    Products catalogue for iMatik
                                </p>
                            </figcaption>
                        </figure>
                        <div class="position-absolute overlay-black">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 js_portfolioThumb" data-js-category="photo">
                    <div class="position-relative overlay-animation">
                        <div class="plus position-absolute text-center">
                            <a href="#portfolioItemDetails" class="js_openSingleProject" onclick="openSingleProject(this)" data-js-preview-id="5">
                                <i class="bi bi-plus-circle text-light"></i>
                            </a>
                        </div>
                        <figure class="mb-0">
                            <div class="portfolio-thumb-img">
                                <img class="w-100" src="./media/img/portfolio/Portfolio05.jpg" alt="Sax player in Dublin">
                            </div>
                            <figcaption class="bg-black text-center p-1">
                                <p class="text-light m-0">
                                    Street photo in Dublin
                                </p>
                                <p class="color-turquoise">
                                    Sax player
                                </p>
                            </figcaption>
                        </figure>
                        <div class="position-absolute overlay-black">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 js_portfolioThumb" data-js-category="graphic">
                    <div class="position-relative overlay-animation">
                        <div class="plus position-absolute text-center">
                            <a href="#portfolioItemDetails" class="js_openSingleProject" onclick="openSingleProject(this)" data-js-preview-id="6">
                                <i class="bi bi-plus-circle text-light"></i>
                            </a>
                        </div>
                        <figure class="mb-0">
                            <div class="portfolio-thumb-img">
                                <img class="w-100" src="./media/img/portfolio/Portfolio06.jpg" alt="Old guy in Dublin">
                            </div>
                            <figcaption class="bg-black text-center p-1">
                                <p class="text-light m-0">
                                    MV Line Advertisement
                                </p>
                                <p class="color-turquoise">
                                    Product "Irene" Ad
                                </p>
                            </figcaption>
                        </figure>
                        <div class="position-absolute overlay-black">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 js_portfolioThumb" data-js-category="video">
                    <div class="position-relative overlay-animation">
                        <div class="plus position-absolute text-center">
                            <a href="#portfolioItemDetails" class="js_openSingleProject" onclick="openSingleProject(this)" data-js-preview-id="7">
                                <i class="bi bi-plus-circle text-light"></i>
                            </a>
                        </div>
                        <figure class="mb-0">
                            <div class="portfolio-thumb-img">
                                <img class="w-100" src="http://img.youtube.com/vi/4DUFi_d1IlM/mqdefault.jpg" alt="Breaking Food Video Preview">
                            </div>
                            <figcaption class="bg-black text-center p-1">
                                <p class="text-light m-0">
                                    Video Shooting and Editing
                                </p>
                                <p class="color-turquoise">
                                    Breaking Bad cooking scene
                                </p>
                            </figcaption>
                        </figure>
                        <div class="position-absolute overlay-black">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 js_portfolioThumb" data-js-category="photo">
                    <div class="position-relative overlay-animation">
                        <div class="plus position-absolute text-center">
                            <a href="#portfolioItemDetails" class="js_openSingleProject" onclick="openSingleProject(this)" data-js-preview-id="8">
                                <i class="bi bi-plus-circle text-light"></i>
                            </a>
                        </div>
                        <figure class="mb-0">
                            <div class="portfolio-thumb-img">
                                <img class="w-100" src="./media/img/portfolio/Portfolio08.jpg" alt="My friend in Plaza Mayor">
                            </div>
                            <figcaption class="bg-black text-center p-1">
                                <p class="text-light m-0">
                                    Street photo in Salamanca
                                </p>
                                <p class="color-turquoise">
                                    My friend in Plaza Mayor
                                </p>
                            </figcaption>
                        </figure>
                        <div class="position-absolute overlay-black">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 js_portfolioThumb" data-js-category="graphic">
                    <div class="position-relative overlay-animation">
                        <div class="plus position-absolute text-center">
                            <a href="#portfolioItemDetails" class="js_openSingleProject" onclick="openSingleProject(this)" data-js-preview-id="9">
                                <i class="bi bi-plus-circle text-light"></i>
                            </a>
                        </div>
                        <figure class="mb-0">
                            <div class="portfolio-thumb-img">
                                <img class="w-100" src="./media/img/portfolio/Portfolio09_thumb.jpg" alt="MV Line Ad Panels Preview">
                            </div>
                            <figcaption class="bg-black text-center p-1">
                                <p class="text-light m-0">
                                    MV Line Ad Panels
                                </p>
                                <p class="color-turquoise">
                                    Ads panels for MV Line
                                </p>
                            </figcaption>
                        </figure>
                        <div class="position-absolute overlay-black">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 js_portfolioThumb" data-js-category="video">
                    <div class="position-relative overlay-animation">
                        <div class="plus position-absolute text-center">
                            <a href="#portfolioItemDetails" class="js_openSingleProject" onclick="openSingleProject(this)" data-js-preview-id="10">
                                <i class="bi bi-plus-circle text-light"></i>
                            </a>
                        </div>
                        <figure class="mb-0">
                            <div class="portfolio-thumb-img">
                                <img class="w-100" src="http://img.youtube.com/vi/ETBwv6qC41s/mqdefault.jpg" alt="Cooking Video Contest Preview">
                            </div>
                            <figcaption class="bg-black text-center p-1">
                                <p class="text-light m-0">
                                    Motion Design, Video Editing
                                </p>
                                <p class="color-turquoise">
                                    My Adobe AE Final Exam
                                </p>
                            </figcaption>
                        </figure>
                        <div class="position-absolute overlay-black">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 js_portfolioThumb" data-js-category="photo">
                    <div class="position-relative overlay-animation">
                        <div class="plus position-absolute text-center">
                            <a href="#portfolioItemDetails" class="js_openSingleProject" onclick="openSingleProject(this)" data-js-preview-id="11">
                                <i class="bi bi-plus-circle text-light"></i>
                            </a>
                        </div>
                        <figure class="mb-0">
                            <div class="portfolio-thumb-img">
                                <img class="w-100" src="./media/img/portfolio/Portfolio10.jpg" alt="My friend at Monte Carlo">
                            </div>
                            <figcaption class="bg-black text-center p-1">
                                <p class="text-light m-0">
                                    Street photo at Monte Carlo
                                </p>
                                <p class="color-turquoise">
                                    My friend at Monte Carlo
                                </p>
                            </figcaption>
                        </figure>
                        <div class="position-absolute overlay-black">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 js_portfolioThumb" data-js-category="photo">
                    <div class="position-relative overlay-animation">
                        <div class="plus position-absolute text-center">
                            <a href="#portfolioItemDetails" class="js_openSingleProject" onclick="openSingleProject(this)" data-js-preview-id="12">
                                <i class="bi bi-plus-circle text-light"></i>
                            </a>
                        </div>
                        <figure class="mb-0">
                            <div class="portfolio-thumb-img">
                                <img class="w-100" src="./media/img/portfolio/Portfolio11.jpg" alt="My friend at Juan-les_Pins">
                            </div>
                            <figcaption class="bg-black text-center p-1">
                                <p class="text-light m-0">
                                    Photo at Juan-les_Pins
                                </p>
                                <p class="color-turquoise">
                                    My friend at the sea
                                </p>
                            </figcaption>
                        </figure>
                        <div class="position-absolute overlay-black">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 js_portfolioThumb" data-js-category="video">
                    <div class="position-relative overlay-animation">
                        <div class="plus position-absolute text-center">
                            <a href="#portfolioItemDetails" class="js_openSingleProject" onclick="openSingleProject(this)" data-js-preview-id="13">
                                <i class="bi bi-plus-circle text-light"></i>
                            </a>
                        </div>
                        <figure class="mb-0">
                            <div class="portfolio-thumb-img">
                                <img class="w-100" src="https://i.vimeocdn.com/video/665823823-38e0ad1b0d79e0c237302b6f9500596cfdbe8af299e712ec3e2ddc8c656a6e7f-d?mw=960&mh=540" alt="ADA Corporate Video Preview">
                            </div>
                            <figcaption class="bg-black text-center p-1">
                                <p class="text-light m-0">
                                    Video Shooting and Editing
                                </p>
                                <p class="color-turquoise">
                                    ADA Corporate Video
                                </p>
                            </figcaption>
                        </figure>
                        <div class="position-absolute overlay-black">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 js_portfolioThumb" data-js-category="video">
                    <div class="position-relative overlay-animation">
                        <div class="plus position-absolute text-center">
                            <a href="#portfolioItemDetails" class="js_openSingleProject" onclick="openSingleProject(this)" data-js-preview-id="14">
                                <i class="bi bi-plus-circle text-light"></i>
                            </a>
                        </div>
                        <figure class="mb-0">
                            <div class="portfolio-thumb-img">
                                <img class="w-100" src="http://img.youtube.com/vi/u0dm_gJB7-A/mqdefault.jpg" alt="San Filippo Video Preview">
                            </div>
                            <figcaption class="bg-black text-center p-1">
                                <p class="text-light m-0">
                                    Video Shooting and Editing
                                </p>
                                <p class="color-turquoise">
                                    San Filippo, Patron Saint of Gioia del Colle
                                </p>
                            </figcaption>
                        </figure>
                        <div class="position-absolute overlay-black">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 js_portfolioThumb" data-js-category="video">
                    <div class="position-relative overlay-animation">
                        <div class="plus position-absolute text-center">
                            <a href="#portfolioItemDetails" class="js_openSingleProject" onclick="openSingleProject(this)" data-js-preview-id="15">
                                <i class="bi bi-plus-circle text-light"></i>
                            </a>
                        </div>
                        <figure class="mb-0">
                            <div class="portfolio-thumb-img">
                                <img class="w-100" src="http://img.youtube.com/vi/f0JFWsSom8w/mqdefault.jpg" alt="Nonostante la Xylella Video Preview">
                            </div>
                            <figcaption class="bg-black text-center p-1">
                                <p class="text-light m-0">
                                    Video Shooting and Editing
                                </p>
                                <p class="color-turquoise">
                                    "Nonostante la Xylella" Contest
                                </p>
                            </figcaption>
                        </figure>
                        <div class="position-absolute overlay-black">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 js_portfolioThumb" data-js-category="video">
                    <div class="position-relative overlay-animation">
                        <div class="plus position-absolute text-center">
                            <a href="#portfolioItemDetails" class="js_openSingleProject" onclick="openSingleProject(this)" data-js-preview-id="16">
                                <i class="bi bi-plus-circle text-light"></i>
                            </a>
                        </div>
                        <figure class="mb-0">
                            <div class="portfolio-thumb-img">
                                <img class="w-100" src="https://i.ytimg.com/vi/tx3PsRI1ssU/hqdefault.jpg" alt="Nonostante la Xylella Video Preview">
                            </div>
                            <figcaption class="bg-black text-center p-1">
                                <p class="text-light m-0">
                                    Video Shooting and Editing
                                </p>
                                <p class="color-turquoise">
                                    Resonare Fibris Video Intro
                                </p>
                            </figcaption>
                        </figure>
                        <div class="position-absolute overlay-black">
                            &nbsp;
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Thumbs Container End-->
        </div>
    </section>

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
                <div class="progress progress-custom my-4" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-custom" style="width: 90%">Html & Css</div>
                </div>
                <div class="progress progress-custom my-4" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-custom" style="width: 80%">Graphic Design</div>
                </div>
                <div class="progress progress-custom my-4" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-custom" style="width: 65%">Video Making</div>
                </div>
                <div class="progress progress-custom my-4" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-custom" style="width: 75%">Photograpy</div>
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
                            <button id="form-button" class="g-recaptcha button my-3" data-sitekey="" data-callback='onSubmit' data-action='submit'>Send
                                message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>