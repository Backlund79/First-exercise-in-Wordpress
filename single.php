<?php get_header();?>
<!-- denna sida visas när man klickar på ett blogginlägg -->

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <article>

                        <h1 class="title"><?php the_title();?></h1>
                      


                        <?php if (have_posts()) : while(have_posts()) : the_post();?>
                        <img src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid">
                        
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
                                <?php the_content();?>
                        <?php endwhile; endif;?>


                    </article>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <div id="sidebar">
                        <?php get_sidebar('blogg');?>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>


<?php get_footer();?>