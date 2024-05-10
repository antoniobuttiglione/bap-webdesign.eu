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
            <!--Portfolio Works Details Container-->
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
            <!-- Portfolio Works Details Container End-->

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