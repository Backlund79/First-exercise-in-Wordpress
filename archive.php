<?php get_header();?>
<!-- Denna sida styr arkiv sidan på vår blogg  -->
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <!-- funktionen nedan produserar sidans titel innom h1 taggarna -->
                    <h1 class="title"><?php single_post_title();?></h1>




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