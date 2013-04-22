<?php   
	defined('C5_EXECUTE') or die("Access Denied.");
	$aBlocks = $controller->generateNav();
	$c = Page::getCurrentPage();
	
	
		/*if ($c->getNumChildren() > 0 && $thisLevel < 1) {
            $listIndent = 'list-indent';
        } else {
          $listIndent = '';
         }
         if ($isFirst) {
            $listIndent = '';
         }
         
        */
         
	echo '<form><select id="dropdown" onchange="go()">';
	
	foreach($aBlocks as $ni) {         

		$_c = $ni->getCollectionObject();
		
		if (!$_c->getCollectionAttributeValue('exclude_nav')) {
		
		$pageLink = false;
					
		$pageLink = $ni->getURL();
		
		if ($ni->isActive($c) || strpos($c->getCollectionPath(), $_c->getCollectionPath()) === 0) {
			
			print '<option class="'.$listIndent.'" selected="selected" value="' . $pageLink . '">';
			
			echo($ni->getName());
	
			print '</option>';			
		
		} 
		
		else {
				
			print '<option class="'.$listIndent.'" value="' . $pageLink . '">';
			
			echo($ni->getName());
	
			print '</option>';
		
		}		
	
	}
	}
		
	echo '</select></form>';
?>