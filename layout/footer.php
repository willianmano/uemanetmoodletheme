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
 * @package   theme_essential
 * @copyright 2013 Julian Ridden
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$hascopyright = (empty($PAGE->theme->settings->copyright)) ? false : $PAGE->theme->settings->copyright;
$hasfootnote = (empty($PAGE->theme->settings->footnote)) ? false : $PAGE->theme->settings->footnote;
?>
    <div class="row-fluid">
        <!-- Widget 1 -->
        <div class="span12">
            <div id="footer-left" class="block-region">
                <div class="region-content">
                <?php if ($hascopyright) {
                    echo '<p class="copy">&copy; '.date("Y").' '.$hascopyright.'</p>';
                } ?>
                </div>
            </div>
        </div>

        <!-- widget 2 -->
        <!-- <div class="span4">
            <div id="footer-right" class="block-region">
                <div class="region-content">
                    <?php 
                        // if ($hasfootnote) {
                        //     echo '<div class="footnote">'.$hasfootnote.'</div>';
                        // }
                    ?>
                </div>
            </div>
        </div> -->
    </div>

