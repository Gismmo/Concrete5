<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php  $this->inc('inc/top.php'); ?>

<?php  $this->inc('inc/header.php'); ?>

<?php  $this->inc('inc/nav.php'); ?>


<div class="container">
	
    <div class="row main-bk">
  	  	
		
		<?php   
defined('C5_EXECUTE') or die("Access Denied.");
$html = Loader::helper('html');
$this->addHeaderItem($html->css('page_types/pb_post.css', 'problog'));
Loader::model('blogify','problog');
$blog_settings = blogify::getBlogSettings();
extract($blog_settings);
?>
	
    <div class="row main-bk">
  	  <div class="eight columns">
        

        
       <?php  $a = new Area('Main');
$a->setCustomTemplate('problog', 'templates/recipe_post/view');
$a->display($c);
?>
        
        <?php   
        if($trackback>0){
          	$a = new Area('Blog Post Trackback');
          	$a->display($c);
        }
        ?>
        <?php   
        if($comments>0){
        	if($disqus){
        		Loader::PackageElement('disqus','problog',array('discus'=>$disqus));
        	}else{
          		$a = new Area('Blog Post More');
          		$a->display($c);
          	}
        }
        ?>
        <div class="ccm-next-previous-wrapper">
        	<br/>
	        <?php    
	      	if($prev_link){
	      		?>
	      		<div class="ccm-next-previous-previouslink">
	      			<?php  echo '<a href="'.$prev_link.'" alt="prev_page">&laquo; '.t('Previous').'</a>';?>
			    </div>
			    <?php 
			}
			if($next_link){
	      		?>
	      		<div class="ccm-next-previous-nextlink">
	      			<?php  echo '<a href="'.$next_link.'" alt="next_page">'.t('Next').' &raquo;</a>';?>
			    </div>
			    <?php 
			}
			?>
			<div class="spacer"></div> 
        </div>
    </div><!-- eight columns -->
    
    
 <div class="side-bar-bk four columns">
		<?php   
			$as = new Area('Sidebar');
			$as->display($c);
		?>		
	</div> <!-- sidebar -->
    
</div><!-- row -->
        
        
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
