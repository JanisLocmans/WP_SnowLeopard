<header class="snow_frame">
				<div class="top-frame">
					<a class="logo">
						<img src="<?php bloginfo('template_directory'); ?>/pic/logo.png">
						<H1>SNOWLEOPARD</H1>
					</a>															
					<div id="site-header-id" class="menu-buttons">
						<a id="src-button" class="side-button"><img src="<?php bloginfo('template_directory'); ?>/pic/src.png"></a>
						<a id="js-side-bar-button" class="side-button"><img src="<?php bloginfo('template_directory'); ?>/pic/arw.png"></a>
						<a id="js-nav-button" class="side-button"><img src="<?php bloginfo('template_directory'); ?>/pic/nav.png"></a>
					</div>					
					<div id="js-panel-dropdown" class="panel-dropdown-closed">
						<!-- WIDGETS AND STUFF WILL GO HERE-->
					</div>
				</div>
					<div id="js-menu-list-wrapper" class="menu-list-wrapper">
						<div id="js-menu-list" class="menu-list">
						<?php	
							$query1 = new WP_Query(array('post_type' => 'page'));

								while ( $query1->have_posts() ) {
									$query1->the_post();

									echo '<li>'. '<span>'. '<a>' . $post->post_name . '</a>' . '</span>'.'</li>';
								}
							wp_reset_postdata();  ?>
						</div>
					</div>
				<div class="right-frame">
				</div>
				<div class="bottom-frame">
				</div>
				<div class="left-frame">
				</div>

</header>

