<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This is built using the Clean template to allow for new theme's using
 * Moodle's new Bootstrap theme engine
 *
 *
 * @package   theme_uemanet
 * @copyright 2013 Willian Mano
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$settings = null;

defined('MOODLE_INTERNAL') || die;


	$ADMIN->add('themes', new admin_category('theme_uemanet', 'UemaNet'));

	// "geneicsettings" settingpage
	$temp = new admin_settingpage('theme_uemanet_generic', 'Configurações Gerais');
	
	// Default Site icon setting.
    $name = 'theme_uemanet/siteicon';
    $title = get_string('siteicon', 'theme_uemanet');
    $description = get_string('siteicondesc', 'theme_uemanet');
    $default = 'laptop';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
	
    // Logo file setting.
    $name = 'theme_uemanet/logo';
    $title = get_string('logo', 'theme_uemanet');
    $description = get_string('logodesc', 'theme_uemanet');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main theme background colour setting.
    $name = 'theme_uemanet/themecolor';
    $title = get_string('themecolor', 'theme_uemanet');
    $description = get_string('themecolordesc', 'theme_uemanet');
    $default = '#30add1';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main theme Hover colour setting.
    $name = 'theme_uemanet/themehovercolor';
    $title = get_string('themehovercolor', 'theme_uemanet');
    $description = get_string('themehovercolordesc', 'theme_uemanet');
    $default = '#29a1c4';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Copyright setting.
    $name = 'theme_uemanet/copyright';
    $title = get_string('copyright', 'theme_uemanet');
    $description = get_string('copyrightdesc', 'theme_uemanet');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
    
    // Footnote setting.
    $name = 'theme_uemanet/footnote';
    $title = get_string('footnote', 'theme_uemanet');
    $description = get_string('footnotedesc', 'theme_uemanet');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Custom CSS file.
    $name = 'theme_uemanet/customcss';
    $title = get_string('customcss', 'theme_uemanet');
    $description = get_string('customcssdesc', 'theme_uemanet');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

 	$ADMIN->add('theme_uemanet', $temp);
	
	/* Social Network Settings */
	$temp = new admin_settingpage('theme_uemanet_social', 'Redes Sociais');
	$temp->add(new admin_setting_heading('theme_uemanet_social', get_string('socialheadingsub', 'theme_uemanet'),
            format_text(get_string('socialdesc' , 'theme_uemanet'), FORMAT_MARKDOWN)));
	
    // Facebook url setting.
    $name = 'theme_uemanet/facebook';
    $title = get_string('facebook', 'theme_uemanet');
    $description = get_string('facebookdesc', 'theme_uemanet');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Twitter url setting.
    $name = 'theme_uemanet/twitter';
    $title = get_string('twitter', 'theme_uemanet');
    $description = get_string('twitterdesc', 'theme_uemanet');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Google+ url setting.
    $name = 'theme_uemanet/googleplus';
    $title = get_string('googleplus', 'theme_uemanet');
    $description = get_string('googleplusdesc', 'theme_uemanet');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // YouTube url setting.
    $name = 'theme_uemanet/youtube';
    $title = get_string('youtube', 'theme_uemanet');
    $description = get_string('youtubedesc', 'theme_uemanet');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $ADMIN->add('theme_uemanet', $temp);

