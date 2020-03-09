<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?> <!--  Alltid innan slut på head elementet -->
</head>
<body <?php body_class(); ?>> <!--  för att wordpress skall kunna sätta sina egna classer i body -->

<div id="wrap">

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-sm-6">
                <!-- Sidnamn och länk adress justeras i tema inställningar vilket är skapade med ACF -->
                <a class="logo" href="<?php the_field('hero_link', 'option');?>"><?php the_field('hero_title', 'option');?></a>
            </div>
            <div class="col-sm-6 hidden-xs">
                <?php get_search_form(); ?>
            </div>
            <div class="col-xs-4 text-right visible-xs">
                <div class="mobile-menu-wrap">
                    <i class="fa fa-search"></i>
                    <i class="fa fa-bars menu-icon"></i>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mobile-search">
<?php get_search_form(); ?>
</div>

<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<?php wp_nav_menu (
                            array(
                                'theme_location' => 'top-menu',
                            )
                            );?>
					</div>
				</div>
			</div>
		</nav>