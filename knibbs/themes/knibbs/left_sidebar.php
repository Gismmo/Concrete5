<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php  $this->inc('inc/top.php'); ?>
<?php  $this->inc('inc/header.php'); ?>

<div class="container">
	
	<div class="row">
  		
        <div class="four columns">
			<?php $a = new Area('Sidebar');  $a->display($c); ?>
      	</div><!-- end of eight columns -->
		
        <div class="eight columns">
  	  		<?php $a = new Area('Main'); $a->display($c); ?>
        </div><!-- end of eight columns -->     
      
  	</div><!-- end of row -->
    
          
</div> <!--! end of container -->
<?php  $this->inc('inc/footer.php'); ?>