<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));

class knibbsPackage extends Package {

     protected $pkgHandle = 'knibbs';
     protected $appVersionRequired = '5.3.0';
     protected $pkgVersion = '1.0';

     public function getPackageDescription() {
          return t("Responsive and customizable theme which includes several premium add-ons.");
     }

     public function getPackageName() {
          return t("Knibbs Theme - Theme");
     }
     
     public function install() {
          $pkg = parent::install();
     
          // install block 
        BlockType::installBlockTypeFromPackage('formigo_social_links', $pkg); 
        BlockType::installBlockTypeFromPackage('autonav', $pkg); 
		BlockType::installBlockTypeFromPackage('search', $pkg);
          PageTheme::add('knibbs', $pkg);
		 
     }
}
?>