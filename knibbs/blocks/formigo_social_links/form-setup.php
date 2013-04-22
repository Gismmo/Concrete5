<?php  
defined('C5_EXECUTE') or die(_("Access Denied."));
?>
<div class="ccm-ui">

<table width="500" cellpadding="2" cellspacing="2" class="table table-striped table-bordered table-condensed">	
	<thead>
		<tr>
			<th>Service</th><th>Use</th><th>URL</th><th>Order</th>
		</tr>
	</thead>	
	
	<tbody>
		<tr>
			<td><?php    echo t('Twitter');?></td>
			<td><?php    echo $form->checkbox('useTwitter',1, $useTwitter, array('class'=>'fservice')) ;?></td>
			<td><?php    echo $form->text('twitterUri', $twitterUri, array('style' => 'width: 300px', 'class'=>'furi'));?></td>
			<td><?php    echo $form->text('twitterOrder', $twitterOrder, array('style' => 'width: 20px', 'class'=>'forder'));?></td>
		</tr>
		
		<tr>
			<td><?php    echo t('Facebook');?></td>
			<td><?php    echo $form->checkbox('useFacebook',1, $useFacebook, array('class'=>'fservice')) ;?></td>
			<td><?php    echo $form->text('facebookUri', $facebookUri, array('style' => 'width: 300px', 'class'=>'furi'));?></td>
			<td><?php    echo $form->text('facebookOrder', $facebookOrder, array('style' => 'width: 20px', 'class'=>'forder'));?></td>
		</tr>
		
		<tr>
			<td><?php    echo t('Google+');?></td>
			<td><?php    echo $form->checkbox('useGoogleplus',1, $useGoogleplus, array('class'=>'fservice')) ;?></td>
			<td><?php    echo $form->text('googleplusUri', $googleplusUri, array('style' => 'width: 300px', 'class'=>'furi'));?></td>
			<td><?php    echo $form->text('googleplusOrder', $googleplusOrder, array('style' => 'width: 20px', 'class'=>'forder'));?></td>
		</tr>
			
		<tr>
			<td><?php    echo t('Linked In');?></td>
			<td><?php    echo $form->checkbox('useLinkedin',1, $useLinkedin, array('class'=>'fservice')) ;?></td>
			<td><?php    echo $form->text('linkedinUri', $linkedinUri, array('style' => 'width: 300px', 'class'=>'furi'));?></td>
			<td><?php    echo $form->text('linkedinOrder', $linkedinOrder, array('style' => 'width: 20px', 'class'=>'forder'));?></td>
		</tr>

		<tr>
			<td><?php    echo t('Foursquare');?></td>
			<td><?php    echo $form->checkbox('useFoursquare',1, $useFoursquare, array('class'=>'fservice')) ;?></td>
			<td><?php    echo $form->text('foursquareUri', $foursquareUri, array('style' => 'width: 300px', 'class'=>'furi'));?></td>
			<td><?php    echo $form->text('foursquareOrder', $foursquareOrder, array('style' => 'width: 20px', 'class'=>'forder'));?></td>
		</tr>
		
		<tr>
			<td><?php    echo t('Flickr');?></td>
			<td><?php    echo $form->checkbox('useFlickr',1, $useFlickr, array('class'=>'fservice')) ;?></td>
			<td><?php    echo $form->text('flickrUri', $flickrUri, array('style' => 'width: 300px', 'class'=>'furi'));?></td>
			<td><?php    echo $form->text('flickrOrder', $flickrOrder, array('style' => 'width: 20px', 'class'=>'forder'));?></td>
		</tr>
		
		<tr>
			<td><?php    echo t('Youtube');?></td>
			<td><?php    echo $form->checkbox('useYoutube',1, $useYoutube, array('class'=>'fservice')) ;?></td>
			<td><?php    echo $form->text('youtubeUri', $youtubeUri, array('style' => 'width: 300px', 'class'=>'furi'));?></td>
			<td><?php    echo $form->text('youtubeOrder', $youtubeOrder, array('style' => 'width: 20px', 'class'=>'forder'));?></td>
		</tr>	
		
		<tr>
			<td><?php    echo t('Vimeo');?></td>
			<td><?php    echo $form->checkbox('useVimeo',1, $useVimeo, array('class'=>'fservice')) ;?></td>
			<td><?php    echo $form->text('vimeoUri', $vimeoUri, array('style' => 'width: 300px', 'class'=>'furi'));?></td>
			<td><?php    echo $form->text('vimeoOrder', $vimeoOrder, array('style' => 'width: 20px', 'class'=>'forder'));?></td>
		</tr>	
		
		<tr>
			<td><?php    echo t('Pinterest');?></td>
			<td><?php    echo $form->checkbox('usePinterest',1, $usePinterest, array('class'=>'fservice')) ;?></td>
			<td><?php    echo $form->text('pinterestUri', $pinterestUri, array('style' => 'width: 300px', 'class'=>'furi'));?></td>
			<td><?php    echo $form->text('pinterestOrder', $pinterestOrder, array('style' => 'width: 20px', 'class'=>'forder'));?></td>
		</tr>	
		
		<tr>
			<td><?php    echo t('RSS');?></td>
			<td><?php    echo $form->checkbox('useRss',1, $useRss, array('class'=>'fservice')) ;?></td>
			<td><?php    echo $form->text('rssUri', $rssUri, array('style' => 'width: 300px', 'class'=>'furi'));?></td>
			<td><?php    echo $form->text('rssOrder', $rssOrder, array('style' => 'width: 20px', 'class'=>'forder'));?></td>
		</tr>	
				
	</tbody>

</table>

<div style="float:right;width:30%">
<?php    echo $form->checkbox('nofollowLinks',1, $nofollowLinks).' '.t('"Nofollow" links') ;?>
<p class="help-block"><?php   echo t('This will add rel="nofollow" to all social links.');?></p>
</div>

<div style="float:left;width:33%">
<?php    echo $form->checkbox('leftAlign',1, $leftAlign).' '.t('Left Align') ;?>
<p class="help-block"><?php   echo t('Default alignment is right.');?></p>
</div>

<div style="float:left;width:30%">
<?php    echo $form->checkbox('newWindow',1, $newWindow).' '.t('Open in New window') ;?>
<p class="help-block"><?php   echo t('Adds target="_blank" to all social links ');?></p>
</div>
<div style="clear:both"></div>

</div>