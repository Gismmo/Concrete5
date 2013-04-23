<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php  $this->inc('inc/top.php'); ?>
<?php  $this->inc('inc/header.php'); ?>

<div class="container">
	
	<div class="row main-bk">
  		
        <div class="twelve columns">
  	  		<?php $a = new Area('Main slider'); $a->display($c); ?>
    	</div><!-- end of twelve columns -->   
          
  	</div><!-- end of row -->
    
	<div class="row">
  		
        <div class="eight columns">
			<?php $a = new Area('Main');  $a->display($c); ?>
            	
                <div class="row">
                	<div class="six columns">
                    	<?php $a = new Area('Main left');  $a->display($c); ?>
                    </div>
                    <div class="six columns">
                    <?php $a = new Area('Main Right');  $a->display($c); ?>
                    </div>
              	</div><!--row-->
      	</div><!-- end of eight columns -->
		
        <div class="four columns">
  	  		<?php $a = new Area('Sidebar'); $a->display($c); ?>
        </div><!-- end of eight columns -->     
      
  	</div><!-- end of row -->

</div> <!--! end of container -->

<?php  $this->inc('inc/footer.php'); ?>