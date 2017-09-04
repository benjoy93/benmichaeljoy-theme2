<?php
/*

Template Name: homepage

*/
?>

<?php get_header(); ?>

    <div class="wrapper">
        
                    <h1><?php the_field('headline'); ?></h1>
                    <div class="photo">
                        <img class="profile-pic" src="<?php the_field('profile_pic'); ?>">
                    </div>
                    <h2><?php the_field('brief_description'); ?></h2>
        
                    <hr>

                    <h2><?php the_field('page_sub_head'); ?></h2>

                        <?php 
                        
                        $args = array (
                            'post_type'         => 'post',
                            'posts_per_page'    => 2
                        );

                         $the_query = new WP_Query ($args);

                        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <ul class="homepage-blogs">
                                <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li> 
                            </ul>
                        <?php endwhile; else : ?>
                            <p><?php echo ("Whoops, guess I haven't been talking about anything!");?></p>
                        <?php endif; ?>
    
    </div>


<?php get_footer(); ?>