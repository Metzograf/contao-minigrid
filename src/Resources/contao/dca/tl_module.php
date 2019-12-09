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
$GLOBALS['TL_DCA']['tl_module']['palettes']['newslist'] = str_replace 
( 
    'perPage', 
    'perPage;{minigrid_legend},minigrid_news', 
    $GLOBALS['TL_DCA']['tl_module']['palettes']['newslist'] 
); 

$GLOBALS['TL_DCA']['tl_module']['fields']['minigrid_news'] = array 
( 
    'label' =>  array('Elemente in einer Reihe','Anzahl der Elemente die in einer Reihe dargestellt werden sollen (Mobile wird es angepasst).'),
    // &$GLOBALS['TL_LANG']['CTE']['NewsMinigrid'],
    'exclude' => true, 
    'inputType' => 'select',
    'options' => array(	
	    				'w100' => '1',
	    				'w50' => '2',
	    				'w33' => '3',
    					'w25' => '4',			
    ),
    'eval' => array('tl_class' => 'w50 clr'), 
    'sql' => "varchar(255) NOT NULL default ''" 
);

