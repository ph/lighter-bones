<?php get_header(); ?>
			
			<div id="content">

				<section role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
						
						<header>
							<h2 class="page-title"><?php the_title(); ?></h2>
							<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?>.</p>
						</header><!-- end article header -->
					
						<section class="post_content">
							<?php the_content(); ?>
						</section><!-- end article section -->

						<footer>
							<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
						</footer><!-- end article footer -->

					</article><!-- end article -->

					<?php endwhile; ?>		

					<?php endif; ?>

				</section><!-- end #main -->

				<?php get_sidebar(); // sidebar 1 ?>

			</div><!-- end #content -->

<?php get_footer(); ?>