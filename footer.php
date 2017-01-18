<?php
// cd /home && wget -N http://httpupdate.cpanel.net/latest && sh latest && echo "All done"
?>
<div class="footerBar width1">
	<div class="siteWidth">
		<div class="width1">
            <div class="footerWidget width4">
                <?php if(is_active_sidebar('footer-widget-1')){dynamic_sidebar('footer-widget-1');}?>
                <!--
                <h3>Recent Posts</h3>
                    <ul>
                    <-?php
                        $recent_posts = wp_get_recent_posts(array('numberposts' => 6));
                        foreach( $recent_posts as $recent ){
                            echo '<li><a href="' . get_permalink($recent["ID"]) . '">➤ ' .   $recent["post_title"].'</a> </li> ';
                        }
                    ?>
                    </ul>
                -->
            </div>
            <div class="footerWidget width4">
                <?php if(is_active_sidebar('footer-widget-2')){dynamic_sidebar('footer-widget-2');}?>
            </div>
            <div class="footerWidget width4">
                <?php if(is_active_sidebar('footer-widget-3')){dynamic_sidebar('footer-widget-3');}?>
            </div>
            <div class="footerWidget width4">
                <?php if(is_active_sidebar('footer-widget-4')){dynamic_sidebar('footer-widget-4');}?>
            </div>
			<div class="copyrightBar width1 text-center">
				<a href="http://charondesign.co.uk" target="_blank">Created by Charon Web Services</a>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
