<?php  
defined('C5_EXECUTE') or die(_("Access Denied."));
 
if ($leftAlign == '') {
	
	$marginLeft = ' style="margin-left:8px;"';

}	

echo '<div class="social-links-circle-colour-32-wrapper"'.$marginLeft.'>';
echo '<ul class="social-links-circle-colour-32">';
			
	foreach($linksArray as $data) {
		
		echo '<li class="'.$data['socialLinkClass'].'"><a '.$newWindow.$leftAlign.$nofollow.'href="'.$data['socialLinkUri'].'" title="'.$data['socialLinkTitle'].'">'.$data['socialLinkTitle'].'</a></li>';
		
	}	

?>
		
	</ul>
<div style="clear:both"></div>		
</div>