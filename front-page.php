<?php get_header();?>
<!-- Detta är huvudsidan i vårt wordpress tema -->
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="hero">
                        <!-- funktionen nedan skapar och dimentionerar så vi kan hja en bild på förstasidan, img-fluid klassen är för att göra bilden responsive med bootstrap -->
                    <img src="<?php the_post_thumbnail_url('normal');?>" class="img-fluid"> 
                        <div class="text">
                            <!-- funktionen nedan skapar titel på sidan innom h1 taggen -->
                            <h1><?php the_title();?></h1>
                            <!-- Funktionen nedan kallas för The loop och kontrollerar om sidan har poster och så länge den har poster så publiserar den posten och lägger till postens inehåll -->
                            <?php if (have_posts()) : while(have_posts()) : the_post();?>

                                <?php the_content();?>
                            
                            <?php endwhile; endif;?>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer();?>