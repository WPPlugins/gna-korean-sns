<?php
/*
Plugin Name: GNA Korean SNS
Version: 0.9.7
Plugin URI: http://wordpress.org/plugins/gna-korean-sns/
Author: Chris Dev
Author URI: http://webgna.com/
Description: Sharing your post via Korean SNS such as Kakao Talk, Naver Line, Naver Blog, Facebook, Twitter and so on.
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: gna-korean-sns
*/

if(!defined('ABSPATH'))exit; //Exit if accessed directly

include_once('gna-korean-sns-core.php');

register_activation_hook(__FILE__, array('GNA_KoreanSNS', 'activate_handler'));		//activation hook
register_deactivation_hook(__FILE__, array('GNA_KoreanSNS', 'deactivate_handler'));	//deactivation hook
