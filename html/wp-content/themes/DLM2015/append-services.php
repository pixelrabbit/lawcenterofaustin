<div class="row">
<?php 
$args = array( 'post_type' => 'services');
$loop = new WP_Query( $args );
$i - 0;
while ( $loop->have_posts() ) : $loop->the_post(); $i++;?>
	<div class="col-md-6 hasequalitems">
		<div class="service-detail equal">
			<a name="<?php echo $post->post_name; ?>"></a>
			<?php if(has_post_thumbnail()): ?>
				<div class="imgwrap"><?php the_post_thumbnail('profile'); ?></div>
			<?php endif; ?>
			<h2><?php the_title(); ?></h2>
			<p><?php the_content(); ?></p>
			<?php edit_post_link(); ?>
		</div>
	</div>
	<?php if($i % 2 == 0): ?>
		<div class="clearfix hidden-xs hidden-sm"></div>
	<?php endif; ?>
<?php endwhile;?>
</div>