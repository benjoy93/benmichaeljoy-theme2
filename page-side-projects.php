<?php
/*
    Template Name: Side Projects

*/
?>

<?php get_header(); ?>
<div class="content">
    <div class="ie-flex-wrapper-fix">
        <section class="page-intro">
            <div class="page-titles">
                <h1><?php the_title();?></h1>
                <h2><?php the_field('page_sub_head'); ?></h2>
            </div>
        </section>
    </div>

        <?php
            $args = array (
                'post_type'         => 'side_projects',
                'order'             => 'reverse'
            );

            $the_query = new WP_Query ($args);

            if ($the_query->have_posts() ) : while ($the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="ie-flex-wrapper-fix-sp">
                    <section class="side-project-section">
                        <div class="sp-content-wrapper"> 
                            <div>
                                <img class="sp-img" src="<?php the_field('sp_feature_image');?>">
                            </div>
                            <div class="sp-info">
                                <h3><?php the_field('name_of_side_project'); ?></h3>
                                <p><?php the_field('sp_description'); ?></p>  
                                <div class="button"><a class="sp-button" href="<?php the_field('sp_url') ?>">View the site</a></div>
                            </div>
                        </div>
                    </section>
                </div>
         
        <?php endwhile; else : ?>
            <p><?php echo ("Whoops, guess I haven't been talking about anything!");?></p>
        <?php endif; ?>
</div>
<?php get_footer(); ?>