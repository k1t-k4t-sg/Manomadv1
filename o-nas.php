<?php
/*
Template Name: onas 
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
                    
                    
                    <h3 class="onas">Владельцы</h3>
                    <div class="aftor">
                        <div class="muz">
                            <img src="/wp-content/uploads/2017/03/free.jpg"><br>
                            <div>
                               <h4>Маргарита Иванна</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio minima rem dolore voluptate sed velit et dolor, quam adipisci maxime aliquam qui aut itaque atque labore quo, cum ab unde!</p>
                            </div>
                        </div>
                        <div class="dzen">
                            <img src="/wp-content/uploads/2017/03/two.jpg"><br>
                            <div>
                               <h4>Иван Васильевич</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium velit animi consectetur quasi eos quas, facere earum eius beatae dolores quam veritatis eaque autem perspiciatis rem. Culpa officia quasi enim!30</p>
                            </div>
                        </div>
                    </div>
                    
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