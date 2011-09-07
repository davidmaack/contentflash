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
 * Table tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'fl_interactive';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'fl_source';
$GLOBALS['TL_DCA']['tl_content']['palettes']['flash'] = '{title_legend},type,headline;{config_legend},fl_size,fl_transparent,fl_flashvars,fl_altContent;{source_legend},fl_source;{interact_legend:hide},fl_interactive;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_content']['subpalettes']['fl_interactive'] = 'fl_flashID,fl_flashJS';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['fl_source_internal'] = 'singleSRC';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['fl_source_external'] = 'url';


$GLOBALS['TL_DCA']['tl_content']['fields']['fl_size'] = array
(
        'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fl_size'],
        'exclude'                 => true,
        'inputType'               => 'text',
        'eval'                    => array('mandatory'=>true, 'multiple'=>true, 'size'=>2, 'rgxp'=>'digit', 'nospace'=>true, 'tl_class'=>'w50')
);
	
$GLOBALS['TL_DCA']['tl_content']['fields']['fl_transparent'] = array
(
        'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fl_transparent'],
        'exclude'                 => true,
        'inputType'               => 'checkbox',
        'eval'                    => array('tl_class'=>'w50 m12')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fl_flashvars'] = array
(
        'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fl_flashvars'],
        'exclude' => true,
        'inputType' => 'multiColumnWizard', 
        'eval' => array(
            'tl_class'=>'clr',
            'columnFields' => array(
                'key' => array(
                    'label' => &$GLOBALS['TL_LANG']['tl_content']['fl_key'],
                    'inputType' => 'text',
                    'eval' => array('nospace'=>true, 'style' => 'width:200px')
                ),
                'value' => array(
                    'label' => &$GLOBALS['TL_LANG']['tl_content']['fl_value'],
                    'inputType' => 'text',
                    'eval' => array('nospace'=>true, 'style' => 'width:395px')
                ),
            )
        )
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fl_altContent'] = array
(
        'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fl_altContent'],
        'exclude'                 => true,
        'search'                  => true,
        'inputType'               => 'textarea',
        'eval'                    => array('mandatory'=>true, 'allowHtml'=>true, 'style'=>'height:60px;', 'tl_class'=>'clr')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fl_source'] = array
(
        'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fl_source'],
        'default'                 => 'internal',
        'exclude'                 => true,
        'inputType'               => 'select',
        'options'                 => array('internal', 'external'),
        'reference'               => &$GLOBALS['TL_LANG']['tl_module'],
        'eval'                    => array('submitOnChange' => true)
);


$GLOBALS['TL_DCA']['tl_content']['fields']['fl_interactive'] = array
(
        'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fl_interactive'],
        'exclude'                 => true,
        'inputType'               => 'checkbox',
        'eval'                    => array('submitOnChange'=>true)
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fl_flashID'] = array
(
        'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fl_flashID'],
        'exclude'                 => true,
        'inputType'               => 'text',
        'eval'                    => array('mandatory'=>true, 'rgxp'=>'extnd', 'nospace'=>true, 'unique'=>true, 'maxlength'=>64)
);

$GLOBALS['TL_DCA']['tl_content']['fields']['fl_flashJS'] = array
(
        'label'                   => &$GLOBALS['TL_LANG']['tl_content']['fl_flashJS'],
        'exclude'                 => true,
        'inputType'               => 'textarea',
        'eval'                    => array('class'=>'monospace')
);

?>