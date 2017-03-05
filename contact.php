<?php
/*
Template Name: Contact 
*/
?>

<?php get_header(); ?>
<div class="page-mycarousel">
	<div class="page-title-col">
		<div class="container">
			<div class="row">
				<div class="page-header-title">
					<h1><?php the_title(); ?></h1>		
				</div>
			</div>	
		</div>
	</div>	
</div>
<!-- /Page Title Section -->
<!-- Blog & Sidebar Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
           <div class="blog-post-title-wrapper">
                <div class="blog-detail-section">
                    <div class="blog-post-title">
                    <?php if (have_posts()): while (have_posts()): the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>	