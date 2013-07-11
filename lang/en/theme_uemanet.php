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
 * @copyright 2013 Julian Ridden
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/* Core */
$string['configtitle'] = 'uemanet';
$string['pluginname'] = 'uemanet';
$string['choosereadme'] = '
<div class="clearfix">
<div class="well">
<h2>Clean</h2>
<p><img class=img-polaroid src="clean/pix/screenshot.jpg" /></p>
</div>
<div class="well">
<h3>About uemanet</h3>
<p>uemanet is a modified Moodle bootstrap theme which inherits styles and renderers from its parent theme.</p>
<h3>Parents</h3>
<p>This theme is based upon the Bootstrap theme, which was created for Moodle 2.5, with the help of:<br>
Stuart Lamour, Mark Aberdour, Paul Hibbitts, Mary Evans.</p>
<h3>Theme Credits</h3>
<p>Authors: Julian Ridden<br>
Contact: julian@moodleman.net<br>
Website: <a href="http://www.moodleman.net">www.moodleman.net</a>
</p>
</div></div>';

/* General */
$string['customcss'] = 'Custom CSS';
$string['customcssdesc'] = 'Whatever CSS rules you add to this textarea will be reflected in every page, making for easier customization of this theme.';
$string['footnote'] = 'Footnote';
$string['footnotedesc'] = 'Whatever you add to this textarea will be displayed in the footer throughout your Moodle site.';
$string['invert'] = 'Invert navbar';
$string['invertdesc'] = 'Swaps text and background for the navbar at the top of the page between black and white.';
$string['logo'] = 'Logo';
$string['logodesc'] = 'Please upload your custom logo here if you want to add it to the header.<br>If you upload a logo it will replace the standard icon and name that was displayed by default.';
$string['copyright'] = 'Copyright';
$string['copyrightdesc'] = 'The name of your organisation.';
$string['profilebarcustomtitle'] = 'Profile Bar Custom Block Title';
$string['profilebarcustomtitledesc'] = 'Title for custom Profile Bar block';
$string['themecolor'] = 'Theme Color';
$string['themecolordesc'] = 'What color should your theme be. This will change mulitple components to produce the color you wish across the moodle site';
$string['themehovercolor'] = 'Theme Hover Color';
$string['themehovercolordesc'] = 'What color should your theme hovers be. This is used for links, menus, etc';
$string['contactinfo'] = 'Contact Information';
$string['contactinfodesc'] = 'Enter your contact information';
$string['siteicon'] = 'Site Icon';
$string['siteicondesc'] = 'Do not have a logo? Enter the name of the icon you wish to use. List is <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_new">here</a>. Just enter what is after the "icon-". ';

/* Regions */
$string['region-side-post'] = 'Right';
$string['region-side-pre'] = 'Left';
$string['region-footer-left'] = 'Footer (Left)';
$string['region-footer-middle'] = 'Footer (Middle)';
$string['region-footer-right'] = 'Footer (Right)';
$string['region-hidden-dock'] = 'Hidden from users';

/* Slideshow */
$string['slideshowheading'] = 'Frontpage Slideshow';
$string['slideshowheadingsub'] = 'Dynamic Slideshow for the frontpage';
$string['slideshowdesc'] = 'This creates a dynamic slideshow of up to 4 slides for you to promote important elements of your site.';

$string['hideonphone'] = 'Slideshow on Mobiles';
$string['hideonphonedesc'] = 'Choose if you wish to have the slideshow shown on mobiles or not';
$string['display'] = 'Display';
$string['dontdisplay'] = 'Do not Display';

$string['slideshowTitle'] = 'Slideshow';
$string['slide1'] = 'Slide One: Title';
$string['slide1desc'] = 'Enter a descriptive title for your slide';
$string['slide1image'] = 'Slide One: Image';
$string['slide1imagedesc'] = 'Image works best if it is transparent. (Image size should be 256px x 256px)';
$string['slide1caption'] = 'Slide One: Caption';
$string['slide1captiondesc'] = 'Enter the caption text to use for the first slide';
$string['slide1url'] = 'Slide One: Image Link';
$string['slide1urldesc'] = 'Enter the target destination of the first slide\'s image link';

$string['slide2'] = 'Slide Two: Title';
$string['slide2desc'] = 'Enter a descriptive title for your slide';
$string['slide2image'] = 'Slide Two: Image';
$string['slide2imagedesc'] = 'Image works best if it is transparent. (Image size should be 256px x 256px)';
$string['slide2caption'] = 'Slide Two: Caption';
$string['slide2captiondesc'] = 'Enter the caption text to use for the second slide';
$string['slide2url'] = 'Slide Two: Image Link';
$string['slide2urldesc'] = 'Enter the target destination of the second slide\'s image link';

$string['slide3'] = 'Slide Three: Title';
$string['slide3desc'] = 'Enter a descriptive title for your slide';
$string['slide3image'] = 'Slide Three: Image';
$string['slide3imagedesc'] = 'Image works best if it is transparent. (Image size should be 256px x 256px)';
$string['slide3caption'] = 'Slide Three: Caption';
$string['slide3captiondesc'] = 'Enter the caption text to use for the third slide';
$string['slide3url'] = 'Slide Three: Image Link';
$string['slide3urldesc'] = 'Enter the target destination of the third slide\'s image link';

$string['slide4'] = 'Slide Four: Title';
$string['slide4desc'] = 'Enter a descriptive title for your slide';
$string['slide4image'] = 'Slide Four: Image';
$string['slide4imagedesc'] = 'Image works best if it is transparent. (Image size should be 256px x 256px)';
$string['slide4caption'] = 'Slide Four: Caption';
$string['slide4captiondesc'] = 'Enter the caption text to use for the fourth slide';
$string['slide4url'] = 'Slide Four: Image Link';
$string['slide4urldesc'] = 'Enter the target destination of the fourth slide\'s image link';

/* Marketing Spots */
$string['marketingheading'] = 'Marketing Spots';
$string['marketingheadingsub'] = 'Three locations on the front page to add information and links';
$string['marketingdesc'] = 'This theme provides the option of enabling three "marketing" or "ad" spots just under the slideshow. These allow you to easily identify core information to your users and provide direct links.';

$string['togglemarketing'] = 'Toggle Marketing Spot display';
$string['togglemarketingdesc'] = 'Choose if you wish to hide or show the three Marketing Spots.';


$string['marketing1'] = 'Marketing Spot One - Title';
$string['marketing1desc'] = 'Title to show in this marketing spot';
$string['marketing1icon'] = 'Marketing Spot One - Icon';
$string['marketing1icondesc'] = 'Name of the icon you wish to use. List is <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_new">here</a>. Just enter what is after the "icon-".';
$string['marketing1content'] = 'Marketing Spot One - Content';
$string['marketing1contentdesc'] = 'Content to display in the marketing box. Keep it short and sweet.';
$string['marketing1buttontext'] = 'Marketing Spot One - Link Text';
$string['marketing1buttontextdesc'] = 'Text to appear on the button.';
$string['marketing1buttonurl'] = 'Marketing Spot One - Link URL';
$string['marketing1buttonurldesc'] = 'URL the button will point to.';

$string['marketing2'] = 'Marketing Spot Two - Title';
$string['marketing2desc'] = 'Title to show in this marketing spot';
$string['marketing2icon'] = 'Marketing Spot Two - Icon';
$string['marketing2icondesc'] = 'Name of the icon you wish to use. List is <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_new">here</a>. Just enter what is after the "icon-".';
$string['marketing2content'] = 'Marketing Spot Two - Content';
$string['marketing2contentdesc'] = 'Content to display in the marketing box. Keep it short and sweet.';
$string['marketing2buttontext'] = 'Marketing Spot Two - Link Text';
$string['marketing2buttontextdesc'] = 'Text to appear on the button.';
$string['marketing2buttonurl'] = 'Marketing Spot Two - Link URL';
$string['marketing2buttonurldesc'] = 'URL the button will point to.';

$string['marketing3'] = 'Marketing Spot Three - Title';
$string['marketing3desc'] = 'Title to show in this marketing spot';
$string['marketing3icon'] = 'Marketing Spot Three - Icon';
$string['marketing3icondesc'] = 'Name of the icon you wish to use. List is <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_new">here</a>. Just enter what is after the "icon-".';
$string['marketing3content'] = 'Marketing Spot Three - Content';
$string['marketing3contentdesc'] = 'Content to display in the marketing box. Keep it short and sweet.';
$string['marketing3buttontext'] = 'Marketing Spot Three - Link Text';
$string['marketing3buttontextdesc'] = 'Text to appear on the button.';
$string['marketing3buttonurl'] = 'Marketing Spot Three - Link URL';
$string['marketing3buttonurldesc'] = 'URL the button will point to.';

/* Social Networks */
$string['socialheading'] = 'Social Networking';
$string['socialheadingsub'] = 'Engage your users with Social Networking';
$string['socialdesc'] = 'Provide direct links to the core social networks that promote your brand. These will appear in the header of every page.';
$string['facebook'] = 'Facebook URL';
$string['facebookdesc'] = 'Enter the URL of your Facebook page. (i.e http://www.facebook.com/mycollege)';

$string['twitter'] = 'Twitter URL';
$string['twitterdesc'] = 'Enter the URL of your Twitter feed. (i.e http://www.twitter.com/mycollege)';

$string['googleplus'] = 'Google+ URL';
$string['googleplusdesc'] = 'Enter the URL of your Google+ profile. (i.e http://plus.google.com/107817105228930159735)';

$string['linkedin'] = 'LinkedIn URL';
$string['linkedindesc'] = 'Enter the URL of your LinkedIn profile. (i.e http://www.linkedin.com/company/mycollege)';

$string['youtube'] = 'YouTube URL';
$string['youtubedesc'] = 'Enter the URL of your YouTube channel. (i.e http://www.youtube.com/mycollege)';

$string['flickr'] = 'Flickr URL';
$string['flickrdesc'] = 'Enter the URL of your Flickr page. (i.e http://www.flickr.com/mycollege)';

/* Alerts */
$string['ie7message'] = '<p id="ie7message">Sorry, this site requires <strong>Internet Explorer 8</strong> or higher to display and function correctly. Please update your browser via Windows Update, or <a href="http://windows.microsoft.com/en-au/internet-explorer/download-ie" target="_blank">download the latest version here</a>. Alternatively, you can try installing the <a href="http://www.google.com/chromeframe" target="_blank">ChromeFrame plugin</a> which may solve some of the issues experienced in older browsers. If you continue having problems accessing this website or the updates mentioned above, please contact your Helpdesk for further assistance.</p>';