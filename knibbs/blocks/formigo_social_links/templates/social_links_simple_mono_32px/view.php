<?php   defined('C5_EXECUTE') or die(_("Access Denied."));?>

<div class="social-links-mono-32-wrapper">
	
	<ul class="social-links-mono-32">
		
		<?php   
		
		foreach($linksArray as $data) {
			
			echo '<li class="'.$data['socialLinkClass'].'"><a '.$newWindow.$leftAlign.$nofollow.'href="'.$data['socialLinkUri'].'" title="'.$data['socialLinkTitle'].'">'.$data['socialLinkTitle'].'</a></li>';
			
		}	
		
		?>
		
	</ul>
<div style="clear:both"></div>	
</div>