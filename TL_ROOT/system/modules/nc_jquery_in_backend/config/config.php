<?php
/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package   NC JQuery in Backend 
 * @author    Marcel Mathias Nolte
 * @copyright Marcel Mathias Nolte 2015
 * @website	  https://www.noltecomputer.com
 * @license   <marcel.nolte@noltecomputer.de> wrote this file. As long as you retain this notice you
 *            can do whatever you want with this stuff. If we meet some day, and you think this stuff 
 *            is worth it, you can buy me a beer in return. Meanwhile you can provide a link to my
 *            homepage, if you want, or send me a postcard. Be creative! Marcel Mathias Nolte
 */


/**
 * Backend Javascript
 */
if (TL_MODE == 'BE')
{
	if (!is_array($GLOBALS['TL_JAVASCRIPT']))
	{
		$GLOBALS['TL_JAVASCRIPT'] = array();
	}
	array_unshift($GLOBALS['TL_JAVASCRIPT'], 'system/modules/nc_jquery_in_backend/assets/jquery.noconflict.js');
	$jquery_src = 'assets/jquery/core/' . reset((scandir(TL_ROOT . '/assets/jquery/core', 1))) . '/jquery.min.js';
	array_unshift($GLOBALS['TL_JAVASCRIPT'], $jquery_src);
}