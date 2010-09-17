<?php get_header(); ?>

    <?php if (have_posts()) : ?>

        <div id="content-info">
          <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
          <?php /* If this is a category archive */ if (is_category()) { ?>
            <h2>Archives de la cat&eacute;gorie &#8216;<?php single_cat_title(); ?>&#8217;</h2>
          <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
            <h2>Archives du tag &#8216;<?php single_tag_title(); ?>&#8217;</h2>
          <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
            <h2>Archives du <?php the_time('d F Y'); ?></h2>
          <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
            <h2>Archives de <?php the_time('F Y'); ?></h2>
          <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
            <h2>Archives de <?php the_time('Y'); ?></h2>
          <?php /* If this is an author archive */ } elseif (is_author()) { ?>
            <h2>Archives de l'auteur</h2>
          <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
            <h2>Archives</h2>
          <?php } ?>
        </div>

        <div id="navlinks">
            <div class="next"><?php next_posts_link('&laquo; Articles + anciens') ?></div>
            <div class="prev"><?php previous_posts_link('Articles + r&eacute;cents &raquo;') ?></div>
        </div>

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

    <?php else : ?>

        <div id="content-info">
            <h2>Rien trouv&eacute;</h2>
        </div>
        <div id="content-inner">
            <p>Vous cherchez quelquechose qui ne se trouve pas ici.</p>
            <?php include (TEMPLATEPATH . "/searchform.php"); ?>
        </div>

    <?php endif; ?>

<?php get_footer(); ?>
