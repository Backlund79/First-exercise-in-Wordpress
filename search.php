<?php get_header();?>
<!--funktion för att hämta header.php -->

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1 class="title">Sökresultat för: <?php echo get_search_query();?></h1>




                    <?php if (have_posts()) : while(have_posts()) : the_post();?>
                    <article>

                        <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">


                        <a href="<?php the_permalink();?>">
                            <h3><?php the_title();?></h3>
                        </a>
                        <ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> <?php the_time('F jS, Y'); ?>
									</li>
									<li>
										<i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
									</li>
									<li>
										<i class="fa fa-tag"></i> <?php the_category(', '); ?>
									</li>
								</ul>
                        <?php the_excerpt();?>
                    </article>

                    <?php endwhile; endif;?>

                    <?php the_posts_pagination(); ?>

                </div>
            </div>
    </section>
</main>



<?php get_footer();?>
<!--funktion för att hämta footer.php -->