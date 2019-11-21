<?php

$GLOBALS['TL_WRAPPERS']['start'][] = 'blockStart';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'blockStop';

$GLOBALS['TL_CTE']['blocks'] = array(
	'blockStart' => 'ContentBlockStart',
	'blockStop'	=> 'ContentBlockStop'
);