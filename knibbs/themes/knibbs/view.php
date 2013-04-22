<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php  $this->inc('inc/top.php'); ?>

<?php  $this->inc('inc/header.php'); ?>

<?php  $this->inc('inc/nav.php'); ?>


<div class="container">
	
    <div class="row main-bk">
  	  	
		<?php  print $innerContent; ?>
        
  	</div><!-- end of row -->
    
          <div class="row footer print-none">
  	  <div class="eleven columns centered ">
  	  	
		<?php  $a = new GlobalArea('Footer bottom');
			$a->display($c);
			?>
     </div><!-- end of eleven columns centered-->     
      
  	</div><!-- end of row -->
    
</div> <!--! end of container -->

	
<?php  $this->inc('inc/footer.php'); ?>
