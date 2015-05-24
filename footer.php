			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<p class="contact-info">
						<strong>Questions? Contact Us:</strong><br>
						<a href='&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#105;&#110;&#102;&#111;&#64;&#111;&#109;&#101;&#103;&#97;&#99;&#111;&#110;&#118;&#101;&#110;&#116;&#105;&#111;&#110;&#46;&#99;&#111;&#109;'>&#105;&#110;&#102;&#111;&#64;&#111;&#109;&#101;&#103;&#97;&#99;&#111;&#110;&#118;&#101;&#110;&#116;&#105;&#111;&#110;&#46;&#99;&#111;&#109;</a><br>
						<a href="tel://434-973-2205">434.973.2205</a><br>
						<br>
						<a class="social-icon facebook" target="_blank" href="https://facebook.com/omegaconVA">Facebook</a>
						<a class="social-icon twitter" target="_blank" href="https://twitter.com/OmegaConVA">Twitter</a>
						<a class="social-icon google" target="_blank" href="https://plus.google.com/+Omegaconvention">Google+</a>
					</p>

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<p class="source-org copyright">
						OmegaCon presented by:<br>
						<a href="http://theendgames.co" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/library/images/end.png" alt="The End Games"></a><br>
						&copy; <?php echo date('Y'); ?> Omega Games LLC.<br>
						143 Zan Road, Charlottesville VA
					</p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
