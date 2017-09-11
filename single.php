<?php get_header(); ?>

  
              

            <section class="page-intro">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="page-titles">
                    <h1><?php the_title(); ?></h1>
                    <h2><?php the_field('page_sub_head'); ?></h2>
                    <p class="published-date">Published on: <?php the_date(); ?></p>
                <div>
            </section>

            <section class="content-wrapper">
                <div class="article-content">
                <?php the_content() ?>

                <?php endwhile ; endif ; ?>

                    <div class="button">
                    <a class="more-posts-button" href="/page.php?page_id=6">More Posts</a>
                    </div>
                </div>
            </section>
        </div>
    
                

                    
<?php get_footer(); ?>