<?php get_header(); ?>

			<div id="content">

				<section role="main">

					<h2 class="archive-title"><span>Search Results for:</span> <?php echo esc_attr(get_search_query()); ?></h2>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						<header>
							<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
						</header><!-- end article header -->
					
						<section class="post_content">
							<?php the_excerpt('<span class="read-more">Read more on "'.the_title('', '', false).'" &raquo;</span>'); ?>
						</section><!-- end article section -->
						
						<footer>

						</footer><!-- end article footer -->

					</article><!-- end article -->

					<?php endwhile; ?>	

					<nav class="wp-prev-next">
						<ul>
							<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
							<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
						</ul>
					</nav>

					<?php endif; ?>

				</section><!-- end #main -->

   			<div id="sidebar1" class="sidebar">
   				<?php get_search_form(); ?>
   			</div>

			</div><!-- end #content -->

<?php get_footer(); ?>