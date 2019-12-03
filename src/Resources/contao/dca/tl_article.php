<?php
/*
 * This file is part of the Minigrid Bundle.
 *
 * (c) Florian Metzner <https://github.com/metzograf>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
 
// Add fullwidth field
$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = str_replace 
( 
    'cssID', 
    'cssID,fullwidth', 
    $GLOBALS['TL_DCA']['tl_article']['palettes']['default'] 
); 

// configurate field
$GLOBALS['TL_DCA']['tl_article']['fields']['fullwidth'] = array 
( 
	'label'    				  =>  &$GLOBALS['TL_LANG']['CTE']['fullwidth'],
    'default'                 => 0,
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);

