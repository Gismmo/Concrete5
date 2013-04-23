<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<div id="footer">
<div class="container">
   
   <div class="row footer">
  	  <div class="eight columns">
      	
        
		<?php $a = new GlobalArea('Footer Left'); $a->display($c); ?>
      
  	  	<p class="footer-sign-in">&copy;<?php  echo date('Y')?> <?php  echo SITE?></p>
		
      
      </div><!-- end of ten columns -->
      
  	  <div class="four columns align_right">
  	  	<p>Surrey Website design<a href="http://www.knibbs.co.uk" target="_blank"> Knibbs</a></p>
        
        <p class="footer-sign-in">
		
		<?php $u = new User(); if ($u->isRegistered()) { ?>
        
		<?php if (Config::get("ENABLE_USER_PROFILES")) { $userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>'; } else { $userName = $u->getUserName(); } ?>
        
		<span class="sign-in"><?php  echo t('Currently logged in as <b>%s</b>.', $userName)?> <a href="<?php  echo $this->url('/login', 'logout')?>"><?php  echo t('Sign Out')?></a></span>
		
		<?php   } else { ?>
		<span class="sign-in"><a href="<?php  echo $this->url('/login')?>"><?php  echo t('Sign In')?></a></span>
		<?php   } ?></p>
      </div><!-- end of eight columns -->     
      
  	</div><!-- end of row -->
    
</div> <!-- #footer -->
</div> <!--! end of container -->

</div><!--/#inner-wrap-->
</div><!--/#outer-wrap-->
</div><!-- end main-container -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  
  <!-- Modernizer script to get SVG fallback -->
  <script>
if(!Modernizr.svg) {
    $('img[src*="svg"]').attr('src', function() {
        return $(this).attr('src').replace('.svg', '.png');
    });
}
</script>
  
  <!-- scripts concatenated and minified via ant build script-->
  <script src="<?php echo $this->getThemePath()?>/js/nav.js"></script>
  <!-- end scripts-->


<?php   Loader::element('footer_required'); ?>

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>