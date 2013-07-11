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

$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$hasfooter = (empty($PAGE->layout_options['nofooter']));
$hasheader = (empty($PAGE->layout_options['noheader']));

$hassidepre = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-pre', $OUTPUT));
$hassidepost = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-post', $OUTPUT));

$showsidepre = ($hassidepre && !$PAGE->blocks->region_completely_docked('side-pre', $OUTPUT));
$showsidepost = ($hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT));

// If there can be a sidepost region on this page and we are editing, always
// show it so blocks can be dragged into it.
if ($PAGE->user_is_editing()) {
    if ($PAGE->blocks->is_known_region('side-pre')) {
        $showsidepre = true;
    }
    if ($PAGE->blocks->is_known_region('side-post')) {
        $showsidepost = true;
    }
}

$haslogo = (!empty($PAGE->theme->settings->logo));

$hasfootnote = (!empty($PAGE->theme->settings->footnote));
$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));

$courseheader = $coursecontentheader = $coursecontentfooter = $coursefooter = '';

if (empty($PAGE->layout_options['nocourseheaderfooter'])) {
    $courseheader = $OUTPUT->course_header();
    $coursecontentheader = $OUTPUT->course_content_header();
    if (empty($PAGE->layout_options['nocoursefooter'])) {
        $coursecontentfooter = $OUTPUT->course_content_footer();
        $coursefooter = $OUTPUT->course_footer();
    }
}

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
<head>
    <title><?php echo $PAGE->title ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
    <style type="text/css">
        @font-face {
        font-family: 'FontAwesome';
        src: url('<?php echo $CFG->wwwroot ?>/theme/uemanet/fonts/fontawesome-webfont.eot?v=3.2.1');
        src: url('<?php echo $CFG->wwwroot ?>/theme/uemanet/fonts/fontawesome-webfont.eot?#iefix&v=3.2.1') format('embedded-opentype'), 
            url('<?php echo $CFG->wwwroot ?>/theme/uemanet/fonts/fontawesome-webfont.woff?v=3.2.1') format('woff'), 
            url('<?php echo $CFG->wwwroot ?>/theme/uemanet/fonts/fontawesome-webfont.ttf?v=3.2.1') format('truetype'), 
            url('<?php echo $CFG->wwwroot ?>/theme/uemanet/fonts/fontawesome-webfont.svg#fontawesomeregular?v=3.2.1') format('svg');
        font-weight: normal;
        font-style: normal;
        }
    </style>
    <?php echo "<link rel='stylesheet' type='text/css' href='".$CFG->wwwroot."/theme/uemanet/style/labelCursos.css' />" ?>
</head>

<body id="<?php p($PAGE->bodyid) ?>" class="<?php p($PAGE->bodyclasses) ?>">

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<?php 
    if ($hasheader) {
        include('header.php');
    }
?>

<header role="banner" class="navbar">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="<?php echo $CFG->wwwroot;?>"><i class="icon-home"></i>&nbsp;<?php print_string('home'); ?></a>
            <a class="btn btn-navbar" data-toggle="workaround-collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse">
            <?php
                if ($hascustommenu) {
                    echo $custommenu;
                }
            ?>
            <ul class="nav pull-right">
            <li><?php echo $PAGE->headingmenu ?></li>
            <li class="navbar-text"><?php echo $OUTPUT->login_info() ?></li>
            </ul>
            </div>
        </div>
    </nav>
</header>

<div id="page" class="container-fluid">
        
    <div id="page-content" class="row-fluid">

        <section id="region-main" class="span12">
            <?php
                if ($hasnavbar) {
                    echo "<nav class='breadcrumb-button'>";
                        echo $PAGE->button;
                    echo "</nav>";

                    echo $OUTPUT->navbar();
                }
            ?>

            <?php
                echo $coursecontentheader;
                echo "<h2 class='pagetitle'>";
                    echo "<span>";
                        echo $PAGE->title;
                    echo "</span>";
                echo "</h2>";
            
                echo $OUTPUT->main_content();
                echo $coursecontentfooter;
            ?>
        </section>
    </div>
</div>

<footer id="page-footer">
            <?php require('footer.php'); ?>
</footer>

<?php echo $OUTPUT->standard_footer_html(); ?>

<?php echo $OUTPUT->standard_end_of_body_html() ?>

</body>
</html>