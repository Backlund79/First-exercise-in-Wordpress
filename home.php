<?php get_header();?>
<!-- Denna sida visar samlig av alla blogg inlägg  -->
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <!-- Funktionen nedan producerar sidans titel inom h1 taggen och till skriver ut sidans titel medans the_title hade skrivit ut senaste postens titel -->
                    <h1 class="title"><?php single_post_title();?></h1>



                    <!-- The loop -->
                    <?php if (have_posts()) : while(have_posts()) : the_post();?>
                    <article>

                        <img src="<?php the_post_thumbnail_url('smallest');?>" class="img-fluid">

                        <!-- funktionen nedan lägger till inläggets rubrik och kopplar en länk till rubriken -->
                        <a href="<?php the_permalink();?>">
                            <h3><?php the_title();?></h3>
                        </a>
                        <ul class="meta">
                            <!-- listan nedan skapar tids stämpel för inlägg, författarens namn med länk till poster samt kategorierna som används i posten med länkar.  -->
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

                      <!-- the excerpt visar ett kort utdrag ur texten istället för hela texten -->
                        <?php the_excerpt();?>
                    </article>

                    <?php endwhile; endif;?>
                            <!-- funktion för pagination på sidan styrs visa läsa i inställningar i admin panelen -->
                    <?php the_posts_pagination(); ?>
                
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <div id="sidebar">
                        <!-- funktionen nedan skapar sidebar ändra inställningar i funktion.php för att justera utseende osv -->
                        <?php get_sidebar('blogg');?>
                    </div>
                </aside>
            </div>
        </div>
    </section>

</main>

<?php get_footer();?>