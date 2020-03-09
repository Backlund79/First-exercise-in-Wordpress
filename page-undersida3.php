<?php get_header();?>
    <!-- denna sidan visar undersida 3 -->
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12">
                    <h1><?php the_title();?></h1>
                    <?php if (have_posts()) : while(have_posts()) : the_post();?>

                    <?php the_content();?>

                    <?php endwhile; endif;?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer();?>