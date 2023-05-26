<div class="author-box">
	<figure>
		<?php echo get_avatar( get_the_author_meta( 'ID' ), 160 ); ?>
	</figure>
	<div class="author-post">
		<h3><?php esc_html_e( 'By', 'rufers' ); ?><?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?></h3>
		<p><?php echo esc_html( get_the_author_meta( 'description' ) ); ?></p>
	</div>
</div>
