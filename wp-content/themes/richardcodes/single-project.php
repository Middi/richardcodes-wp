<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package richardcodes
 */

get_header();
?>
<body id="article" class="article">

	

    <!--======= HEADER SECTION ========-->
    
    
    <div id="header-blog">
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
                    <li><a href="/">BACK</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="bg-wrapper">

        <article class="article-container">
            <div class="title">
                <h1 class="h1-title"><?php echo get_the_title( $post_id ); ?></h1>
            </div>
            <figure>
                <img src="<?php echo get_field('image')['sizes']['large'] ?>" alt="article image">
            </figure>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <div class="view-buttons-container">
            <?php
                $check = get_field('url');
                    if($check) : ?>
                        <a href="<?php echo get_field('url') ?>" title="view">
                            <h3 class="view-buttons">View</h3>
                        </a>
                    <?php endif; ?>
                    <?php 
                        $check = get_field('github_url');
                        if($check) : ?>
                            <a href="<?php echo get_field('github_url') ?>" title="github">
                                <h3 class="view-buttons">GitHub</h3>
                            </a>
                    <?php endif; ?>
            </div>
        </article>
    </div>

    <div class="other-articles">
        <h3 class="h3-display">More Projects</h3>
        <div class="card-container">
            <?php $loop = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => 3, 'orderby' => 'rand', 'order' => 'ASC' ) ); ?>
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
                    <a href="mailto:richard@richardmiddleton.me"><strong><p class="p-display p-mail">richard[at]richardmiddleton.me</p></strong></a>
                </div>
                
            </div>
        </div>
    </section>

<?php
get_footer();
