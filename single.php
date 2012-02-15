<?php get_header(); ?>

			<div id="content">

				<section role="main">

					<?php
					if (have_posts()) : while (have_posts()) : the_post();
						include (TEMPLATEPATH . "/single_post-content.php");

						comments_template();

					endwhile;
					endif; ?>
	
				</section><!-- end #main -->

				<?php get_sidebar(); // sidebar 1 ?>

			</div><!-- end #content -->

<?php get_footer(); ?>