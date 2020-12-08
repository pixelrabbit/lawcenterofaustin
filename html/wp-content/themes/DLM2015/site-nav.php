<nav class="site-nav">
	<div class="container">
		<div class="row">
			<h1 class="site-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					viewBox="0 0 80 80" style="enable-background:new 0 0 80 80;" xml:space="preserve">
						<path fill="#ffffff" d="M58.6,13.1l-8.4,26.1l-8.4-26.1H30v7.6c-2.5-1.4-5.3-2.1-8.4-2.1H9.4v39.9h12.4c3,0,5.7-0.7,8.2-2.1v10.5h24.8v-7H39v-9.3
						v-7.4v-1.3l-0.1-18l8.3,26.8h6l8.4-26.7l-0.2,18v8.8h9.1V13.1H58.6z M29.7,39.4c0,3.9-0.7,6.8-2.1,8.7c-1.4,2-3.4,2.9-6,2.9h-3.1
						V26h3c2.7,0,4.7,1,6.1,2.9c1.4,2,2.1,4.9,2.1,8.7V39.4z"/>
					</svg>
				</a>
			</h1>
			
			<?php if(get_field('phone','options')) echo "<span class='telephone'>".get_field('phone','options')."</span>" ?>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			<button class="glyphicon glyphicon-menu-hamburger hamburger"></button>
		</div>
	</div>
</nav>