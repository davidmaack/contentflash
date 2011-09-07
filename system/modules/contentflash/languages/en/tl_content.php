<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  MEN AT WORK 2011
 * @package    ContentFlash
 * @license    GNU/LGPL
 * @filesource
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_content']['fl_size']           = array('Width and height', 'Please enter the width and height in pixel.');
$GLOBALS['TL_LANG']['tl_content']['fl_transparent']    = array('Transparent movie', 'Make the Flash movie transparent (wmode = transparent).');
$GLOBALS['TL_LANG']['tl_content']['fl_flashvars']      = array('FlashVars', 'Pass variables to the Flash movie (<em>var1=value1&amp;var2=value2</em>).');
$GLOBALS['TL_LANG']['tl_content']['fl_key']            = array('Key', 'Name of the flashvar.');
$GLOBALS['TL_LANG']['tl_content']['fl_value']          = array('Value', 'Vakue of the flashvar.');
$GLOBALS['TL_LANG']['tl_content']['fl_altContent']     = array('Alternate content', 'The alternate content will be shown if the movie cannot be loaded. HTML tags are allowed.');
$GLOBALS['TL_LANG']['tl_content']['fl_source']         = array('Source', 'Whether to use a file on the server or point to an external URL.');
$GLOBALS['TL_LANG']['tl_content']['fl_interactive']    = array('Make interactive', 'Make the Flash movie interact with the browser (requires JavaScript).');
$GLOBALS['TL_LANG']['tl_content']['fl_flashID']        = array('Flash movie ID', 'Please enter a unique Flash movie ID.');
$GLOBALS['TL_LANG']['tl_content']['fl_flashJS']        = array('JavaScript _DoFSCommand(command, args) {', 'Please enter the JavaScript code.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['title_legend']		= 'Title and type';
$GLOBALS['TL_LANG']['tl_content']['config_legend'] 		= 'Configuration';
$GLOBALS['TL_LANG']['tl_content']['interact_legend']	= 'Interactive Flash movie';

?>