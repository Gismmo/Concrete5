<?php   defined('C5_EXECUTE') or die(_("Access Denied."));?>

<div class="social-links-default-wrapper">
	
	<ul class="social-links-default">
		
		<?php   
		
		foreach($linksArray as $data) {
			
			echo '<li class="'.$data['socialLinkClass'].'"><a '.$newWindow.$leftAlign.$nofollow.'href="'.$data['socialLinkUri'].'" title="'.$data['socialLinkTitle'].'">'.$data['socialLinkTitle'].'</a></li>';
			
		}	
		
		?>
		
	</ul>
<div style="clear:both"></div>		
</div>