<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
      
    <nav id="horizontal-nav">
    
      <div class="container">
	
    <div class="row navbk">
  	  <div class="twelve columns">

	<?php 
	$autonav = BlockType::getByHandle('autonav');
	$autonav->controller->orderBy = 'display_asc';
	$autonav->controller->displayPages = 'top';
	$autonav->controller->displaySubPages = 'all';
	$autonav->controller->displaySubPageLevels = 'all';
	$autonav->render('templates/horizontal-nav');
	?>

     </div><!-- end of twelve columns -->
  	</div><!-- end of row -->
    
</div> <!--! end of container -->
</nav>

    
    <div id="res-nav">
    
     <div class="block">
     	<div class="twelve columns navbk">
    <a class="nav-btn" id="nav-open-btn" href="#nav"><div class="nav-icon"></div>Menu</a>
    	</div>
 	</div>
 
 <nav id="nav" role="navigation">
        <div class="block">
            <h2 class="block-title">Chapters</h2>

	<?php  
	$autonav = BlockType::getByHandle('autonav');
	$autonav->controller->orderBy = 'display_asc';
	$autonav->controller->displayPages = 'top';
	$autonav->controller->displaySubPages = 'all';
	$autonav->controller->displaySubPageLevels = 'all';
	$autonav->render('templates/off_canvas_nav');
	?>
    
            <a class="close-btn" id="nav-close-btn" href="#top">Return to Content</a>
        </div>
    </nav>
</div><!-- res-nav -->

