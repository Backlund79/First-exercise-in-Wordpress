<?php get_header();?>
<!-- Sida för undersida 2 -->
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9 col-md-push-3"> 
                    <h1><?php the_title();?></h1>
                    <?php if (have_posts()) : while(have_posts()) : the_post();?>

                    <?php the_content();?>

                    <?php endwhile; endif;?>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
                <?php wp_nav_menu (
                            array(
                                'theme_location' => 'side_menu',
                                'menu_class' => 'side-menu',
                            )
                            );?>
                </aside>
            </div>
        </div>
    </section>
</main>


<?php get_footer();?>


