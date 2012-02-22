					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

						<header>
							<?php if(is_single()): ?>
								<h2 class="single-title"><?php the_title(); ?></h2>
							<?php else: ?>
								<h2 class="single-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php endif; ?>
							<p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('F jS, Y'); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>
						</header><!-- end article header -->
					
						<section class="post_content">
							<?php 
							if($contentlength != 'archive'):
								the_content();
							else:
								the_post_thumbnail( 'bones-thumb-300' );
							 	the_excerpt();
							endif; ?>
						</section><!-- end article section -->
						
						<footer>
							<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
						</footer><!-- end article footer -->

					</article><!-- end article -->