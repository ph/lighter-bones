			<footer role="contentinfo">					
				<nav>
					<?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
				</nav>
		
				<p class="attribution">&copy; <?php bloginfo('name'); ?> <?php _e("is powered by", "bonestheme"); ?> <a href="http://wordpress.org/" title="WordPress">WordPress</a> <span class="amp">&</span> <a href="http://www.themble.com/bones" title="Bones" class="footer_bones_link">Bones</a>.</p>
			</footer><!-- end footer -->

		</div><!-- end #wrap -->

		<!-- scripts are now optimized via Modernizr.load -->	
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js"></script>
		<?php wp_footer(); // js scripts are inserted using this function ?>

</body>
</html>