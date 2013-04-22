<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>

<div class="container">
	<div id="header">
    <div class="row print-none">
  	  <div class="six columns hide-mobile">
  	  	<?php  
		$a = new Area('Header Left');
		$a->display($c);
		?>
  	  </div><!-- end of six columns -->
      
        	  <div class="six columns">
  	  	<?php  $a = new GlobalArea('Header Right');
		$a->display($c);
		?>
  	  </div><!-- end of six columns -->
      
  	</div><!-- end of row -->
    
        <div class="row ">
  	  <div class="twelve columns print-none">
  	  	<img src="<?php  echo $this->getThemePath(); ?>/img/Holwood-logo.svg" alt="Logo" width="100%">
  	  </div><!-- end of Twelve columns -->
      
      <div class="twelve columns screen-none">
  	  	<img src="<?php  echo $this->getThemePath(); ?>/img/Holwood-farm-recipe-card-header.jpg" width="2117" height="418" alt="Local Recipes from Holwood Farm" /> </div><!-- end of Twelve columns -->
      
  	</div><!-- end of row -->
    </div><!-- #header-->
</div> <!--! end of container -->