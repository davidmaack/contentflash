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
 * @package    Contentflash
 * @license    GNU/LGPL
 * @filesource
 */

/**
 * Class ContentFlash
 *
 * Frontend content element flash.
 * @copyright  MEN AT WORK 2011
 * @package    ContentFlash
 */
class ContentFlash extends ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_flash';

    /**
     * @return string
     */
    public function generate()
    {

        if ($this->fl_source != 'external' && (!strlen($this->singleSRC) || !is_file(TL_ROOT . '/' . $this->singleSRC)))
        {
            return '';
        }

        if (TL_MODE == 'BE')
        {
            return $this->fl_altContent;
        }

        return parent::generate();
    }

    /**
     * Generate content element
     */
    protected function compile()
    {
        $this->import('String');

        $this->Template->src = $this->singleSRC;
        $this->Template->href = ($this->source == 'external') ? $this->url : $this->singleSRC;
        $this->Template->alt = $this->fl_altContent;
        $this->Template->var = 'swf' . $this->id;
        $this->Template->transparent = $this->fl_transparent ? true : false;
        $this->Template->interactive = $this->fl_interactive ? true : false;
        $this->Template->flashId = strlen($this->fl_flashID) ? $this->fl_flashID : 'swf_ce_' . $this->id;
        $this->Template->fsCommand = '  ' . preg_replace('/[\n\r]/', "\n  ", $this->String->decodeEntities($this->fl_flashJS));
        $this->Template->flashvars = 'URL=' . $this->Environment->base;
        $this->Template->version = strlen($this->fl_version) ? $this->fl_version : '6';

        $size = deserialize($this->fl_size);

        $this->Template->width = $size[0];
        $this->Template->height = $size[1];

        $intMaxWidth = (TL_MODE == 'BE') ? 320 : $GLOBALS['TL_CONFIG']['maxImageWidth'];

        // Adjust movie size
        if ($intMaxWidth > 0 && $size[0] > $intMaxWidth)
        {
            $this->Template->width = $intMaxWidth;
            $this->Template->height = floor($intMaxWidth * $size[1] / $size[0]);
        }

        $arrFlashvars = deserialize($this->fl_flashvars);

        if (count($arrFlashvars) > 0)
        {
            foreach ($arrFlashvars as $flashVar)
            {
                if ($flashVar['key'] != '' && $flashVar['value'] != '')
                {
                    $this->Template->flashvars .= '&' . $flashVar['key'] . '=' . $flashVar['value'];
                }
            }
        }
    }

}

?>