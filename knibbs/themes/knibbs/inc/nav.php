<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<div id="main-nav">
<nav id="horizontal-nav">
	<div class="row">
  		<div class=" push_one twelve columns">
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
</nav> <!-- #horizontal-nav -->
</div>

<div id="res-nav">
	
	<div class="block">
     	<div class="twelve columns navbk">
    		<a class="nav-btn" id="nav-open-btn" href="#nav"><div class="nav-icon"></div>Menu</a> 
    	</div><!-- twelve columns navbk -->
 	</div><!-- block -->
  	
 	<nav id="nav" role="navigation">
        <div class="block">
			<?php  
            $autonav = BlockType::getByHandle('autonav');
            $autonav->controller->orderBy = 'display_asc';
            $autonav->controller->displayPages = 'top';
            $autonav->controller->displaySubPages = 'all';
            $autonav->controller->displaySubPageLevels = 'all';
            $autonav->render('templates/off_canvas_nav');
            ?>
    		<a class="close-btn" id="nav-close-btn" href="#top">Return to Content</a>
        </div><!-- block -->
    </nav><!-- #nav -->

</div><!-- res-nav -->