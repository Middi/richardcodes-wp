<?php
/*
    Template Name: Home Page
*/

get_header(); ?>

<body <?php body_class(); ?>>


	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'richardcodes' ); ?></a>
        
    <!--======= HEADER SECTION ========-->

    <header id="header">
        <div id="container-nav" class="container-nav">
            <div id="logo" class="menuUp">
                <div id="navToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="#header" class="nav-active">INTRO</a>
                    </li>
                    <li>
                        <a href="#about">ABOUT</a>
                    </li>
                    <li>
                        <a href="#projects">PROJECTS</a>
                    </li>
                    <li>
                        <a href="#social">CONTACT</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="hero-skew">
        </div>
        <a href="#about" class="skew-button">
        </a>
        <div class="hero-container">
            <div class="hero-text">
                <div class="hero-text-upper">
                    <img class="avatar" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/avatar.png" alt="avatar">
                    <h5 class="highlight">Web Developer & Teacher</h5>
                </div>
                <h1 class="h1-display">Hey! I'm
                    <span class="span-display">Richard</span> & this is my website, feel free to have a look around<span class="span-display">.</span>
                </h1>
            </div>
            <iframe src="https://www.youtube.com/embed/gLWIYk0Sd38?rel=0&amp;showinfo=0" allowfullscreen></iframe>
        </div>
    </header>


    <!--======== ABOUT SECTION ========-->

    <section id="about" class="about">
        <div class="about-skew"></div>
        <div class="container about-container">
            <div class="empty"></div>
            <div class="about-container-text">
                <h5 class="highlight">About</h5>
                <h2 class="h2-display">I'm a web developer from the U.K Currently in Oslo, Norway.</h2>
                <p class="p-display">I like to get involved in coding communities. I am a local leader for freeCodeCamp Oslo and Leeds, I also like to run events and help others learn in person and on <strong>YouTube.</strong>
                </p>
                <p class="p-display">I run the <strong>freeCodeCamp Instagram</strong> with 11K members, along with my <strong>personal instagram</strong> account.</p>
                <p class="p-display">Outside of coding I'm a keen musician and when there is snow, I enjoy hitting the slopes and having a snowboard.</p>
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/signature.svg" alt="signature" class="signature">
                <p class="p-display">
                    <strong>RICHARD MIDDLETON</strong>
                </p>

                <div class="about-container-text-socials">
                    <a href="https://instagram.com/richardcodes" class="social-links">
                        <div id="instagram" class="socials">
                            <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path d="M10,0 C7.28333333,0 6.94416667,0.0125 5.8775,0.06 C4.8125,0.11 4.0875,0.2775 3.45,0.525 C2.7925,0.78 2.23416667,1.1225 1.67833333,1.67833333 C1.1225,2.23416667 0.779166667,2.79166667 0.525,3.45 C0.2775,4.0875 0.109166667,4.8125 0.06,5.8775 C0.01,6.94416667 0,7.28333333 0,10 C0,12.7166667 0.0125,13.0558333 0.06,14.1225 C0.11,15.1866667 0.2775,15.9125 0.525,16.55 C0.78,17.2066667 1.1225,17.7658333 1.67833333,18.3216667 C2.23416667,18.8766667 2.79166667,19.2208333 3.45,19.475 C4.08833333,19.7216667 4.81333333,19.8908333 5.8775,19.94 C6.94416667,19.99 7.28333333,20 10,20 C12.7166667,20 13.0558333,19.9875 14.1225,19.94 C15.1866667,19.89 15.9125,19.7216667 16.55,19.475 C17.2066667,19.22 17.7658333,18.8766667 18.3216667,18.3216667 C18.8766667,17.7658333 19.2208333,17.2091667 19.475,16.55 C19.7216667,15.9125 19.8908333,15.1866667 19.94,14.1225 C19.99,13.0558333 20,12.7166667 20,10 C20,7.28333333 19.9875,6.94416667 19.94,5.8775 C19.89,4.81333333 19.7216667,4.08666667 19.475,3.45 C19.22,2.7925 18.8766667,2.23416667 18.3216667,1.67833333 C17.7658333,1.1225 17.2091667,0.779166667 16.55,0.525 C15.9125,0.2775 15.1866667,0.109166667 14.1225,0.06 C13.0558333,0.01 12.7166667,0 10,0 L10,0 Z M10,1.8 C12.6691667,1.8 12.9875,1.81333333 14.0416667,1.85916667 C15.0166667,1.905 15.5458333,2.06666667 15.8975,2.205 C16.3658333,2.38583333 16.6975,2.6025 17.0491667,2.95166667 C17.3983333,3.30166667 17.615,3.63416667 17.7958333,4.1025 C17.9325,4.45416667 18.0958333,4.98333333 18.14,5.95833333 C18.1875,7.01333333 18.1983333,7.33 18.1983333,10 C18.1983333,12.67 18.1858333,12.9875 18.1366667,14.0416667 C18.0858333,15.0166667 17.9233333,15.5458333 17.7858333,15.8975 C17.5991667,16.3658333 17.3866667,16.6975 17.0366667,17.0491667 C16.6875,17.3983333 16.35,17.615 15.8866667,17.7958333 C15.5366667,17.9325 14.9991667,18.0958333 14.0241667,18.14 C12.9625,18.1875 12.65,18.1983333 9.975,18.1983333 C7.29916667,18.1983333 6.98666667,18.1858333 5.92583333,18.1366667 C4.95,18.0858333 4.4125,17.9233333 4.0625,17.7858333 C3.58833333,17.5991667 3.2625,17.3866667 2.91333333,17.0366667 C2.5625,16.6875 2.33833333,16.35 2.16333333,15.8866667 C2.02583333,15.5366667 1.86416667,14.9991667 1.81333333,14.0241667 C1.77583333,12.9741667 1.7625,12.65 1.7625,9.9875 C1.7625,7.32416667 1.77583333,6.99916667 1.81333333,5.93666667 C1.86416667,4.96166667 2.02583333,4.425 2.16333333,4.075 C2.33833333,3.6 2.5625,3.275 2.91333333,2.92416667 C3.2625,2.575 3.58833333,2.35 4.0625,2.17583333 C4.4125,2.0375 4.93833333,1.875 5.91333333,1.825 C6.97583333,1.7875 7.28833333,1.775 9.9625,1.775 L10,1.8 L10,1.8 Z M10,4.865 C7.1625,4.865 4.865,7.165 4.865,10 C4.865,12.8375 7.165,15.135 10,15.135 C12.8375,15.135 15.135,12.835 15.135,10 C15.135,7.1625 12.835,4.865 10,4.865 L10,4.865 Z M10,13.3333333 C8.15833333,13.3333333 6.66666667,11.8416667 6.66666667,10 C6.66666667,8.15833333 8.15833333,6.66666667 10,6.66666667 C11.8416667,6.66666667 13.3333333,8.15833333 13.3333333,10 C13.3333333,11.8416667 11.8416667,13.3333333 10,13.3333333 L10,13.3333333 Z M16.5383333,4.6625 C16.5383333,5.325 16,5.8625 15.3383333,5.8625 C14.6758333,5.8625 14.1383333,5.32416667 14.1383333,4.6625 C14.1383333,4.00083333 14.6766667,3.46333333 15.3383333,3.46333333 C15.9991667,3.4625 16.5383333,4.00083333 16.5383333,4.6625 L16.5383333,4.6625 Z"
                                     fill="#575757"></path>
                            </svg>
                        </div>
                    </a>
                    <a href="https://youtube.com/richardcodes">
                        <div id="youtube" class="socials">
                            <svg width="20px" height="20px" viewBox="0 0 20 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path d="M19.58724,2.77429957 C19.3514782,1.929533 18.6913598,1.26941461 17.8465932,1.03365282 C16.2876807,0.61599764 10.0136829,0.61599764 10.0136829,0.61599764 C10.0136829,0.61599764 3.75552428,0.607661209 2.1807725,1.03365282 C1.33600593,1.26941461 0.67588754,1.929533 0.440125755,2.77429957 C0.144616452,4.37031805 -0.00107105063,5.99046355 0.00496406817,7.61359765 C6.98589958e-05,9.23060698 0.145752586,10.8445595 0.440125755,12.4345556 C0.67588754,13.2793221 1.33600593,13.9394405 2.1807725,14.1752023 C3.73801778,14.5936911 10.0136829,14.5936911 10.0136829,14.5936911 C10.0136829,14.5936911 16.2710078,14.5936911 17.8465932,14.1752023 C18.6913598,13.9394405 19.3514782,13.2793221 19.58724,12.4345556 C19.8754631,10.8439836 20.0150056,9.23003573 20.0040615,7.61359765 C20.0161464,5.99103693 19.8765993,4.37089611 19.58724,2.77429957 L19.58724,2.77429957 Z M8.0112722,10.6072099 L8.0112722,4.61081528 L13.2332124,7.61359765 L8.0112722,10.6072099 Z"
                                     fill="#575757"></path>
                            </svg>
                        </div>
                    </a>
                    <a href="https://github.com/middi">
                        <div id="github" class="socials">
                            <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path d="M10,0.297 C4.475,0.297 0,4.7745 0,10.297 C0,14.7161667 2.865,18.4636667 6.8375,19.7845 C7.3375,19.8786667 7.52083333,19.5695 7.52083333,19.3036667 C7.52083333,19.0661667 7.5125,18.437 7.50833333,17.6036667 C4.72666667,18.207 4.14,16.262 4.14,16.262 C3.685,15.1078333 3.0275,14.7995 3.0275,14.7995 C2.12166667,14.1795 3.0975,14.192 3.0975,14.192 C4.10166667,14.262 4.62916667,15.222 4.62916667,15.222 C5.52083333,16.7511667 6.97,16.3095 7.54166667,16.0536667 C7.63166667,15.407 7.88916667,14.9661667 8.175,14.7161667 C5.95416667,14.4661667 3.62,13.6061667 3.62,9.7745 C3.62,8.68283333 4.0075,7.79116667 4.64916667,7.09116667 C4.53666667,6.83866667 4.19916667,5.822 4.73666667,4.4445 C4.73666667,4.4445 5.57416667,4.17616667 7.48666667,5.4695 C8.28666667,5.247 9.13666667,5.137 9.98666667,5.132 C10.8366667,5.137 11.6866667,5.247 12.4866667,5.4695 C14.3866667,4.17616667 15.2241667,4.4445 15.2241667,4.4445 C15.7616667,5.822 15.4241667,6.83866667 15.3241667,7.09116667 C15.9616667,7.79116667 16.3491667,8.68283333 16.3491667,9.7745 C16.3491667,13.6161667 14.0116667,14.462 11.7866667,14.7078333 C12.1366667,15.0078333 12.4616667,15.6211667 12.4616667,16.5578333 C12.4616667,17.8961667 12.4491667,18.9711667 12.4491667,19.2961667 C12.4491667,19.5586667 12.6241667,19.8711667 13.1366667,19.7711667 C17.1375,18.4595 20,14.7095 20,10.297 C20,4.7745 15.5225,0.297 10,0.297"
                                     fill="#575757"></path>
                            </svg>
                        </div>
                    </a>
                    <a href="https://twitch.tv/richardcodes">
                        <div id="twitch" class="socials">
                            <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="twitch" fill="#575757">
                                    <path d="M1.74083333,0 L0.4375,3.47916667 L0.4375,17.3908333 L5.2175,17.3908333 L5.2175,20 L7.8275,20 L10.4333333,17.39 L14.3458333,17.39 L19.5625,12.175 L19.5625,0 L1.74083333,0 L1.74083333,0 Z M3.47916667,1.7375 L17.825,1.7375 L17.825,11.3033333 L14.7816667,14.3466667 L10,14.3466667 L7.39416667,16.9525 L7.39416667,14.3466667 L3.47916667,14.3466667 L3.47916667,1.7375 L3.47916667,1.7375 Z"
                                        ></path>
                                    <path d="M8.2625,10.435 L10,10.435 L10,5.21833333 L8.2625,5.21833333 L8.2625,10.435 L8.2625,10.435 Z M13.0416667,10.435 L14.78,10.435 L14.78,5.21833333 L13.0416667,5.21833333 L13.0416667,10.435 L13.0416667,10.435 Z"
                                        ></path>
                                </g>
                            </svg>
                        </div>
                    </a>
                    <a href="mailto:richard@richardmiddleton.me">
                        <div id="email" class="socials">
                            <svg width="20px" height="18px" viewBox="0 -3 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path d="M20,10.6473214 L20,1.78571429 C20,1.29464286 19.8251488,0.874255952 19.4754464,0.524553571 C19.125744,0.17485119 18.7053571,0 18.2142857,0 L1.78571429,0 C1.29464286,0 0.874255952,0.17485119 0.524553571,0.524553571 C0.17485119,0.874255952 0,1.29464286 0,1.78571429 L0,10.6473214 C0.327380952,10.2827381 0.703125,9.95907738 1.12723214,9.67633929 C3.82068452,7.84598214 5.66964286,6.5625 6.67410714,5.82589286 C7.09821429,5.51339286 7.44233631,5.26971726 7.70647321,5.09486607 C7.97061012,4.92001488 8.32217262,4.74144345 8.76116071,4.55915179 C9.20014881,4.37686012 9.609375,4.28571429 9.98883929,4.28571429 L10,4.28571429 L10.0111607,4.28571429 C10.390625,4.28571429 10.7998512,4.37686012 11.2388393,4.55915179 C11.6778274,4.74144345 12.0293899,4.92001488 12.2935268,5.09486607 C12.5576637,5.26971726 12.9017857,5.51339286 13.3258929,5.82589286 C14.5907738,6.74107143 16.4434524,8.02455357 18.8839286,9.67633929 C19.3080357,9.96651786 19.6800595,10.2901786 20,10.6473214 L20,10.6473214 Z M20,13.9285714 C20,13.3407738 19.8177083,12.7790179 19.453125,12.2433036 C19.0885417,11.7075893 18.6346726,11.25 18.0915179,10.8705357 C15.2938988,8.92857143 13.5528274,7.71949405 12.8683036,7.24330357 C12.7938988,7.19122024 12.6357887,7.07775298 12.3939732,6.90290179 C12.1521577,6.7280506 11.9512649,6.58668155 11.7912946,6.47879464 C11.6313244,6.37090774 11.437872,6.25 11.2109375,6.11607143 C10.984003,5.98214286 10.7700893,5.88169643 10.5691964,5.81473214 C10.3683036,5.74776786 10.1822917,5.71428571 10.0111607,5.71428571 L10,5.71428571 L9.98883929,5.71428571 C9.81770833,5.71428571 9.63169643,5.74776786 9.43080357,5.81473214 C9.22991071,5.88169643 9.01599702,5.98214286 8.7890625,6.11607143 C8.56212798,6.25 8.3686756,6.37090774 8.20870536,6.47879464 C8.04873512,6.58668155 7.84784226,6.7280506 7.60602679,6.90290179 C7.36421131,7.07775298 7.20610119,7.19122024 7.13169643,7.24330357 C6.4546131,7.71949405 5.47991071,8.3984375 4.20758929,9.28013393 C2.93526786,10.1618304 2.17261905,10.6919643 1.91964286,10.8705357 C1.45833333,11.1830357 1.02306548,11.6127232 0.613839286,12.1595982 C0.204613095,12.7064732 0,13.2142857 0,13.6830357 C0,14.2633929 0.154389881,14.7470238 0.463169643,15.1339286 C0.771949405,15.5208333 1.21279762,15.7142857 1.78571429,15.7142857 L18.2142857,15.7142857 C18.6979167,15.7142857 19.1164435,15.5394345 19.4698661,15.1897321 C19.8232887,14.8400298 20,14.4196429 20,13.9285714 L20,13.9285714 Z" id="path6" fill="#575757" transform="translate(10.000000, 7.857143) scale(1, -1) translate(-10.000000, -7.857143) "></path>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!--======== PROJECT SECTION =======-->

    <section id="projects" class="projects">
        <div class="container">
            <h3 class="h3-display">Projects</h3>
            <div id="filters" class="filters">
                <div class="filters-item active" data-key="11">RECENT</div>
                <div class="filters-item" data-key="12">HTML</div>
                <div class="filters-item" data-key="13">CSS</div>
                <div class="filters-item" data-key="15">JAVASCRIPT</div>
                <div class="filters-item" data-key="16">NODEJS</div>
                <div class="filters-item" data-key="14">WORDPRESS</div>
                <div class="filters-item" data-key="17">P5JS</div>
                <div class="filters-item" data-key="18">PUG</div>
            </div>
            <div id="card-container" class="card-container">
                <?php $loop = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => 6, 'orderby' => 'post_id', 'order' => 'DES' ) ); ?>
                    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="card">
                            <a href="<?php the_permalink(); ?>">
                                <div class="card-image" style="background:url(<?php echo get_field('image')['sizes']['medium'] ?>); background-size:cover; background-position: top center;">
                                </div>
                            </a>
                            <div class="card-text">
                                <a href="<?php the_permalink(); ?>">
                                    <h4 class="h4-display"><?php the_title(); ?></h4>
                                </a>
                                <p class="card-p"><?php echo get_the_excerpt(); ?></p>
                                <div class="card-text-more">
                                    
                                    <?php 
                                        $check = get_field('url');
                                        if($check) : ?>
                                            <a href="<?php echo get_field('url') ?>" class="more" title="view">
                                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/view.svg" alt="view">
                                            </a>
                                        <?php endif; ?>
                                        <?php 
                                            $check = get_field('github_url');
                                            if($check) : ?>
                                                <a href="<?php echo get_field('github_url') ?>" class="more" title="github">
                                                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/git-view.svg" alt="github">
                                                </a>
                                        <?php endif; ?>
                                    <a href="<?php the_permalink(); ?>" class="more" title="Case Study">
                                        <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/case-view.svg" alt="case study">
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </section>


    <!--======== SOCIAL SECTION ========-->

    <section id="social" class="social">
        <div class="social-container">
            <div class="social-container-half">
                <div class="insta-header">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/instagram.png" alt="instagram">
                    <h5 class="highlight">INSTAGRAM</h5>
                </div>

                <div id="insta-grid" class="insta-grid">
                </div>
            </div>
            <div class="social-container-half">
                <div class="twitter-header">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/email.png" alt="email">
                    <h5 class="highlight">CONTACT</h5>
                </div>
                <div class="contact-text">
                    <p class="p-display">Feel free to contact me and I will get back to you as soon as I can.</p>
                    <a href="mailto:richard@richardmiddleton.me"><p class="p-display p-mail"><strong>richard[at]richardmiddleton.me</strong></p></a>
                </div>
                
            </div>
        </div>
    </section>


<?php get_footer(); 
