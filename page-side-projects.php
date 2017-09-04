<?php
/*
    Template Name: Side Projects

*/
?>

<?php get_header(); ?>

  
    <div class="side-project-wrapper">
         <h1><?php the_title();?></h1>
         <h2><?php the_field('page_sub_head'); ?></h2>
         <hr>

        <?php
        $args = array (
            'post_type'         => 'side_projects',
            'order'             => 'ASC'
        );

        $the_query = new WP_Query ($args);

         if ($the_query->have_posts() ) : while ($the_query->have_posts() ) : $the_query->the_post(); ?>
          
            <div class="side-project"> 
                <a href="<?php the_field('sp_url') ?>">      
                <h3><?php the_field('name_of_side_project'); ?></h3>
                <p><?php the_field('sp_description'); ?></p>
                <img class="project-img" src="<?php the_field('sp_feature_image');?>">
                </a>
         </div>
         
        <?php endwhile; else : ?>
            <p><?php echo ("Whoops, guess I haven't been talking about anything!");?></p>
        <?php endif; ?>
    </div>


<?php get_footer(); ?>