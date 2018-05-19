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
                <img src="<?php if ( has_post_thumbnail() ) {
                    the_post_thumbnail_url();
                }?>" alt="article image">
            </figure>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        </article>
    </div>

    <div class="other-articles">
        <h3 class="h3-display">More Projects</h3>
        <div class="card-container">
            <?php $loop = new WP_Query( array( 'post_type' => 'project', 'posts_per_page' => 6, 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
                <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="card">
                        <a href="<?php the_permalink(); ?>">
                            <div class="card-image" style="background:url(<?php 
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail_url();
                                }?>); background-size:cover; background-position: center center;">
                            </div>
                        </a>
                        <div class="card-text">
                            <a href="<?php the_permalink(); ?>">
                                <h4 class="h4-display"><?php the_title(); ?></h4>
                            </a>
                            <p class="card-p"><?php echo get_the_excerpt(); ?></p>

                            <div class="card-text-more">
                                <a href="<?php echo get_field('url') ?>" class="more" title="view">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-8 -4 23 23"
                                        width="32" height="53" xml:space="preserve">
                                        <g>
                                            <path d="M14.982,7C14.736,3.256,11.744,0.263,8,0.017V0H7.5H7v0.017C3.256,0.263,0.263,3.256,0.017,7H0v0.5
                                                                V8h0.017C0.263,11.744,3.256,14.736,7,14.982V15h0.5H8v-0.018c3.744-0.246,6.736-3.238,6.982-6.982H15V7.5V7H14.982z M4.695,1.635
                                                                C4.212,2.277,3.811,3.082,3.519,4H2.021C2.673,2.983,3.599,2.16,4.695,1.635z M1.498,5h1.758C3.122,5.632,3.037,6.303,3.01,7H1.019
                                                                C1.072,6.296,1.238,5.623,1.498,5z M1.019,8H3.01c0.027,0.697,0.112,1.368,0.246,2H1.498C1.238,9.377,1.072,8.704,1.019,8z
                                                                    M2.021,11h1.497c0.292,0.918,0.693,1.723,1.177,2.365C3.599,12.84,2.673,12.018,2.021,11z M7,13.936
                                                                C5.972,13.661,5.087,12.557,4.55,11H7V13.936z M7,10H4.269C4.128,9.377,4.039,8.704,4.01,8H7V10z M7,7H4.01
                                                                c0.029-0.704,0.118-1.377,0.259-2H7V7z M7,4H4.55C5.087,2.443,5.972,1.339,7,1.065V4z M12.979,4h-1.496
                                                                c-0.293-0.918-0.693-1.723-1.178-2.365C11.4,2.16,12.327,2.983,12.979,4z M8,1.065C9.027,1.339,9.913,2.443,10.45,4H8V1.065z M8,5
                                                                h2.73c0.142,0.623,0.229,1.296,0.26,2H8V5z M8,8h2.99c-0.029,0.704-0.118,1.377-0.26,2H8V8z M8,13.936V11h2.45
                                                                C9.913,12.557,9.027,13.661,8,13.936z M10.305,13.365c0.483-0.643,0.885-1.447,1.178-2.365h1.496
                                                                C12.327,12.018,11.4,12.84,10.305,13.365z M13.502,10h-1.758c0.134-0.632,0.219-1.303,0.246-2h1.99
                                                                C13.928,8.704,13.762,9.377,13.502,10z M11.99,7c-0.027-0.697-0.112-1.368-0.246-2h1.758c0.26,0.623,0.426,1.296,0.479,2H11.99z"
                                                fill="#757575" />
                                        </g>
                                    </svg>
                                </a>
                                <a href="<?php echo get_field('github_url') ?>" class="more" title="github">
                                    <svg version="1.1" viewBox="-6 -15 36 40" width="32" height="40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xml:space="preserve">
                                        <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                                            fill="#757575" />
                                    </svg>
                                </a>
                                <a href="<?php the_permalink(); ?>" class="more" title="Case Study">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px"
                                        height="50px" viewBox="0 -190 900 900" xml:space="preserve">
                                        <g>
                                            <circle cx="139.091" cy="306" r="55.636" fill="#757575" />
                                            <circle cx="472.909" cy="306" r="55.636" fill="#757575" />
                                            <circle cx="306" cy="306" r="55.636" fill="#757575" />
                                            <path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306
                                                                C474.995,612,612,474.995,612,306z M27.818,306C27.818,152.36,152.36,27.818,306,27.818S584.182,152.36,584.182,306
                                                                S459.64,584.182,306,584.182S27.818,459.64,27.818,306z" fill="#757575"
                                            />
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>

<?php
get_footer();
