<?php get_header(); ?>

			<div id="content">

				<section role="main">

					<?php if (is_category()) { ?>
						<h2 class="archive-title"><span><?php _e("Posts Categorized:", "bonestheme"); ?></span> <?php single_cat_title(); ?></h2>
					<?php } elseif (is_tag()) { ?> 
						<h2 class="archive-title"><span><?php _e("Posts Tagged:", "bonestheme"); ?></span> <?php single_tag_title(); ?></h2>
					<?php } elseif (is_author()) { ?>
						<h2 class="archive-title"><span><?php _e("Posts By:", "bonestheme"); ?></span> <?php get_the_author_meta('display_name'); ?></h2>
					<?php } elseif (is_day()) { ?>
						<h2 class="archive-title"><span><?php _e("Daily Archives:", "bonestheme"); ?></span> <?php the_time('l, F j, Y'); ?></h2>
					<?php } elseif (is_month()) { ?>
				    <h2 class="archive-title"><span><?php _e("Monthly Archives:", "bonestheme"); ?>:</span> <?php the_time('F Y'); ?></h2>
					<?php } elseif (is_year()) { ?>
				    <h2 class="archive-title"><span><?php _e("Yearly Archives:", "bonestheme"); ?>:</span> <?php the_time('Y'); ?></h2>
					<?php } ?>

					<?php
				 	global $contentlength; $contentlength = 'archive';

					if (have_posts()) : while (have_posts()) : the_post();
						include (TEMPLATEPATH . "/single_postcontent.php");

					endwhile; ?>

					<nav class="wp-prev-next">
						<ul>
							<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
							<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
						</ul>
					</nav>								

					<?php endif; ?>

				</section><!-- end #main -->

				<?php get_sidebar(); // sidebar 1 ?>

			</div><!-- end #content -->

<?php get_footer(); ?>