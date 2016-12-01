 <?php
if (isset($_POST['page'])) {
	 	echo $_REQUEST ['page'];
	 	$snow_one_page_option = $_REQUEST ['page'];
	 	update_option('snow_one_page_option', $snow_one_page_option);
	 	var_dump($_REQUEST ['page']);
	 	arf();
	}

 ?>
<form action=" <?php echo get_permalink(); ?>" method="post">
<?php
	$query1 = new WP_Query(array('post_type' => 'page'));

	while ( $query1->have_posts() ) {
		$query1->the_post();
		echo '<input type="checkbox" name="page[]" value="' . $post->post_name . '" />'. $post->post_name . '</br>';
	}
	echo '<input type="submit">' . '</form>'; 

	wp_reset_postdata();
//Test function
function arf() {
	$pages = get_option('snow_one_page_option', false );
	var_dump($pages);
		foreach ( $pages as  $value )
				{
				$query1 = new WP_Query( 'pagename=' . $value);
					// The Loop
				while ( $query1->have_posts() ) {
					$query1->the_post();
							the_content();			
							}
						} 
					wp_reset_postdata();										
}