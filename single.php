<?php get_header(); ?>

  
        <div class="wrapper blog-post">
            

            <div>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div>
                <h1><?php the_title(); ?></h1>
                <h2><?php the_field('page_sub_head'); ?></h2>
                <p class="date">Published on: <?php the_date(); ?></p>
            </div>

            <hr>
               <?php the_content() ?>

               <?php endwhile ; endif ; ?>

               
            
            </div>

            <div class="read-more">
                <p><a href="/page.php?page_id=6">Read other words that I've written<a></p>
            </div>
        </div>
    
                

                    
<?php get_footer(); ?>