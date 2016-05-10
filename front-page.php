<?php

	get_header();

	get_template_part( 'parts/panel');

?>
 

	<div class="content">
		<div class="container">
			<div class="page">
				<div class="main">
					<div id="blog-container-id" class="blog-post-container">
					
						<?php 
						if (have_posts()) :
							while (have_posts()) : the_post(); 
						?>
								<article class="blog-post">	
									<div class="featured-img">
										<aside class="blog-read-more">
										 	<?php echo get_excerpt(0,true);?>
										 </aside>
									</div>
									<div class="blog-post-inner">
										<header class="blog-post-header">
											<h1 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
											<aside class="blog-post-meta">
				    							 <?php snow_meta(); ?>
											</aside>
										</header>
											<div class="blog-post-content">
												<p>
													<?php echo get_excerpt(125,false); ?>
												</p>
											</div>
									</div>
								</article>
						<?php 
							endwhile;
						else :
								echo '<p>No content found</p>';
						endif;											
						?>		
					</div>								
				</div>
			</div>
				<div class="page1">
				</div>
		</div>
	</div>

<?php

	get_footer();

?>