<?php get_header(); ?>
<div class="content">
  
    <div class="ie-flex-wrapper-fix">
        <section class="page-intro">
            <div class="page-titles">
                <h1><?php single_post_title();?></h1>
                <h2><?php the_field('page_sub_head', get_option('page_for_posts')); ?></h2>
            </div>
        </section>  
`   </div>
    
    <?php
        $args = array (
        'post_type'         => 'post',
        );

        $the_query = new WP_Query ($args);

        if ($the_query->have_posts() ) : while ($the_query->have_posts() ) : $the_query->the_post(); ?>
            <section class= "blog-section">
                <a href="<?php the_permalink() ?>">
                <div class="content-wrapper">    
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_date(); ?></p>
                    <p><?php the_excerpt(); ?></p>               
                </div>
                </a>
            
            </section>
            <hr class="blog-hr">

    <?php endwhile; else : ?>
    <p><?php echo ("Whoops, guess I haven't been talking about anything!");?></p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>