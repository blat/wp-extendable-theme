<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Lien permanent vers <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p class="post-meta">Publi&eacute; le <?php the_time('d F Y') ?> &agrave; <?php the_time('h:i') ?> <!-- par <?php the_author() ?> --> dans <?php the_category(', ') ?> <?php edit_post_link('Editer', ' - ', ''); ?></p>
				<?php the_tags('<ul class="post-tags"><li>', '</li><li>', '</li></ul>'); ?>
				<div class="post-content">
					<?php the_content('<p class="read-it">Lire la suite de cet article &raquo;</p>'); ?>
				</div>
                <p class="post-info-co"><?php comments_popup_link('aucun commentaire', 'un commentaire', '% commentaires' , 'comment-count'); ?></p>
			</div>

		<?php endwhile; ?>

		<div id="navlinks">
			<div class="next"><?php next_posts_link('&laquo; Articles + anciens') ?></div>
			<div class="prev"><?php previous_posts_link('Articles + r&eacute;cents &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Rien trouv&eacute;</h2>
		<p class="center">Vous cherchez quelquechose qui ne se trouve pas ici.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

<?php get_footer(); ?>
