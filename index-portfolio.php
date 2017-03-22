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
				
				<?php if($current_options['slider_description']) { ?>
				<div class="slide-text-bg3">
				    <p><?php echo esc_html ($current_options['slider_description']); ?></p>
				</div>
				<?php } ?>
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
            
            cat=4 вывод категории 4 start
            
            */
                if ( have_posts() ) : query_posts('cat=4'); 
                while (have_posts()) : the_post();
            ?>
            <div class="col-md-8 col-md-4 home-portfolio-area">
                <div class="home-portfolio-showcase">
                    <div class="home-portfolio-showcase-media">
                            
                            <?php 
                                $field = get_post_field( 'post_content', get_the_ID(), 'db' );
                                echo do_shortcode($field);
                            ?>
                            
                            
                            
                            <div class="home-portfolio-showcase-overlay">
                                <div class="home-portfolio-showcase-overlay-inner">
                                    <div class="home-portfolio-showcase-detail">
                                        <h4><?php the_title(); ?></h4>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                    <div class="home-blog-btn CUSTOM_manomadv_one">
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