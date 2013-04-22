<?php  
defined('C5_EXECUTE') or die(_("Access Denied."));
	class FormigoSocialLinksBlockController extends BlockController {

		protected $btTable = 'btFormigoSocialLinks';
		protected $btInterfaceWidth = "520";
		protected $btInterfaceHeight = "480";

		public function getBlockTypeName(){
			
			return t('Formigo Social Links');
		
		}
		
		public function getBlockTypeDescription(){
		
			return t('Adds a configurable Social Links widget to your Concrete5 page.');
		
		}

		public function save($args){
		
			## Process our checkboxes

			$args['useTwitter'] = isset($args['useTwitter']) ? 1 : 0;
			$args['useFacebook'] = isset($args['useFacebook']) ? 1 : 0;
			$args['useGoogleplus'] = isset($args['useGoogleplus']) ? 1 : 0;
			$args['useLinkedin'] = isset($args['useLinkedin']) ? 1 : 0;
			$args['useFoursquare'] = isset($args['useFoursquare']) ? 1 : 0;
			$args['useFlickr'] = isset($args['useFlickr']) ? 1 : 0;
			$args['useYoutube'] = isset($args['useYoutube']) ? 1 : 0;
			$args['useVimeo'] = isset($args['useVimeo']) ? 1 : 0;
			$args['usePinterest'] = isset($args['usePinterest']) ? 1 : 0;
			$args['useRss'] = isset($args['useRss']) ? 1 : 0;
			
			$args['nofollowLinks'] = isset($args['nofollowLinks']) ? 1 : 0;
			$args['leftAlign'] = isset($args['leftAlign']) ? 1 : 0;
			$args['newWindow'] = isset($args['leftAlign']) ? 1 : 0;

			parent::save($args);

		}

		public function view() {
			
			## Build our links html
			
			$links = array();
			
			## Twitter
			if($this->useTwitter) {
				
				if($this->twitterOrder){
					
					$this->twitterOrder = (int)$this->twitterOrder;
				
				} else {
					
					$this->twitterOrder = 99;
				
				}
						
				$links[] = array(
					
								"socialLinkClass" => "twitter",
								"socialLinkTitle" => "Twitter",					
								"socialLinkUri" => $this->twitterUri,
								"socialLinkOrder" => $this->twitterOrder 
					
								);
			}
			
			## Facebook
			if($this->useFacebook) {
				
				if($this->facebookOrder){
					
					$this->facebookOrder = (int)$this->facebookOrder;
				
				} else {
					
					$this->facebookOrder = 99;
				
				}
			
				$links[] = array(
					
								"socialLinkClass" => "facebook",
								"socialLinkTitle" => "Facebook",
								"socialLinkUri" => $this->facebookUri,
								"socialLinkOrder" => $this->facebookOrder 
								
								);
			}

			## Google+
			if($this->useGoogleplus) {
				
				if($this->googleplusOrder){
					
					$this->googleplusOrder = (int)$this->googleplusOrder;
				
				} else {
					
					$this->googleplusOrder = 99;
				
				}
						
				$links[] = array(
				
								"socialLinkClass" => "googleplus",
								"socialLinkTitle" => "Google+",					
								"socialLinkUri" => $this->googleplusUri,
								"socialLinkOrder" => $this->googleplusOrder 
					
								);
			}

			## Linked In
			if($this->useLinkedin) {

				if($this->linkedinOrder){

					$this->linkedinOrder = (int)$this->linkedinOrder;

				} else {

					$this->linkedinOrder = 99;

				}

				$links[] = array(

								"socialLinkClass" => "linkedin",
								"socialLinkTitle" => "Linked In",					
								"socialLinkUri" => $this->linkedinUri,
								"socialLinkOrder" => $this->linkedinOrder 

								);
			}

			## Foursquare
			if($this->useFoursquare) {

				if($this->foursquareOrder){

					$this->foursquareOrder = (int)$this->foursquareOrder;

				} else {

					$this->foursquareOrder = 99;

				}

				$links[] = array(

								"socialLinkClass" => "foursquare",
								"socialLinkTitle" => "Foursquare",					
								"socialLinkUri" => $this->foursquareUri,
								"socialLinkOrder" => $this->foursquareOrder 

								);
			}
			
			## Flickr
			if($this->useFlickr) {

				if($this->flickrOrder){

					$this->flickrOrder = (int)$this->flickrOrder;

				} else {

					$this->flickrOrder = 99;

				}

				$links[] = array(

								"socialLinkClass" => "flickr",
								"socialLinkTitle" => "Flickr",					
								"socialLinkUri" => $this->flickrUri,
								"socialLinkOrder" => $this->flickrOrder 

								);
			}
			
			## Youtube
			if($this->useYoutube) {

				if($this->youtubeOrder){

					$this->youtubeOrder = (int)$this->youtubeOrder;

				} else {

					$this->youtubeOrder = 99;

				}

				$links[] = array(

								"socialLinkClass" => "youtube",
								"socialLinkTitle" => "Youtube",					
								"socialLinkUri" => $this->youtubeUri,
								"socialLinkOrder" => $this->youtubeOrder 

								);
			}			
						
			## Vimeo
			if($this->useVimeo) {

				if($this->vimeoOrder){

					$this->vimeoOrder = (int)$this->vimeoOrder;

				} else {

					$this->vimeoOrder = 99;

				}

				$links[] = array(

								"socialLinkClass" => "vimeo",
								"socialLinkTitle" => "Vimeo",					
								"socialLinkUri" => $this->vimeoUri,
								"socialLinkOrder" => $this->vimeoOrder 

								);
			}
			
			## Pinterest
			if($this->usePinterest) {

				if($this->pinterestOrder){

					$this->pinterestOrder = (int)$this->pinterestOrder;

				} else {

					$this->pinterestOrder = 99;

				}

				$links[] = array(

								"socialLinkClass" => "pinterest",
								"socialLinkTitle" => "Pinterest",					
								"socialLinkUri" => $this->pinterestUri,
								"socialLinkOrder" => $this->pinterestOrder 

								);
			}
			
			## RSS
			if($this->useRss) {

				if($this->rssOrder){

					$this->rssOrder = (int)$this->rssOrder;

				} else {

					$this->rssOrder = 99;

				}

				$links[] = array(

								"socialLinkClass" => "rss",
								"socialLinkTitle" => "RSS",					
								"socialLinkUri" => $this->rssUri,
								"socialLinkOrder" => $this->rssOrder 

								);
			}

			## Sort?
			foreach ($links as $key => $row) {
			 
			   $socialLinkOrder[$key]  = $row['socialLinkOrder'];
			
			}

			if($this->leftAlign){
			
				array_multisort($socialLinkOrder,SORT_ASC,$links);
			
			} else {
			
				array_multisort($socialLinkOrder,SORT_DESC,$links);
				
			}	 
			
			$this->set('linksArray',$links);
			
			
						
			## No Follow?
			if($this->nofollowLinks) {
				
				$this->set('nofollow', 'rel="nofollow" ');
			
			} else {
				
				$this->set('nofollow', '');
				
			}		
			
			## Alignment		
			if($this->leftAlign) {

				$this->set('leftAlign', 'style="float:left;" ');

			} else {
				
				$this->set('leftAlign', '');		
			
			}
			
			## New window		
			if($this->newWindow) {

				$this->set('newWindow', 'target="_blank" ');

			} else {
				
				$this->set('newWindow', '');		
			
			}
			
						
		}
		
		public function getJavaScriptStrings() {
	      
			return array(
				
	         	'noServiceSelected' => t('You must select at least one social media service'),
				'uriNotHttp' => t('URIs must begin with \'http://\' prefix'),
		        'orderNotNumeric' => t('To specify an order you must use a number')
	      	
				);
	   	
		}

		public function delete(){
		
			parent::delete();
			
		}
		
	}

?>