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
$GLOBALS['TL_LANG']['tl_content']['fl_size']            = array('Breite und Höhe', 'Bitte geben Sie die Breite und Höhe in Pixeln ein.');
$GLOBALS['TL_LANG']['tl_content']['fl_version']         = array('Flashversion', 'Bitte geben Sie die Flashversion ein die mindestens auf dem Client installiert sein muss.');
$GLOBALS['TL_LANG']['tl_content']['fl_transparent']     = array('Transparenter Film', 'Den Flash-Film transparent machen (wmode = transparent).');
$GLOBALS['TL_LANG']['tl_content']['fl_flashvars']       = array('FlashVars', 'Variablen an den Flash-Film übergeben (<em>var1=wert1&amp;var2=wert2</em>).');
$GLOBALS['TL_LANG']['tl_content']['fl_key']             = array('Key', 'Name der Flashvariable an den Flash-Film übergeben wird.');
$GLOBALS['TL_LANG']['tl_content']['fl_value']           = array('Wert', 'Wert der Flashvariable an den Flash-Film übergeben wird.');
$GLOBALS['TL_LANG']['tl_content']['fl_altContent']      = array('Alternativer Inhalt', 'Der alternative Inhalt wird angezeigt, falls der Flash-Film nicht geladen werden kann. HTML-Tags sind erlaubt.');
$GLOBALS['TL_LANG']['tl_content']['fl_source']          = array('Quelle', 'Eine Datei auf dem Server oder eine externe URL verwenden.');
$GLOBALS['TL_LANG']['tl_content']['fl_interactive']     = array('Interaktiv machen', 'Den Flash-Film mit dem Webbrowser über JavaScript interagieren lassen.');
$GLOBALS['TL_LANG']['tl_content']['fl_flashID']         = array('Flash-Film-ID', 'Bitte geben Sie eine eindeutige Flash-Film-ID ein.');
$GLOBALS['TL_LANG']['tl_content']['fl_flashJS']         = array('JavaScript _DoFSCommand(command, args) {', 'Bitte geben Sie den JavaScript-Code ein.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_content']['title_legend']       = 'Titel und Typ';
$GLOBALS['TL_LANG']['tl_content']['config_legend']      = 'Konfiguration';
$GLOBALS['TL_LANG']['tl_content']['interact_legend']	= 'Interaktiver Flash-Film';

?>