<?php
/*
 * This file is part of the Minigrid Bundle.
 *
 * (c) Florian Metzner <https://github.com/metzograf>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/***** BLOCKELEMENTE *****/

$GLOBALS['TL_DCA']['tl_content']['palettes']['blockStart'] = '{type_legend},type;{expert_legend:hide},guests,cssID;{minigrid_legend},minirow,minigrid;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['palettes']['blockStop'] = '{type_legend},type;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['palettes'] = str_replace('cssID;','cssID;{minigrid_legend},minirow,minigrid;',$GLOBALS['TL_DCA']['tl_content']['palettes']); 

/* Gallery */
$GLOBALS['TL_DCA']['tl_content']['palettes'] = str_replace('useHomeDir;','useHomeDir;{minigrid_legend},minirow,minigrid;',$GLOBALS['TL_DCA']['tl_content']['palettes']); 


/***** Felder Definieren *****/

$GLOBALS['TL_DCA']['tl_content']['fields']['minirow'] = array 
(
	'label'    				  =>  &$GLOBALS['TL_LANG']['CTE']['minirow'],
	'default'                 => 0,
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50 clr'),
	'sql'                     => "char(1) NOT NULL default ''"
);


$GLOBALS['TL_DCA']['tl_content']['fields']['minigrid'] = array 
( 
    'label' =>  &$GLOBALS['TL_LANG']['CTE']['minigrid'],
    'exclude' => true, 
    'inputType' => 'select',
    'options' => array(	
	    				'w100' => ' – ',
    					'w25' => '25 % → 50%',
    					'w33' => '33 % → 100%',
    					'w50' => '50 % → 100%',
    					'w66' => '66 % → 100%',
    					'w75' => '75 % → 100%',
    ),
    'eval' => array('tl_class' => 'w50 clr'), 
    'sql' => "varchar(255) NOT NULL default ''" 
);