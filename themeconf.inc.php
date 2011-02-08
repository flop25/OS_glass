<?php
/*
Theme Name: OS_glass
Version: 1.0.0
Description: 
Theme URI: http://fr.piwigo.org/ext/extension_view.php?eid=383
Author: flop25
Author URI: http://www.planete-flop.fr/site.php?acc=file
*/

$themeconf = array(
  'name'         => 'OS_glass',
  'parent'        => 'OS_default',
  'icon_dir'      => 'themes/OS_default/icon',
  'mime_icon_dir' => 'themes/OS_default/icon/mimetypes/',
  'local_head' => 'local_head.tpl',
  'activable' => true,
	'add_menu_on_public_pages'			=> true,	# activation
	'Exclude'			=> array('theNBMPage','thePicturePage','thePopuphelpPage',),	# Excluded pages
	'tab_system'			=> true,	# activation
	'tab_closed'			=> array('mbLinks','mbTags','mbSpecials','mbIdentification'),	# tabs which are closed when the page is loaded
);
@include('themeconf_local.inc.php');

	add_event_handler('init', 'dynamic_tab', 20);

	function  dynamic_tab() {
global $template, $conf;
$template->assign(
  array(
    'tab_system' => get_themeconf('tab_system'),
    'tab_closed' => get_themeconf('tab_closed'),
    ));
	}
?>
