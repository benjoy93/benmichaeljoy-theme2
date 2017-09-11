<?php
/*

Template Name: homepage

*/
?>

<?php get_header(); ?>
<div class="content">

    <section class="homepage-intro">
        <div class="homepage-titles">
            <div>
            <h1><?php the_field('headline'); ?></h1>
            <h2><?php the_field('brief_description'); ?></h2>
            </div>
        </div>
        <div class="homepage-image">
        <img src="<?php the_field('profile_pic'); ?>">
        </div>
    </section>


    <section class="content-wrapper home-section">
        <div class="latest-posts">
            <h2><?php the_field('page_sub_head'); ?></h2>

            <?php 

            $args = array (
                'post_type'         => 'post',
                'posts_per_page'    => 3
            );

                $the_query = new WP_Query ($args);

            if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <ul>
                    <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li> 
                </ul>
            <?php endwhile; else : ?>
                <p><?php echo ("Whoops, guess I haven't been talking about anything!");?></p>
            <?php endif; ?>
            <div class="button">
                <a class="more-posts-button" href="/page.php?page_id=6">More Posts</a>
            </div>
        </div>
    </section>   

</div>
<?php get_footer(); ?>