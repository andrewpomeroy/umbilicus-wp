<h2 class="title section-break">Dev Blog</h2>

<div class="row">
	<div class="col-sm-8 col-sm-push-2">

<?php 

$args = array(
	'posts_per_page' => 999,
);
$query2 = new WP_Query( $args );

// The 2nd Loop
while ( $query2->have_posts() ) {
	$query2->next_post();
	?>
	<article class="post">
		<h3 class="title"><?php echo get_the_title( $query2->post->ID ) ?></h3>
			<?php
			$image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( $query2->post->ID ), 'large'); // returns an array
			if( $image_attributes ) {
				$img = wp_get_attachment_image_src( get_post_thumbnail_id( $query2->post->ID ), 'large' ); ?>
				<img src="<?php echo $img[0] ?>" class="featured-image">
			<?php } ?>
		<?php echo get_post_field('post_content', $query2->post->ID); ?>
		<?php // the_content(); ?>
	</article>
	<?php
}

// Restore original Post Data
wp_reset_postdata();

?>


	</div>
</div>

