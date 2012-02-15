<?php get_header(); ?>

			<div id="content">

				<section role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php
					if (have_posts()) : while (have_posts()) : the_post();
						include (TEMPLATEPATH . "/single_post_content.php");

						comments_template();

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