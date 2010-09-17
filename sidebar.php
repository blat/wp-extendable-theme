  <div id="sidebar">
    <div id="blognav">

		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('SidebarGauche') ) : ?>

			<div class="widget">
				<h2>Archives</h2>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</div>
			
			<div class="widget">
				<h2>Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>					
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>				
			</div>
			
		<?php endif; ?>

	</div>
	
	<div id="blogextra">
	  	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('SidebarDroite')): ?>
			<div class="widget"><h2>Sidebar Droite</h2><p>Vous pouvez ajouter des widgets ici, via l'interface d'administration.</p></div>
		<?php endif; ?>
	</div>

</div><!-- End Sidebar -->
