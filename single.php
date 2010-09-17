<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div id="navlinks">
			<div class="prev"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="next"><?php next_post_link('%link &raquo;') ?></div>
		</div>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="trackback" title="Lient permanent vers <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <p class="post-meta">Publi&eacute; le <?php the_time('d F Y') ?> &agrave; <?php the_time('h:i') ?> <!-- par <?php the_author() ?> --> dans <?php the_category(', ') ?> <?php edit_post_link('Editer', ' - ', ''); ?></p>
            <?php the_tags('<ul class="post-tags"><li>', '</li><li>', '</li></ul>'); ?>
			<div class="post-content">
				<?php the_content('<p class="read-it">Lire la suite de cet article &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
		</div>
		
		<?php comments_template(); ?>

		<?php endwhile; else: ?>

		<p>Aucun article trouv&eacute; &agrave; cette adresse.</p>

	<?php endif; ?>

<?php get_footer(); ?>
