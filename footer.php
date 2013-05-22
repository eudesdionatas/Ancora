	<footer class="container" id="bottom">
		<div class="row">
	  	<div class="span6">
	    	<small>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</small>
			</div>
			<div class="span6">
	      <ul class="footer-nav" role="navigation">
	        <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
	       <?php if(twitter_account()): ?>
	        <li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
	       <?php endif; ?>
	        <li><a href="<?// php echo admin_url(); ?>/admin" title="Administer your site!">Admin area</a></li>
	        <li><a href="/" title="Return to my website.">Home</a></li>
	      </ul>
	    </div>
	  </div>
	</footer>
	
	     
    </body>
</html>