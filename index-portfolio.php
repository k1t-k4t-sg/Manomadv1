<?php 
    $wallstreet_pro_options=theme_data_setup();
    $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
?>
 
 
<div class="portfolio-section">
	<div class="container">
		<div class="row">
			<div class="section_heading_title">
				<!--
				
				Start CUSTOM manomadv1 (title)
				
				-->
				<?php // if($current_options['portfolio_title']) { ?>
				<h1>Услуги</h1>
				<div class="pagetitle-separator">
					<div class="pagetitle-separator-border">
						<div class="pagetitle-separator-box"></div>
					</div>
				</div>
				<?php //} ?>
			<?php //if($current_options['portfolio_description']) { ?>
				<p>Отличный отдых для вас!<?php //echo esc_html($current_options['portfolio_description']); ?></p>
			<?php //} ?>
			    <!--
				
				End CUSTOM manomadv1 (title)
				
                -->		
			</div>
		</div>
		<div class="row">
            <!--
				
            Start CUSTOM manomadv1 (post teg "start")
				
            -->
		    <?php 
            /*
            
            cat=3 вывод категории 3 start
            
            */
                if ( have_posts() ) : query_posts('cat=3'); 
                while (have_posts()) : the_post();
            ?>
            <div class="col-md-3 col-md-6 home-portfolio-area">
                <div class="home-portfolio-showcase">
                    <div class="home-portfolio-showcase-media">
                        <img class="img-responsive home-portfolio-img" alt="Sleek &amp; Beautiful" src="<?php the_post_thumbnail_url(); ?>">
                            <div class="home-portfolio-showcase-overlay">
                                <div class="home-portfolio-showcase-overlay-inner">
                                    <div class="home-portfolio-showcase-detail">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                    <div class="home-blog-btn">
                                        <a href="<?php the_permalink(); ?>">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; wp_reset_query(); ?>
            <!--
				
            End CUSTOM manomadv1 (post teg "start")
				
            -->
        </div>
    </div>
</div>