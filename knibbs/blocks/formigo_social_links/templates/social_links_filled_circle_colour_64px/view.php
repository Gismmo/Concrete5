<?php   
defined('C5_EXECUTE') or die(_("Access Denied."));

if ($leftAlign == '') {
	
	$marginLeft = ' style="margin-left:16px;"';

}	

echo '<div class="social-links-filled-circle-colour-64-wrapper"'.$marginLeft.'>';
echo '<ul class="social-links-filled-circle-colour-64">';
			
	foreach($linksArray as $data) {
		
		echo '<li class="'.$data['socialLinkClass'].'"><a '.$newWindow.$leftAlign.$nofollow.'href="'.$data['socialLinkUri'].'" title="'.$data['socialLinkTitle'].'">'.$data['socialLinkTitle'].'</a></li>';
		
	}	

?>
		
	</ul>
<div style="clear:both"></div>	
</div>