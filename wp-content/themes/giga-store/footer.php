<?php if ( is_active_sidebar( 'giga-store-footer-area' ) ) { ?>
	<div class="footer-widgets"> 
		<div class="container">		
			<div id="content-footer-section" class="row clearfix">
				<?php dynamic_sidebar( 'giga-store-footer-area' ) ?>
			</div>
		</div>
	</div>	
<?php } ?>
<footer id="colophon" class="rsrc-footer" role="contentinfo">
	<div class="container">  
		<div class="row rsrc-author-credits">
			<?php if ( get_theme_mod( 'giga_store_socials', 0 ) == 1 ) : ?>
				<div class="footer-socials text-center">
					<?php
					if ( get_theme_mod( 'giga_store_socials', 0 ) == 1 ) {
						giga_store_social_links();
					}
					?>                 
				</div>
			<?php endif; ?>
			<div class="text-center h4">
				Stronger Stacks, Smarter Logistics: Palletize Your Potential with Our Pallet Box Solutions!
			</div>
		</div>
            <div class="row text-center" style="padding-bottom: 10px">
            <div class="col-md-3">
                <div class="follow-buttons">
                    <a class="twitter" href="https://twitter.com/PalletBoxSale"><span>Follow us on Tw
                            itter</span></a>
                    <a class="facebook" href="http://www.facebook.com/"><span>Follow Us on Facebook</ span></a>
                    <a class="instagram" href="http://www.instagram.com/"><span>Follow Us on Instagra
                            m</span></a>
                    <a class="linkedIn" href="http://www.linkedin.com/"><span>Follow Us on LinkedIn</ span></a>
                </div>
            </div>
            <div class="col-md-9">
                <div id="footerLink">
                    <a href="https://www.vegcrates.com/" target="_blank">fruit crates wholesale</a>
                    <b>|</b>
                    <a href="https://www.plastic-crate.com/" target="_blank">plastic moving box</a>
                    <b>|</b>
                    <a href="https://www.plastic-crate.co.uk" target="_blank">Euro crates</a>
                    <b>|</b>
                    <a href="https://www.poolteststrip.com/product/sanitizer-test-strips-sanitizer-test-strips-for-restaurants-0-2000-ppm/" target="_blank">sanitizer test strips</a>
                </div>
            </div>
        </div>
	</div>       
</footer> 
<p id="back-top">
	<a href="#top"><span></span></a>
</p>
<!-- end main container -->
</div>
<nav id="menu" class="off-canvas-menu">
	<?php
	wp_nav_menu( array(
		'theme_location' => 'main_menu',
		'container'		 => false,
	) );
	?>
</nav>
<?php wp_footer(); ?>
</body>
</html>
