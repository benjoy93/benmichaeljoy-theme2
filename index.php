<?php get_header(); ?>

  
    <div class="wrapper blog-list">
        <div>
            <h1><?php single_post_title();?></h1>
            <h2><?php the_field('page_sub_head', get_option('page_for_posts')); ?></h2>
        </div>    

        <hr>

        <?php
        $args = array (
            'post_type'         => 'post',
        );

        $the_query = new WP_Query ($args);

         if ($the_query->have_posts() ) : while ($the_query->have_posts() ) : $the_query->the_post(); ?>
            <a href="<?php the_permalink() ?>">
                <div>    
                    <h3><?php the_title(); ?></h3>
                    <p class="blog-date"><?php the_date(); ?></p>
                    <p class="excerpt"><?php the_excerpt(); ?></p>               
                </div>
                </a>

                <hr>
        <?php endwhile; else : ?>
            <p><?php echo ("Whoops, guess I haven't been talking about anything!");?></p>
        <?php endif; ?>
    </div>